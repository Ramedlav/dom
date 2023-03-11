
<?php $activePage = 'post';?>
@extends('layouts.app')

@section('content')
<section class="post-page">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <div class="css-1md6vpy mt-4">
                    <div class="1hbnbbd d-flex align-items-center ">
                        <a href="{{ url('/') }}" class="css-1dgzebp">
                            <svg aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="arrow-left"
                                class="svg-inline--fa fa-arrow-left fa-w-14 "
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                            </svg>
                            Wróć
                        </a>
                        <a href="#" class="css-1in5nid">
                            ul. Serdeczna
                            <div class="css-9c7r58 d-flex align-items-center">
                                <svg aria-hidden="true"
                                     focusable="false"
                                     data-prefix="fas"
                                     data-icon="chevron-right"
                                     class="svg-inline--fa fa-chevron-right fa-w-10 css-1q4vxyr e1je57sb2"
                                     role="img"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 320 512"
                                     height="8"
                                     width="5">
                                     <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                </svg>
                            </div>
                        </a>
                        <span class="css-oj2bc7">{{ $post->title }}</span>
                    </div>
                </div>
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
                                <div class="col-12">
                                    <div id="carouselPostControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <a target="_blank" href="#">
                                                  <img src="/img/c-1.jpg" class="img-fluid d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a target="_blank" href="#">
                                                  <img src="/img/c-2.jpg" class="img-fluid d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a target="_blank" href="#">
                                                  <img src="/img/c-3.jpg" class="img-fluid d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a target="_blank" href="#">
                                                  <img src="/img/c-1.jpg" class="img-fluid d-block w-100" alt="...">
                                                </a>
                                            </div>

                                            <div class="carousel-item">
                                                <a target="_blank" href="#">
                                                  <img src="/img/c-2.jpg" class="img-fluid d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a target="_blank" href="#">
                                                  <img src="/img/c-3.jpg" class="img-fluid d-block w-100" alt="...">
                                                </a>
                                            </div>
                                            <div class="carousel-item">
                                                <a target="_blank" href="#">
                                                  <img src="/img/c-1.jpg" class="img-fluid d-block w-100" alt="...">
                                                </a>
                                            </div>

                                            {{-- @foreach($post->photos as $photo)
                                                @isset($photo->img)
                                                    @if ($loop->first)
                                                    <div class="carousel-item active">
                                                        <a target="_blank" href="{{ asset('/storage/' . $photo->img) }}">
                                                            <img class="img-fluid d-block w-100" src="{{ asset('/storage/' . $photo->img) }}">
                                                        </a>
                                                    </div>
                                                    @endif
                                                @endisset
                                            @endforeach --}}
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPostControls" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPostControls" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                        <div class="image-gallery-index">
                                            {{-- <span class="image-gallery-index-current">10</span>
                                            <span class="image-gallery-index-separator"> / </span>
                                            <span class="image-gallery-index-total">12</span> --}}
                                        </div>
                                    </div>
                                    <div class="image-gallery-thumbnails-wrapper bottom">
                                        <div class="col-12 image-gallery-thumbnails d-flex">
                                            <button type="button"
                                                 data-bs-target="#carouselPostControls"
                                                 data-bs-slide-to="0"
                                                 class="active slide-img col-2"
                                                 aria-current="true"
                                                 aria-label="Slide 1">
                                                 <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-1.jpg" class=" d-block w-100" alt="...">
                                                 </div>
                                            </button>
                                            <button type="button"
                                                 data-bs-target="#carouselPostControls"
                                                 data-bs-slide-to="1"
                                                 aria-label="Slide 2"
                                                 class="slide-img col-2">
                                                 <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-2.jpg" class=" d-block w-100" alt="...">
                                                 </div>
                                            </button>
                                            <button type="button"
                                                 data-bs-target="#carouselPostControls"
                                                 data-bs-slide-to="2" a
                                                 ria-label="Slide 3"
                                                 class="slide-img col-2">
                                                 <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-3.jpg" class=" d-block w-100" alt="...">
                                                 </div>
                                            </button>
                                            <button type="button"
                                                 data-bs-target="#carouselPostControls"
                                                 data-bs-slide-to="3" a
                                                 ria-label="Slide 4"
                                                 class="slide-img col-2">
                                                 <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-1.jpg" class=" d-block w-100" alt="...">
                                                 </div>
                                            </button>
                                            <button type="button"
                                                data-bs-target="#carouselPostControls"
                                                data-bs-slide-to="4" a
                                                ria-label="Slide 5"
                                                class="slide-img col-2">
                                                <div class="image-gallery-thumbnail-inner">
                                                <img src="/img/c-2.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </button>
                                            <button type="button"
                                                data-bs-target="#carouselPostControls"
                                                data-bs-slide-to="5" a
                                                ria-label="Slide 6"
                                                class="slide-img col-2">
                                                <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-3.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </button>
                                            <button type="button"
                                                data-bs-target="#carouselPostControls"
                                                data-bs-slide-to="6" a
                                                ria-label="Slide 7"
                                                class="slide-img col-2">
                                                <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-1.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-3">
                                    <div class="d-flex justify-content-between">
                                        <h1 class="css-1sfzh0a">{{ $post->title }}</h1>
                                        <h1  class="css-1sfzh0a">{{ $post->price }} zł</h1>
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
                                <div class="col-12">
                                    <div class="">

                                        @foreach($post->photos as $photo)
                                            @isset($photo->img)
                                                @if ($loop->index > 0 && $loop->index < 5)
                                                    <div class="col-12 col-sm-6 p-1">
                                                        <a target="_blank" href="{{ asset('/storage/' . $photo->img) }}">
                                                            <img class="img-fluid" src="{{ asset('/storage/' . $photo->img) }}">
                                                        </a>
                                                    </div>
                                                @endif
                                            @endisset
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-12">
                                    <span class="btn-group">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" role="img" viewBox="0 0 48 48"><path d="M38.5 32.25v-16.5a5 5 0 10-6.25-6.25h-16.5a5 5 0 10-6.25 6.25v16.5a5 5 0 106.25 6.25h16.5a5 5 0 106.25-6.25zm-6.25 3.25h-16.5a5 5 0 00-3.25-3.25v-16.5a5 5 0 003.25-3.25h16.5a5 5 0 003.25 3.25v16.5a5 5 0 00-3.25 3.25zM37 9a2 2 0 11-2 2 2 2 0 012-2zM11 9a2 2 0 11-2 2 2 2 0 012-2zm0 30a2 2 0 112-2 2 2 0 01-2 2zm26 0a2 2 0 112-2 2 2 0 01-2 2z"></path></svg>
                                    {{ $post->square }}{{ 'м²' }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" role="img" viewBox="0 0 48 48"><path d="M11 20l-3.999 5.999h33.998L37 20h3l3.999 5.999L44 26v9.5a1.5 1.5 0 01-1.5 1.5H39v1.5a1.5 1.5 0 01-3 0V37H12v1.5a1.5 1.5 0 01-3 0V37H5.5A1.5 1.5 0 014 35.5V26l.001-.001L8 20h3zm30 9H7v5h34v-5zM38.5 8A1.5 1.5 0 0140 9.5V20l-9-.001V21.5a1.5 1.5 0 01-1.5 1.5h-11a1.5 1.5 0 01-1.5-1.5v-1.501L8 20V9.5A1.5 1.5 0 019.5 8h29zM28 17h-8v3h8v-3zm9-6H11v5.999h6V15.5a1.5 1.5 0 011.5-1.5h11a1.5 1.5 0 011.5 1.5v1.499h6V11z"></path></svg>
                                    {{ $post->bedrooms }}
                                    </span>
                                    <a href="{{route('showphotos',['id_post' => $post->id])}}">{{ __('All photos') }}</a>
                                </div>
                                <div class="col-12">
                                    {{-- <div class="post-title">{!! $post->title !!}</div>
                                       <div class="post-fulladdress">{{ $post->index }} {{ $post->address }}</div>
                                       <div class="post-description">{!! $post->description !!}</div> --}}
                                    {{-- @if($post->user->id !== Auth::user()->id)
                                        @include('messageButton');
                                    @endif --}}
                                </div>
                                <div class="col-12 my-3">
                                    <div class="form-group">
                                        {{-- <label for="address">{{ __('address') }}</label> --}}
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
