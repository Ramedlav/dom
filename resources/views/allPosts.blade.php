<?php $activePage = 'all-posts';?>
@extends('layouts.app')

@section('content')

<section class="all-posts-page">
    <form class=" w-100" action="{{route('filters')}}" method="post">
        @csrf
        @include('allPosts-parts.header-all-posts')
        @include('allPosts-parts.collapse')
    </form>
    <div class="bg-all-posts">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-12">
                </div>

                <div class="col-md-12">
                    <div class="card post-card px-0">
                        <div class="card-body p-0">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12 col-md-9">
                                    <h2 class="css-1q56cn">{{__('All announcements') }}</h2>
                                    @foreach($posts as $post)
                                        @if($post->is_published)
                                        <div class="card posts-card mb-3">
                                            <div class="card-body p-0">
                                                <a href="post/{{$post->id}}">
                                                    <div class="row" >
                                                        <div class="col-12 d-md-flex" id="{{$post->id}}">
                                                            @php
                                                            $img='';
                                                            @endphp
                                                            @foreach($post->photos as $photo)
                                                                @if ($loop->first)
                                                                    @php
                                                                        $img = $photo->img;
                                                                    @endphp
                                                                @endif
                                                            @endforeach
                                                            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                                                                <div class="img-thumbnail-block">
                                                                    <img class="img-thumbnail" src="{{ asset('/storage/' . $img) }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-7 col-xl-8 ps-md-4">
                                                                <article class="css-6tqqio">
                                                                    <span class=" css-1ui5utc">
                                                                        <div aria-label="{{__('Additional information') }}"
                                                                            role="button"
                                                                            class=" tooltip">
                                                                            <p class="css-1vd92mz">
                                                                               {{__('Additional information') }}
                                                                            </p>
                                                                            <span class="tooltiptext">
                                                                               {{__('This ad appeared on') }} March 13 at 15.03 {{__('Boost moves your ad up')}}
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <div class="css-xw6zw6 d-flex justify-content-between pt-1">
                                                                        <h3 data-cy="listing-item-title"
                                                                            title="{{ $post->title }}"
                                                                            class="css-1rhznz4 es62z2j10">
                                                                            {{ $post->title }}
                                                                        </h3>
                                                                        <div>
                                                                            <button type="button"
                                                                                    data-cy="listing-subscribe-button.subscribe"
                                                                                    data-cy-subscribed="false"
                                                                                    class="css-qczclw"
                                                                                    aria-label="Dodaj do ulubionych">
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
                                                                        </div>
                                                                    </div>
                                                                    <p title=" {{ $post->address }}"
                                                                        class="css-80g06k mb-2">
                                                                        <span class="css-17o293g">
                                                                        {{ $post->address }}
                                                                        </span>
                                                                    </p>
                                                                    <div class="css-153eqh1">
                                                                        <span class="css-s8wpzb">
                                                                            {{ $post->price }}&nbsp;€,
                                                                        </span>
                                                                        <span class="css-s8wpzb">
                                                                            {{$post->rooms}}&nbsp;{{__('rooms')}},
                                                                        </span>
                                                                        <span class="css-s8wpzb">
                                                                            {{$post->bedrooms}}&nbsp;{{__('bedrooms')}},
                                                                        </span>
                                                                        <span class="css-s8wpzb">
                                                                            {{$post->square}}&nbsp;m²,
                                                                        </span>
                                                                        <span class="css-1em65uo">
                                                                            @if($post->garage === 1)
                                                                                &nbsp;{{__('with garage')}},
                                                                            @else
                                                                                &nbsp;{{__('without garden')}},
                                                                            @endif
                                                                        </span>
                                                                        <span class="css-1em65uo">
                                                                            @if($post->balcony === 1)
                                                                                &nbsp;{{__('with balcony')}},
                                                                            @else
                                                                                &nbsp;{{__('without balcony')}},
                                                                            @endif
                                                                        </span>
                                                                        <span class="css-1em65uo">
                                                                            @if($post->terrace === 1)
                                                                                &nbsp;{{__('with terrace')}},
                                                                            @else
                                                                                &nbsp;{{__('without terrace')}},
                                                                            @endif
                                                                        </span>
                                                                        <span class="css-1em65uo">
                                                                            @if($post->garden === 1)
                                                                                &nbsp;{{__('with garden')}}
                                                                            @else
                                                                                &nbsp;{{__('without garden')}}
                                                                            @endif
                                                                        </span>
                                                                    </div>
                                                                    <div class="css-l89gvb pt-1">
                                                                        <div class="css-s5xdrg">
                                                                            <p class="css-1ywqe0q">
                                                                                {{__('Description')}}:
                                                                            </p>
                                                                            <p class="css-1ywqe0q">
                                                                                {{ $post->description }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                    <div class="float-end">
                                        {{ $posts->links() }}
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

{{--
                <div class="dropdown">
                    <div class="card-header posts-header">
                        <button type="button"
                                class="btn btn-primary dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                data-bs-auto-close="outside">
                            {{__('Filters')}}
                        </button>
                        <form class="dropdown-menu p-4 w-100" action="{{route('filters')}}" method="post">
                            @csrf
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

                                <button type="submit" class="btn btn-primary">{{__('Apply')}}</button>
                            </div>
                        </form>
                    </div>
                </div> --}}

{{--<script type="text/javascript">--}}
{{--    $('#provinces').change(function (){--}}

{{--        var selected = $(this).val();--}}
{{--        var towns = [];--}}
{{--        var names = [];--}}
{{--        $.ajax({--}}
{{--            url: '/gettown',--}}
{{--            type: 'GET',--}}
{{--            data: {--}}
{{--                "_token": "{{ csrf_token() }}",--}}
{{--                province: selected,--}}

{{--            },--}}
{{--            success: function (data) {--}}
{{--                towns = data.towns;--}}
{{--                towns.forEach(function(elem) {--}}
{{--                    names.push (elem.name);--}}
{{--                });--}}

{{--                names = Array.from(new Set(names));--}}
{{--                $('#cities').find('option').remove();--}}
{{--                $('#cities').append('<option value="">all</option>');--}}
{{--                names.forEach(function(one) {--}}
{{--                    $('#cities').append('<option value="'+ one +'">'+ one +'</option>');--}}
{{--                });--}}
{{--                console.log(names);--}}
{{--            },--}}
{{--            error: function () {--}}
{{--                $('#just').html(data);--}}
{{--                console.log('Error');--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
<style>
.wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.xpandable-block {
  height: 255px;
  overflow: hidden;
  order: 0;
}
.xpand-button {
  order: 1;
}
input[class="read-more"] {
 display: none;
}
input[class="read-more"]:checked + .xpandable-block {
  height: auto;
}
.label-read-more {
  order: 1;
  color: blue;
  text-decoration: underline;
  font-size: 18px;
  cursor: pointer;
}

</style>
