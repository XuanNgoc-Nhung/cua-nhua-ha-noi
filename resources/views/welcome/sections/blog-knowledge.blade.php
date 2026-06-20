<section id="tam-composite" class="py-3">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
            <h2 class="h3 fw-bold text-wood-800 section-title text-uppercase">Các dự án thi công</h2>
        </div>
        <div class="row g-4">
            @foreach (array_slice($posts, 0, 3) as $post)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <article class="card h-100 border shadow-sm">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=340&fit=crop" alt="" class="card-img-top blog-thumb">
                        <div class="card-body">
                            <time class="small text-muted">{{ $post['date'] }}</time>
                            <h3 class="h6 fw-semibold text-wood-800 mt-2 mb-2 line-clamp-2">{{ $post['title'] }}</h3>
                            <p class="small text-muted line-clamp-2 mb-3">{{ $post['excerpt'] }}</p>
                            <a href="#" class="small fw-semibold text-secondary text-decoration-none">Xem chi tiết →</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
