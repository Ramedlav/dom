<div class="col-12">
    <div id="carouselRecommendPost" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            {{-- <div class="carousel-item post-img-item active">

                <img src="/img/c-1.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">

            </div>
            <div class="carousel-item post-img-item">

                <img src="/img/c-2.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">

            </div>
            <div class="carousel-item post-img-item">

                <img src="/img/c-3.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">

            </div>
            <div class="carousel-item post-img-item">

                <img src="/img/c-1.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">

            </div>

            <div class="carousel-item post-img-item">

                <img src="/img/c-2.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">

            </div>
            <div class="carousel-item post-img-item">

                <img src="/img/c-3.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">

            </div>
            <div class="carousel-item post-img-item">

                <img src="/img/c-1.jpg" class="img-fluid post-img-fluid d-block w-100" alt="...">

            </div> --}}

            @foreach($post->photos as $photo)
                @isset($photo->img)
                    <div class="carousel-item post-img-item {{$loop->first ? 'active' : ''}}">
                        <a target="_blank" href="{{ asset('/storage/' . $photo->img) }}">
                            <img class="img-fluid post-img-fluid  d-block w-100" src="{{ asset('/storage/' . $photo->img) }}">
                        </a>
                    </div>
                @endisset
            @endforeach


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselRecommendPost" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselRecommendPost" data-bs-slide="next">
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
            <span class="css-1e6p6c">
                <font style="vertical-align: inherit;">
                   {{__('Finished') }}
                </font>
            </span>
            <div class="css-1quvv2t-mp">
                <a class="css-qczclw edit-link-icon me-2"
                   href="{{ route('editEditForm',['id_post' => $post->id]) }}"
                   title="Edit post">
                  <img src="/img/icons/edit-square-outline.svg">
                </a>
                <form method="POST" action="">
                    @method('DELETE')
                    @csrf
                    <button type="submit"
                            class="css-qczclw"
                            title="{{__('Delete post') }}">
                            <img src="/img/icons/delete-outline.svg">
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
