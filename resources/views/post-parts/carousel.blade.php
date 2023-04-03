<div class="col-12">
    <div id="carouselPostControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            {{-- <div class="carousel-item post-img-item active">
                <a target="_blank" href="#" data-fancybox="gallery">
                  <img src="/img/c-1.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item post-img-item">
                <a target="_blank" href="#" data-fancybox="gallery">
                  <img src="/img/c-2.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item post-img-item">
                <a target="_blank" href="#" data-fancybox="gallery">
                  <img src="/img/c-3.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item post-img-item">
                <a target="_blank" href="#" data-fancybox="gallery">
                  <img src="/img/c-1.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">
                </a>
            </div>

            <div class="carousel-item post-img-item">
                <a target="_blank" href="#" data-fancybox="gallery">
                  <img src="/img/c-2.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item post-img-item">
                <a target="_blank" href="#" data-fancybox="gallery">
                  <img src="/img/c-3.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item post-img-item">
                <a target="_blank" href="#" data-fancybox="gallery">
                  <img src="/img/c-1.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">
                </a>
            </div> --}}

            @foreach($post->photos as $photo)
                @isset($photo->img)
                    <div class="carousel-item post-img-item {{$loop->first ? 'active' : ''}}">
                        <a target="_blank" data-fancybox="gallery" href="{{ asset('/storage/' . $photo->img) }}">
                            <img class="img-fluid post-img-fluid  d-block w-100" src="{{ asset('/storage/' . $photo->img) }}">
                        </a>
                    </div>
                @endisset
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPostControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPostControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div class="image-gallery-index d-flex">
            <span class="image-gallery-index-current">1</span>
            <span class="image-gallery-index-separator"> / </span>
            @foreach($post->photos as $photo)
                @isset($photo->img)
                    <span class="image-gallery-index-total">{{ $loop->count }}</span>
                @endisset
            @endforeach
        </div>
    </div>
    <div class="image-gallery-thumbnails-wrapper bottom">
        <div class="col-12 image-gallery-thumbnails d-flex">

            {{-- <button type="button"
                 data-bs-target="#carouselPostControls"
                 data-bs-slide-to="0"
                 class="active slide-img col-2 px-1"
                 aria-current="true"
                 aria-label="Slide 1" data-fancybox="gallery">
                 <div class="image-gallery-thumbnail-inner">
                    <img src="/img/c-1.jpg" class="image-gallery-thumbnail-image d-block w-100" alt="...">
                 </div>
            </button>
            <button type="button"
                 data-bs-target="#carouselPostControls"
                 data-bs-slide-to="1"
                 aria-label="Slide 2"
                 class="slide-img col-2 px-1" data-fancybox="gallery">
                 <div class="image-gallery-thumbnail-inner">
                    <img src="/img/c-2.jpg" class="image-gallery-thumbnail-image d-block w-100" alt="...">
                 </div>
            </button>
            <button type="button"
                 data-bs-target="#carouselPostControls"
                 data-bs-slide-to="2"
                 aria-label="Slide 3"
                 class="slide-img col-2 px-1" data-fancybox="gallery">
                 <div class="image-gallery-thumbnail-inner">
                    <img src="/img/c-3.jpg" class="image-gallery-thumbnail-image d-block w-100" alt="...">
                 </div>
            </button>
            <button type="button"
                 data-bs-target="#carouselPostControls"
                 data-bs-slide-to="3" a
                 ria-label="Slide 4"
                 class="slide-img col-2 px-1" data-fancybox="gallery">
                 <div class="image-gallery-thumbnail-inner">
                    <img src="/img/c-1.jpg" class="image-gallery-thumbnail-image d-block w-100" alt="...">
                 </div>
            </button>
            <button type="button"
                data-bs-target="#carouselPostControls"
                data-bs-slide-to="4"
                aria-label="Slide 5"
                class="slide-img col-2 px-1" data-fancybox="gallery">
                <div class="image-gallery-thumbnail-inner">
                <img src="/img/c-2.jpg" class="image-gallery-thumbnail-image d-block w-100" alt="...">
                </div>
            </button>
            <button type="button"
                data-bs-target="#carouselPostControls"
                data-bs-slide-to="5"
                aria-label="Slide 6"
                class="slide-img col-2 px-1" data-fancybox="gallery">
                <div class="image-gallery-thumbnail-inner">
                    <img src="/img/c-3.jpg" class="image-gallery-thumbnail-image d-block w-100" alt="...">
                </div>
            </button>
            <button type="button"
                data-bs-target="#carouselPostControls"
                data-bs-slide-to="6"
                aria-label="Slide 7"
                class="slide-img col-2 px-1" data-fancybox="gallery">
                <div class="image-gallery-thumbnail-inner">
                    <img src="/img/c-1.jpg" class="image-gallery-thumbnail-image d-block w-100" alt="...">
                </div>
            </button> --}}

             @foreach($post->photos as $photo)
                @isset($photo->img)
                    <button type="button"
                        data-bs-target="#carouselPostControls"
                        data-bs-slide-to="{{ $loop->index }}"
                        class="{{$loop->first ? 'active' : ''}} slide-img col-2 px-1"
                        aria-current="true" data-fancybox="gallery">
                        <div class="image-gallery-thumbnail-inner" >
                            <img class="image-gallery-thumbnail-image d-block w-100" src="{{ asset('/storage/' . $photo->img) }}">
                        </div>
                    </button>
                @endisset
            @endforeach
        </div>
    </div>
</div>

