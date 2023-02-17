@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="dropdown">
                <div class="card-header post-header">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        {{__('Filters')}}
                    </button>
{{--                    {{ __('All posts') }}--}}

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
			<hr class="d-block d-sm-none">
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
			<hr class="d-block d-sm-none">
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
			<hr class="d-block d-sm-none">
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
			<hr class="d-block d-sm-none">
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
                        <hr/>
            <button type="submit" class="btn btn-primary">{{__('Apply')}}</button>
            </form>
                </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @foreach($posts as $post)
                            @if($post->is_published)

                            <div class="row" >
			<div class="col-12 col-sm-6" id="{{$post->id}}">
                                <div class="post-title"><a href="post/{{$post->id}}">{{ $post->title }}</a></div>
                                <div class="post-fulladdress">{{ $post->index }} {{ $post->address }}</div>
                                <div class="">
                                    <div><label><b>{{__('price')}}:</b> </label> {{$post->price}} €.</div>
                                    <div><label><b>{{__('rooms')}}:</b> </label> {{$post->rooms}}</div>
                                    <div><label><b>{{__('bedrooms')}}:</b> </label> {{$post->bedrooms}}</div>
                                    <div><label><b>{{__('square')}}:</b> </label> {{$post->square}} м²</div>
                                    <div><label><b>{{__('garage')}}:</b> </label>
                                        @if($post->garage === 1){{__('with garage')}}
                                        @else{{__('without garage')}}
                                        @endif
                                    </div>
                                    <div><label><b>{{__('balcony')}}:</b> </label>
                                        @if($post->balcony === 1){{__('with balcony')}}
                                        @else{{__('without balcony')}}
                                        @endif
                                    </div>
                                    <div><label><b>{{__('terrace')}}:</b> </label>
                                        @if($post->terrace === 1){{__('with terrace')}}
                                        @else{{__('without terrace')}}
                                        @endif
                                    </div>
                                    <div><label><b>{{__('garden')}}:</b> </label>

                                        @if($post->garden === 1){{__('with garden')}}
                                        @else{{__('without garden')}}
                                        @endif
                                    </div>
                                </div>
                                <div class="wrapper">
                                    @if (strlen($post->description) > 255)
                                    <label for="button-{{$post->id}}" class="label-read-more">Read more...</label>
                                    <input type="checkbox" id="button-{{$post->id}}" class="read-more">
                                    @endif
                                <div class="xpandable-block">

                                    <p><b>{{__('Description')}} :</b>{!! $post->description !!}</p>

                                </div>

            </div>

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
                        </div>
			<div class="col-12 col-sm-6 text-center">
					<img class="img-thumbnail" style="width:350px;" src="{{ asset('/storage/' . $img) }}">
			</div>

                                <div><hr></div>
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
@endsection
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
