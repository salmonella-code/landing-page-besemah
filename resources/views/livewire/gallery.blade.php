<div>
    <div class="gallery-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Gellary</span>
                        <h2>Our Medical Camp</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left -->
                <div class="col-lg-6">
                    <div class="row">
                        @foreach ($galleryLeft as $item)
                        <div class="col-lg-{{ $loop->first ? '12' : '6' }} col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img {{ $loop->first ? 'big-img' : 'small-img' }}" style="background-image: url({{ asset('storage/'.$item->thumbnail) }});"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right -->
                <div class="col-lg-6">
                    <div class="row">
                        @foreach ($galleryRight as $item)
                        <div class="col-lg-{{ $loop->last ? '12' : '6' }} col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img {{ $loop->last ? 'big-img' : 'small-img' }}" style="background-image: url({{ asset('storage/'.$item->thumbnail) }});"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

