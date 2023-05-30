<div class="css-5gekhw e176pl9r8">
    <div class="css-cfxl3y e176pl9r7">
        <span aria-label="Cena"
              data-cy="adPageStickyHeaderPrice"
              class="css-unc98a e176pl9r6">
					@if ($post->sale_id == 1)
                                        {{ $post->price }}&nbsp;€,
					@else
                                        {{ $post->rent_price }}&nbsp;{{__('€ / month')}}
					@endif
        </span>
        <div class="css-70evgb ">
            <span class="css-r5hahk">
                <svg aria-hidden="true"
                     focusable="false"
                     data-prefix="fas"
                     data-icon="bed"
                     class="svg-inline--fa fa-bed fa-w-20 css-qamjgr e176pl9r4"
                     role="img"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 640 512">
                     <path fill="currentColor" d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z"></path>
                </svg>
                {{ $post->bedrooms }}
            </span>
            <span data-cy="ad-page-sticky-header-area" class="css-1bphu1a e176pl9r2">
                <svg aria-hidden="true"
                     focusable="false"
                     data-prefix="fas"
                     data-icon="ruler-combined"
                     class="svg-inline--fa fa-ruler-combined fa-w-20 css-qamjgr e176pl9r4"
                     role="img"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512">
                     <path fill="currentColor" d="M160 288h-56c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h56v-64h-56c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h56V96h-56c-4.42 0-8-3.58-8-8V72c0-4.42 3.58-8 8-8h56V32c0-17.67-14.33-32-32-32H32C14.33 0 0 14.33 0 32v448c0 2.77.91 5.24 1.57 7.8L160 329.38V288zm320 64h-32v56c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-56h-64v56c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-56h-64v56c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-56h-41.37L24.2 510.43c2.56.66 5.04 1.57 7.8 1.57h448c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32z"></path>
                </svg>
                {{ $post->square }}{{ 'м²' }}
            </span>
        </div>
        <div class="css-aj14d2 e176pl9r1">
            <a aria-label="Address"
               href="#address-map-container"
               class="e1nbpvi60 css-171pgf6 e1enecw71"
               tabindex="0">
               <svg aria-hidden="true"
                    focusable="false"
                    data-prefix="fas"
                    data-icon="map-marker-alt"
                    class="svg-inline--fa fa-map-marker-alt fa-w-12 "
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 384 512"
                    width="11"
                    height="14">
                    <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                </svg>
               {{ $post->address }}
            </a>
        </div>
        <div class="css-tdao1u e176pl9r0">
	@if (Auth::check()) 
	@if (!in_array($post->id, $wl))
            <button data-cy="ad-subscribe-button.subscribe" id="button_header_set_wishlist"
                    data-cy-subscribed="false"
                    class="css-oeu2h ekf916v1"
		    onclick="setWishlist({{ $post->id }})">
                    <svg aria-hidden="true"
                         focusable="false"
                         data-prefix="far"
                         data-icon="heart"
                         class="svg-inline--fa fa-heart fa-w-20 "
                         role="img"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512 512">
                         <path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
                    </svg>
                    {{__('Save') }}
            </button>
	@endif
	@endif
            <button data-cy="ad-page-sticky-header-area-contact-modal"
                    type="button"
                    class="css-831445 d-none">
                  {{__('Contact') }}
            </button>
        </div>
    </div>
</div>
