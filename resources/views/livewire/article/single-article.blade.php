<div>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>{{ $article->series->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset('storage/'. $article->thumbnail) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;">{{ $article->title }}
                            </h2>
                            {{ $article->content }}
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="{{ $article->user->photo }}" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>{{ $article->user->name }}</h4>
                                </a>
                            </div>
                        </div>
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
    <!--================ Blog Area end =================-->
</div>
