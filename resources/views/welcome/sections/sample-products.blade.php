<section id="mau-cua-dep" class="py-3 bg-wood-50">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="h3 fw-bold text-wood-800 section-title">CÁC KIỂU MẪU CỬA</h2>
        </div>

        <ul class="nav nav-pills justify-content-center flex-wrap gap-2 mb-4" id="productTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab-composite" data-bs-toggle="tab" data-bs-target="#panel-composite" type="button" role="tab" aria-controls="panel-composite" aria-selected="true">CỬA COMPOSITE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-waterproof" data-bs-toggle="tab" data-bs-target="#panel-waterproof" type="button" role="tab" aria-controls="panel-waterproof" aria-selected="false">CỬA GỖ CHỊU NƯỚC</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-new" data-bs-toggle="tab" data-bs-target="#panel-new" type="button" role="tab" aria-controls="panel-new" aria-selected="false">MẪU CỬA MỚI</button>
            </li>
        </ul>

        <div class="tab-content" id="productTabsContent">
            <div class="tab-pane show active" id="panel-composite" role="tabpanel" aria-labelledby="tab-composite">
                <div class="row gx-3 gx-md-4">
                    @foreach ($compositeSampleProducts as $product)
                        <x-product-card :name="$product['name']" :price="$product['price']" :image="$product['image']" :use-aos="false" />
                    @endforeach
                </div>
            </div>
            <div class="tab-pane" id="panel-waterproof" role="tabpanel" aria-labelledby="tab-waterproof">
                <div class="row gx-3 gx-md-4">
                    @foreach ($waterproofSampleProducts as $product)
                        <x-product-card :name="$product['name']" :price="$product['price']" :image="$product['image']" :use-aos="false" />
                    @endforeach
                </div>
            </div>
            <div class="tab-pane" id="panel-new" role="tabpanel" aria-labelledby="tab-new">
                <div class="row gx-3 gx-md-4">
                    @foreach ($newSampleProducts as $product)
                        <x-product-card :name="$product['name']" :price="$product['price']" :image="$product['image']" :use-aos="false" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
