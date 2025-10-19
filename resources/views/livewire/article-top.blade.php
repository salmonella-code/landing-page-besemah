<div>
    <div class="home_blog-area section-padding30">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle text-center mb-70">
                        <span>Oure recent news</span>
                        <h2>OurNews From Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($listArticle as $article)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="">
                        </div>
                        <div class="blogs-cap">
                            <div class="date-info">
                                <span>{{ $article->series->title }}</span>
                                <p>{{ $article->published_at->format('d-m-Y') }}</p>
                            </div>
                            <h4><a href="{{ url('articles/'. $article->slug) }}">{{ $article->title }}</a></h4>
                            <a href="{{ url('articles/'. $article->slug) }}" class="read-more1">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

