<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Cửa Nhựa Hà Nội – Cửa gỗ công nghiệp chịu nước composite')</title>
    <meta name="description" content="@yield('meta_description', 'Cửa composite cao cấp, cửa gỗ chịu nước, cửa gỗ công nghiệp tại Hà Nội. Giá gốc xưởng, bảo hành 3 năm, lắp đặt nhanh chóng.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        *{
            font-family: serif
        }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-dark is-loading">

    @include('partials.page-loader')

    @include('partials.topbar')
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.floating-contact')
    @include('partials.back-to-top')

    <div class="toast-stack" id="toastStack" aria-live="polite" aria-atomic="true"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        (function () {
            const loader = document.getElementById('pageLoader');
            const loaderText = loader?.querySelector('.page-loader__text');
            const defaultLoaderText = loaderText?.textContent || 'Đang tải nội dung...';
            const duration = 2000;

            window.PageLoader = {
                show: function (message) {
                    if (!loader) return;

                    if (loaderText) {
                        loaderText.textContent = message || defaultLoaderText;
                    }

                    loader.classList.remove('is-hidden');
                    loader.setAttribute('aria-hidden', 'false');
                    document.body.classList.add('is-loading');
                },
                hide: function () {
                    if (!loader) return;

                    loader.classList.add('is-hidden');
                    loader.setAttribute('aria-hidden', 'true');
                    document.body.classList.remove('is-loading');

                    if (loaderText) {
                        loaderText.textContent = defaultLoaderText;
                    }
                },
            };

            window.showToast = function (message, type) {
                const stack = document.getElementById('toastStack');
                if (!stack || !message) return;

                const toastType = type === 'success' ? 'success' : 'danger';
                const toast = document.createElement('div');
                toast.className = 'app-toast app-toast--' + toastType;
                toast.setAttribute('role', 'alert');
                toast.innerHTML =
                    '<span class="app-toast__icon" aria-hidden="true">' + (toastType === 'success' ? '✓' : '!') + '</span>' +
                    '<span class="app-toast__message"></span>' +
                    '<button type="button" class="app-toast__close" aria-label="Đóng">&times;</button>';

                toast.querySelector('.app-toast__message').textContent = message;

                const removeToast = function () {
                    toast.classList.remove('is-visible');
                    setTimeout(function () {
                        toast.remove();
                    }, 300);
                };

                toast.querySelector('.app-toast__close').addEventListener('click', removeToast);
                stack.appendChild(toast);

                requestAnimationFrame(function () {
                    toast.classList.add('is-visible');
                });

                setTimeout(removeToast, 4500);
            };

            if (loader) {
                setTimeout(function () {
                    window.PageLoader.hide();
                    window.dispatchEvent(new Event('pageLoaded'));
                }, duration);
            } else {
                document.body.classList.remove('is-loading');
                window.dispatchEvent(new Event('pageLoaded'));
            }

            const backToTop = document.getElementById('backToTop');
            if (backToTop) {
                window.addEventListener('scroll', function () {
                    backToTop.classList.toggle('is-visible', window.scrollY > 320);
                }, { passive: true });

                backToTop.addEventListener('click', function () {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }
        })();
    </script>
    @stack('scripts')
</body>
</html>
