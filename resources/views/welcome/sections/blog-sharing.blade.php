<section class="py-3 bg-wood-50">
    <div class="container">
        <h2 class="h5 fw-bold text-wood-800 mb-4" data-aos="fade-up">GÓC CHIA SẺ</h2>
        <div class="row g-3">
            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                    <a href="#" class="card text-decoration-none h-100 border shadow-sm">
                        <div class="card-body d-flex gap-3">
                            <div class="text-center flex-shrink-0" style="width:64px;">
                                <div class="fs-4 fw-bold text-secondary lh-1">{{ explode('/', $post['date'])[0] }}</div>
                                {{-- <div class="small text-muted">/{{ explode('/', $post['date'])[1] }}</div> --}}
                            </div>
                            <h3 class="small fw-medium text-wood-800 mb-0 line-clamp-2">{{ $post['title'] }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
