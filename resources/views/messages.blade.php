@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header post-header">{{ __('Dialogs') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{--                    тут будут диалоги пользователя--}}
                        @foreach($dialogs as $dialog)
                            <a href="{{route('ShowDialog',['dialog_id'=>$dialog->id])}}">{{__('open')}}</a>
                            @foreach($dialog->messages as $message)
                                {{$message->user->name}}:
                                {{$message->message}}<br>
                            @endforeach
                            <br> {{$dialog->post_id}}<br> {{$dialog->created_at}} <hr>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
