<?php $activePage = 'my-posts';?>
@extends('layouts.app')

@section('content')
<section class="all-posts-page">
    <form class="w-100" action="" method="">
        @csrf
        {{-- @include('myPosts-parts.header-my-posts') --}}
        {{-- @include('allPosts-parts.collapse') --}}
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
                                    @include('myPosts-parts.post-card')
                                    {{-- <div class="float-end">
                                        {{ $posts->links() }}
                                    </div> --}}
                                </div>
                                <div class="col-12 col-lg-3 px-lg-0 pb-3">
                                    <h2 class="css-7snqpb e5g86pi2">{{__('Recommended investment') }}</h2>
                                    @include('myPosts-parts.reccomend-card')
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



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 pt-5">
            <div class="card mt-4">
                <div class="card-header post-header">{{ __('posts') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="row">
                                @foreach($posts as $post)
			                        <div class="col-12 col-sm-6">
                                <div class="post-title"><a href="{{route('show',['id_post' => $post->id])}}">{{ $post->title }}</a></div>
                                <div class="post-fulladdress">{{ $post->address }}</div>
                                <div class="post-description">{!! $post->description !!}</div>
@php
				$img='';
@endphp

				@foreach($post->photos as $photo)
					@if ($loop->first)
@php
						$img=$photo->img;
@endphp
					@endif
				@endforeach
                        </div>
			<div class="col-12 col-sm-6">
					<img class="img-fluid" src="{{ asset('/storage/' . $img) }}">
			</div>

                            @if($post->is_published)
                                <div style="text-decoration-color: greenyellow" ><p style="color: green">{{__('is published')}}</p></div>
                            @else
                                <div style="text-decoration-color: red" ><p style="color: red">{{__('is not published')}}</p></div>
                            @endif
			<div class="btn-group">
                            @if($post->is_published)
                                <form action="/post/publish/{{$post->id}}" method="post">
                                    @csrf
                                    <input type="submit" value="{{__('unpublish')}}" class="delete-button btn-success form-control">
                                </form>
                            @else
                                <form action="/post/publish/{{$post->id}}" method="post">
                                    @csrf
                                    <input type="submit" value="{{__('publish')}}" class="progress-button btn-success form-control">
                                </form>
                            @endif
			</div>
            <div class="">
                <a class="btn btn-primary form-control progress-button" href="{{ route('editEditForm',['id_post' => $post->id]) }}">{{ __('Edit') }}</a>
            </div>
            <div><button class="btn btn-primary delete-button">{{__('Delete')}}</button></div>
            <div><hr></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}
