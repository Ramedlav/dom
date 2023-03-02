@extends('layouts.app')

@section('content')
<section class="py-5 home-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="css-1kqh57f e5z15hn1 mt-5">
                    Adresujemy marzenia
                    <small>Znajdź dom, który Ci odpowiada</small>
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card home-form col-md-8 mx-auto">
                    <div class=" p-2 m-2">
                        <form action="{{ route('home') }}" method="GET">
                        @csrf
                            <div class="row">
                                <div class="col-sm-8">
                                {{-- <input type="text" name="city" placeholder="{{ __('City, address, etc') }}" value="" class="form-control" id="input-city" /> --}}
                                    <div class="form-group">

                                        {{-- <label for="address">{{ __('address') }}</label> --}}
                                        <input type="text"
                                                name="search"
                                                placeholder="address"
                                                id="address"
                                                class="form-control map-input mb-2"
                                                value="{{ $post->address ?? old('address') }}">
                                        @foreach($posts as $post)
                                        {{-- <input type="hidden" name="address_latitude" id="address-latitude" value="@foreach($posts as $post) {{ $post->address_latitude }}  @endforeach" />
                                        <input type="hidden" name="address_longitude" id="address-longitude" value="@foreach($posts as $post) {{ $post->address_longitude }}  @endforeach" /> --}}
                                        <input type="hidden" name="address_latitude" id="address-latitude" value=" {{ $post->address_latitude }} " />
                                        <input type="hidden" name="address_longitude" id="address-longitude" value=" {{ $post->address_longitude }} " />
                                        @endforeach
                                    </div>
                                    <div id="address-map-container" style="width:100%;height:200px; ">
                                        <div style="width: 100%; height: 100%" id="address-map"></div>
                                    </div>
                                {{-- <div id="city-box"></div> --}}
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group mb-2">
                                        <select name="filter_km" id="city-km" autocomplete="off" class="form-control">
                                            <option selected="" value="0">+ 0 km</option>
                                            <option value="1">+ 1 km</option>
                                            <option value="2">+ 2 km</option>
                                            <option value="5">+ 5 km</option>
                                            <option value="10">+ 10 km</option>
                                            <option value="15">+ 15 km</option>
                                            <option value="30">+ 30 km</option>
                                            <option value="50">+ 50 km</option>
                                            <option value="100">+ 100 km</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="from_price">from</label>
                                        <select class="form-control" id="from_price" name="from_price" autocomplete="off">
                                        <option selected="" value="0">€ 0</option>
                                        <option value="50000">€ 50.000</option>
                                        <option value="75000">€ 75.000</option>
                                        <option value="100000">€ 100.000</option>
                                        <option value="125000">€ 125.000</option>
                                        <option value="150000">€ 150.000</option>
                                        <option value="175000">€ 175.000</option>
                                        <option value="200000">€ 200.000</option>
                                        <option value="225000">€ 225.000</option>
                                        <option value="250000">€ 250.000</option>
                                        <option value="275000">€ 275.000</option>
                                        <option value="300000">€ 300.000</option>
                                        <option value="325000">€ 325.000</option>
                                        <option value="350000">€ 350.000</option>
                                        <option value="375000">€ 375.000</option>
                                        <option value="400000">€ 400.000</option>
                                        <option value="450000">€ 450.000</option>
                                        <option value="500000">€ 500.000</option>
                                        <option value="550000">€ 550.000</option>
                                        <option value="600000">€ 600.000</option>
                                        <option value="650000">€ 650.000</option>
                                        <option value="700000">€ 700.000</option>
                                        <option value="750000">€ 750.000</option>
                                        <option value="800000">€ 800.000</option>
                                        <option value="900000">€ 900.000</option>
                                        <option value="1000000">€ 1.000.000</option>
                                        <option value="1250000">€ 1.250.000</option>
                                        <option value="1500000">€ 1.500.000</option>
                                        <option value="2000000">€ 2.000.000</option>
                                        <option value="2500000">€ 2.500.000</option>
                                        <option value="3000000">€ 3.000.000</option>
                                        <option value="3500000">€ 3.500.000</option>
                                        <option value="4000000">€ 4.000.000</option>
                                        <option value="4500000">€ 4.500.000</option>
                                        <option value="5000000">€ 5.000.000</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="to_price">to</label>
                                        <select class="form-control" id="to_price" name="to_price" autocomplete="off">
                                            <option selected="" value="0">€ 0</option>
                                            <option value="50000">€ 50.000</option>
                                            <option value="75000">€ 75.000</option>
                                            <option value="100000">€ 100.000</option>
                                            <option value="125000">€ 125.000</option>
                                            <option value="150000">€ 150.000</option>
                                            <option value="175000">€ 175.000</option>
                                            <option value="200000">€ 200.000</option>
                                            <option value="225000">€ 225.000</option>
                                            <option value="250000">€ 250.000</option>
                                            <option value="275000">€ 275.000</option>
                                            <option value="300000">€ 300.000</option>
                                            <option value="325000">€ 325.000</option>
                                            <option value="350000">€ 350.000</option>
                                            <option value="375000">€ 375.000</option>
                                            <option value="400000">€ 400.000</option>
                                            <option value="450000">€ 450.000</option>
                                            <option value="500000">€ 500.000</option>
                                            <option value="550000">€ 550.000</option>
                                            <option value="600000">€ 600.000</option>
                                            <option value="650000">€ 650.000</option>
                                            <option value="700000">€ 700.000</option>
                                            <option value="750000">€ 750.000</option>
                                            <option value="800000">€ 800.000</option>
                                            <option value="900000">€ 900.000</option>
                                            <option value="1000000">€ 1.000.000</option>
                                            <option value="1250000">€ 1.250.000</option>
                                            <option value="1500000">€ 1.500.000</option>
                                            <option value="2000000">€ 2.000.000</option>
                                            <option value="2500000">€ 2.500.000</option>
                                            <option value="3000000">€ 3.000.000</option>
                                            <option value="3500000">€ 3.500.000</option>
                                            <option value="4000000">€ 4.000.000</option>
                                            <option value="4500000">€ 4.500.000</option>
                                            <option value="5000000">€ 5.000.000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button id="nBtn" class="btn  btn-block w-100 next-button p-o" type="submit">{{ __('Search') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center ">
                <h2 class="form-title mt-5">Promowane oferty</h2>
                <div class="card home-page-card py-2 my-2">
                    <div class="card-body p-0">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div id="postsList"  class="d-flex flex-wrap">
                            @foreach($posts as $post)
                            <div class="form-card col-lg-6 col-xl-4 p-1">
                                <a href="{{route('show',['id_post' => $post->id])}}" class="form-link" title="show {{ $post->title }}">
                                    @php $img=''; @endphp
                                    @foreach($post->photos as $photo)
                                        @if ($loop->first)
                                            @php
                                            $img = $photo->img;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <img class="img-fluid" src="{{ asset('/storage/' . $img) }}">
                                    <div class="form-text text-start">
                                        <div class="post-title">
                                            {{ $post->title }}
                                        </div>
                                        <div class="post-title">
                                           {{ $post->price }}&nbsp;zł
                                        </div>
                                        <div class="post-fulladdress">
                                           {{ $post->address }}
                                        </div>
                                    </div>

                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @if($posts->total() > $posts->count())
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-12 d-flex justify-content-center">
                                {{ $posts->onEachSide(1)->links() }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        {{-- @include('layouts.copyright') --}}
    </div>
</section>
@endsection

@section('custom_js')

@endsection

    {{-- <div class="row">
        <div class="col-12"> --}}
{{--            <div id="carousel" class="carousel slide" data-bs-ride="carousel">--}}
{{--                <ol class="carousel-indicators">--}}
{{--                    <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>--}}
{{--                    <li data-bs-target="#carousel" data-bs-slide-to="1"></li>--}}
{{--                    <li data-bs-target="#carousel" data-bs-slide-to="2"></li>--}}
{{--                </ol>--}}
{{--                <div class="carousel-inner">--}}
{{--                    <div id="slide_1" class="carousel-item active">--}}
{{--                        <img src="/img/c-1.jpg" class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                    <div id="slide_2" class="carousel-item">--}}
{{--                        <img src="/img/c-2.jpg" class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                    <div id="slide_3" class="carousel-item">--}}
{{--                        <img src="/img/c-3.jpg" class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <a class="left carousel-control-prev" href="#carousel" role="button" data-slide="prev">--}}
{{--                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Предыдущий</span>--}}
{{--                </a>--}}
{{--                <a class="right carousel-control-next" href="#carousel" role="button" data-slide="next">--}}
{{--                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Следующий</span>--}}
{{--                </a>--}}
           {{-- </div>
        </div>
    </div> --}}



