@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header post-header">{{ __('Dialog') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{--                    форма отправки первого сообщения
                        должна отправлять post_id, message --}}
                        create
                        <div>
                            <form action={{Route('CreatePostDialog')}} method="post">
                                @csrf
                                <input type="hidden" value="{{$post_id}}" name="post_id">
                                <textarea name="message" placeholder="{{__('write your message')}}"></textarea>
                                <button type="submit" class="btn progress-button">{{__('send')}}</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
