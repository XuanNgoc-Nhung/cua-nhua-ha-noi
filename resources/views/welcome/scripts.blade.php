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
        const tabList = document.getElementById('productTabs');
        const tabContent = document.getElementById('productTabsContent');
        if (!tabList || !tabContent) return;

        function animateTabPanel(panel) {
            if (!panel) return;

            const grid = panel.querySelector('.tab-panel-grid');
            if (!grid) return;

            grid.classList.remove('tab-panel-enter');
            void grid.offsetWidth;
            grid.classList.add('tab-panel-enter');

            grid.querySelectorAll(':scope > .col-6').forEach(function (card, index) {
                card.classList.remove('tab-card-enter');
                void card.offsetWidth;
                card.style.setProperty('--tab-card-delay', (index * 60) + 'ms');
                card.classList.add('tab-card-enter');
            });
        }

        tabList.addEventListener('shown.bs.tab', function (event) {
            event.target.closest('ul').querySelectorAll('.nav-link').forEach(function (tab) {
                tab.classList.remove('bg-primary', 'text-white', 'active');
                tab.classList.add('text-wood-800');
            });
            event.target.classList.add('bg-primary', 'text-white');
            event.target.classList.remove('text-wood-800');

            const targetSelector = event.target.getAttribute('data-bs-target');
            animateTabPanel(document.querySelector(targetSelector));
        });

        animateTabPanel(tabContent.querySelector('.tab-pane.active'));
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
</script>
