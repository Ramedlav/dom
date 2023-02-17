@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
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
                                <div class="post-fulladdress">{{ $post->index }} {{ $post->address }}</div>
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

			</div>
                        <div><hr></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
