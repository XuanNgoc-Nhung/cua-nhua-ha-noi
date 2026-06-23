<script src="https://cdn.jsdelivr.net/npm/axios@1.7.9/dist/axios.min.js"></script>
<script>
    function initPageAnimations() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 700,
                easing: 'ease-out-cubic',
                once: true,
                offset: 60,
            });
        }
    }

    if (document.body.classList.contains('is-loading')) {
        window.addEventListener('pageLoaded', initPageAnimations, { once: true });
    } else {
        initPageAnimations();
    }

    (function () {
        const slides = document.querySelectorAll('.hero-bg-slide');
        if (slides.length < 2) return;

        let currentIndex = 0;
        const interval = 5000;

        setInterval(function () {
            slides[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add('active');
        }, interval);
    })();

    (function () {
        const typingEl = document.getElementById('hero-typing');
        if (!typingEl) return;

        const criteria = JSON.parse(typingEl.dataset.criteria || '[]');
        if (!criteria.length) return;

        let criteriaIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        const typeSpeed = 80;
        const deleteSpeed = 45;
        const pauseAfterType = 2200;
        const pauseAfterDelete = 400;

        function tick() {
            const current = criteria[criteriaIndex];

            if (!isDeleting) {
                typingEl.textContent = current.substring(0, charIndex + 1);
                charIndex++;

                if (charIndex === current.length) {
                    isDeleting = true;
                    setTimeout(tick, pauseAfterType);
                    return;
                }

                setTimeout(tick, typeSpeed);
                return;
            }

            typingEl.textContent = current.substring(0, charIndex - 1);
            charIndex--;

            if (charIndex === 0) {
                isDeleting = false;
                criteriaIndex = (criteriaIndex + 1) % criteria.length;
                setTimeout(tick, pauseAfterDelete);
                return;
            }

            setTimeout(tick, deleteSpeed);
        }

        tick();
    })();

    (function () {
        const form = document.getElementById('consultForm');
        if (!form || typeof axios === 'undefined') return;

        const submitBtn = document.getElementById('consultSubmitBtn');
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        form.addEventListener('submit', async function (event) {
            event.preventDefault();

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            const formData = new FormData(form);
            const payload = {
                ten_khach_hang: formData.get('ten_khach_hang'),
                sdt_khach_hang: formData.get('sdt_khach_hang'),
                noi_dung_yeu_cau: formData.get('noi_dung_yeu_cau') || null,
            };

            if (submitBtn) submitBtn.disabled = true;
            window.PageLoader?.show('Đang gửi yêu cầu...');

            const loadingStartedAt = Date.now();
            const minLoadingMs = 1000;
            let toastMessage = null;
            let toastType = null;

            try {
                const response = await axios.post(form.action, payload, {
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                });

                form.reset();
                toastMessage = response.data.message || 'Gửi yêu cầu thành công.';
                toastType = 'success';
            } catch (error) {
                let message = 'Không thể gửi yêu cầu. Vui lòng thử lại sau.';

                if (error.response?.status === 422) {
                    const errors = error.response.data.errors;
                    message = Object.values(errors).flat().join(' ');
                } else if (error.response?.data?.message) {
                    message = error.response.data.message;
                }

                toastMessage = message;
                toastType = 'error';
            } finally {
                const remaining = Math.max(0, minLoadingMs - (Date.now() - loadingStartedAt));

                setTimeout(function () {
                    window.PageLoader?.hide();
                    if (submitBtn) submitBtn.disabled = false;

                    if (toastMessage) {
                        window.showToast?.(toastMessage, toastType);
                    }
                }, remaining);
            }
        });
    })();

    (function () {
        const modalEl = document.getElementById('productDetailModal');
        if (!modalEl || typeof bootstrap === 'undefined') return;

        const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
        const titleEl = document.getElementById('productDetailModalLabel');
        const imageEl = document.getElementById('productDetailImage');
        const priceEl = document.getElementById('productDetailPrice');
        const featuresEl = document.getElementById('productDetailFeatures');
        const whyEl = document.getElementById('productDetailWhy');
        const trackEl = document.getElementById('similarProductsTrack');

        let currentSimilar = [];

        function parseJson(value, fallback) {
            try {
                return JSON.parse(value || 'null') ?? fallback;
            } catch (error) {
                return fallback;
            }
        }

        function renderSimilarProducts(products) {
            if (!trackEl) return;

            currentSimilar = products;
            trackEl.innerHTML = '';
            trackEl.style.animation = 'none';

            if (!products.length) {
                trackEl.closest('.product-detail-modal__similar')?.classList.add('d-none');
                return;
            }

            trackEl.closest('.product-detail-modal__similar')?.classList.remove('d-none');

            const items = products.concat(products);
            items.forEach(function (product, index) {
                const card = document.createElement('button');
                card.type = 'button';
                card.className = 'similar-product-card border-0 text-start p-0';
                card.dataset.similarIndex = String(index % products.length);
                card.innerHTML =
                    '<img src="' + product.image + '" alt="' + product.name + '" loading="lazy">' +
                    '<div class="similar-product-card__body">' +
                        '<div class="similar-product-card__name">' + product.name + '</div>' +
                        '<div class="similar-product-card__price">' + product.price + ' ₫</div>' +
                    '</div>';

                card.addEventListener('click', function () {
                    const selected = currentSimilar[Number(card.dataset.similarIndex)];
                    if (!selected) return;

                    const others = currentSimilar.filter(function (item) {
                        return item.name !== selected.name;
                    });

                    fillModal(selected, others);
                });

                trackEl.appendChild(card);
            });

            requestAnimationFrame(function () {
                trackEl.style.animation = '';
            });
        }

        function fillModal(product, similarProducts) {
            if (!product) return;

            if (titleEl) titleEl.textContent = product.name;
            if (imageEl) {
                imageEl.src = product.image;
                imageEl.alt = product.name;
            }
            if (priceEl) priceEl.textContent = product.price + ' ₫';

            if (featuresEl) {
                featuresEl.innerHTML = (product.features || [])
                    .map(function (feature) {
                        return '<li>' + feature + '</li>';
                    })
                    .join('');
            }

            if (whyEl) whyEl.textContent = product.why_use || '';

            renderSimilarProducts(similarProducts || []);
        }

        document.addEventListener('click', function (event) {
            const trigger = event.target.closest('.js-product-detail');
            if (!trigger) return;

            const product = parseJson(trigger.dataset.product, null);
            const similar = parseJson(trigger.dataset.similar, []);

            if (!product) return;

            fillModal(product, similar);
            modal.show();
        });
    })();
</script>
