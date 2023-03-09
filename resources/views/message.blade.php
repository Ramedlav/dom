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
{{--                    сообщения пользователей должны распологаться по разные стороны
                        и быть разных цветов светлосиний и светлозеленый
                        сообщения должны быть отсортированы по дате.
                        форма отправляет dialog_id и message--}}

                        <div>
                        {{--                    это отдеьный диалог--}}
                            @foreach($messages as $message)
                                {{$message->message}} {{$message->created_at}}<br>
                            @endforeach
                        </div>
                        <form action={{Route('SendMessage')}} method="post">
                            @csrf
                            <input type="hidden" value="{{$message->dialog->id}}" name="dialog_id">
                            <textarea name="message" placeholder="{{__('write your message')}}"></textarea>
                            <button type="submit" class="btn progress-button">{{__('send')}}</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
