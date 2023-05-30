@if (!empty($dialog))
<div class=" p-0 css-15ecjq0 ">
    <div class="css-r2eb4p">
        <div class="css-1pdwz19 d-flex flex-wrap">
            <div class="css-17zqm6 d-block d-sm-none" onclick="chat_messages_back();">
                <div  class="css-11f3fck">
                    <span >
                        <div class="css-1j2m7z7" title="{{__('Back') }}">
				<svg baseProfile="tiny" height="24px" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12,9.059V6.5c0-0.256-0.098-0.512-0.293-0.708C11.512,5.597,11.256,5.5,11,5.5s-0.512,0.097-0.707,0.292L4,12l6.293,6.207  C10.488,18.402,10.744,18.5,11,18.5s0.512-0.098,0.707-0.293S12,17.755,12,17.5v-2.489c2.75,0.068,5.755,0.566,8,3.989v-1  C20,13.367,16.5,9.557,12,9.059z"/>
				</svg>
                        </div>
                    </span>
                </div>
            </div>

            <div class="d-flex me-4 me-lg-0 my-3 my-lg-0">
                <div class="css-14wbffc">
                    <div class="css-6q6hwe">
                        <img src="{{ asset('/storage/usersphoto') }}/{{$user->id}}{{$user->logo}}" class="css-zm0vdp">
                    </div>
                </div>

                <div class="css-3rns13">
                    <div class="css-1povu0j">
                        <span data-testid="username" data-cy="conversation-user-details-username" class="css-1ryldw8 er34gjf0">
                            {{ $user->name }}
                        </span>
                    </div>
                    <p data-cy="conversation-user-details-last-seen" class="css-ekdwwt er34gjf0">
                        <span class="css-1t0qnkx">
				@if (Auth::user()->onLine($user->id))
					{{ __('Online') }}
				@else
					{{ __('Offline') }}  {{ date('d.m.Y H:i', strtotime($user->updated_at)) }}
				@endif
                        </span>
                    </p>
                </div>
            </div>

            <div class="css-17zqm6">
                <div  class="css-11f3fck">
                    <span class="d-none">
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
                    <span class="d-none">
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
                    <span class="d-none">
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
                        <div class="css-1j2m7z7" title="{{__('Clear dialog') }}">
				<a class="css-qczclw_ delete-link-icon"
					href="javascript:void(0)"
					onclick="ClearDialog({{ $dialog->id }})">
					<img src="/img/icons/delete-outline.svg">
				</a>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
                        @php
                        $img='photo/agent.jpg';
                        @endphp
                        @foreach($post->photos as $photo)
                            @if ($loop->first)
                                @php
                                    $img = $photo->img;
                                @endphp
                            @endif
                        @endforeach

    <a  href="post/{{$post->id }}" class="css-aogond">
        <div class="css-tdboqd_1">
            <img src="{{ asset('/storage/' . $img) }}" class="css-ac32pf" width="70px">
        </div>
        <div class="css-164dfnt">
            <div class="css-miqdd3">
                <p class="css-zma87s er34gjf0">
                  {{ $post->title }}
                </p>
            </div>
            <div class="css-1fulx0y">
                <p class="css-opmpga er34gjf0">
                    {{ $post->address }}
                </p>
                <p class="css-o2pjpx er34gjf0 d-none">
                    ID: <span id="post_id">{{ $post->id }}</span>
                </p>
            </div>
        </div>
    </a>
</div>
@endif
