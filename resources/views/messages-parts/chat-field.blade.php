@if (!empty($dialog))
<input type="hidden" id="dialog_id" value="{{ $dialog->id }}">
<input type="hidden" id="dialog_user_id" value="{{ $dialog->user_id }}">
<input type="hidden" id="dialog_sub_id" value="{{ $dialog->sub_id }}">
<ul class="css-1wq2uf9">
@php $date = ''; @endphp
@foreach($dialog->messages as $message)
    <li class="css-zt18dv">
	@if ($date != date('Ymd', strtotime($message->updated_at)))
        <header class="css-rib2pn">
            {{ date('d.m.Y', strtotime($message->updated_at)) }}
        </header>
	@php $date=date('Ymd', strtotime($message->updated_at)); @endphp
	@endif
	@if (Auth::user()->id == $message->user_id)
        <div class="css-1ub42cm">
            <div class="css-vxyeac">
                <div class="css-eehlqd">
                    <div class="css-19jk2fi">
                        <span class="css-1s6fcle">
			@if (substr($message->message,0,7) == '[image]')
				<div class="carousel slide" data-bs-ride="carousel">
				        <div class="carousel-inner">
				                <a target="_blank" href="{{ asset('/storage') }}/{{substr($message->message,7)}}" data-fancybox="gallery">
				                        <img src="{{ asset('/storage') }}/{{substr($message->message,7)}}" class="img-fluid" width="100px" height="70px">
						</a>
					</div>
				</div>	
			@else
                            {{ $message->message }}
			@endif
                        </span>
			@if ($message->read == 0) @php $gray="_gray"; @endphp @else @php $gray=""; @endphp @endif
                        <div class="css-1r88efg">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24"
                                 width="1em"
                                 height="1em"
                                 data-testid="sentChatIcon-READ"
                                 class="css-16hg7x2{{$gray}}">
                                 <path fill="currentColor" fill-rule="evenodd" d="m21.586 5-1.271 1.3-9.316 9.53-1.585-1.622 6.315-6.461L17 6.447V5h-1.415l-1.27 1.3L5 15.83l-1.315-1.345-1.271-1.3H1v1.446l1.27 1.3L4.293 18h1.414L8 15.655 10.293 18h1.414L21.729 7.747 23 6.447V5z"></path>
                            </svg>
                        </div>
{{--
					<div class="">
						<a class="css-qczclw-chat edit-link-icon mb-1"
							href="#"
							onclick=""
							title="<?php echo e(__('Edit')); ?>">
							<img src="/img/icons/edit-square-outline.svg" width="15px" height="15px">
						</a>
						<a class="css-qczclw_ delete-link-icon"
							href="#"
							onclick=""
							title="<?php echo e(__('Delete')); ?>">
							<img src="/img/icons/delete-outline.svg" width="15px" height="15px">
						</a>
					</div>
--}}
                    </div>
                    <div class="css-1flzrap">
                    </div>
                </div>
                <p class="css-1vxpd9w">
                    <span class="css-s86lqd">
                        <span>
                            {{ date('H:i', strtotime($message->updated_at)) }}
			</span>
                    </span>
                </p>
            </div>
        </div>
	@else
        <div class="css-13thiek">
            <div class="css-h4z0cl">
                <div class="css-16vxik6">
                    <div class="css-19jk2fi">
                        <span class="css-1s6fcle" onclick="clickOnMessage(event, {{ $message->id }});">
			@if (substr($message->message,0,7) == '[image]')
				<div class="carousel slide" data-bs-ride="carousel">
				        <div class="carousel-inner">
				                <a target="_blank" href="{{ asset('/storage') }}/{{substr($message->message,7)}}" data-fancybox="gallery">
				                        <img src="{{ asset('/storage') }}/{{substr($message->message,7)}}" class="img-fluid" width="100px" height="70px">
						</a>
					</div>
				</div>	
			@else
                            {{ $message->message }}
			@endif
                        </span>
                    </div>
                    <div class="css-1j5stzj">
                    </div>
                </div>
                <p class="css-1y7b626">
                    <span class="css-tuvzu0">
                            {{ date('H:i', strtotime($message->updated_at)) }}
                    </span>
                </p>
            </div>
        </div>
	@endif
    </li>
@endforeach
</ul>
@endif