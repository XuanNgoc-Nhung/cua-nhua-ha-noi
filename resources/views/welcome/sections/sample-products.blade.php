<section class="py-3 bg-wood-50">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
            <h2 class="h3 fw-bold text-wood-800 section-title">CÁC KIỂU MẪU CỬA 1</h2>
        </div>

        <ul class="nav nav-pills justify-content-center gap-2 mb-4" id="productTabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item" role="presentation">
                <button class="nav-link active bg-primary text-white" id="tab-composite" data-bs-toggle="tab" data-bs-target="#panel-composite" type="button" role="tab">CỬA COMPOSITE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-wood-800" id="tab-waterproof" data-bs-toggle="tab" data-bs-target="#panel-waterproof" type="button" role="tab">CỬA GỖ CHỊU NƯỚC</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-wood-800" id="tab-new" data-bs-toggle="tab" data-bs-target="#panel-new" type="button" role="tab">MẪU CỬA MỚI</button>
            </li>
        </ul>

        <div class="tab-content tab-content-smooth" id="productTabsContent">
            <div class="tab-pane fade show active" id="panel-composite" role="tabpanel">
                <div class="row gx-3 gx-md-4 tab-panel-grid">
                    @foreach ($compositeSampleProducts as $product)
                        <x-product-card :name="$product['name']" :price="$product['price']" :image="$product['image']" :use-aos="false" />
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="panel-waterproof" role="tabpanel">
                <div class="row gx-3 gx-md-4 tab-panel-grid">
                    @foreach ($waterproofSampleProducts as $product)
                        <x-product-card :name="$product['name']" :price="$product['price']" :image="$product['image']" :use-aos="false" />
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="panel-new" role="tabpanel">
                <div class="row gx-3 gx-md-4 tab-panel-grid">
                    @foreach ($newSampleProducts as $product)
                        <x-product-card :name="$product['name']" :price="$product['price']" :image="$product['image']" :use-aos="false" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
