<?php $activePage = 'all-posts';?>
@extends('layouts.app')

@section('content')

<section class="all-posts-page">
    <form class=" w-100" action="{{route('home_filters')}}" method="post" id="all_posts">
        @csrf
        @include('allPosts-parts.header-all-posts')
        @include('allPosts-parts.collapse')
    </form>
    <div class="bg-all-posts">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card post-card px-0">
                        <div class="card-body p-0">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <h2 class="css-1q56cn">{{__('All announcements') }}</h2>
                                    @include('allPosts-parts.post-card')
                                    <div class="float-end">
                                        {{ $posts->onEachSide(1)->links() }}
                                    </div>

                                </div>
                                <div class="col-12 col-lg-3 px-lg-0 pb-3">
                                    <h2 class="css-7snqpb e5g86pi2">{{__('Recommended investment') }}</h2>
                                    @include('allPosts-parts.reccomend-card')
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
{{-- <style>
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

</style> --}}
