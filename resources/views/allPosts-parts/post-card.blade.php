@foreach($posts as $post)
    @if($post->is_published)
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
                                <div class="css-xw6zw6 d-flex justify-content-between pt-1">
                                    <h3 data-cy="listing-item-title"
                                        title="{{ $post->title }}"
                                        class="css-1rhznz4 es62z2j10">
                                        {{ $post->title }}
                                    </h3>
                                    <div>
                                        <button type="button"
                                                data-cy="listing-subscribe-button.subscribe"
                                                data-cy-subscribed="false"
                                                class="css-qczclw"
                                                aria-label="Dodaj do ulubionych">
                                                <svg aria-hidden="true"
                                                    focusable="false"
                                                    data-prefix="far"
                                                    data-icon="heart"
                                                    class="svg-inline--fa fa-heart fa-w-16 fa-lg css-1itvsd9"
                                                    role="img"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"
                                                    width="24"
                                                    height="24">
                                                    <path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
                                                </svg>
                                        </button>
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
                                    <div class="css-1ywqe0q">
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
    @endif
@endforeach
