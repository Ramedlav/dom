
<?php $activePage = 'post';?>
@extends('layouts.app')

@section('content')
@php
	$wl = [];
	if (Auth::check()) foreach($wishlists as $wishlist) $wl[] = $wishlist->post_id;
@endphp

@include('post-parts.header-post')
<section class="post-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('post-parts.header-links')
            </div>
            <div class="col-md-12">
                <div class="card post-card  mt-2">
                    {{-- <div class="card-header post-header">{{ __('Post') }}</div> --}}
                    <div class="card-body px-0">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12 col-md-9">

                                @include('post-parts.carousel')

                                <div class="col-12 my-4">
                                    <div class="d-flex justify-content-between">
                                        <h1 class="css-1sfzh0a">{{ $post->title }}</h1>
                                        <h1  class="css-1sfzh0a">
						@if ($post->sale_id == 1)
							{{ $post->price }}&nbsp;€,
						@else
							{{ $post->rent_price }}&nbsp;{{__('€ / month')}}
						@endif
					</h1>
                                    </div>
                                    <div id="addressLink">
                                        <a aria-label="Address"
                                           href="#address-map-container"
                                           class="css-171pgf6"
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
                                </div>
                                <div class="col-12 my-4">
                                    <h2 class="css-uzob7">{{__('Ad Details') }}</h2>
                                    @include('post-parts.details')
                                </div>
                                <div class="col-12 my-4 css-1umupf3">
                                    <h2 class="css-uzob7">{{__('Description') }}</h2>
                                    <div class="css-1qoxjsu">
                                        <div class="content-container">
                                            <div class="content-text css-1yc9uo8">
                                                <p>  {!! $post->description !!} </p>
                                            </div>
                                        </div>
                                        <button aria-expanded="true"
                                                class="more-btn css-tth7py ">
                                                <span class="css-13vjjlj e1oafw9z1">{{__('Show more') }}</span>
                                                <div class="chevron-btn transform-chevron">
                                                    <svg aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="chevron-up"
                                                        class="svg-inline--fa fa-chevron-up fa-w-20 fa-xs "
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
                                                    </svg>
                                                </div>

                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 my-4 css-1umupf3">
                                    <h2 class="css-uzob7">{{__('Additional Information') }}</h2>
                                    @include('post-parts.ad-info')
                                </div>
                                {{-- <div>{{$post->user->name}}</div>
                                <div>{{$post->user->phone}}</div>
                                <div>{{$post->user->email}}</div> --}}
                                <div class="col-12">
                                    <div class="row">
                                        @foreach($post->photos as $photo)
                                            @isset($photo->img)
                                                @if ($loop->index > 0 && $loop->index < 5)
                                                    <div class="col-12 col-sm-4 p-1">
                                                        <a target="_blank" href="{{ asset('/storage/' . $photo->img) }}">
                                                            <img class="img-fluid" src="{{ asset('/storage/' . $photo->img) }}">
                                                        </a>
                                                    </div>
                                                @endif
                                            @endisset
                                        @endforeach
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <span class="btn-group">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" role="img" viewBox="0 0 48 48"><path d="M38.5 32.25v-16.5a5 5 0 10-6.25-6.25h-16.5a5 5 0 10-6.25 6.25v16.5a5 5 0 106.25 6.25h16.5a5 5 0 106.25-6.25zm-6.25 3.25h-16.5a5 5 0 00-3.25-3.25v-16.5a5 5 0 003.25-3.25h16.5a5 5 0 003.25 3.25v16.5a5 5 0 00-3.25 3.25zM37 9a2 2 0 11-2 2 2 2 0 012-2zM11 9a2 2 0 11-2 2 2 2 0 012-2zm0 30a2 2 0 112-2 2 2 0 01-2 2zm26 0a2 2 0 112-2 2 2 0 01-2 2z"></path></svg>
                                    {{ $post->square }}{{ 'м²' }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" role="img" viewBox="0 0 48 48"><path d="M11 20l-3.999 5.999h33.998L37 20h3l3.999 5.999L44 26v9.5a1.5 1.5 0 01-1.5 1.5H39v1.5a1.5 1.5 0 01-3 0V37H12v1.5a1.5 1.5 0 01-3 0V37H5.5A1.5 1.5 0 014 35.5V26l.001-.001L8 20h3zm30 9H7v5h34v-5zM38.5 8A1.5 1.5 0 0140 9.5V20l-9-.001V21.5a1.5 1.5 0 01-1.5 1.5h-11a1.5 1.5 0 01-1.5-1.5v-1.501L8 20V9.5A1.5 1.5 0 019.5 8h29zM28 17h-8v3h8v-3zm9-6H11v5.999h6V15.5a1.5 1.5 0 011.5-1.5h11a1.5 1.5 0 011.5 1.5v1.499h6V11z"></path></svg>
                                    {{ $post->bedrooms }}
                                    </span>
                                    <a href="{{route('showphotos',['id_post' => $post->id])}}">{{ __('All photos') }}</a>
                                </div> --}}
                                <div class="col-12">
                                    {{-- <div class="post-title">{!! $post->title !!}</div>
                                       <div class="post-fulladdress">{{ $post->index }} {{ $post->address }}</div>
                                       <div class="post-description">{!! $post->description !!}</div> --}}
                                    {{-- @if($post->user->id !== Auth::user()->id)
                                        @include('messageButton');
                                    @endif --}}
                                    {{-- @if($post->user->id !== Auth::user()->id)
                                        @include('messageButton');
                                    @endif --}}
                                </div>
                                <div class="col-12 my-3">
                                    <h2 class="css-uzob7">{{__('Map') }}</h2>
                                    <div class="form-group">
                                        <input type="hidden"
                                               name="address"
                                               placeholder="address"
                                               id="address"
                                               class="form-control map-input"
                                               value="">
                                        <input type="hidden" name="address_latitude" id="address-latitude" value="{{ $post->address_latitude }}" />
                                        <input type="hidden" name="address_longitude" id="address-longitude" value="{{ $post->address_longitude }}" />
                                    </div>

                                    <div id="address-map-container" style="width:100%;height:300px; ">
                                        <div style="width: 100%; height: 100%" id="address-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 px-1">
                                <div class=" css-1a9a3uz">
                                    <div class="css-1dihcof d-flex">
                                        <div class="css-16bxnyp">
                                            <div class="css-1fr5j8f e68241g0">
                                                <svg aria-hidden="true"
                                                     focusable="false"
                                                     data-prefix="far"
                                                     data-icon="user"
                                                     class="svg-inline--fa fa-user fa-w-14 fa-lg "
                                                     role="img"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 448 512">
                                                     <path fill="currentColor" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <span class="css-1yijy9r ezb2r8u5">{{$post->user->name}}</span>
                                            <div class="css-1rl7r8w ezb2r8u2">
                                               {{__('Private offer') }}
                                            </div>
                                            <div class="css-1ci9lfd">
                                                <div class="phoneNumber css-is2nit d-flex">
                                                    <span class="css-lgcdco me-2">{{$post->id}}</span>
                                                    <button  class="css-8ycw4 px-0">{{__('show number') }}</button>
                                                    <p class="css-8ycw4-number d-none mb-0" title="{{__('hide number') }}">{{$post->user->phone}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--
                                    <div class="css-1wypg4o"
                                        role="alert">
                                        <div class="css-1o129hd d-flex">
                                            <div class="css-ho7wdu">
                                                <svg aria-hidden="true"
                                                    focusable="false"
                                                    data-prefix="fas"
                                                    data-icon="info-circle"
                                                    class="svg-inline--fa fa-info-circle fa-w-16 fa-lg "
                                                    role="img"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"
                                                    color="#3D8DEB">
                                                    <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                                </svg>
                                            </div>
                                            <p class="css-41wyt7 ms-2">
                                                {{__('You were contacted about this ad') }} 2 {{__('days ago') }}
                                            </p>
                                        </div>
                                    </div>
--}}
                                    <form action="{{ route('CreatePostDialog') }}" method="POST" class="pt-1">
					@csrf
	                                <input type="hidden" value="{{$post->id}}" name="post_id">
	                                <input type="hidden" value="{{$post->user_id}}" name="sub_id">
{{--
                            @if($errors->any())
                                <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                     <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                                </div>
                            @endif
--}}
                                        <div class="css-26w93a form-group mt-3 mb-2">
                                            <input aria-label="Name"
                                                placeholder="{{ __('Name') }}"
                                                maxlength="100"
                                                type="text"
                                                name="name"
                                                class="css-1yk951a form-control @error('name') is-invalid @enderror"
						value="{{ (Auth::check())?Auth::user()->name:'' }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                            @enderror
                                        </div>
                                        <div class="css-26w93a form-group  mt-3 mb-2">
                                            <input aria-label="Email"
                                                placeholder="Email"
                                                maxlength="100"
                                                type="email"
                                                name="email"
                                                class="css-1yk951a form-control @error('email') is-invalid @enderror"
						value="{{ (Auth::check())?Auth::user()->email:'' }}">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                            @enderror
                                        </div>
                                        <div class="css-26w93a form-group  mt-3 mb-2">
                                            <input aria-label="Numer telefonu"
                                                  data-cy="phone-input.phone"
                                                  inputmode="tel"
                                                  maxlength="14"
                                                  name="phone"
                                                  placeholder="{{ __('Number telephone') }}"
                                                  type="tel"
                                                  class="css-1yk951a form-control"
						  value="{{ (Auth::check())?Auth::user()->telephone:'' }}">
                                        </div>
                                        <div class="css-26w93a form-group  mt-3 mb-2">
                                            <textarea rows="6"
                                                   aria-label=""
                                                   maxlength="2000"
                                                   name="message"
						   onkeyup="counter_area(this)"
                                                   class=" css-ajeaic w-100 @error('message') is-invalid @enderror"></textarea>
                                            <div data-cy="contact-form.text-area-counter" id="text_area_counter"
                                                data-testid="text-area-counter"
                                                class="css-1voeokp text-end">
                                                0 / 2000
                                            </div>
                            @if($errors->has('message'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('message')}}</strong>
                                    </span>
                            @endif

{{--
                                            <div data-cy="contact-form.gdpr-note"
                                               class=" css-1s2tzuy mb-3">
                                               <button type="button"
                                                      class="css-1nbnxnr">
                                                     {{__('The administrator of your personal data is ...') }}
                                                    <span class="css-v68mj6 sp-more">
                                                        {{__('more') }}
                                                    </span>
                                                    <span class="css-v68mj6 sp-close d-none">
                                                        {{__('close') }}
                                                    </span>
                                                </button>
                                                <div role="alert" class="css-b884ca d-none">
                                                    <p>Who will be the administrator of your data
                                                        ... with its registered office in Poznań (61-872), at ul. Królowej Jadwigi 43, and in situations specified in the provisions on the protection of personal data - the advertiser. It can also become a Financial Expert when you order the Contact with an Expert Service.

                                                        What will happen to your data
                                                        We will process them for 30 days in order to send your inquiry to the advertiser.

                                                        What happens if you tick I'm asking for an appointment with a Financial Expert
                                                        After sending the form, we will process your data in order to perform the Contact with an Expert Service. As part of it, we share your data with a financial expert cooperating with us.

                                                        What happens if you check I want to receive links to similar offers
                                                        After sending the form, based on your consent, we will process the data you provide to send you offers that may be of interest to you.
                                                    </p>
                                                </div>
                                            </div>
--}}
                                        </div>
                                        <button data-cy="contact-form.submit-button"
                                                class="css-1fejj4k"
                                                type="submit">
                                                {{__('Send a message') }}
                                        </button>
                                    </form>
                                </div>
				@if (Auth::check()) 
				@if (!in_array($post->id, $wl) && $post->user_id != Auth::user()->id)
                                <div class="css-xw4fl9 e1ou4wzt0">
                                    <button data-cy="ad-subscribe-button-sidebar.subscribe"
                                          data-cy-subscribed="false"
                                          class="css-wsz6ly"
                                          type="button"
					  onclick="setWishlist({{ $post->id }})">
                                          <svg aria-hidden="true"
                                              focusable="false"
                                              data-prefix="far"
                                              data-icon="heart"
                                              class="svg-inline--fa fa-heart fa-w-16 css-1oaeivz e51iazx0"
                                              role="img"
                                              xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 512 512">
                                              <path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
                                           </svg>
                                         {{__('Save the ad') }}
                                     </button>
                                </div>
				@endif
				@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
<script>
function setWishlist(post_id) {
	var form_data = new FormData();
	form_data.append('post_id', post_id);
	form_data.append('add_del', 1);
            $.ajax({
                url:"{{ route('setWishlist') }}",
                method: 'post',
                data:form_data,
		headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	        processData: false,
	        contentType: false,
                success:function(data)
                {
			$('#button_set_wishlist').addClass('d-none');
			$('#button_header_set_wishlist').addClass('d-none');
			toastr.success('', "{{ __('Post add to wish list') }}");
                },
                error: function(data){
		            console.log(data);
                }
            });

};
function counter_area(elem) {
	var count=$(elem).val().length;
	$('#text_area_counter').html(count+' / 2000');
}
</script>