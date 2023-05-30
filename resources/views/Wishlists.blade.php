<?php $activePage = 'all-posts';?>
@extends('layouts.app')

@section('content')

<section class="all-posts-page">
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
                                <div class="col-12 col-lg-12">
                                    <h2 class="css-1q56cn">{{__('My favorites') }}</h2>
                                    @include('allPosts-parts.post-card')
                                    <div class="float-end">
                                        {{ $posts->onEachSide(1)->links() }}
                                    </div>

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