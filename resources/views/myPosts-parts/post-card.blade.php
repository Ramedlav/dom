@foreach($posts as $post)
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
                                <div class="d-flex justify-content-between">
                                    <span class=" css-1ui5utc">
                                        <div aria-label="{{__('Additional information') }}"
                                            role="button"
                                            class=" tooltip">
                                            <p class="css-1vd92mz">
                                            {{__('Additional information') }}
                                            </p>
                                            <span class="tooltiptext">
                                            {{__('This ad appeared on') }} {{$post->created_at->format('d.m  H:i')}} {{__('Boost moves your ad up')}}
                                            </span>
                                        </div>
                                    </span>

                                    @if($post->is_published)
                                        <form action="/post/publish/{{$post->id}}" method="post" class="my-posts-form-pub">
                                            @csrf
                                            <input type="submit"
                                                   value="{{__('is published')}}"
                                                   class="css-1vd92mz"
                                                   style="color: green"
                                                   title="{{__('unpublish') }}">
                                        </form>
                                    @else
                                        <form action="/post/publish/{{$post->id}}" method="post" class="my-posts-form-pub">
                                            @csrf
                                            <input type="submit"
                                                   value="{{__('is not published')}}"
                                                   class="css-1vd92mz"
                                                   style="color: red"
                                                   title="{{__('publish') }}">
                                        </form>
                                    @endif

                                </div>

                                <div class="css-xw6zw6 d-flex justify-content-between pt-1">
                                    <h3 data-cy="listing-item-title"
                                        title="{{ $post->title }}"
                                        class="css-1rhznz4 es62z2j10">
                                        {{ $post->title }}
                                    </h3>
                                    <div class="d-flex">
                                        <a class="css-qczclw edit-link-icon me-2"
                                           href="{{ route('editEditForm',['id_post' => $post->id]) }}"
                                           title="Edit post">
                                          <img src="/img/icons/edit-square-outline.svg">
                                        </a>
                                        <form method="POST" action="/post/delete/{{$post->id}}">
                                            @csrf
                                            <button type="submit"
                                                    class="css-qczclw"
                                                    title="{{__('Delete post') }}">
                                                    <img src="/img/icons/delete-outline.svg">
                                            </button>
                                        </form>
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
                                            {!! $post->description !!}
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
@endforeach
