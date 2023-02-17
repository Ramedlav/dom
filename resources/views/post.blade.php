@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header post-header">{{ __('Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                       <div class="col-12 col-sm-6 p-2 text-center">
                    @foreach($post->photos as $photo)
                        @isset($photo->img)
			@if ($loop->first)
				<a target="_blank" href="{{ asset('/storage/' . $photo->img) }}">
					<img class="img-fluid" src="{{ asset('/storage/' . $photo->img) }}">
				</a>
			@endif
                        @endisset
                    @endforeach

		      </div>
		      <div class="col-12 col-sm-6 text-center">
                    <div class="row">
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
		</div>

		<div class="row text-end">
			<a href="{{route('showphotos',['id_post' => $post->id])}}">{{ __('All photos') }}</a>
		</div>
                    <div class="row">
	                    <div class="post-title">{!! $post->title !!}</div>
       	        	    <div class="post-fulladdress">{{ $post->index }} {{ $post->address }}</div>
       		            <div class="post-description">{!! $post->description !!}</div>
		    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
