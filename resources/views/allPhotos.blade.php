@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header post-header">{{ $post->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                    @foreach($photos as $photo)
                        @isset($photo->img)

                       <div class="col-12 col-sm-4 p-2 text-center thumb">
				<a  data-fancybox="gallery" href="{{ asset('/storage/' . $photo->img) }}">
					<img class="img-fluid" src="{{ asset('/storage/' . $photo->img) }}">
				</a>
		       </div>
                        @endisset
                    @endforeach

		    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
