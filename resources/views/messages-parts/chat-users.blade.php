                                                    <ul class="css-1ks0ui5">
                                                    @foreach($out as $out_dialog)
                                                        <div class="css-1o8agjl">
                                                            <a class="css-1b3tih6" href="#" onclick="getChatMessages({{ $out_dialog->id }})">
                                                                <div class="css-14wbffc">
                                                                    <div class="css-6q6hwe">
                                                                        <img src="{{ asset('/storage/usersphoto') }}/{{$out_dialog->avatar }}" class="css-zm0vdp">
                                                                    </div>
							@if ($out_dialog->online)
                                                                    <div class="css-6q6hwe-after"></div>
							@endif

                                                                </div>
                                                        @foreach($out_dialog->messages as $outmessage)
							@if ($loop->last)
                                                                <div class="css-1v35hpt">
                                                                    <div class="css-miqdd3">
                                                                        <p class="css-8sr34w er34gjf0">
										{{ $out_dialog->user_name }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="css-miqdd3">
                                                                        <p class="css-1ne2gb9 er34gjf0">
									@if (substr($outmessage->message,0,7) == '[image]')
							                        {{ __('image') }}
									@else
							                        {{ $outmessage->message }}
									@endif
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="css-17jarbz">
                                                                    <p class="css-1gdtsar">
									@if (date('d.m.Y') == date('d.m.Y',strtotime($outmessage->created_at)))
	                                                                        {{ date('H:i',strtotime($outmessage->created_at)) }}
									@elseif (date('Y') == date('Y',strtotime($outmessage->created_at)))
                                                                        	{{ date('d.m',strtotime($outmessage->created_at)) }}
									@else
	                                                                        {{ date('d.m.Y',strtotime($outmessage->created_at)) }}
									@endif
                                                                    </p>
								@if ($out_dialog->count > 0)
									<div class="notification-container">
									  <span class="notification-container__text">{{ $out_dialog->count }}</span>
									</div>
								@endif

                                                                    <button class="css-35mg35 d-none">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             viewBox="0 0 20 20" style="height: 20px; width: 20px;">
                                                                             <g fill="none" fill-rule="evenodd">
                                                                                <path d="M0 0h20v20H0z"></path>
                                                                                <path fill="#7F9799" d="M13.889 1.667c1.121 0 2.038.874 2.107 1.977l.004.134V17.5l-6.333-3.167L3.333 17.5V3.778c0-1.121.874-2.038 1.978-2.107l.133-.004h8.445zm0 1.583H5.444a.528.528 0 00-.522.45l-.005.078v11.16l4.75-2.375 4.75 2.375V3.778a.528.528 0 00-.45-.522l-.078-.006z"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </button>
                                                                </div>
							@endif
                                                        @endforeach

                                                            </a>
							<div>
							    <a  href="post/{{$out_dialog->post_id }}" class="css-aogond">
							        <div class="css-tdboqd_1">
							            <img src="{{ asset('/storage/' . $out_dialog->img) }}" class="css-ac32pf" width="70px">
							        </div>
							        <div class="css-164dfnt">
							        <div class="css-1fulx0y">
							                <p class="css-opmpga er34gjf0">
							                    {{ $out_dialog->address }}
							                </p>
						                </div>
							        </div>
							    </a>
						        </div>

                                                        </div>
                                                    @endforeach
						    </ul>