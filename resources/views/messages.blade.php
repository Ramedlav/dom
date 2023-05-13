<?php $activePage = 'messages';?>
@extends('layouts.app')

@section('content')
<input type="hidden" value="{{ $all_count }}" id="all_count">
<input type="hidden" value="{{ $state_users }}" id="state_users">
<section class="all-posts-page">
    <div class="bg-all-posts">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="c px-0">
                        <div class="card-body p-0">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="row">
                                <h2 class="css-1q56cn px-3">{{__('Dialogs') }}</h2>
                                <div class="col-12 col-lg-4 px-0 px-md-3" id="chat_users_list">
                                    <div class="card messages-card pt-0">
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
                                        <div class="card-body left-message-card p-0">
                                            <div class="tabs css-1382m1k">

                                                    <input type="radio"
                                                            name="tab-btn"
                                                            id="tab-btn-1"
                                                            value=""
                                                            checked
                                                            class="message-checkbox d-none">
                                                    <label for="tab-btn-1" class=" me-3 d-none">
                                                        <h4 class="mb-0">uotgoing</h4>
                                                    </label>

                                                    <input type="radio"
                                                            name="tab-btn"
                                                            id="tab-btn-2"
                                                            value=""
                                                            class="message-checkbox d-none">
                                                    <label for="tab-btn-2" class=" d-none"><h4 class="mb-0">incoming</h4></label>


                                                <div id="content-1" class="mt-2 pb-0 tab-message-contant">
{{--
                                                    <p class="css-19tty9x">
                                                       {{__('Unread') }}
                                                    </p>
                                                    <div class="css-1rknqns">
                                                        <canvas width="395"
                                                               height="72"
                                                               id="canvas"
                                                               style="z-index: 2; position: absolute; pointer-events: none; inset: 0px;">
                                                        </canvas>
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
--}}
						<div id="chat_users">
	                                                    @include('messages-parts.chat-users')
						</div>
                                                </div>
                                                <div id="content-2" class="mt-2 pb-0 tab-message-contant">
                                                    <div class="d-none">
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
                                                    </div>

                                                    <div class="css-77onch">
                                                        <img width="140"
                                                             height="140"
                                                              src="/img/images/conversation.svg">
                                                        <h5 class="css-80t7fz er34gjf0">
                                                            {{__('No messages yet') }}
                                                        </h5>
                                                        <p class="css-7390gz">
                                                           {{__('Send a message and it will appear here.') }}
                                                        </p>
                                                    </div>
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
                                <div class="col-12  col-lg-8 px-0 px-md-3 d-none d-sm-block" id="chat_messages_div">
                                    <div class="css-1ua02hb  p-0 ml-0 ml-md-3">
                                        <div class=" card messages-card css-1ua02hb py-0  d-none">
                                            <div  class="css-1pmjsyo">
                                                <img width="192"
                                                    height="192"
                                                    src="/img/images/conversation.svg">
                                                    <p  class="css-ubgkfc">
                                                       {{__('Select a message to read it') }}
                                                    </p>
                                            </div>
                                        </div>
                                        <div class="card messages-card py-0">
                                                <div class="card-header messages-card-header p-0" id="chat_header">
                                                    @include('messages-parts.chat-field-header')
                                                </div>
                                                <div class="card-body card-field-massages" id="chat_messages">
                                                    @include('messages-parts.chat-field')
                                                </div>
                                                <div class="card-footer p-0 border-0">
                                                    @include('messages-parts.chat-form')
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
    </div>

</section>
@endsection

<script>
window.onresize = start;
function start(){
return;
	if (document.documentElement.clientWidth < 500) {
		$('#chat_messages_div').addClass('d-none');
		$('#chat_users_list').removeClass('d-none');
	} else {
		$('#chat_messages_div').removeClass('d-none');
		$('#chat_users_list').removeClass('d-none');
	}
}

function chat_messages_back() {
	$('#chat_messages_div').addClass('d-none');
	$('#chat_users_list').removeClass('d-none');
}

setInterval(checkChatMessages, 10000);

function getChatMessages(dialog_id) {
	if ($('#chat_messages_div').is(':hidden')) {
		$('#chat_messages_div').removeClass('d-none');
		$('#chat_users_list').addClass('d-none');
	}
/*
 else {
		$('#chat_messages_div').addClass('d-none');
		$('#chat_users_list').removeClass('d-none');
	}
*/
	Data = new FormData();
	Data.append('dialog_id', dialog_id);
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: "{{ route('getChatMessages') }}",
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
		$('#chat_header').html(data.header);
		$('#chat_messages').html(data.content);
		$('#chat_users').html(data.users);
		$('#chat_footer').removeClass('d-none');
		$(document).ready(function() {
			var block = document.getElementById("chat_messages");
			block.scrollTop = 99999;
		});
		getNotify();
            },
            error: function(data){
		console.log(data);
            }
        });
}

function getChatMessages2(dialog_id) {
	Data = new FormData();
	Data.append('dialog_id', dialog_id);
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: "{{ route('getChatMessages') }}",
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
		if (dialog_id == $('#dialog_id').val()) {
			$('#chat_header').html(data.header);
			$('#chat_messages').html(data.content);
		}
		$('#chat_users').html(data.users);
		$('#chat_footer').removeClass('d-none');
		getNotify();
            },
            error: function(data){
		console.log(data);
            }
        });
}

function setChatMessages() {
	if ($('#content_message').val() == '') return;
	post_id = $('#post_id').text();
	user_id = $('#dialog_user_id').val();
	sub_id = $('#dialog_sub_id').val();
	Data = new FormData();
	Data.append('post_id', post_id);
	Data.append('message', $('#content_message').val());
	Data.append('user_id', user_id);
	Data.append('sub_id', sub_id);
	$('#content_message').val('');
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: "{{ route('setChatMessages') }}",
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
		$('#chat_header').html(data.header);
		$('#chat_messages').html(data.content);
		$('#chat_users').html(data.users);
		$('#content_message').val('');
		$(document).ready(function() {
			var block = document.getElementById("chat_messages");
			block.scrollTop = 99999;
		});
            },
            error: function(data){
		console.log(data);
            }
        });
}

function checkChatMessages() {
	Data = new FormData();
	Data.append('dialog_id', 0);
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: "{{ route('checkChatMessages') }}",
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
		if (($('#all_count').val() != data.all_count) || ($('#state_users').val() != data.state_users)){
			$('#all_count').val(data.all_count);
			$('#state_users').val(data.state_users);
			$('#chat_users').html(data.users);
			getNotify();
			if (!$('#chat_footer').hasClass('d-none')) {
				dialog_id=$('#dialog_id').val();
				getChatMessages2(dialog_id);
			}
		}
            },
            error: function(data){
		console.log(data);
            }
        });
}

function setChatImages() {
	post_id = $('#post_id').text();
	user_id = $('#dialog_user_id').val();
	sub_id = $('#dialog_sub_id').val();
	Data = new FormData();
	Data.append('post_id', post_id);
	Data.append('message', $('#content_message').val());
	Data.append('user_id', user_id);
	Data.append('sub_id', sub_id);
	$.each($("#image-upload")[0].files,function(key, file){
		Data.append('file[]',file);
	});
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: "{{ route('setChatImages') }}",
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
		$('#chat_header').html(data.header);
		$('#chat_messages').html(data.content);
		$('#chat_users').html(data.users);
		var block = document.getElementById("chat_messages");
		block.scrollTop = 99999;
		$('#content_message').val('');
            },
            error: function(data){
		console.log(data);
            }
        });
}

</script>


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
                </div>
            </div>
        </div>
    </div>
</div> --}}
