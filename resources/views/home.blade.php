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



