<div class="collapse p-md-3" id="collapsePrivatePostsFilters">
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
			<div class="row pt-2">
                    <div class="form-group col-sm-4">
                        <label for="rooms">{{ __('number of rooms') }}</label>
                        <select name="rooms" id="rooms" class="form-control">
                            <option value="0" {{ (($post->rooms ?? old('rooms'))==0?"selected":"") }}>{{ __('show all') }}</option>
                            <option value="1" {{ (($post->rooms ?? old('rooms'))==1?"selected":"") }}>1</option>
                            <option value="2" {{ (($post->rooms ?? old('rooms'))==2?"selected":"") }}>2</option>
                            <option value="3" {{ (($post->rooms ?? old('rooms'))==3?"selected":"") }}>3</option>
                            <option value="4" {{ (($post->rooms ?? old('rooms'))==4?"selected":"") }}>4</option>
                            <option value="5" {{ (($post->rooms ?? old('rooms'))==5?"selected":"") }}>5</option>
                            <option value="6" {{ (($post->rooms ?? old('rooms'))==6?"selected":"") }}>6</option>
                            <option value="7" {{ (($post->rooms ?? old('rooms'))==7?"selected":"") }}>7</option>
                            <option value="8" {{ (($post->rooms ?? old('rooms'))==8?"selected":"") }}>8</option>
                            <option value="9" {{ (($post->rooms ?? old('rooms'))==9?"selected":"") }}>9</option>
                            <option value="10" {{ (($post->rooms ?? old('rooms'))==10?"selected":"") }}>10</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="rooms">{{ __('square') }}</label>
                        <select name="square" id="square" class="form-control">
                            <option value="0" {{ (($post->square ?? old('square'))==0?"selected":"") }}>{{ __('show all') }}</option>
                            <option value="50" {{ (($post->square ?? old('square'))==50?"selected":"") }}>{{__('50 м² and more')}}</option>
                            <option value="75" {{ (($post->square ?? old('square'))==75?"selected":"") }}>{{__('75 м² and more')}}</option>
                            <option value="100" {{ (($post->square ?? old('square'))==100?"selected":"") }}>{{__('100 м² and more')}}</option>
                            <option value="150" {{ (($post->square ?? old('square'))==150?"selected":"") }}>{{__('150 м² and more')}}</option>
                            <option value="200" {{ (($post->square ?? old('square'))==200?"selected":"") }}>{{__('200 м² and more')}}</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="bedrooms">{{ __('number of bedrooms') }}</label>
                        <select name="bedrooms" id="bedrooms" class="form-control" value="{{ $post->bedrooms ?? old('bedrooms') }}">
                            <option value="0" {{ (($post->bedrooms ?? old('bedrooms'))==0?"selected":"") }}>{{ __('show all') }}</option>
                            <option value="1" {{ (($post->bedrooms ?? old('bedrooms'))==1?"selected":"") }}>1</option>
                            <option value="2" {{ (($post->bedrooms ?? old('bedrooms'))==2?"selected":"") }}>2</option>
                            <option value="3" {{ (($post->bedrooms ?? old('bedrooms'))==3?"selected":"") }}>3</option>
                            <option value="4" {{ (($post->bedrooms ?? old('bedrooms'))==4?"selected":"") }}>4</option>
                            <option value="5" {{ (($post->bedrooms ?? old('bedrooms'))==5?"selected":"") }}>5</option>
                            <option value="6" {{ (($post->bedrooms ?? old('bedrooms'))==6?"selected":"") }}>6</option>
                            <option value="7" {{ (($post->bedrooms ?? old('bedrooms'))==7?"selected":"") }}>7</option>
                            <option value="8" {{ (($post->bedrooms ?? old('bedrooms'))==8?"selected":"") }}>8</option>
                            <option value="9" {{ (($post->bedrooms ?? old('bedrooms'))==9?"selected":"") }}>9</option>
                            <option value="10" {{ (($post->bedrooms ?? old('bedrooms'))==10?"selected":"") }}>10</option>
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
			                                        <option {{ (($post->construction ?? old('construction'))==$construction->id?"selected":"") }} value="{{ $construction->id }}">{{ __("$construction->title") }}</option>
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
			                                        <option {{ (($post->floor ?? old('floor'))==$floor->id?"selected":"") }} value="{{ $floor->id }}">{{ __("$floor->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Number of floors') }}</label>
						<input type="text" class="form-control" name="floors" value="{{ $post->floors ?? old('floors') }}">
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
			                                        <option {{ (($post->material ?? old('material'))==$material->id?"selected":"") }} value="{{ $material->id }}">{{ __("$material->title") }}</option>
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
			                                        <option {{ (($post->windows ?? old('windows'))==$window->id?"selected":"") }} value="{{ $window->id }}">{{ __("$window->title") }}</option>
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
			                                        <option {{ (($post->heating ?? old('heating'))==$heating->id?"selected":"") }} value="{{ $heating->id }}">{{ __("$heating->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="row pt-2">
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Year of construction') }}</label>
						<input type="text" class="form-control" name="year_construction" value="{{ $post->year_construction ?? old('year_construction') }}">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Finish condition') }}</label>
						<select class="form-control" name="finish_condition">
							<option value="0">{{ __('show all') }}</option>
			                                    @foreach($finish_conditions as $finish_condition)
			                                        <option {{ (($post->finish_condition ?? old('finish_condition'))==$finish_condition->id?"selected":"") }} value="{{ $finish_condition->id }}">{{ __("$finish_condition->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
			</div>

			<div class="form-group form-group-checkboxes">
				<h4 class="pt-2">{{ __('Media') }}</h4><hr>
				<div class="row ">
					<div class="col-sm-4">
						<label><input name="internet" type="checkbox" {{ (($post->internet ?? old('internet'))==1?"checked":"") }} value="1"> {{ __('internet') }}</label>
					</div>
					<div class="col-sm-4">
						<label><input name="cable_tv" type="checkbox" {{ (($post->cable_tv ?? old('cable_tv'))==1?"checked":"") }} value="1"> {{ __('cable TV') }}</label>
					</div>
					<div class="col-sm-4">
						<label><input name="telephone" type="checkbox" {{ (($post->telephone ?? old('telephone'))==1?"checked":"") }} value="1"> {{ __('telephone') }}</label>
					</div>
				</div>			
			</div>

			<div class="form-group form-group-checkboxes">
				<h4 class="pt-2">{{ __('Security') }}</h4><hr>
				<div class="row">
					<div class="col-sm-4">
						<label><input name="anti_burglary_blinds" type="checkbox" {{ (($post->anti_burglary_blinds ?? old('anti_burglary_blinds'))==1?"checked":"") }} value="1"> {{ __('anti-burglary blinds') }}</label>
					</div>
					<div class="col-sm-4">
						<label><input name="anti_burglary_door" type="checkbox" {{ (($post->anti_burglary_door ?? old('anti_burglary_door'))==1?"checked":"") }} value="1"> {{ __('anti-burglary doors / windows') }}</label>
					</div>
					<div class="col-sm-4">
						<label><input name="intercom_videophone" type="checkbox" {{ (($post->intercom_videophone ?? old('intercom_videophone'))==1?"checked":"") }} value="1"> {{ __('intercom / videophone') }}</label>
					</div>
					<div class="col-sm-4">
						<label><input name="monitoring_protection" type="checkbox" {{ (($post->monitoring_protection ?? old('monitoring_protection'))==1?"checked":"") }} value="1"> {{ __('monitoring / protection') }}</label>
					</div>
					<div class="col-sm-4">
						<label><input name="alarm_system" type="checkbox" {{ (($post->alarm_system ?? old('alarm_system'))==1?"checked":"") }} value="1"> {{ __('alarm system') }}</label>
					</div>
					<div class="col-sm-4">
						<label><input name="closed_area" type="checkbox" {{ (($post->closed_area ?? old('closed_area'))==1?"checked":"") }} value="1"> {{ __('closed area') }}</label>
					</div>
				</div>
			</div>

			<div class="form-group form-group-checkboxes">
			<h4 class="pt-2">{{ __('Equipment') }}</h4><hr>
				<div class="row ">
					<div class="col-sm-4">
						<input name="furniture" type="checkbox" {{ (($post->furniture ?? old('furniture'))==1?"checked":"") }} id="checkbox-equipment_types-furniture" value="1">
						<label for="checkbox-equipment_types-furniture">{{ __('furniture') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="washing_machine" type="checkbox" {{ (($post->washing_machine ?? old('washing_machine'))==1?"checked":"") }} id="checkbox-equipment_types-washing_machine" value="1">
						<label for="checkbox-equipment_types-washing_machine">{{ __('washing machine') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="dishwasher" type="checkbox" {{ (($post->dishwasher ?? old('dishwasher'))==1?"checked":"") }} id="checkbox-equipment_types-dishwasher" value="1">
						<label for="checkbox-equipment_types-dishwasher">{{ __('dishwasher') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="refrigerator" type="checkbox" {{ (($post->refrigerator ?? old('refrigerator'))==1?"checked":"") }} id="checkbox-equipment_types-fridge" value="1">
						<label for="checkbox-equipment_types-fridge">{{ __('refrigerator') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="stove" type="checkbox" {{ (($post->stove ?? old('stove'))==1?"checked":"") }} id="checkbox-equipment_types-stove" value="1">
						<label for="checkbox-equipment_types-stove">{{ __('stove') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="oven" type="checkbox" {{ (($post->oven ?? old('oven'))==1?"checked":"") }} id="checkbox-equipment_types-oven" value="1">
						<label for="checkbox-equipment_types-oven">{{ __('oven') }}</label>
					</div>
					<div class="col-sm-4">
						<input name="tv_set" type="checkbox" {{ (($post->tv_set ?? old('tv_set'))==1?"checked":"") }} id="checkbox-equipment_types-tv" value="1">
						<label for="checkbox-equipment_types-tv">{{ __('TV set') }}</label>
					</div>
				</div>
			</div>
	
			<div class="form-group form-group-checkboxes">
			<h4 class="pt-2">{{ __('Additional information') }}</h4><hr>
				<div class="row ">
                            <div class="col-sm-4">
                                <input type="checkbox" id="garage" name="garage" {{ (($post->garage ?? old('garage'))==1?"checked":"") }} value="1">
                                <label for="garage">{{ __('garage') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="balcony" name="balcony" {{ (($post->balcony ?? old('balcony'))==1?"checked":"") }} value="1">
                                <label for="balcony">{{ __('balcony') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="terrace" name="terrace" {{ (($post->terrace ?? old('terrace'))==1?"checked":"") }} value="1">
                                <label for="terrace">{{ __('terrace') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="garden" name="garden" {{ (($post->garden ?? old('garden'))==1?"checked":"") }} value="1">
                                <label for="garden">{{ __('garden') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="room_utilitarian" name="room_utilitarian" {{ (($post->room_utilitarian ?? old('room_utilitarian'))==1?"checked":"") }} value="1">
                                <label for="room_utilitarian">{{ __('room utilitarian') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="two_level" name="two_level" {{ (($post->two_level ?? old('two_level'))==1?"checked":"") }} value="1">
                                <label for="two_level">{{ __('two level') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="separate_kitchen" name="separate_kitchen" {{ (($post->separate_kitchen ?? old('separate_kitchen'))==1?"checked":"") }} value="1">
                                <label for="separate_kitchen">{{ __('separate kitchen') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="only_for_non_smokers" name="only_for_non_smokers" {{ (($post->only_for_non_smokers ?? old('only_for_non_smokers'))==1?"checked":"") }} value="1">
                                <label for="only_for_non_smokers">{{ __('only for non smokers') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="air_conditioning" name="air_conditioning" {{ (($post->air_conditioning ?? old('air_conditioning'))==1?"checked":"") }} value="1">
                                <label for="air_conditioning">{{ __('air conditioning') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="elevator" name="elevator" {{ (($post->elevator ?? old('elevator'))==1?"checked":"") }} value="1">
                                <label for="elevator">{{ __('elevator') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox" id="basement" name="basement" {{ (($post->basement ?? old('basement'))==1?"checked":"") }} value="1">
                                <label for="basement">{{ __('basement') }}</label>
                            </div>
				</div>
			</div>

            {{-- <button type="submit" class="btn btn-primary">{{__('Apply')}}</button> --}}
        </div>
    </div>
</div>
