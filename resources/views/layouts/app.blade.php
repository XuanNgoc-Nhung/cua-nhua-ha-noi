<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        (function () {
            const loader = document.getElementById('pageLoader');
            const duration = 2000;

            if (loader) {
                setTimeout(function () {
                    loader.classList.add('is-hidden');
                    document.body.classList.remove('is-loading');
                    loader.setAttribute('aria-hidden', 'true');
                    window.dispatchEvent(new Event('pageLoaded'));

                    setTimeout(function () {
                        loader.remove();
                    }, 500);
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
