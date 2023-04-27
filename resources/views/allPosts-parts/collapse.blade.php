<div class="container pt-2 pt-sm-4 pt-md-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-sm-flex align-items-center mb-3">
{{--
                <div class="css-1s5g128 d-none d-lg-flex align-items-center">
                    <h3 class="css-zicw0b me-1">
                        {{__('Browser notifications')}}
                    </h3>
                    <span class="css-1pnqrd4">
                        <span role="button" class="css-12mkfdx toooltip-collapse-p">
                            <svg aria-hidden="true"
                                    focusable="false"
                                    data-prefix="far"
                                    data-icon="question-circle"
                                    class="svg-inline--fa fa-question-circle fa-w-20 "
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    width="14"
                                    height="14">
                                    <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path>
                            </svg>
                            <span class="tooltiptext">
                                {{__('You will receive a notification in your browser when ads matching your query appear on the site ...') }}
                             </span>
                        </span>
                    </span>
                    <span class="css-1dzcrn ms-4">
                        <span>
                            <label aria-label="{{__('Browser notifications')}}"
                                    class="switch"
                                    for="push-toggle-filters">
                                    <input id="push-toggle-filters"
                                    type="checkbox"
                                    class="css-oue65e">
                                    <span class="slider round"></span>
                            </label>
                        </span>
                    </span>
                </div>
--}}
                <span class="css-coptwa ms-md-auto ps-3 ps-sm-0">
        @auth
		@if (!Auth::user()->saved_search)
                    <span class="d-flex align-items-center">
                        <button  class="css-1319u8e" type="button" onclick="setSavedFilter()">
                            <svg aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="bell"
                                class="svg-inline--fa fa-bell fa-w-14 css-4bd2r9 me-2"
                                role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"
                                width="12"
                                height="14">
                                <path fill="currentColor" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
                            </svg>
                            <font style="vertical-align: inherit;">
                                {{__('Save Search')}}
                            </font>
                        </button>
                        <span class="css-1arsofx ms-1 d-none d-sm-block">
                            <span class="css-12mkfdx toooltip-collapse-p" role="button">
                                <svg aria-hidden="true"
                                     focusable="false"
                                     data-prefix="far"
                                     data-icon="question-circle"
                                     class="svg-inline--fa fa-question-circle fa-w-20 "
                                     role="img"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512"
                                     width="14"
                                     height="14">
                                    <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path>
                                </svg>
                                <span class="tooltiptext">
                                    {{__('Ads that match your saved request will be available in your account. in addition, you will receive instant notifications to your email address when an ad matching your criteria appears.') }}
                                 </span>
                            </span>
                        </span>
                    </span>
		@endif
        @endauth
                </span>

                <button id="search-form-more-filters"
                        data-bs-toggle="collapse"
                        class="btn css-1ppg2fq mt-3 mt-sm-0 ms-sm-3"
                        data-bs-target="#collapsePostsFilters"
                        type="button"
                        aria-expanded="false"
                        aria-controls="collapsePostsFilters">
                    <font class="me-3" style="vertical-align: inherit;">
                       {{__('Additional filters')}}
                    </font>
                    <div class="chevron-btn">
                        <svg aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="chevron-down"
                                class="svg-inline--fa fa-chevron-down fa-w-14 fa-xs "
                                role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                        </svg>
                    </div>
                </button>
            </div>

            <div class="collapse p-md-3" id="collapsePostsFilters">
                <div class="card card-body card-filters-collapse">
                    <div class="row d-flex justify-content-between">
{{--
            <div class="col-12 col-sm-2">
                <label>{{__('time on freebe')}}</label>
                <fieldset>
                    <div>
                        <input type="radio" id="all_days" name="days" value="" checked>
                        <label for="all_days">{{__('show all')}}</label>
                    </div>
                    <div>
                        <input type="radio" id="today" name="days" value="today" >
                        <label for="today">{{__('today')}}</label>
                    </div>
                    <div>
                        <input type="radio" id="3_day" name="days" value="3">
                        <label for="3_day">{{__('3 days ago')}}</label>
                    </div>
                    <div>
                        <input type="radio" id="5_day" name="days" value="5">
                        <label for="5_day">{{__('5 days ago')}}</label>
                    </div>
                    <div>
                        <input type="radio" id="10_day" name="days" value="10">
                        <label for="10_day">{{__('10 days ago')}}</label>
                    </div>
                    <div>
                        <input type="radio" id="30_day" name="days" value="30">
                        <label for="30_day">{{__('30 days ago')}}</label>
                    </div>
                </fieldset>
            </div>
--}}
            <div class="form-group mb-2">
                <label for="address">{{ __('address') }}</label>
                <input type="text"
                        name="address"
                        placeholder="address"
                        id="address"
                        class="form-control map-input mb-2"
                        value="{{ $request->address ?? old('address') }}" >
                    <input type="hidden" name="address_latitude" id="address-latitude" value="{{ $request->address_latitude ?? old('address_latitude') }}" />
                    <input type="hidden" name="address_longitude" id="address-longitude" value="{{ $request->address_longitude ?? old('address_longitude') }}" />
            </div>
            <div id="address-map-container" style="width:100%;height:200px;" class="d-none">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>

			<div class="row pt-2">
        <div class="col-sm-6 pe-sm-2">
                <label for="">{{__('type announcement') }}</label>
            <div class="form-group mb-2 chevron-field">
                <select class="form-control" name="type_announcement">
                            <option value="0">{{ __('show all') }}</option>
	                @foreach($announcements as $announcement)
				<option value="{{ $announcement->id }}" {{ (($request->type_announcement ?? old('type_announcement'))==$announcement->id?"selected":"") }}>{{ __("$announcement->title") }}</option>
	                @endforeach
		</select>
                <div class="chevron-icon">
                    <svg aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="chevron-down"
                            class="svg-inline--fa fa-chevron-down fa-w-14 fa-xs "
                            role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path fill="#292929" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                    </svg>
                </div>
            </div>
	</div>
        <div class="col-sm-6 ps-sm-2">
                <label for="">{{__('category') }}</label>
            <div class="form-group mb-2 chevron-field">
                <select class="form-control" name="sale">
                            <option value="0">{{ __('show all') }}</option>
	                @foreach($sales as $sale)
				<option value="{{ $sale->id }}">{{ __("$sale->title") }}</option>
	                @endforeach
                </select>
                <div class="chevron-icon">
                    <svg aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="chevron-down"
                            class="svg-inline--fa fa-chevron-down fa-w-14 fa-xs "
                            role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path fill="#292929" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                    </svg>
                </div>
            </div>
	</div>
			</div>
			<div class="row pt-2">
                    <div class="form-group col-sm-4">
                        <label for="rooms">{{ __('number of rooms') }}</label>
                        <select name="rooms" id="rooms" class="form-control">
                            <option value="0" {{ (($request->rooms ?? old('rooms'))==0?"selected":"") }}>{{ __('show all') }}</option>
                            <option value="1" {{ (($request->rooms ?? old('rooms'))==1?"selected":"") }}>1</option>
                            <option value="2" {{ (($request->rooms ?? old('rooms'))==2?"selected":"") }}>2</option>
                            <option value="3" {{ (($request->rooms ?? old('rooms'))==3?"selected":"") }}>3</option>
                            <option value="4" {{ (($request->rooms ?? old('rooms'))==4?"selected":"") }}>4</option>
                            <option value="5" {{ (($request->rooms ?? old('rooms'))==5?"selected":"") }}>5</option>
                            <option value="6" {{ (($request->rooms ?? old('rooms'))==6?"selected":"") }}>6</option>
                            <option value="7" {{ (($request->rooms ?? old('rooms'))==7?"selected":"") }}>7</option>
                            <option value="8" {{ (($request->rooms ?? old('rooms'))==8?"selected":"") }}>8</option>
                            <option value="9" {{ (($request->rooms ?? old('rooms'))==9?"selected":"") }}>9</option>
                            <option value="10" {{ (($request->rooms ?? old('rooms'))==10?"selected":"") }}>10</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="rooms">{{ __('square') }}</label>
                        <select name="square" id="square" class="form-control">
                            <option value="0" {{ (($request->square ?? old('square'))==0?"selected":"") }}>{{ __('show all') }}</option>
                            <option value="50" {{ (($request->square ?? old('square'))==50?"selected":"") }}>{{__('50 м² and more')}}</option>
                            <option value="75" {{ (($request->square ?? old('square'))==75?"selected":"") }}>{{__('75 м² and more')}}</option>
                            <option value="100" {{ (($request->square ?? old('square'))==100?"selected":"") }}>{{__('100 м² and more')}}</option>
                            <option value="150" {{ (($request->square ?? old('square'))==150?"selected":"") }}>{{__('150 м² and more')}}</option>
                            <option value="200" {{ (($request->square ?? old('square'))==200?"selected":"") }}>{{__('200 м² and more')}}</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="bedrooms">{{ __('number of bedrooms') }}</label>
                        <select name="bedrooms" id="bedrooms" class="form-control" value="{{ $request->bedrooms ?? old('bedrooms') }}">
                            <option value="0" {{ (($request->bedrooms ?? old('bedrooms'))==0?"selected":"") }}>{{ __('show all') }}</option>
                            <option value="1" {{ (($request->bedrooms ?? old('bedrooms'))==1?"selected":"") }}>1</option>
                            <option value="2" {{ (($request->bedrooms ?? old('bedrooms'))==2?"selected":"") }}>2</option>
                            <option value="3" {{ (($request->bedrooms ?? old('bedrooms'))==3?"selected":"") }}>3</option>
                            <option value="4" {{ (($request->bedrooms ?? old('bedrooms'))==4?"selected":"") }}>4</option>
                            <option value="5" {{ (($request->bedrooms ?? old('bedrooms'))==5?"selected":"") }}>5</option>
                            <option value="6" {{ (($request->bedrooms ?? old('bedrooms'))==6?"selected":"") }}>6</option>
                            <option value="7" {{ (($request->bedrooms ?? old('bedrooms'))==7?"selected":"") }}>7</option>
                            <option value="8" {{ (($request->bedrooms ?? old('bedrooms'))==8?"selected":"") }}>8</option>
                            <option value="9" {{ (($request->bedrooms ?? old('bedrooms'))==9?"selected":"") }}>9</option>
                            <option value="10" {{ (($request->bedrooms ?? old('bedrooms'))==10?"selected":"") }}>10</option>
                        </select>
                    </div>
			</div>

			<div class="row pt-2">
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">{{ __('Type of construction') }}</label>
						<select class="form-control" name="construction">
							<option value="0">{{ __('show all') }}</option>
			                                    @foreach($constructions as $construction)
			                                        <option {{ (($request->construction ?? old('construction'))==$construction->id?"selected":"") }} value="{{ $construction->id }}">{{ __("$construction->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Floor') }}</label>
						<select class="form-control" name="floor">
							<option value="0">{{ __('show all') }}</option>
			                                    @foreach($floors as $floor)
			                                        <option {{ (($request->floor ?? old('floor'))==$floor->id?"selected":"") }} value="{{ $floor->id }}">{{ __("$floor->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Number of floors') }}</label>
						<input type="text" class="form-control" name="floors" value="{{ $request->floors ?? old('floors') }}">
					</div>
				</div>
			</div>
			<div class="row pt-2">
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Building material') }}</label>
						<select class="form-control" name="material">
							<option value="0">{{ __('show all') }}</option>
			                                    @foreach($materials as $material)
			                                        <option {{ (($request->material ?? old('material'))==$material->id?"selected":"") }} value="{{ $material->id }}">{{ __("$material->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Windows') }}</label>
						<select class="form-control" name="windows">
							<option value="0">{{ __('show all') }}</option>
			                                    @foreach($windows as $window)
			                                        <option {{ (($request->windows ?? old('windows'))==$window->id?"selected":"") }} value="{{ $window->id }}">{{ __("$window->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Heating') }}</label>
						<select class="form-control" name="heating">
							<option value="0">{{ __('show all') }}</option>
			                                    @foreach($heatings as $heating)
			                                        <option {{ (($request->heating ?? old('heating'))==$heating->id?"selected":"") }} value="{{ $heating->id }}">{{ __("$heating->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="row pt-2">
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Year of construction') }}</label>
						<input type="text" class="form-control" name="year_construction" value="{{ $request->year_construction ?? old('year_construction') }}">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Finish condition') }}</label>
						<select class="form-control" name="finish_condition">
							<option value="0">{{ __('show all') }}</option>
			                                    @foreach($finish_conditions as $finish_condition)
			                                        <option {{ (($request->finish_condition ?? old('finish_condition'))==$finish_condition->id?"selected":"") }} value="{{ $finish_condition->id }}">{{ __("$finish_condition->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
			</div>

			<div class="form-group form-group-checkboxes">
				<h4 class="pt-2">{{ __('Media') }}</h4><hr>
				<div class="row ">
                               <div class="col-sm-4 mb-2">
                                   <input name="internet" id="internet" type="checkbox" {{ (($post->internet ?? old('internet'))==1?"checked":"") }} value="1">
                                   <label for="internet"> {{ __('internet') }}</label>
                               </div>
                               <div class="col-sm-4 mb-2">
                                   <input name="cable_tv" id="cable_tv" type="checkbox" {{ (($post->cable_tv ?? old('cable_tv'))==1?"checked":"") }} value="1">
                                   <label for="cable_tv"> {{ __('cable TV') }}</label>
                               </div>
                               <div class="col-sm-4 mb-2">
                                   <input name="telephone" id="telephone" type="checkbox" {{ (($post->telephone ?? old('telephone'))==1?"checked":"") }} value="1">
                                   <label for="telephone"> {{ __('telephone') }}</label>
                               </div>
				</div>			
			</div>

			<div class="form-group form-group-checkboxes">
				<h4 class="pt-2">{{ __('Security') }}</h4><hr>
				<div class="row">
                                <div class="col-sm-4 mb-2">
                                    <input name="anti_burglary_blinds" id="anti_burglary_blinds" type="checkbox" {{ (($post->anti_burglary_blinds ?? old('anti_burglary_blinds'))==1?"checked":"") }} value="1">
                                    <label for="anti_burglary_blinds">{{ __('anti-burglary blinds') }}</label>
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <input name="anti_burglary_door" id="anti_burglary_door" type="checkbox" {{ (($post->anti_burglary_door ?? old('anti_burglary_door'))==1?"checked":"") }} value="1">
                                    <label for="anti_burglary_door"> {{ __('anti-burglary doors / windows') }}</label>
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <input name="intercom_videophone" id="ntercom_videophone" type="checkbox" {{ (($post->intercom_videophone ?? old('intercom_videophone'))==1?"checked":"") }} value="1">
                                    <label for="ntercom_videophone"> {{ __('intercom / videophone') }}</label>
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <input name="monitoring_protection" id="monitoring_protection" type="checkbox" {{ (($post->monitoring_protection ?? old('monitoring_protection'))==1?"checked":"") }} value="1">
                                    <label for="monitoring_protection">{{ __('monitoring / protection') }}</label>
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <input name="alarm_system" id="alarm_system" type="checkbox" {{ (($post->alarm_system ?? old('alarm_system'))==1?"checked":"") }} value="1">
                                    <label for="alarm_system"> {{ __('alarm system') }}</label>
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <input name="closed_area" id="closed_area" type="checkbox" {{ (($post->closed_area ?? old('closed_area'))==1?"checked":"") }} value="1">
                                    <label for="closed_area"> {{ __('closed area') }}</label>
                                </div>
				</div>
			</div>

			<div class="form-group form-group-checkboxes">
			<h4 class="pt-2">{{ __('Equipment') }}</h4><hr>
				<div class="row ">
					<div class="col-sm-4">
						<input name="furniture" type="checkbox" {{ (($request->furniture ?? old('furniture'))==1?"checked":"") }} id="checkbox-equipment_types-furniture" value="1">
						<label for="checkbox-equipment_types-furniture">{{ __('furniture') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="washing_machine" type="checkbox" {{ (($request->washing_machine ?? old('washing_machine'))==1?"checked":"") }} id="checkbox-equipment_types-washing_machine" value="1">
						<label for="checkbox-equipment_types-washing_machine">{{ __('washing machine') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="dishwasher" type="checkbox" {{ (($request->dishwasher ?? old('dishwasher'))==1?"checked":"") }} id="checkbox-equipment_types-dishwasher" value="1">
						<label for="checkbox-equipment_types-dishwasher">{{ __('dishwasher') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="refrigerator" type="checkbox" {{ (($request->refrigerator ?? old('refrigerator'))==1?"checked":"") }} id="checkbox-equipment_types-fridge" value="1">
						<label for="checkbox-equipment_types-fridge">{{ __('refrigerator') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="stove" type="checkbox" {{ (($request->stove ?? old('stove'))==1?"checked":"") }} id="checkbox-equipment_types-stove" value="1">
						<label for="checkbox-equipment_types-stove">{{ __('stove') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="oven" type="checkbox" {{ (($request->oven ?? old('oven'))==1?"checked":"") }} id="checkbox-equipment_types-oven" value="1">
						<label for="checkbox-equipment_types-oven">{{ __('oven') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="tv_set" type="checkbox" {{ (($request->tv_set ?? old('tv_set'))==1?"checked":"") }} id="checkbox-equipment_types-tv" value="1">
						<label for="checkbox-equipment_types-tv">{{ __('TV set') }}</label>
					</div>
				</div>
			</div>
	
			<div class="form-group form-group-checkboxes">
			<h4 class="pt-2">{{ __('Additional information') }}</h4><hr>
				<div class="row ">
                            <div class="col-sm-4">
                                <input type="checkbox" id="garage" name="garage" {{ (($request->garage ?? old('garage'))==1?"checked":"") }} value="1">
                                <label for="garage">{{ __('garage') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="balcony" name="balcony" {{ (($request->balcony ?? old('balcony'))==1?"checked":"") }} value="1">
                                <label for="balcony">{{ __('balcony') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="terrace" name="terrace" {{ (($request->terrace ?? old('terrace'))==1?"checked":"") }} value="1">
                                <label for="terrace">{{ __('terrace') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="garden" name="garden" {{ (($request->garden ?? old('garden'))==1?"checked":"") }} value="1">
                                <label for="garden">{{ __('garden') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="room_utilitarian" name="room_utilitarian" {{ (($request->room_utilitarian ?? old('room_utilitarian'))==1?"checked":"") }} value="1">
                                <label for="room_utilitarian">{{ __('room utilitarian') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="two_level" name="two_level" {{ (($request->two_level ?? old('two_level'))==1?"checked":"") }} value="1">
                                <label for="two_level">{{ __('two level') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="separate_kitchen" name="separate_kitchen" {{ (($request->separate_kitchen ?? old('separate_kitchen'))==1?"checked":"") }} value="1">
                                <label for="separate_kitchen">{{ __('separate kitchen') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="only_for_non_smokers" name="only_for_non_smokers" {{ (($request->only_for_non_smokers ?? old('only_for_non_smokers'))==1?"checked":"") }} value="1">
                                <label for="only_for_non_smokers">{{ __('only for non smokers') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="air_conditioning" name="air_conditioning" {{ (($request->air_conditioning ?? old('air_conditioning'))==1?"checked":"") }} value="1">
                                <label for="air_conditioning">{{ __('air conditioning') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="elevator" name="elevator" {{ (($request->elevator ?? old('elevator'))==1?"checked":"") }} value="1">
                                <label for="elevator">{{ __('elevator') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="basement" name="basement" {{ (($request->basement ?? old('basement'))==1?"checked":"") }} value="1">
                                <label for="basement">{{ __('basement') }}</label>
                            </div>
				</div>
			</div>

                        <button type="submit" class="btn btn-primary">{{__('Apply')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function setSavedFilter() {
	var formData = new FormData(all_posts);
	var obj = {};
	for (var key of formData.keys()) {
		obj[key] = formData.get(key);
	}
	form_data = new FormData();
	form_data.append('filter',JSON.stringify(obj));
	console.log(obj);
            $.ajax({
                url:"{{ route('setSavedSearch') }}",
                method: 'post',
                data: form_data,
		headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	        processData: false,
	        contentType: false,
                success:function(data)
                {
			toastr.success('', "{{ __('Filter saved') }}");
			window.location.reload();
                },
                error: function(data){
		            console.log(data);
                }
            });

}
</script>