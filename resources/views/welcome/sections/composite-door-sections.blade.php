@foreach ($compositeDoorSections as $section)
    <section id="{{ $section['slug'] }}" class="py-3 {{ $loop->even ? 'bg-wood-50' : '' }}">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h2 class="h3 fw-bold text-wood-800 section-title">{{ $section['title'] }}</h2>
            </div>

            <div class="js-product-chunks">
                @foreach ($section['chunks'] as $chunkIndex => $chunk)
                    <div class="product-chunk {{ $chunkIndex === 0 ? '' : 'd-none' }}" data-chunk="{{ $chunkIndex }}">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3 g-md-4">
                            @foreach ($chunk as $product)
                                <x-product-card
                                    :name="$product['name']"
                                    :price="$product['price']"
                                    :image="$product['image']"
                                    :features="$product['features']"
                                    :why-use="$product['why_use']"
                                    :similar-products="array_values(array_filter($section['products'], fn ($item) => $item['name'] !== $product['name']))"
                                    :aos-delay="$loop->index * 80"
                                    column-class="col"
                                />
                            @endforeach
                        </div>
                    </div>
                @endforeach

                @if (count($section['chunks']) > 1)
                    <div class="d-flex justify-content-center align-items-center gap-3 mt-4">
                        <button type="button" class="btn btn-outline-primary btn-sm js-chunk-prev" disabled>
                            &larr; Trước
                        </button>
                        <span class="small text-muted js-chunk-indicator">1 / {{ count($section['chunks']) }}</span>
                        <button type="button" class="btn btn-outline-primary btn-sm js-chunk-next">
                            Sau &rarr;
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endforeach
