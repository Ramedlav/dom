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

	    @php $count_photo=0; @endphp
            @foreach($post->photos as $photo)
                @isset($photo->img)
		    @php $count_photo++; @endphp
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
                <span class="image-gallery-index-total">{{ $count_photo }}</span>
{{--
                @foreach($post->photos as $photo)
                    @isset($photo->img)
                        <span class="image-gallery-index-total">{{ $loop->count }}</span>
                    @endisset
                @endforeach
--}}
            </div>
            <span class="css-1e6p6c">
                <font style="vertical-align: inherit;">
                   {{__('Finished') }}
                </font>
            </span>
					@php
					if (Auth::check()) $user_id = Auth::user()->id; else $user_id = 0;
					if ($user_id != $post->user->id) {
					if (Auth::check()) {
					$wl = [];
					foreach($wishlists as $wishlist) $wl[] = $wishlist->post_id;
					@endphp
					<button type="button" data-cy="listing-subscribe-button.subscribe" 
						data-cy-subscribed="true" 
						class="css-1quvv2t edz7dq0 {{ (in_array($post->id, $wl))?'':'d-none' }}" 
						onclick="setWishlist(event,{{ $post->id }}, 0);"
						id="reccomend_subscribed_{{$post->id}}"
						aria-label="{{__('Add to favorites') }}">
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" 
							class="svg-inline--fa fa-heart fa-w-16 fa-lg css-am3ws4 edz7dq2" 
							role="img" xmlns="http://www.w3.org/2000/svg" 
							viewBox="0 0 512 512" width="24" height="24">
							<path fill="green" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
						</svg>
					</button>
                                        <button type="button"
                                                data-cy="listing-subscribe-button.subscribe"
                                                data-cy-subscribed="false"
                                                class="css-1quvv2t {{ (!in_array($post->id, $wl))?'':'d-none' }}"
						onclick="setWishlist(event,{{ $post->id }}, 1);"
						id="reccomend_unsubscribed_{{$post->id}}"
                                                aria-label="{{__('Add to favorites') }}">
                                                <svg aria-hidden="true"
                                                    focusable="false"
                                                    data-prefix="far"
                                                    data-icon="heart"
                                                    class="svg-inline--fa fa-heart fa-w-16 fa-lg css-1itvsd9"
                                                    role="img"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"
                                                    width="24"
                                                    height="24">
                                                    <path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
                                                </svg>
                                        </button>
					@php
					}
					}
					@endphp
{{--
            <button type="button"
                    data-cy-subscribed="false"
                    class=" css-1quvv2t"
						onclick="setWishlist(event,{{ $post->id }}, 1);"
                    aria-label="{{__('Add to favorites') }}">
                <svg aria-hidden="true"
                        focusable="false"
                        data-prefix="far"
                        data-icon="heart"
                        class="svg-inline--fa fa-heart fa-w-16 fa-lg css-1itvsd9 e13au8n91"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                        width="24"
                        height="24">
                        <path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
                </svg>
            </button>
--}}
        </div>
    </div>
</div>
