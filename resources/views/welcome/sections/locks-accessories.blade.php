<section class="py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6" data-aos="fade-right">
                <h2 class="h5 fw-bold text-wood-800 border-bottom border-secondary border-3 d-inline-block pb-2 mb-4">KHÓA CỬA</h2>
                <div class="list-group list-group-flush">
                    @foreach ($locks as $item)
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="small fw-medium text-wood-800">{{ $item['name'] }}</span>
                            <span class="price-text small">{{ $item['price'] }} ₫</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h2 class="h5 fw-bold text-wood-800 border-bottom border-secondary border-3 d-inline-block pb-2 mb-4">PHỤ KIỆN</h2>
                <div class="list-group list-group-flush">
                    @foreach ($accessories as $item)
                        <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="small fw-medium text-wood-800">{{ $item['name'] }}</span>
                            <span class="price-text small">{{ $item['price'] }} ₫</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
