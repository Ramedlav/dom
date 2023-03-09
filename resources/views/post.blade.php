@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-5">
            <div class="card mt-4">
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
			<span class="btn-group">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" role="img" viewBox="0 0 48 48"><path d="M38.5 32.25v-16.5a5 5 0 10-6.25-6.25h-16.5a5 5 0 10-6.25 6.25v16.5a5 5 0 106.25 6.25h16.5a5 5 0 106.25-6.25zm-6.25 3.25h-16.5a5 5 0 00-3.25-3.25v-16.5a5 5 0 003.25-3.25h16.5a5 5 0 003.25 3.25v16.5a5 5 0 00-3.25 3.25zM37 9a2 2 0 11-2 2 2 2 0 012-2zM11 9a2 2 0 11-2 2 2 2 0 012-2zm0 30a2 2 0 112-2 2 2 0 01-2 2zm26 0a2 2 0 112-2 2 2 0 01-2 2z"></path></svg>
			{{ $post->square }}{{ 'м²' }}
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" role="img" viewBox="0 0 48 48"><path d="M11 20l-3.999 5.999h33.998L37 20h3l3.999 5.999L44 26v9.5a1.5 1.5 0 01-1.5 1.5H39v1.5a1.5 1.5 0 01-3 0V37H12v1.5a1.5 1.5 0 01-3 0V37H5.5A1.5 1.5 0 014 35.5V26l.001-.001L8 20h3zm30 9H7v5h34v-5zM38.5 8A1.5 1.5 0 0140 9.5V20l-9-.001V21.5a1.5 1.5 0 01-1.5 1.5h-11a1.5 1.5 0 01-1.5-1.5v-1.501L8 20V9.5A1.5 1.5 0 019.5 8h29zM28 17h-8v3h8v-3zm9-6H11v5.999h6V15.5a1.5 1.5 0 011.5-1.5h11a1.5 1.5 0 011.5 1.5v1.499h6V11z"></path></svg>
			{{ $post->bedrooms }}
			</span>
			<a href="{{route('showphotos',['id_post' => $post->id])}}">{{ __('All photos') }}</a>
		</div>
                    <div class="row">
	                    <div class="post-title">{!! $post->title !!}</div>
       	        	    <div class="post-fulladdress">{{ $post->index }} {{ $post->address }}</div>
       		            <div class="post-description">{!! $post->description !!}</div>

                        @if($post->user->id !== Auth::user()->id)
                            @include('messageButton');
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
