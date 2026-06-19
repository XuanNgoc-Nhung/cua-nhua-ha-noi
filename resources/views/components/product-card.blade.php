@props(['name', 'price', 'image', 'aosDelay' => 0, 'useAos' => true])

<div class="col-6 col-md-4 col-lg-3"@if ($useAos) data-aos="fade-up" data-aos-delay="{{ $aosDelay }}" @endif>
    <div class="card product-card h-100 border shadow-sm">
        <div class="overflow-hidden bg-wood-50">
            <img src="{{ $image }}" alt="{{ $name }}" class="card-img-top" loading="lazy">
        </div>
        <div class="card-body d-flex flex-column">
            <h3 class="card-title small fw-medium text-wood-800 line-clamp-2">{{ $name }}</h3>
            <div class="price-text fs-5 mb-3">{{ $price }} ₫</div>
            <button type="button" class="btn btn-primary btn-sm w-100 mt-auto">Thêm vào giỏ hàng</button>
        </div>
    </div>
</div>
