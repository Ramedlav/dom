<div class="card">
	<div class="card-body">
		@foreach($posts as $post)
			@if($post->is_published)
			    @php $img=''; @endphp
			    @foreach($post->photos as $photo)
                    @if ($loop->first)
                        @php $img = $photo->img; @endphp
                    @endif
		        @endforeach
                <div class="row">
                    <div class="col-12 col-sm-6 text-center">
                        <img class="img-thumbnail" style="width:350px;" src="{{ asset('/storage/' . $img) }}">
                    </div>
                    <div class="col-12 col-sm-6" id="{{$post->id}}">
                        <div class="post-title">
                            <a href="post/{{$post->id}}">
                                {{ $post->title }}
                            </a>
                        </div>
                        <div class="post-fulladdress">
                            {{ $post->index }} {{ $post->address }}
                        </div>
                            <div class="">
                                <div>
                                    <label><b>{{__('price')}}:</b> </label>
                                    {{$post->price}} €.
                                </div>
                                <div>
                                    <label><b>{{__('rooms')}}:</b> </label>
                                    {{$post->rooms}}
                                </div>
                                <div>
                                    <label><b>{{__('bedrooms')}}:</b> </label>
                                    {{$post->bedrooms}}
                                </div>
                                <div>
                                    <label><b>{{__('square')}}:</b> </label>
                                    {{$post->square}} м²
                                </div>
                                <div>
                                    <label><b>{{__('garage')}}:</b> </label>
                                    @if($post->garage === 1){{__('with garage')}}
                                    @else{{__('without garage')}}
                                    @endif
                                </div>
                                <div>
                                    <label><b>{{__('balcony')}}:</b> </label>
                                    @if($post->balcony === 1){{__('with balcony')}}
                                    @else{{__('without balcony')}}
                                    @endif
                                </div>
                                <div>
                                    <label><b>{{__('terrace')}}:</b> </label>
                                    @if($post->terrace === 1){{__('with terrace')}}
                                    @else{{__('without terrace')}}
                                    @endif
                                </div>
                                <div>
                                    <label><b>{{__('garden')}}:</b> </label>

                                    @if($post->garden === 1){{__('with garden')}}
                                    @else{{__('without garden')}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    <div>
                    <hr>
                </div>
	{{-- </div> --}}
            @endif
        @endforeach
		<div class="float-end">
			{{ $posts->links() }}
		</div>
	</div>
</div>
