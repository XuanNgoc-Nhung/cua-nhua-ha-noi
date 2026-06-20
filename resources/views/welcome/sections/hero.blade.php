<section id="trang-chu" class="hero-section text-white position-relative">
    <div class="hero-bg-slides" aria-hidden="true">
        @foreach ($heroImages as $index => $image)
            <div class="hero-bg-slide {{ $index === 0 ? 'active' : '' }}" style="background-image:url('{{ $image }}');"></div>
        @endforeach
    </div>
    <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>
    <div class="container position-relative py-3" style="z-index:2;">
        <div class="row">
            <div class="col-lg-7 col-xl-6 py-3">
                <span class="badge bg-danger mb-3 hero-promo-badge" data-aos="fade-down" data-aos-delay="100">GIÁ GỐC TẠI XƯỞNG</span>
                <h3 class="fw-bold lh-sm mb-3" data-aos="fade-up" data-aos-delay="200">
                    Cửa Composite Cao Cấp<br>
                    <span class="hero-typing-line">
                        <span id="hero-typing" data-criteria='@json($heroCriteria)'></span><span class="typing-cursor" aria-hidden="true">|</span>
                    </span>
                </h3>
                <p class="mb-4 opacity-75" data-aos="fade-up" data-aos-delay="300">Phủ sơn InChem + Màu tùy ý. Ưu đãi khi mua từ 3 bộ trở lên. Bảo hành 3 năm, lắp đặt tận nơi tại Hà Nội.</p>
                <div class="d-flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="400">
                    <a href="#san-pham" class="btn btn-secondary btn-lg px-4">Xem sản phẩm</a>
                    <a href="tel:0394573621" class="btn btn-outline-light btn-lg px-4">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </div>
</section>
