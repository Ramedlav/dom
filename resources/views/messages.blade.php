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

                        <div class="tabs">
                            <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
                            <label for="tab-btn-1"><h4>uotgoing</h4></label>
                            <input type="radio" name="tab-btn" id="tab-btn-2" value="">
                            <label for="tab-btn-2"><h4>incoming</h4></label>

                            <div id="content-1">

                               <h4>uotgoing</h4>

                                @foreach($out as $out_dialog)
                                    <a href="{{route('ShowDialog',['dialog_id'=> $out_dialog->id])}}">{{__('open')}}</a><br>
                                    @foreach($out_dialog->messages as $outmessage)
                                        @if($outmessage->user->id == Auth::user()->id)
                                            <div class="me" style="text-align:right; background-color: #98FB99;">@else<div class="you" style="text-align:left; background-color:#87CEFA;">
                                        @endif
                                        {{$outmessage->user->name}}: {{$outmessage->message}} - {{$outmessage->created_at}}<br></div>
                                    @endforeach
                                @endforeach
                            </div>
                            <div id="content-2">
                               <h4>incoming</h4>
                                @foreach($dialogs as $dialog)
                                    <a href="{{route('ShowDialog',['dialog_id'=>$dialog->id])}}">{{__('open')}}</a><br>
                                    @foreach($dialog->messages as $message)
                                        @if($message->user->id == Auth::user()->id)
                                            <div class="me" style="text-align:right; background-color: #98FB99;">@else<div class="you" style="text-align:left; background-color:#87CEFA;">
                                        @endif
                                            {{$message->user->name}}:
                                            {{$message->message}}- {{$message->created_at}}<br>
                                            </div>
                                    @endforeach
                                    <br> {{$dialog->post_id}}<br> {{$dialog->created_at}} <hr>
                                @endforeach
                            </div>
                        </div>


                   тут будут диалоги пользователя


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
