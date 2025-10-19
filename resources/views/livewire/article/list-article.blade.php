    <div>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--================Blog Area =================-->
        
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach ($articles as $article)
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="{{ asset('storage/'. $article->thumbnail) }}" alt="">
                                        <a href="#" class="blog_item_date">
                                            <h3>{{ $article->published_at->format('d') }}</h3>
                                            <p>{{ $article->published_at->format('F') }}</p>
                                        </a>
                                    </div>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="{{ url('articles/'.$article->slug) }}">
                                            <h2 class="blog-head" style="color: #2d2d2d;">{{ $article->title }}</h2>
                                        </a>
                                        <p>{{ Str::limit($article->content, 50, ' [...]') }}</p>
                                    </div>
                                </article>
                            @endforeach
                            <nav class="blog-pagination justify-content-center d-flex">
                                {{ $articles->links() }}
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            @livewire('topic.list-topic')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </div>
