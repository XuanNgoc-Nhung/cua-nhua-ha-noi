<section id="san-pham" class="py-3">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
            <h2 class="h3 fw-bold text-wood-800 section-title">CỬA COMPOSITE CAO CẤP</h2>
        </div>
        <div class="row g-3 g-md-4">
            @foreach ($premiumProducts as $product)
                <x-product-card :name="$product['name']" :price="$product['price']" :image="$product['image']" :aos-delay="$loop->index * 80" />
            @endforeach
        </div>
    </div>
</section>
