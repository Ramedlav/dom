
<?php $activePage = 'post';?>
@extends('layouts.app')

@section('content')
@include('layouts.header-post')
<section class="post-page">
    <div class="container">
        <div class="row">
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
                                                 class="active slide-img col-2 px-1"
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
                                                 class="slide-img col-2 px-1">
                                                 <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-2.jpg" class=" d-block w-100" alt="...">
                                                 </div>
                                            </button>
                                            <button type="button"
                                                 data-bs-target="#carouselPostControls"
                                                 data-bs-slide-to="2"
                                                 aria-label="Slide 3"
                                                 class="slide-img col-2 px-1">
                                                 <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-3.jpg" class=" d-block w-100" alt="...">
                                                 </div>
                                            </button>
                                            <button type="button"
                                                 data-bs-target="#carouselPostControls"
                                                 data-bs-slide-to="3" a
                                                 ria-label="Slide 4"
                                                 class="slide-img col-2 px-1">
                                                 <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-1.jpg" class=" d-block w-100" alt="...">
                                                 </div>
                                            </button>
                                            <button type="button"
                                                data-bs-target="#carouselPostControls"
                                                data-bs-slide-to="4"
                                                aria-label="Slide 5"
                                                class="slide-img col-2 px-1">
                                                <div class="image-gallery-thumbnail-inner">
                                                <img src="/img/c-2.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </button>
                                            <button type="button"
                                                data-bs-target="#carouselPostControls"
                                                data-bs-slide-to="5"
                                                aria-label="Slide 6"
                                                class="slide-img col-2 px-1">
                                                <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-3.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </button>
                                            <button type="button"
                                                data-bs-target="#carouselPostControls"
                                                data-bs-slide-to="6"
                                                aria-label="Slide 7"
                                                class="slide-img col-2 px-1">
                                                <div class="image-gallery-thumbnail-inner">
                                                    <img src="/img/c-1.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-4">
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
                                <div class="col-12 my-4">
                                    <h2 class="css-uzob7">Szczegóły ogłoszenia</h2>
                                    <div class="d-md-flex flex-wraper">
                                        <div class=" col-md-6 pe-md-3">
                                            <div aria-label="Powierzchnia"
                                                 role="region"
                                                 class="css-1ccovha d-flex justify-content-between">
                                                 <div class="d-flex">
                                                    <div class="mr-3">
                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PHBhdGggZD0iTTYuNDMzIDBhMS4zMiAxLjMyIDAgMCAxIC4wNjYgMi42MzhsLS4wNjYuMDAxSDQuNTA1bDguODU1IDguODU1VjkuNTY3YTEuMzIgMS4zMiAwIDAgMSAyLjYzOC0uMDY2bC4wMDIuMDY2djMuMTM0YTMuMyAzLjMgMCAwIDEtMy4yMDcgMy4yOThsLS4wOTIuMDAxSDkuNTY3YTEuMzIgMS4zMiAwIDAgMS0uMDY2LTIuNjM4bC4wNjYtLjAwMSAxLjkyNy0uMDAxLTguODU1LTguODU1djEuOTI4YTEuMzIgMS4zMiAwIDAgMS0yLjYzNy4wNjZMMCA2LjQzM1YzLjI5OUEzLjMgMy4zIDAgMCAxIDMuMjA3LjAwMUwzLjI5OSAwaDMuMTM0eiIgZmlsbD0iIzgwODE4NCIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+"
                                                        alt=""
                                                        class="css-gjii1j">
                                                    </div>
                                                    <div class="css-1qzszy5">
                                                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                            Powierzchnia
                                                        </div>
                                                    </div>
                                                 </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        {{ $post->square }}{{ 'м²' }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div aria-label="Powierzchnia"
                                                    role="region"
                                                    class="css-1ccovha d-flex justify-content-between">
                                                    <div class="d-flex">
                                                    <div class="mr-3">
                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PHBhdGggZD0iTTE2IDYuMzMzdjYuMzM0QTMuMzMzIDMuMzMzIDAgMCAxIDEyLjY2NyAxNkgzLjMzM0EzLjMzMyAzLjMzMyAwIDAgMSAwIDEyLjY2N1YzLjMzM0EzLjMzMyAzLjMzMyAwIDAgMSAzLjMzMyAwaDZ2Ni4zMzNIMTZ6TTEzLjMzMyA5aC00djQuMzM0aDMuMzM0Yy4zNjggMCAuNjY2LS4zLjY2Ni0uNjY3Vjl6TTIuNjY3IDEyLjY2N2MwIC4zNjguMjk4LjY2Ni42NjYuNjY2bDMuMzM0LjAwMS0uMDAxLTMuNjY4aC00djN6bTQtMTBIMy4zMzNhLjY2Ni42NjYgMCAwIDAtLjY2Ni42NjZsLS4wMDEgM2g0VjIuNjY3eiIgZmlsbD0iIzgwODE4NCIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+"
                                                            alt=""
                                                            class="css-gjii1j estckra6">
                                                    </div>
                                                    <div class="css-1qzszy5">
                                                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                            Liczba pokoi
                                                        </div>
                                                    </div>
                                                    </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        {{ $post->bedrooms }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div aria-label="Piętro"
                                                    role="region"
                                                    class="css-1ccovha d-flex justify-content-between">
                                                    <div class="d-flex">
                                                    <div class="mr-3">
                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJtMTAuMjE4IDEwLjcyMy0xLjcwNSAxLjcwOS0xLjgzNi0xLjczNWExLjI0NCAxLjI0NCAwIDAgMC0xLjcwOCAxLjgwOWwxLjgzNiAxLjczNGEyLjQ4NyAyLjQ4NyAwIDAgMCAzLjQ2OC0uMDVsMS43MDYtMS43MWExLjI0NCAxLjI0NCAwIDAgMC0xLjc2LTEuNzU2ek04LjUxMiAzLjUxN2wxLjY4MSAxLjc4OGExLjI0NCAxLjI0NCAwIDAgMCAxLjgxMS0xLjcwNGwtMS42OC0xLjc4N2EyLjQ4NyAyLjQ4NyAwIDAgMC0zLjUxNi0uMTA2bC0uMDU2LjA1My0xLjgxIDEuODEzYTEuMjQzIDEuMjQzIDAgMSAwIDEuNzYgMS43NTZsMS44MS0xLjgxMnpNMi4zMiA5LjE5MmgxLjI0NGExLjI0NCAxLjI0NCAwIDEgMCAwLTIuNDg3SDIuMzJhMS4yNDQgMS4yNDQgMCAwIDAgMCAyLjQ4N3oiIGZpbGw9IiM4MDgxODQiLz48cGF0aCBkPSJNNy45MTcgOS4xOTJIOS4xNmExLjI0NCAxLjI0NCAwIDEgMCAwLTIuNDg3SDcuOTE3YTEuMjQ0IDEuMjQ0IDAgMCAwIDAgMi40ODd6bTUuNTk2IDBoMS4yNDNhMS4yNDQgMS4yNDQgMCAxIDAgMC0yLjQ4N2gtMS4yNDNhMS4yNDQgMS4yNDQgMCAwIDAgMCAyLjQ4N3oiIGZpbGw9IiM0MDQwNDEiLz48cGF0aCBkPSJNNy45MTcgOS4xOTJIOS4xNmExLjI0NCAxLjI0NCAwIDEgMCAwLTIuNDg3SDcuOTE3YTEuMjQ0IDEuMjQ0IDAgMCAwIDAgMi40ODd6bTUuNTk2IDBoMS4yNDNhMS4yNDQgMS4yNDQgMCAxIDAgMC0yLjQ4N2gtMS4yNDNhMS4yNDQgMS4yNDQgMCAwIDAgMCAyLjQ4N3oiIGZpbGw9IiM4MDgxODQiLz48L2c+PC9zdmc+"
                                                            alt=""
                                                            class="css-gjii1j estckra6">
                                                    </div>
                                                    <div class="css-1qzszy5">
                                                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                            Piętro
                                                        </div>
                                                    </div>
                                                    </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        parter/2
                                                    </div>
                                                </div>
                                            </div>
                                            <div aria-label="Dostępne od"
                                                    role="region"
                                                    class="css-1ccovha d-flex justify-content-between">
                                                    <div class="d-flex">
                                                    <div class="mr-3">
                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNDA0MDQxIiBkPSJNMTUuNDkgNS4xMzJIMXY5LjM1OUExLjUxIDEuNTEgMCAwIDAgMi41MSAxNmgxMS40N2ExLjUxIDEuNTEgMCAwIDAgMS41MS0xLjUxVjUuMTMzek03Ljk0NCA3LjU0N3Y0LjUyOEgzLjQxNVY3LjU0N3Y2LjAzOGg5LjY2VjcuNTQ3SDcuOTQzem0xLjUxLTUuMjgzSDcuMzRWMS4yMDhhMS4yMDggMS4yMDggMCAxIDAtMi40MTUgMHYxLjA1NkgyLjM1OGExLjIwOCAxLjIwOCAwIDAgMCAwIDIuNDE1aDEyLjA3NmExLjIwNyAxLjIwNyAwIDEgMCAwLTIuNDE1aC0yLjU2NlYxLjIwOGExLjIwOCAxLjIwOCAwIDEgMC0yLjQxNSAwdjEuMDU2eiIvPjwvZz48L3N2Zz4="
                                                             alt=""
                                                             class="css-16tfihv estckra6">
                                                    </div>
                                                    <div class="css-1qzszy5">
                                                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                            Dostępne od
                                                        </div>
                                                    </div>
                                                    </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        <button data-cy="missing-info-button" class="css-lux9hg ekf916v1">Zapytaj</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div aria-label="Obsługa zdalna"
                                                    role="region"
                                                    class="css-1ccovha d-flex justify-content-between">
                                                    <div class="d-flex">
                                                    <div class="mr-3">
                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbGw9IiM0MDQwNDEiIGZpbHRlcj0idXJsKCNhKSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTUuODM1IDcuOTE4QTcuOTE4IDcuOTE4IDAgMSAwIDAgNy45MThhMS4zMiAxLjMyIDAgMCAwIDIuNjQgMCA1LjI3OCA1LjI3OCAwIDEgMSAxMC41NTYgMCAxLjMyIDEuMzIgMCAwIDAgMi42NCAweiIvPjxwYXRoIGQ9Ik0xMS44NzcgNy41ODhhMy45NiAzLjk2IDAgMCAwLTcuOTE4IDAgMS4zMiAxLjMyIDAgMCAwIDIuNjQgMCAxLjMyIDEuMzIgMCAxIDEgMi42MzkgMCAxLjMyIDEuMzIgMCAxIDAgMi42MzkgMHoiLz48cGF0aCBkPSJNNi43NjMgOS43MzJ2NC45NDhhMS4zMiAxLjMyIDAgMCAwIDIuNjQgMFY5LjczMmExLjMyIDEuMzIgMCAwIDAtMi42NCAweiIvPjwvZz48L3N2Zz4="
                                                             alt=""
                                                             class="css-16tfihv estckra6">
                                                    </div>
                                                    <div class="css-1qzszy5">
                                                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                            Obsługa zdalna
                                                        </div>
                                                    </div>
                                                    </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        <button data-cy="missing-info-button" class="css-lux9hg ekf916v1">Zapytaj</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ps-md-3">
                                            <div aria-label="Czynsz"
                                                 role="region"
                                                 class="css-1ccovha d-flex justify-content-between">
                                                 <div class="d-flex">
                                                    <div class="mr-3">
                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNOCAxMC4zMzNjMi45ODggMCA1LjU1OC0xLjAxNyA2Ljg0NC0yLjI0OEMxNS42MjQgNy4zMzkgMTYgNi40ODcgMTYgNS42NjdjMC0uODItLjM3Ni0xLjY3Mi0xLjE1Ni0yLjQxOUMxMy41NTggMi4wMTggMTAuOTg4IDEgOCAxIDUuMDEyIDEgMi40NDIgMi4wMTcgMS4xNTYgMy4yNDguMzc2IDMuOTk1IDAgNC44NDcgMCA1LjY2N2MwIC44Mi4zNzYgMS42NzIgMS4xNTYgMi40MThDMi40NDIgOS4zMTYgNS4wMTIgMTAuMzMzIDggMTAuMzMzem0wLTIuNjY2Yy0xLjg5NCAwLTMuNTgxLS40ODMtNC42MjEtMS4yMDNhMi42MDYgMi42MDYgMCAwIDEtLjUzNS0uNDcxYy0uMDkxLS4xMS0uMTc3LS4yMS0uMTc3LS4zMjYgMC0uMTE3LjA4Ni0uMjE3LjE3Ny0uMzI3LjEzOC0uMTY2LjMyLS4zMjIuNTM1LS40N0M0LjQxOSA0LjE1IDYuMTA2IDMuNjY3IDggMy42NjdjMS44OTQgMCAzLjU4MS40ODIgNC42MjEgMS4yMDMuMjE1LjE0OC4zOTcuMzA0LjUzNS40Ny4wOTEuMTEuMTc3LjIxLjE3Ny4zMjcgMCAuMTE2LS4wODYuMjE2LS4xNzcuMzI2LS4xMzguMTY3LS4zMi4zMjMtLjUzNS40Ny0xLjA0LjcyMS0yLjcyNyAxLjIwNC00LjYyMSAxLjIwNHpNLjA2IDEwLjYwMWMuMDI2LjcyOS4zODQgMS41NSAxLjEyNCAyLjI5MiAxLjI1NSAxLjI1NyAzLjc0NiAyLjM5IDYuNzcxIDIuMjg1IDIuNTY0LS4wOSA0LjUwNi0uNzA0IDUuNjktMS42MzEgMS4wMDctLjc4OSAxLjU1LTEuODAzIDEuNjEyLTIuOTg4bC0yLjY2Mi0uMTRjLS4wMy41NTctLjQxLjk2NS0uOTg1IDEuMjg1LS44ODcuNDkzLTIuMTY1Ljc1NC0zLjc0OC44MDktMS44NTIuMDY1LTMuNDQtLjQ2LTQuNDItMS4xODdhMi41NzYgMi41NzYgMCAwIDEtLjYwMy0uNTkzYy0uMDU1LS4wNzktLjExLS4xNDgtLjExMy0uMjI0bC0yLjY2NS4wOTN6IiBmaWxsPSIjNDA0MDQxIi8+PC9nPjwvc3ZnPg=="
                                                             alt=""
                                                             class="css-gjii1j estckra6">
                                                    </div>
                                                    <div class="css-1qzszy5">
                                                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                            Czynsz
                                                        </div>
                                                    </div>
                                                 </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        400 zł/miesiąc
                                                    </div>
                                                </div>
                                            </div>
                                            <div aria-label="Kaucja"
                                                    role="region"
                                                    class="css-1ccovha d-flex justify-content-between">
                                                    <div class="d-flex">
                                                        <div class="mr-3">
                                                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTUgOC4yODZDMTUgNy41NzYgMTQuNDY3IDcgMTMuODA5IDdIMi4xOUMxLjUzMyA3IDEgNy41NzYgMSA4LjI4NnY2LjQyOEMxIDE1LjQyNCAxLjUzMyAxNiAyLjE5MSAxNkgxMy44MWMuNjU3IDAgMS4xOS0uNTc2IDEuMTktMS4yODZWOC4yODZ6TTEyLjYxNyA5LjU3djMuODZIMy4zODNWOS41N2g5LjIzNHpNMTMgNkE1IDUgMCAwIDAgMyA2aDIuMTA1YTIuODk1IDIuODk1IDAgMSAxIDUuNzkgMEgxM3oiIGZpbGw9IiM0MDQwNDEiLz48L2c+PC9zdmc+"
                                                                 alt=""
                                                                 class="css-gjii1j estckra6">
                                                        </div>
                                                        <div class="css-1qzszy5">
                                                            <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                                Kaucja
                                                            </div>
                                                        </div>
                                                    </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        2 500 zł
                                                    </div>
                                                </div>
                                            </div>
                                            <div aria-label="Rodzaj zabudowy"
                                                    role="region"
                                                    class="css-1ccovha d-flex justify-content-between">
                                                    <div class="d-flex">
                                                    <div class="mr-3">
                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNDA0MDQxIiBkPSJNLjAwMyAxMC4zMTljLS4wMTMuMTk5LjAyLjQwMy4xMDIuNmwuMDI4LjA2Yy0uMDg1LjE3NC0uMTMzLjM3LS4xMzMuNTc3djQuMjg5aDE2di00LjI4OWMwLS4yMDctLjA0OC0uNDAzLS4xMzMtLjU3N2ExLjMxOSAxLjMxOSAwIDAgMC0uNjgxLTEuNzk2TDcuOTEgNi4xNjdsLTUuMjcgMi4yNFYzLjY0aDMuOTU5di4zM2ExLjMyIDEuMzIgMCAwIDAgMi42MzkgMFYxSDB2OS4yMzdjMCAuMDI3LjAwMS4wNTUuMDAzLjA4MnptMi42MDguOTY4Yy4wMTkuMDg3LjAyOC4xNzcuMDI4LjI3djEuNjQ5aDEwLjcyMnYtMS42NWMwLS4wOS4wMDktLjE3Ny4wMjYtLjI2Mkw3LjkyNCA5LjAzIDIuNjEgMTEuMjg3eiIvPjwvZz48L3N2Zz4="
                                                            alt=""
                                                            class="css-gjii1j estckra6">
                                                    </div>
                                                    <div class="css-1qzszy5">
                                                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                            Rodzaj zabudowy
                                                        </div>
                                                    </div>
                                                    </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        apartamentowiec
                                                    </div>
                                                </div>
                                            </div>
                                            <div aria-label="Balkon / ogród / taras"
                                                    role="region"
                                                    class="css-1ccovha d-flex justify-content-between">
                                                    <div class="d-flex">
                                                    <div class="mr-3">
                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNDA0MDQxIiBkPSJNNy44NzMgOC4wNzggNS4wMjEgMGwtNC4zIDEyLjE4NWgzLjEyN3YyLjY0MWExLjE3NCAxLjE3NCAwIDAgMCAyLjM0NyAwdi0yLjY0MUg3YTQuMTIyIDQuMTIyIDAgMCAwIDIuNzE3IDIuNjE3di4wMjRhMS4xNzQgMS4xNzQgMCAwIDAgMi4zNDggMHYtLjAyNGE0LjExIDQuMTEgMCAxIDAtNC4xOTItNi43MjR6bTMuMDE4IDEuMDI1YTEuNzYyIDEuNzYyIDAgMSAxLTEuNzYxIDEuNzYyYzAtLjk3My43OS0xLjc2MiAxLjc2MS0xLjc2MnptLTYuODUuNzM0Ljk4LTIuNzgzLjk4MiAyLjc4M0g0LjA0eiIvPjwvZz48L3N2Zz4="
                                                             alt=""
                                                             class="css-gjii1j estckra6">
                                                    </div>
                                                    <div class="css-1qzszy5">
                                                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                            Balkon / ogród / taras
                                                        </div>
                                                    </div>
                                                    </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        balkon
                                                    </div>
                                                </div>
                                            </div>
                                            <div aria-label="Stan wykończenia"
                                                    role="region"
                                                    class="css-1ccovha d-flex justify-content-between">
                                                    <div class="d-flex">
                                                    <div class="mr-3">
                                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiI+PGRlZnM+PGZpbHRlciBpZD0iYSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJhdXRvIj48ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlR3JhcGhpYyIgdmFsdWVzPSIwIDAgMCAwIDAuNTAxOTYxIDAgMCAwIDAgMC41MDU4ODIgMCAwIDAgMCAwLjUxNzY0NyAwIDAgMCAxLjAwMDAwMCAwIi8+PC9maWx0ZXI+PC9kZWZzPjxnIGZpbHRlcj0idXJsKCNhKSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNDA0MDQxIiBkPSJNNS44NTkgNy45MjIuMzI2IDEzLjQ1NGExLjExNiAxLjExNiAwIDAgMCAxLjU3NyAxLjU3N2w1LjUzMy01LjUzMyAxLjA0NiAxLjA0N2ExLjM5MyAxLjM5MyAwIDAgMCAxLjk3IDBsMi4xMTgtMi4xMThhMS42NzIgMS42NzIgMCAwIDAgMC0yLjM2NUw3LjUxIDEgMS4wODMgMy4xNDYgNS44NiA3LjkyMnptOC4yMzguMzQtMy42MTIgMy42MTJhMS4xMTYgMS4xMTYgMCAwIDAgMS41NzYgMS41NzdsMy42MTItMy42MTJhMS4xMTQgMS4xMTQgMCAxIDAtMS41NzYtMS41Nzd6TTEwLjYgNy4yNDQgOS40NjcgOC4zNzcgNS4yMSA0LjExOWwxLjY5OC0uNTY3TDEwLjYgNy4yNDR6Ii8+PC9nPjwvc3ZnPg=="
                                                             alt=""
                                                             class="css-gjii1j estckra6">
                                                    </div>
                                                    <div class="css-1qzszy5">
                                                        <div data-cy="table-label-content" class="css-1h52dri estckra7">
                                                            Stan wykończenia
                                                        </div>
                                                    </div>
                                                    </div>

                                                <div class="css-1qzszy5 estckra8">
                                                    <div class="css-1wi2w6s estckra5">
                                                        do zamieszkania
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-4 css-1umupf3">
                                    <h2 class="css-uzob7">Opis</h2>
                                    <div class="css-1qoxjsu">
                                        <div class="content-container">
                                            <div class="content-text css-1yc9uo8">
                                                <p>DO WYNAJĘCIA MIESZKANIE W NOWYM BUDOWNICTWIE, UMOWA MINIMUM 1 ROK</p>
                                                <p>Lokalizacja: Oława, ul. Serdeczna<br> - Ilość pokoi: 2<br> - Metraż: 35 m2<br> - Piętro: Parter</p>
                                                <p><br> W skład mieszkania wchodzi:<br> - Kuchnia : pełny sprzęt AGD (lodówka, piekarnik, płyta grzewcza, okap, zlew, zmywarka) oraz stół , krzesła.<br> - Salon ( szafka RTV + odbiornik telewizyjny, rozkładany wypoczynek)<br> - Pokój mały – szafa, rozkładany wypoczynek, stół<br> - Łazienka (wc, prysznic, umywalka, pralka, szafka)&nbsp;<br> - Korytarz (duża szafa wnękowa z lustrem)<br> - Balkon<br> <br> Lokalizacja: w pobliżu sklepy: Intermarche, Biedronka, Majster, szkoła, przedszkole, kościół.<br> Osiedle ciche, dobra komunikacja wylotowa na Wrocław.<br> <br> CENA NAJMU: 1900 zł&nbsp;<br> Czynsz administracyjny z zaliczkami na wodę i ogrzewanie: 400 zł<br> Opłata za prąd według zużycia: średnio 100 zł</p>
                                            </div>
                                        </div>
                                        <button aria-expanded="true"
                                                class="more-btn css-tth7py ">
                                                <span class="css-13vjjlj e1oafw9z1">Pokaż mniej</span>
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
                                {{-- <div>{{$post->user->name}}</div>
                                <div>{{$post->user->phone}}</div>
                                <div>{{$post->user->email}}</div> --}}
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
                                </div>
                                <div class="col-12 my-3">
                                    <h2 class="css-uzob7">Map</h2>
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
                            <div class="col-12 col-md-3">
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
                                                Oferta prywatna
                                            </div>
                                            <div class="css-1ci9lfd">
                                                <div class="phoneNumber ezb2r8u3 css-is2nit e33agma3">
                                                    <span class="css-lgcdco e33agma1">502</span>
                                                    <button data-cy="phone-number.show-full-number-button" class="e33agma2 css-8ycw4 ekf916v1">Pokaż numer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="css-1wypg4o"
                                            data-cy="alert-wrapper"
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
                                                    Kontaktowałaś(eś) się w sprawie tego ogłoszenia 2 dni temu
                                                </p>
                                            </div>
                                        </div>
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
