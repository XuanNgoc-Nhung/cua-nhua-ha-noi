<section class="py-3 bg-wood-50">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
            <h2 class="h3 fw-bold text-wood-800 section-title">ƯU ĐIỂM SẢN PHẨM</h2>
        </div>
        <div class="row g-3">
            @foreach ($advantages as $adv)
                <div class="col-6 col-md-4 col-lg-2" data-aos="flip-up" data-aos-delay="{{ $loop->index * 80 }}">
                    <div class="card h-100 border text-center shadow-sm">
                        <div class="card-body py-4">
                            <div class="fs-2 mb-2">{{ $adv['icon'] }}</div>
                            <h3 class="small fw-semibold text-wood-800 mb-0">{{ $adv['title'] }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="200">
            <a href="tel:0394573621" class="btn btn-secondary btn-lg px-5">LIÊN HỆ TƯ VẤN</a>
        </div>
    </div>
</section>
