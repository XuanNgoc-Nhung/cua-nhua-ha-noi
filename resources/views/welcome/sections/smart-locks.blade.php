<section id="khoa-cua" class="py-3 bg-wood-50">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
            <h2 class="h3 fw-bold text-wood-800 section-title">KHÓA CỬA THÔNG MINH</h2>
        </div>
        <div class="row g-3 g-md-4">
            @foreach ($smartLocks as $product)
                <x-product-card :name="$product['name']" :price="$product['price']" :image="$product['image']" :aos-delay="$loop->index * 80" />
            @endforeach
        </div>
    </div>
</section>
