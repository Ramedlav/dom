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
                                {{$message->message}} {{$message->date}}
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
