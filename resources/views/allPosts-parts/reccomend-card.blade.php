@foreach($posts as $post)
    @if($post->is_published)
        @if($loop->last)
        <a href="post/{{$post->id}}" class="">
            <div class="card  posts-card">
                <div class="card-body p-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">

                        @include('allPosts-parts.reccomend-carousel')

                        <div class="col-12">
                            <div class="css-1orssx9">
                                <div class="css-d3v9zr">
                                    <h5 class="css-ulhqkn ">
                                        <font style="vertical-align: inherit;">
                                            {{ $post->title }} - {{__('FINISHED!') }}
                                        </font>
                                    </h5>
                                    <span class="css-231uq5">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                {{$post->address}}
                                            </font>
                                        </font>
                                    </span>
                                </div>
                                <b class="css-bk9fzy">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            from {{ $post->price }} &nbsp;€/м²
                                        </font>
                                    </font>
                                </b>
                                <div class="css-8bnm8w ">
                                    <span class="css-gajpfb">
                                        <font style="vertical-align: inherit;">
                                            {{$post->User->name}}
                                        </font>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endif
    @endif
@endforeach
