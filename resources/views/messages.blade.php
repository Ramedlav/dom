@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-5">
            <div class="card mt-4">
                <div class="card-header post-header">{{ __('Dialogs') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h4>uotgoing</h4>
                        @foreach($out as $out_dialog)
                            <a href="{{route('ShowDialog',['dialog_id'=> $out_dialog->id])}}">{{__('open')}}</a><br>
                            @foreach($out_dialog->messages as $outmessage)
                                {{$outmessage->user->name}}: {{$outmessage->message}}<br>
                            @endforeach
                        @endforeach
{{--                    тут будут диалоги пользователя--}}
                        <h4>incoming</h4>
                        @foreach($dialogs as $dialog)
                            <a href="{{route('ShowDialog',['dialog_id'=>$dialog->id])}}">{{__('open')}}</a><br>
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
