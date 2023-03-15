@extends('layouts.app')

@section('content')
@php /** @var \App\Models\Post $post */ @endphp
<section class="py-5 home-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="css-1kqh57f e5z15hn1 mt-5">
                        {{__('Make your choice')}}
                    <small>{{__('Find your dream home')}}</small>
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card home-form col-md-8 mx-auto">
                    <div class=" p-2 m-2">
                        <form action="{{ route('home_filters') }}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="nav nav-tabs mb-3" role="tablist">

                                            <button class="nav-link active"
                                               data-bs-toggle="tab"
                                               id="private-filters"
                                               data-bs-target="#home-private-filters"
                                               type="button"
                                               role="tab"
                                               aria-controls="home"
                                               aria-selected="true">
                                                {{__('Private offers')}}
                                            </button>


                                            <button class="nav-link"
                                               data-bs-toggle="tab"
                                               id="business-filters"
                                               data-bs-target="#profile-business-filters"
                                               type="button"
                                               role="tab"
                                               aria-controls="Business offers"
                                               aria-selected="false">
                                                {{__('Business offers')}}
                                            </button>

                                    </div>
                                    <div  class="tab-content">
                                        @include('home-parts.private-filters')
                                        @include('home-parts.business-filters')
                                    </div>
                                    <div class="d-flex mt-2">
                                        <button id="search-form-more-filters"
                                                data-bs-toggle="collapse"
                                                class="btn css-1ppg2fq me-3"
                                                data-bs-target="#collapsePostsFilters"
                                                type="button"
                                                aria-expanded="false"
                                                aria-controls="collapsePostsFilters">
                                            <font class="me-3" style="vertical-align: inherit;">
                                            {{__('Additional filters')}}
                                            </font>
                                            <div class="chevron-btn">
                                                <svg aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="chevron-down"
                                                        class="svg-inline--fa fa-chevron-down fa-w-14 fa-xs "
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512">
                                                        <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <span class="css-coptwa  ps-3 ps-sm-0">
                                            <span>
{{--                                                <button  class="css-1319u8e" type="submit">--}}
{{--                                                    <svg aria-hidden="true"--}}
{{--                                                        focusable="false"--}}
{{--                                                        data-prefix="fas"--}}
{{--                                                        data-icon="bell"--}}
{{--                                                        class="svg-inline--fa fa-bell fa-w-14 css-4bd2r9 me-2"--}}
{{--                                                        role="img" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                        viewBox="0 0 448 512"--}}
{{--                                                        width="12"--}}
{{--                                                        height="14">--}}
{{--                                                        <path fill="currentColor" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>--}}
{{--                                                    </svg>--}}
{{--                                                    <font style="vertical-align: inherit;">--}}
{{--                                                        {{__('Save Search')}}--}}
{{--                                                    </font>--}}
{{--                                                </button>--}}
                                            </span>
                                        </span>
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
            <div class="collapse p-md-3" id="collapsePostsFilters">
                <div class="card card-body card-filters-collapse">
                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <label>{{__('time on freebe')}}</label>
                            <fieldset>
                                <div>
                                    <input type="radio" id="all_days" name="days" value="" checked>
                                    <label for="all_days">{{__('show all')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="today" name="days" value="today" >
                                    <label for="today">{{__('today')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="3_day" name="days" value="3">
                                    <label for="3_day">{{__('3 days ago')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="5_day" name="days" value="5">
                                    <label for="5_day">{{__('5 days ago')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="10_day" name="days" value="10">
                                    <label for="10_day">{{__('10 days ago')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="30_day" name="days" value="30">
                                    <label for="30_day">{{__('30 days ago')}}</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-12 col-sm-2">
                            <label>{{__('number of rooms')}}</label>
                            <fieldset>
                                <div>
                                    <input type="radio" id="all_rooms" name="rooms" value="" checked>
                                    <label for="all_rooms">{{__('show all')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="1_rooms" name="rooms" value="1" >
                                    <label for="1_rooms">{{__('1 room')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="2_rooms" name="rooms" value="2">
                                    <label for="2_rooms">{{__('2 rooms')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="3_rooms" name="rooms" value="3">
                                    <label for="3_rooms">{{__('3 rooms')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="4_rooms" name="rooms" value="4">
                                    <label for="4_rooms">{{__('4 rooms')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="5_rooms" name="rooms" value="5">
                                    <label for="5_rooms">{{__('5 rooms')}}</label>
                                </div>
                            </fieldset>
                        </div>


                        <div class="col-12 col-sm-2">
                            <label>{{__('square')}}</label>
                            <fieldset>
                                <div>
                                    <input type="radio" id="all_square" name="square" value="" checked>
                                    <label for="all_square">{{__('show all')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="50_m" name="square" value="50" >
                                    <label for="50_m">{{__('50 м² and more')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="75_m" name="square" value="75">
                                    <label for="75_m">{{__('75 м² and more')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="100_m" name="square" value="100">
                                    <label for="100_m">{{__('100 м² and more')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="150_m" name="square" value="150">
                                    <label for="150_m">{{__('150 м² and more')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="200_m" name="square" value="200">
                                    <label for="200_m">{{__('200 м² and more')}}</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-12 col-sm-2">
                            <label>{{__('number of bedrooms')}}</label>
                            <fieldset>
                                <div>
                                    <input type="radio" id="all_bedrooms" name="bedrooms" value="" checked>
                                    <label for="all_bedrooms">{{__('show all')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="1_bedrooms" name="bedrooms" value="1" >
                                    <label for="1_bedrooms">{{__('1 bedroom')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="2_bedrooms" name="bedrooms" value="2">
                                    <label for="2_bedrooms">{{__('2 bedrooms')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="3_rooms" name="bedrooms" value="3">
                                    <label for="3_bedrooms">{{__('3 bedrooms')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="4_bedrooms" name="bedrooms" value="4">
                                    <label for="4_bedrooms">{{__('4 bedrooms')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="5_bedrooms" name="bedrooms" value="5">
                                    <label for="5_bedrooms">{{__('5 and more bedrooms')}}</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-12 col-sm-2">
                            <input type="checkbox" id="garage" name="garage" >
                            <label for="garage">{{__('garage')}}</label>
                            <hr/>
                            <div class="form-control">
                                <label>{{__('free space')}}</label><br/>
                                <input type="checkbox" id="balcony" name="balcony" >
                                <label for="balcony">{{__('balcony')}}</label><br/>
                                <input type="checkbox" id="terrace" name="terrace" >
                                <label for="terrace">{{__('terrace')}}</label><br/>
                                <input type="checkbox" id="garden" name="garden" >
                                <label for="garden">{{__('garden')}}</label><br/>
                            </div>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">{{__('Apply')}}</button> --}}
                    </div>
                </div>
            </div>
            <div class="col-12 text-center ">
                <h2 class="form-title mt-5">{{__('Private offers')}}</h2>
                <h2 class="form-title mt-5">{{__('Business offers')}}</h2>
                <div class="card home-page-card py-2 my-2">
                    <div class="card-body p-0">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div id="postsList"  class="d-flex flex-wrap">
                            {{-- @foreach($posts as $post)
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
                            @endforeach --}}
                        </div>
                    </div>
                    {{-- @if($posts->total() > $posts->count())
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-12 d-flex justify-content-center">
                                {{ $posts->onEachSide(1)->links() }}
                            </div>
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        fetch_customer_data();

        function  fetch_customer_data(query='')
        {

            // alert("load data = " + query);
            $.ajax({
                url:"{{ route('action') }}",
                method: 'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#postsList').html(data.table_data);
                    $('#result').text(data.total_data);

                },
                error: function(data){
		            console.log(data);
                }
            });
        }

        $(document).on('keyup', '#address', function(){
            var query = $(this).val();
                fetch_customer_data(query);
        });
    });
</script>
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



