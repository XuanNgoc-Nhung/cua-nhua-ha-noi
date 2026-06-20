<!DOCTYPE html>
<html lang="vi">
<head>
    @php($seo = config('seo'))
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $seo['title'])</title>
    <meta name="description" content="@yield('meta_description', $seo['description'])">
    <meta name="keywords" content="@yield('meta_keywords', $seo['keywords'])">
    <meta name="author" content="@yield('meta_author', $seo['author'])">
    <meta name="robots" content="@yield('meta_robots', 'index, follow, max-image-preview:large')">
    <meta name="theme-color" content="{{ $seo['theme_color'] }}">
    <meta name="format-detection" content="telephone=yes">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <meta property="og:locale" content="{{ $seo['locale'] }}">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="{{ $seo['site_name'] }}">
    <meta property="og:title" content="@yield('og_title', $__env->yieldContent('title') ?: $seo['title'])">
    <meta property="og:description" content="@yield('og_description', $__env->yieldContent('meta_description') ?: $seo['description'])">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:image" content="@yield('og_image', $seo['og_image'])">
    <meta property="og:image:alt" content="{{ $seo['site_name'] }} – cửa composite, cửa gỗ chịu nước">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', $__env->yieldContent('title') ?: $seo['title'])">
    <meta name="twitter:description" content="@yield('og_description', $__env->yieldContent('meta_description') ?: $seo['description'])">
    <meta name="twitter:image" content="@yield('og_image', $seo['og_image'])">

    <meta name="geo.region" content="{{ $seo['region'] }}">
    <meta name="geo.placename" content="{{ $seo['city'] }}">
    <meta name="geo.position" content="21.0285;105.8542">
    <meta name="ICBM" content="21.0285, 105.8542">

    @if ($seo['google_site_verification'])
        <meta name="google-site-verification" content="{{ $seo['google_site_verification'] }}">
    @endif
    @if ($seo['facebook_domain_verification'])
        <meta name="facebook-domain-verification" content="{{ $seo['facebook_domain_verification'] }}">
    @endif

    <link rel="icon" href="{{ $seo['favicon'] }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ $seo['apple_touch_icon'] }}">

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'HomeAndConstructionBusiness',
            'name' => $seo['site_name'],
            'alternateName' => $seo['site_slug'],
            'url' => url('/'),
            'logo' => $seo['og_image'],
            'image' => $seo['og_image'],
            'description' => $seo['description'],
            'telephone' => '+84' . ltrim($seo['phone'], '0'),
            'email' => $seo['email'],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $seo['address'],
                'addressLocality' => $seo['city'],
                'addressRegion' => $seo['region'],
                'addressCountry' => $seo['country'],
            ],
            'areaServed' => [
                '@type' => 'City',
                'name' => $seo['city'],
            ],
            'priceRange' => '₫₫',
            'sameAs' => [],
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    @if ($seo['google_analytics_id'])
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $seo['google_analytics_id'] }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ $seo['google_analytics_id'] }}');
        </script>
    @endif
    @if ($seo['facebook_pixel_id'])
        <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ $seo['facebook_pixel_id'] }}');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ $seo['facebook_pixel_id'] }}&ev=PageView&noscript=1" alt=""></noscript>
    @endif

    @stack('head')

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

            document.querySelectorAll('.js-nav-scroll').forEach(function (link) {
                link.addEventListener('click', function (event) {
                    const href = link.getAttribute('href');
                    if (!href || href.charAt(0) !== '#') return;

                    const target = document.getElementById(href.slice(1));
                    if (!target) return;

                    event.preventDefault();

                    const mobileMenu = document.getElementById('mobileMenu');
                    if (mobileMenu?.classList.contains('show') && typeof bootstrap !== 'undefined') {
                        bootstrap.Offcanvas.getOrCreateInstance(mobileMenu).hide();
                    }

                    setActiveMobileNav(href.slice(1));
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                });
            });

            const mobileNavLinks = document.querySelectorAll('#mobileNavList .js-nav-scroll');

            function setActiveMobileNav(sectionId) {
                mobileNavLinks.forEach(function (link) {
                    const isActive = link.getAttribute('data-nav-section') === sectionId;
                    link.classList.toggle('is-active', isActive);
                    link.setAttribute('aria-current', isActive ? 'true' : 'false');
                });
            }

            function updateActiveMobileNavOnScroll() {
                if (!mobileNavLinks.length) return;

                const scrollOffset = 140;
                const scrollPosition = window.scrollY + scrollOffset;
                let activeSectionId = mobileNavLinks[0].getAttribute('data-nav-section');

                mobileNavLinks.forEach(function (link) {
                    const sectionId = link.getAttribute('data-nav-section');
                    const section = document.getElementById(sectionId);
                    if (section && section.offsetTop <= scrollPosition) {
                        activeSectionId = sectionId;
                    }
                });

                setActiveMobileNav(activeSectionId);
            }

            if (mobileNavLinks.length) {
                window.addEventListener('scroll', updateActiveMobileNavOnScroll, { passive: true });
                window.addEventListener('resize', updateActiveMobileNavOnScroll, { passive: true });
                window.addEventListener('pageLoaded', updateActiveMobileNavOnScroll, { once: true });
                updateActiveMobileNavOnScroll();
            }
        })();
    </script>
    @stack('scripts')
</body>
</html>
