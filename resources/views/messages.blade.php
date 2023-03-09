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
                            {{$dialog->sub_id}} {{$dialog->post_id}}
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
