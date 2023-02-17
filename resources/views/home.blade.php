@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header post-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div><a href="{{Route('showMy')}}">{{ __('My posts') }}</a></div>
                    <div><a href="{{Route('createCreateForm')}}">{{ __('New post') }}</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
