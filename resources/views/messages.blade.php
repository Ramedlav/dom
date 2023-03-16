<?php $activePage = 'messages';?>
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
                                <h2 class="css-1q56cn px-3">{{__('Dialogs') }}</h2>
                                <div class="col-12 col-md-4">
                                    <div class="card messages-card">
                                        <div class="card-header css-1qi2050">
                                            <div class="css-1c5er82">
                                                <div class="css-1c5er82">
                                                    <a type="button"
                                                       mr="24"
                                                       data-testid="observed-conversations-link"
                                                       data-cy="conversations-list-saved-conversations-button"
                                                       class="css-1c7bw5f"
                                                       href="/uk/myaccount/answer/e6104d68-ef93-446f-acc4-bb66468b3d91/?observed=1">
                                                       <svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20"
                                                            style="height: 24px; width: 24px;">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M0 0h20v20H0z"></path>
                                                                <path fill="#002F34" d="M13.889 1.667c1.121 0 2.038.874 2.107 1.977l.004.134V17.5l-6.333-3.167L3.333 17.5V3.778c0-1.121.874-2.038 1.978-2.107l.133-.004h8.445zm0 1.583H5.444a.528.528 0 00-.522.45l-.005.078v11.16l4.75-2.375 4.75 2.375V3.778a.528.528 0 00-.45-.522l-.078-.006z"></path>
                                                            </g>
                                                        </svg>
                                                        <p class="css-1tgza5l">
                                                           {{__('Saved')}}
                                                        </p>
                                                    </a>
                                                    <a type="button"
                                                       data-testid="archived-conversations-link"
                                                       data-cy="conversations-list-trashed-conversations-button"
                                                       class="css-117h4lg"
                                                       ref="#">
                                                       <img src="/img/icons/delete-outline.svg">
                                                        <p class="css-xrmiit">
                                                           {{__('Basket') }}
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="tabs css-1382m1k">
                                                    <input type="radio"
                                                            name="tab-btn"
                                                            id="tab-btn-1"
                                                            value=""
                                                            checked
                                                            class="message-checkbox">
                                                    <label for="tab-btn-1" class=" me-3">
                                                        <h4 class="mb-0">uotgoing</h4>
                                                    </label>


                                                    <input type="radio"
                                                            name="tab-btn"
                                                            id="tab-btn-2"
                                                            value=""
                                                            class="message-checkbox">
                                                    <label for="tab-btn-2" class=""><h4 class="mb-0">incoming</h4></label>

                                                <div id="content-1" class="mt-2 tab-message-contant">
                                                    <p class="css-19tty9x">
                                                       {{__('Unread') }}
                                                    </p>
                                                    <div class="css-1rknqns">
                                                        <div class="css-y3uyfk">
                                                            <img width="40"
                                                                height="40"
                                                                data-testid="caught-up-image"
                                                                alt="All caught up"
                                                                src="/img/images/confetti.svg">
                                                                <p class="css-1oc165u er34gjf0">
                                                                   {{__('You all read!') }}
                                                                </p>
                                                        </div>
                                                    </div>
                                                    <p class="css-19tty9x er34gjf0">
                                                        {{__('Read') }}
                                                    </p>
                                                    <ul class="css-1ks0ui5">
                                                        <div class="css-1cwveox">
                                                            <a class="css-1b3tih6" href="#">
                                                                <div class="css-14wbffc">
                                                                    <div class="css-6q6hwe">
                                                                        <img src="" class="css-zm0vdp d-none">
                                                                    </div>
                                                                </div>
                                                                <div class="css-1v35hpt">
                                                                    <div class="css-miqdd3">
                                                                        <p class="css-8sr34w er34gjf0">
                                                                            Валентина
                                                                        </p>
                                                                    </div>
                                                                    <div class="css-miqdd3">
                                                                        <p class="css-1ne2gb9 er34gjf0">
                                                                            Ботинки женские зимние кожаные на меху.
                                                                        </p>
                                                                    </div>
                                                                    <p class="css-h2zp4w ">
                                                                        Дякую. Великі.
                                                                    </p>
                                                                </div>
                                                                <div class="css-17jarbz">
                                                                    <p class="css-1gdtsar">
                                                                        18.01
                                                                    </p>
                                                                    <button class="css-35mg35">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             viewBox="0 0 20 20" style="height: 20px; width: 20px;">
                                                                             <g fill="none" fill-rule="evenodd">
                                                                                <path d="M0 0h20v20H0z"></path>
                                                                                <path fill="#7F9799" d="M13.889 1.667c1.121 0 2.038.874 2.107 1.977l.004.134V17.5l-6.333-3.167L3.333 17.5V3.778c0-1.121.874-2.038 1.978-2.107l.133-.004h8.445zm0 1.583H5.444a.528.528 0 00-.522.45l-.005.078v11.16l4.75-2.375 4.75 2.375V3.778a.528.528 0 00-.45-.522l-.078-.006z"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="css-1o8agjl">
                                                            <a class="css-1b3tih6" href="#">
                                                                <div class="css-14wbffc">
                                                                    <div class="css-6q6hwe">
                                                                        <img src="" class="css-zm0vdp d-none">
                                                                    </div>
                                                                </div>
                                                                <div class="css-1v35hpt">
                                                                    <div class="css-miqdd3">
                                                                        <p class="css-8sr34w er34gjf0">
                                                                            Валентина
                                                                        </p>
                                                                    </div>
                                                                    <div class="css-miqdd3">
                                                                        <p class="css-1ne2gb9 er34gjf0">
                                                                            Ботинки женские зимние кожаные на меху.
                                                                        </p>
                                                                    </div>
                                                                    <p class="css-h2zp4w ">
                                                                        Дякую. Великі.
                                                                    </p>
                                                                </div>
                                                                <div class="css-17jarbz">
                                                                    <p class="css-1gdtsar">
                                                                        18.01
                                                                    </p>
                                                                    <button class="css-35mg35">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             viewBox="0 0 20 20" style="height: 20px; width: 20px;">
                                                                             <g fill="none" fill-rule="evenodd">
                                                                                <path d="M0 0h20v20H0z"></path>
                                                                                <path fill="#7F9799" d="M13.889 1.667c1.121 0 2.038.874 2.107 1.977l.004.134V17.5l-6.333-3.167L3.333 17.5V3.778c0-1.121.874-2.038 1.978-2.107l.133-.004h8.445zm0 1.583H5.444a.528.528 0 00-.522.45l-.005.078v11.16l4.75-2.375 4.75 2.375V3.778a.528.528 0 00-.45-.522l-.078-.006z"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </ul>


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
                                                <div id="content-2" class="mt-2 tab-message-contant">
                                                    <p class="css-19tty9x">
                                                        {{__('Unread') }}
                                                     </p>
                                                     <div class="css-1rknqns">
                                                         <div class="css-y3uyfk">
                                                             <img width="40"
                                                                 height="40"
                                                                 data-testid="caught-up-image"
                                                                 alt="All caught up"
                                                                 src="/img/images/confetti.svg">
                                                                 <p class="css-1oc165u er34gjf0">
                                                                    {{__('You all read!') }}
                                                                 </p>
                                                         </div>
                                                     </div>
                                                     <p class="css-19tty9x er34gjf0">
                                                         {{__('Read') }}
                                                     </p>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 px-0">
                                    <div class="card messages-card">
                                        <div class="card-body p-0">

                                        </div>
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


{{-- <div class="container">
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
</div> --}}
