<div class="floating-contact" id="floatingContact">
    <button type="button" class="floating-contact__toggle" id="floatingContactToggle" aria-expanded="false" aria-controls="floatingContactChannels" aria-label="Mở kênh hỗ trợ">
        <span class="floating-contact__ripple" aria-hidden="true"></span>
        <span class="floating-contact__ripple floating-contact__ripple--delay" aria-hidden="true"></span>
        <span class="floating-contact__icon-wrap" aria-hidden="true">
            <svg class="floating-contact__icon floating-contact__icon--support" width="26" height="26" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
            <svg class="floating-contact__icon floating-contact__icon--close" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </span>
    </button>

    <div class="floating-contact__channels" id="floatingContactChannels" aria-hidden="true">
        <a href="https://zalo.me/0394573621" target="_blank" rel="noopener" class="floating-contact__channel floating-contact__channel--zalo" style="--channel-index: 0;">
            <span class="floating-contact__channel-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 48 48" fill="currentColor"><path d="M8 12.5C8 9.46 10.46 7 13.5 7h21C37.54 7 40 9.46 40 12.5v14c0 3.04-2.46 5.5-5.5 5.5H18l-8.5 6.5V12.5z"/></svg>
            </span>
            <span class="floating-contact__label">Chat Zalo</span>
        </a>
        <a href="tel:0394573621" class="floating-contact__channel floating-contact__channel--phone" style="--channel-index: 1;">
            <span class="floating-contact__channel-icon" aria-hidden="true">
                <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </span>
            <span class="floating-contact__label">Gọi ngay</span>
        </a>
    </div>
</div>

@push('scripts')
<script>
    (function () {
        const wrapper = document.getElementById('floatingContact');
        const toggle = document.getElementById('floatingContactToggle');
        const channels = document.getElementById('floatingContactChannels');
        if (!wrapper || !toggle || !channels) return;

        function setOpen(isOpen) {
            wrapper.classList.toggle('is-open', isOpen);
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            toggle.setAttribute('aria-label', isOpen ? 'Đóng kênh hỗ trợ' : 'Mở kênh hỗ trợ');
            channels.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
        }

        toggle.addEventListener('click', function () {
            setOpen(!wrapper.classList.contains('is-open'));
        });

        document.addEventListener('click', function (event) {
            if (!wrapper.classList.contains('is-open')) return;
            if (!wrapper.contains(event.target)) {
                setOpen(false);
            }
        });
    })();
</script>
@endpush
