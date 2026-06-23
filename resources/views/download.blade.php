@extends('layouts.app')

@section('title', 'Tải hình ảnh từ JSON')
@section('meta_robots', 'noindex, nofollow')

@push('styles')
<style>
    .download-page {
        padding: 3rem 0 5rem;
        min-height: 60vh;
    }

    .download-card {
        background: var(--wood-50);
        border: 1px solid var(--wood-100);
        border-radius: 1rem;
        padding: 1.75rem;
    }

    .download-json-input {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
        font-size: 0.875rem;
        min-height: 200px;
        resize: vertical;
    }

    .download-dropzone {
        border: 2px dashed var(--wood-100);
        border-radius: 0.75rem;
        padding: 2rem 1rem;
        text-align: center;
        cursor: pointer;
        transition: border-color 0.2s, background-color 0.2s;
    }

    .download-dropzone:hover,
    .download-dropzone.is-dragover {
        border-color: var(--wood-700);
        background: #fff;
    }

    .download-preview-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 1rem;
    }

    .download-preview-item {
        background: #fff;
        border: 1px solid var(--wood-100);
        border-radius: 0.5rem;
        overflow: hidden;
    }

    .download-preview-item img {
        width: 100%;
        aspect-ratio: 1;
        object-fit: cover;
        display: block;
        background: #f8f9fa;
    }

    .download-preview-item__meta {
        padding: 0.5rem 0.65rem;
        font-size: 0.75rem;
        color: #6c757d;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .download-preview-item__status {
        padding: 0 0.65rem 0.5rem;
        font-size: 0.7rem;
        font-weight: 600;
    }

    .download-preview-item__status.is-pending { color: #6c757d; }
    .download-preview-item__status.is-downloading { color: var(--bs-secondary); }
    .download-preview-item__status.is-done { color: #198754; }
    .download-preview-item__status.is-error { color: #dc3545; }

    .download-progress {
        height: 8px;
        border-radius: 999px;
        background: var(--wood-100);
        overflow: hidden;
    }

    .download-progress__bar {
        height: 100%;
        width: 0;
        background: linear-gradient(90deg, var(--wood-700), var(--bs-secondary));
        transition: width 0.3s ease;
    }

    .download-log {
        max-height: 160px;
        overflow-y: auto;
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
        font-size: 0.8rem;
        background: #fff;
        border: 1px solid var(--wood-100);
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
    }

    .download-log__line { margin: 0; line-height: 1.6; }
    .download-log__line--error { color: #dc3545; }
    .download-log__line--success { color: #198754; }
</style>
@endpush

@section('content')
<section class="download-page">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="h3 fw-bold text-wood-800 mb-2">Tải hình ảnh từ JSON</h1>
            <p class="text-muted mb-0">Dán mảng URL hình ảnh, ví dụ <code>["https://omg.png"]</code>, rồi nhấn tải xuống.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="download-card mb-4">
                    <label for="jsonInput" class="form-label fw-semibold">Nội dung JSON</label>
                    <div class="download-dropzone mb-3" id="jsonDropzone">
                        <input type="file" id="jsonFile" accept=".json,application/json" class="d-none">
                        <p class="mb-1 fw-medium">Kéo thả file JSON vào đây</p>
                        <p class="mb-0 small text-muted">hoặc <span class="text-wood-700">bấm để chọn file</span></p>
                    </div>
                    <textarea
                        id="jsonInput"
                        class="form-control download-json-input"
                        placeholder='["https://omg.png", "https://example.com/anh-2.jpg"]'
                    ></textarea>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <button type="button" class="btn btn-outline-secondary" id="btnParseJson">Phân tích JSON</button>
                        <button type="button" class="btn btn-outline-secondary" id="btnClear">Xóa dữ liệu</button>
                    </div>
                    <p class="small text-muted mt-2 mb-0">
                        JSON là <strong>mảng các URL</strong>, ví dụ <code>["https://omg.png"]</code> hoặc <code>['https://omg.png']</code>.
                    </p>
                </div>

                <div class="download-card mb-4 d-none" id="previewSection">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-3">
                        <div>
                            <h2 class="h5 fw-bold text-wood-800 mb-1">Danh sách hình ảnh</h2>
                            <p class="mb-0 small text-muted"><span id="imageCount">0</span> ảnh sẵn sàng tải</p>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary" id="btnDownloadAll">
                                <span class="btn-label">Tải xuống tất cả</span>
                            </button>
                            <button type="button" class="btn btn-outline-danger d-none" id="btnStop">Dừng</button>
                        </div>
                    </div>

                    <div class="download-progress mb-3 d-none" id="progressWrap">
                        <div class="download-progress__bar" id="progressBar"></div>
                    </div>
                    <p class="small text-muted mb-3 d-none" id="progressText"></p>

                    <div class="download-preview-grid" id="previewGrid"></div>
                </div>

                <div class="download-card d-none" id="logSection">
                    <h2 class="h6 fw-bold text-wood-800 mb-2">Nhật ký tải xuống</h2>
                    <div class="download-log" id="downloadLog"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
(function () {
    const jsonInput = document.getElementById('jsonInput');
    const jsonFile = document.getElementById('jsonFile');
    const jsonDropzone = document.getElementById('jsonDropzone');
    const btnParseJson = document.getElementById('btnParseJson');
    const btnClear = document.getElementById('btnClear');
    const btnDownloadAll = document.getElementById('btnDownloadAll');
    const btnStop = document.getElementById('btnStop');
    const previewSection = document.getElementById('previewSection');
    const previewGrid = document.getElementById('previewGrid');
    const imageCount = document.getElementById('imageCount');
    const progressWrap = document.getElementById('progressWrap');
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');
    const logSection = document.getElementById('logSection');
    const downloadLog = document.getElementById('downloadLog');

    const proxyUrl = @json(route('download.proxy'));

    let images = [];
    let isDownloading = false;
    let shouldStop = false;

    function log(message, type) {
        logSection.classList.remove('d-none');
        const line = document.createElement('p');
        line.className = 'download-log__line' + (type ? ' download-log__line--' + type : '');
        line.textContent = '[' + new Date().toLocaleTimeString('vi-VN') + '] ' + message;
        downloadLog.appendChild(line);
        downloadLog.scrollTop = downloadLog.scrollHeight;
    }

    function extractFilenameFromUrl(url, index) {
        try {
            const pathname = new URL(url).pathname;
            const base = pathname.split('/').pop();
            if (base && base.includes('.')) {
                return decodeURIComponent(base);
            }
        } catch (e) {}
        return 'image-' + String(index + 1).padStart(3, '0') + '.jpg';
    }

    function parseJsonData(raw) {
        const trimmed = raw.trim();
        if (!trimmed) {
            throw new Error('Vui lòng nhập hoặc tải file JSON.');
        }

        try {
            return JSON.parse(trimmed);
        } catch (error) {
            if (trimmed.charAt(0) === '[') {
                try {
                    return JSON.parse(trimmed.replace(/'/g, '"'));
                } catch (fallbackError) {}
            }
            throw new Error('JSON không hợp lệ. Dùng mảng URL, ví dụ: ["https://omg.png"]');
        }
    }

    function normalizeImages(data) {
        if (!Array.isArray(data)) {
            throw new Error('JSON phải là mảng URL, ví dụ: ["https://omg.png"]');
        }

        if (data.length === 0) {
            throw new Error('Mảng hình ảnh đang trống.');
        }

        return data.map(function (item, index) {
            if (typeof item !== 'string') {
                throw new Error('Phần tử thứ ' + (index + 1) + ' phải là URL dạng chuỗi.');
            }

            const url = item.trim();
            if (!url) {
                throw new Error('URL rỗng tại vị trí ' + (index + 1) + '.');
            }

            return {
                url: url,
                name: extractFilenameFromUrl(url, index),
            };
        });
    }

    function renderPreview() {
        previewGrid.innerHTML = '';
        images.forEach(function (image, index) {
            const item = document.createElement('div');
            item.className = 'download-preview-item';
            item.dataset.index = index;
            item.innerHTML =
                '<img src="' + image.url + '" alt="' + image.name + '" loading="lazy" onerror="this.src=\'data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22140%22 height=%22140%22%3E%3Crect fill=%22%23f0e6db%22 width=%22140%22 height=%22140%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 fill=%22%236b4423%22 font-size=%2212%22%3ENo preview%3C/text%3E%3C/svg%3E\'">' +
                '<div class="download-preview-item__meta" title="' + image.name + '">' + image.name + '</div>' +
                '<div class="download-preview-item__status is-pending" data-status>Chờ tải</div>';
            previewGrid.appendChild(item);
        });

        imageCount.textContent = images.length;
        previewSection.classList.remove('d-none');
    }

    function setItemStatus(index, status, text) {
        const item = previewGrid.querySelector('[data-index="' + index + '"] [data-status]');
        if (!item) return;
        item.className = 'download-preview-item__status is-' + status;
        item.textContent = text;
    }

    function parseJson() {
        const raw = jsonInput.value.trim();
        if (!raw) {
            window.showToast('Vui lòng nhập hoặc tải file JSON.', 'danger');
            return;
        }

        try {
            images = normalizeImages(parseJsonData(raw));
            renderPreview();
            log('Đã phân tích ' + images.length + ' hình ảnh.', 'success');
            window.showToast('Đã tải ' + images.length + ' hình ảnh từ JSON.', 'success');
        } catch (error) {
            window.showToast(error.message, 'danger');
            log(error.message, 'error');
        }
    }

    function readJsonFile(file) {
        if (!file) return;
        const reader = new FileReader();
        reader.onload = function (event) {
            jsonInput.value = event.target.result;
            parseJson();
        };
        reader.onerror = function () {
            window.showToast('Không đọc được file JSON.', 'danger');
        };
        reader.readAsText(file, 'UTF-8');
    }

    function delay(ms) {
        return new Promise(function (resolve) {
            setTimeout(resolve, ms);
        });
    }

    async function fetchImageBlob(url) {
        const response = await fetch(proxyUrl + '?url=' + encodeURIComponent(url));
        if (!response.ok) {
            throw new Error('HTTP ' + response.status);
        }
        return response.blob();
    }

    function triggerDownload(blob, filename) {
        const objectUrl = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = objectUrl;
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        link.remove();
        setTimeout(function () {
            URL.revokeObjectURL(objectUrl);
        }, 1000);
    }

    async function downloadAll() {
        if (!images.length) {
            window.showToast('Chưa có hình ảnh để tải.', 'danger');
            return;
        }

        if (isDownloading) return;

        isDownloading = true;
        shouldStop = false;
        btnDownloadAll.disabled = true;
        btnStop.classList.remove('d-none');
        progressWrap.classList.remove('d-none');
        progressText.classList.remove('d-none');

        let completed = 0;
        let failed = 0;

        log('Bắt đầu tải ' + images.length + ' hình ảnh...');

        for (let i = 0; i < images.length; i++) {
            if (shouldStop) {
                log('Đã dừng tải xuống.', 'error');
                break;
            }

            const image = images[i];
            setItemStatus(i, 'downloading', 'Đang tải...');
            progressText.textContent = 'Đang tải ' + (i + 1) + ' / ' + images.length + ': ' + image.name;

            try {
                const blob = await fetchImageBlob(image.url);
                triggerDownload(blob, image.name);
                completed++;
                setItemStatus(i, 'done', 'Đã tải');
                log('✓ ' + image.name, 'success');
            } catch (error) {
                failed++;
                setItemStatus(i, 'error', 'Lỗi');
                log('✗ ' + image.name + ' — ' + error.message, 'error');
            }

            const percent = Math.round(((i + 1) / images.length) * 100);
            progressBar.style.width = percent + '%';

            if (i < images.length - 1 && !shouldStop) {
                await delay(600);
            }
        }

        isDownloading = false;
        btnDownloadAll.disabled = false;
        btnStop.classList.add('d-none');

        const summary = 'Hoàn tất: ' + completed + ' thành công' + (failed ? ', ' + failed + ' lỗi' : '') + '.';
        progressText.textContent = summary;
        log(summary, failed ? 'error' : 'success');
        window.showToast(summary, failed ? 'danger' : 'success');
    }

    jsonDropzone.addEventListener('click', function () {
        jsonFile.click();
    });

    jsonFile.addEventListener('change', function () {
        readJsonFile(jsonFile.files[0]);
        jsonFile.value = '';
    });

    ['dragenter', 'dragover'].forEach(function (eventName) {
        jsonDropzone.addEventListener(eventName, function (event) {
            event.preventDefault();
            jsonDropzone.classList.add('is-dragover');
        });
    });

    ['dragleave', 'drop'].forEach(function (eventName) {
        jsonDropzone.addEventListener(eventName, function (event) {
            event.preventDefault();
            jsonDropzone.classList.remove('is-dragover');
        });
    });

    jsonDropzone.addEventListener('drop', function (event) {
        const file = event.dataTransfer.files[0];
        if (file && (file.type === 'application/json' || file.name.endsWith('.json'))) {
            readJsonFile(file);
        } else {
            window.showToast('Vui lòng thả file .json.', 'danger');
        }
    });

    btnParseJson.addEventListener('click', parseJson);
    jsonInput.addEventListener('paste', function () {
        setTimeout(parseJson, 0);
    });
    btnDownloadAll.addEventListener('click', downloadAll);
    btnStop.addEventListener('click', function () {
        shouldStop = true;
    });

    btnClear.addEventListener('click', function () {
        if (isDownloading) {
            window.showToast('Đang tải xuống, không thể xóa.', 'danger');
            return;
        }
        jsonInput.value = '';
        images = [];
        previewSection.classList.add('d-none');
        logSection.classList.add('d-none');
        downloadLog.innerHTML = '';
        progressWrap.classList.add('d-none');
        progressText.classList.add('d-none');
        progressBar.style.width = '0';
        previewGrid.innerHTML = '';
    });
})();
</script>
@endpush
