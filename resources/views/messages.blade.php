<?php $activePage = 'messages';?>
@extends('layouts.app')

@section('content')
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
                                <div class="col-12 col-md-4">
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

                                                <div id="content-1" class="mt-2 pb-0 tab-message-contant">
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
                                                <div id="content-2" class="mt-2 pb-0 tab-message-contant">
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
                                <div class="col-12  col-md-8 px-0">
                                    <div class="card messages-card css-1ua02hb pt-0">
                                        <div class=" css-15ecjq0">
                                            <div class="css-r2eb4p">
                                                <div class="css-1pdwz19">
                                                    <div class="css-14wbffc">
                                                        <div class="css-6q6hwe">
                                                            <img src="" class="css-zm0vdp d-none">
                                                        </div>
                                                    </div>
                                                    {{-- <div size="32" class="css-57oefn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" viewBox="0 0 71 71" data-testid="user-photo-placeholder" data-cy="conversation-user-details-user-photo-placeholder" alt="User avatar" class="css-13zt7wj"><defs><path id="avatar_svg__a" d="M.029 34.9c0 19.272 15.623 34.896 34.896 34.896 19.273 0 34.896-15.624 34.896-34.897C69.821 15.627 54.198.003 34.925.003 15.652.003.03 15.627.03 34.9">
                                                            </path>
                                                            <path id="avatar_svg__c" d="M0 34.99c0 19.272 15.624 34.896 34.896 34.896 19.273 0 34.896-15.624 34.896-34.896C69.792 15.717 54.17.094 34.896.094 15.624.094 0 15.717 0 34.99z"></path></defs><g fill="none" fill-rule="evenodd"><g transform="translate(.903 .903)"><mask id="avatar_svg__b" fill="#fff"><use xlink:href="#avatar_svg__a"></use></mask><path fill="#3A77FF" d="M69.821 34.9c0 19.272-15.623 34.896-34.896 34.896C15.652 69.796.03 54.172.03 34.899.029 15.627 15.652.003 34.925.003c19.273 0 34.896 15.624 34.896 34.896" mask="url(#avatar_svg__b)"></path></g><g transform="translate(.932 .906)"><mask id="avatar_svg__d" fill="#fff"><use xlink:href="#avatar_svg__c"></use></mask><use fill="#D8DFE0" xlink:href="#avatar_svg__c"></use><path fill="#406367" d="M10.788 98.23h48.216V50.013H10.788z" mask="url(#avatar_svg__d)"></path><path fill="#EBEEEF" d="M53.436 34.896c0 10.24-8.3 18.54-18.54 18.54-10.239 0-18.54-8.3-18.54-18.54 0-10.239 8.301-18.54 18.54-18.54 10.24 0 18.54 8.301 18.54 18.54" mask="url(#avatar_svg__d)"></path><path fill="#7F9799" d="M44.812 27.96c-3.975 5.115-11.344 6.04-16.46 2.065-5.115-3.975-6.04-11.344-2.065-16.46 3.975-5.115 11.344-6.04 16.46-2.065 5.116 3.975 6.04 11.344 2.065 16.46" mask="url(#avatar_svg__d)"></path><path fill="#7F9799" d="m44.547 28.301-9.604-7.462 7.463-9.604 9.603 7.462zm-30.922-1.955a7.617 7.617 0 1 1 15.115-1.897 7.617 7.617 0 0 1-15.115 1.897" mask="url(#avatar_svg__d)"></path><path fill="#7F9799" d="m13.59 26.067 7.836-.983.983 7.836-7.836.983z" mask="url(#avatar_svg__d)"></path></g></g>
                                                        </svg>
                                                    </div> --}}
                                                    <div class="css-3rns13">
                                                        <div class="css-1povu0j">
                                                            <span data-testid="username" data-cy="conversation-user-details-username" class="css-1ryldw8 er34gjf0">
                                                                Валентина
                                                            </span>
                                                        </div>
                                                        <p data-cy="conversation-user-details-last-seen" class="css-ekdwwt er34gjf0">
                                                            <span class="css-1t0qnkx">
                                                                Онлайн в 16:07
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="css-17zqm6">
                                                        <div  class="css-11f3fck">
                                                            <span >
                                                                <div class="css-1j2m7z7" title="{{__('Save') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 20 20"
                                                                         style="height: 24px; width: 24px;">
                                                                         <g fill="none" fill-rule="evenodd">
                                                                            <path d="M0 0h20v20H0z"></path>
                                                                            <path fill="#002F34" d="M13.889 1.667c1.121 0 2.038.874 2.107 1.977l.004.134V17.5l-6.333-3.167L3.333 17.5V3.778c0-1.121.874-2.038 1.978-2.107l.133-.004h8.445zm0 1.583H5.444a.528.528 0 00-.522.45l-.005.078v11.16l4.75-2.375 4.75 2.375V3.778a.528.528 0 00-.45-.522l-.078-.006z"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </span>
                                                            <span>
                                                                <div  class="css-1j2m7z7" title="{{__('Block') }}">
                                                                    <svg width="24"
                                                                        height="24"
                                                                        viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="css-pyu9k9">
                                                                        <path d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-18C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7 13h10v-2H7v2z" fill="currentColor" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </div>
                                                            </span>
                                                            <span>
                                                                <div class="css-1j2m7z7" title="{{__('Complain') }}">
                                                                    <svg width="24"
                                                                         height="24"
                                                                         viewBox="0 0 24 24"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         class="css-pyu9k9">
                                                                         <path d="M17.421 13H5V4h12.421l-2.124 3.452-.645 1.048.645 1.049L17.421 13zm1.79-11H3v19l1 1 1-1v-6h14.211l.851-1.523L17 8.5l3.062-4.976L19.211 2z" fill="currentColor" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </div>
                                                            </span>
                                                            <span>
                                                                <div class="css-1j2m7z7" title="{{__('Add to cart') }}">
                                                                    <img src="/img/icons/delete-outline.svg">
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a  href="#" class="css-aogond">
                                                <div class="css-tdboqd">
                                                    <img src="#" class="css-ac32pf">
                                                </div>
                                                <div class="css-164dfnt">
                                                    <div class="css-miqdd3">
                                                        <p class="css-zma87s er34gjf0">
                                                            Ботинки женские зимние кожаные на меху.
                                                        </p>
                                                    </div>
                                                    <div class="css-1fulx0y">
                                                        <p class="css-opmpga er34gjf0">
                                                            1250 грн.
                                                        </p>
                                                        <p class="css-o2pjpx er34gjf0">
                                                            ID: 778556826
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
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
