@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header post-header">{{ __('Edit post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                             <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif

                        <form action="{{ route('edit', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
			<div class="row">
				<div class="col-12 col-sm-6">
                            <input type="hidden" name="images" id="images" class="form-control" value="1">

                            <div class="form-group">
                                <label for="title">{{ __('title') }}</label>
                                <input type="text" name="title" placeholder="title" id="title" class="form-control" value="{{ ($errors->all()) ? old('title'):$post->title }}">
                            </div>

				<div class="form-group pt-2">
					<label class="control-label">{{ __('Type of announcement') }}</label>
					<select class="form-control" name="type_announcement">
			                                   @foreach($announcements as $announcement)
			                                       <option {{ (($post->type_announcement ?? old('type_announcement'))==$announcement->id?"selected":"") }} value="{{ $announcement->id }}">{{ __("$announcement->title") }}</option>
			                                   @endforeach
					</select>
				</div>

			<div class="row pt-2">
                            <div class="form-group col-sm-6">
                                <label for="price">{{ __('price') }}</label>
                                <input type="number" name="price" placeholder="price" id="price" class="form-control" value="{{ $post->price ?? old('price') }}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="rent_price">{{ __('rent price') }}</label>
                                <input type="number" name="rent_price" placeholder="{{__('� / month')}}" id="rent_price" class="form-control" value="{{ $post->rent_price ?? old('rent_price') }}">
                            </div>
			</div>
                            <div class="form-group">
                                <label for="description">{{ __('description') }}</label>
                                <textarea rows=10 type="text" name="description" placeholder="description" id="description" class="form-control description">{!! ($errors->all()) ? old('description'):$post->description !!}</textarea>
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="index">{{ __('index') }}</label>--}}
{{--                                <input type="text" name="index" placeholder="index" id="index" class="form-control" value="{{ ($errors->all()) ? old('index'):$post->index }}">--}}
{{--                            </div>--}}

			<div class="row pt-2">
                            <div class="form-group col-sm-6">
                                <label for="movie_link">{{ __('movie') }}</label>
                                <input title="{{ __('If you have added a video promoting your property to YouTube, we will also place it on the page of your advertisement in Place.') }}" type="text" name="movie_link" id="movie_link" class="form-control" value="{{ $post->movie_link ?? old('movie_link') }}">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="wirtual_link">{{ __('Wirtual walk') }}</label>
                                <input title="{{ __('If you have a link to a page with a virtual tour promoting your property, we will also place it on the page of your advertisement in Place.') }}" type="text" name="wirtual_link" id="wirtual_link" class="form-control" value="{{ $post->wirtual_link ?? old('wirtual_link') }}">
                            </div>
			</div>

                            <div class="form-group">
                                <label for="address">{{ __('address') }}</label>
                                <input type="text"
                                       name="address"
                                       placeholder="address"
                                       id="address"
                                       class="form-control map-input"
                                       value="{{ $post->address }}">
                                <input type="hidden" name="address_latitude" id="address-latitude" value="{{ $post->address_latitude }}" />
                                <input type="hidden" name="address_longitude" id="address-longitude" value="{{ $post->address_longitude }}" />
                            </div>


                            <div id="address-map-container" style="width:100%;height:300px; ">
                                <div style="width: 100%; height: 100%" id="address-map"></div>
                            </div>

			<div class="row pt-2">
                    <div class="form-group col-sm-4">
                        <label for="rooms">{{ __('number of rooms') }}</label>
                        <select name="rooms" id="rooms" class="form-control">
                            <option id="1" value="1" {{ (($post->rooms ?? old('rooms'))==1?"selected":"") }}>1</option>
                            <option id="2" value="2" {{ (($post->rooms ?? old('rooms'))==2?"selected":"") }}>2</option>
                            <option id="3" value="3" {{ (($post->rooms ?? old('rooms'))==3?"selected":"") }}>3</option>
                            <option id="4" value="4" {{ (($post->rooms ?? old('rooms'))==4?"selected":"") }}>4</option>
                            <option id="5" value="5" {{ (($post->rooms ?? old('rooms'))==5?"selected":"") }}>5</option>
                            <option id="6" value="6" {{ (($post->rooms ?? old('rooms'))==6?"selected":"") }}>6</option>
                            <option id="7" value="7" {{ (($post->rooms ?? old('rooms'))==7?"selected":"") }}>7</option>
                            <option id="8" value="8" {{ (($post->rooms ?? old('rooms'))==8?"selected":"") }}>8</option>
                            <option id="9" value="9" {{ (($post->rooms ?? old('rooms'))==9?"selected":"") }}>9</option>
                            <option id="10" value="10" {{ (($post->rooms ?? old('rooms'))==10?"selected":"") }}>10</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="square">{{ __('square м²') }}</label>
                        <input type="number" name="square" placeholder="square" id="square" class="form-control" value="{{ $post->square ?? old('square') }}">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="bedrooms">{{ __('number of bedrooms') }}</label>
                        <select name="bedrooms" id="bedrooms" class="form-control" value="{{ $post->bedrooms ?? old('bedrooms') }}">
                            <option id="1b" value="1" {{ (($post->bedrooms ?? old('bedrooms'))==1?"selected":"") }}>1</option>
                            <option id="2b" value="2" {{ (($post->bedrooms ?? old('bedrooms'))==2?"selected":"") }}>2</option>
                            <option id="3b" value="3" {{ (($post->bedrooms ?? old('bedrooms'))==3?"selected":"") }}>3</option>
                            <option id="4b" value="4" {{ (($post->bedrooms ?? old('bedrooms'))==4?"selected":"") }}>4</option>
                            <option id="5b" value="5" {{ (($post->bedrooms ?? old('bedrooms'))==5?"selected":"") }}>5</option>
                            <option id="6b" value="6" {{ (($post->bedrooms ?? old('bedrooms'))==6?"selected":"") }}>6</option>
                            <option id="7b" value="7" {{ (($post->bedrooms ?? old('bedrooms'))==7?"selected":"") }}>7</option>
                            <option id="8b" value="8" {{ (($post->bedrooms ?? old('bedrooms'))==8?"selected":"") }}>8</option>
                            <option id="9b" value="9" {{ (($post->bedrooms ?? old('bedrooms'))==9?"selected":"") }}>9</option>
                            <option id="10b" value="10" {{ (($post->bedrooms ?? old('bedrooms'))==10?"selected":"") }}>10</option>
                        </select>
                    </div>
			</div>
			<div class="row pt-2">
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label">{{ __('Type of construction') }}</label>
						<select class="form-control" name="construction">
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
							<option value="0">{{ __('choose') }}</option>
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
							<option value="0">{{ __('choose') }}</option>
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
							<option value="0">{{ __('choose') }}</option>
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
							<option value="0">{{ __('choose') }}</option>
			                                    @foreach($finish_conditions as $finish_condition)
			                                        <option {{ (($post->finish_condition ?? old('finish_condition'))==$finish_condition->id?"selected":"") }} value="{{ $finish_condition->id }}">{{ __("$finish_condition->title") }}</option>
			                                    @endforeach
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label class="control-label ">{{ __('Available from') }}</label>
						<input type="date" class="form-control" name="available_date" value="{{ $post->available_date }}">
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

			<div class="row pt-2">
                    <div class="form-group col-sm-6">
                        <select class="form-control" name="sale_id" id="sale" value="{{ $post->sale_id ?? old('sale_id') }}">
                            @foreach($sales as $sale)
                                <option value="{{ $sale->id }}"
                                    @if($sale->id == $post->sale_id) selected @endif>
                                    {{ $sale->title }}
                                </option>
                            @endforeach
                            {{-- <option value = "0">{{__('rent')}}</option>
                            <option value = "1">{{__('sale')}}</option> --}}
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <select class="form-control" name="status_id" id="b2b" value="{{ $post->status_id ?? old('status_id') }}">
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}"
                                    @if($status->id == $post->status_id) selected @endif>
                                    {{ $status->title }}
                                </option>
                            @endforeach

                            {{-- <option value = "0">{{__('private')}}</option>
                            <option value = "1">{{__('business to business')}}</option> --}}
                        </select>
                    </div>
			</div>
				</div>
				<div class="col-12 col-sm-6">
		                    <div class="row" id="photo_gallery">
		        	            @include('postEditGallery')
				    </div>
				</div>
			</div>
                        <div class="card-footer form-group text-center justify-content-center" role="group">
				<div class="btn-group">
					<div>
						<button type="submit" class="btn btn-success progress-button">{{ __('Save') }}</button>
					</div>
					<div>
				 		<button class=" btn-primary next-button" onclick="{{ route('showMy') }}">{{ __('Back') }}</button>
					</div>
				</div>
			</div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
document.addEventListener("DOMContentLoaded", ready);
function ready(){
	$('#description').summernote({height: 300, lang:'{{ app()->getLocale() }}-GB'});
};

function updatePhoto(photo_id) {
	f=$("#photo-file-"+photo_id)[0].files;
	Data = new FormData();
	Data.append('photo_id', photo_id);
	$(f).each(function(index, file) {
		Data.append('file[]',file);
	});

        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: path + 'edit/updatephoto',
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
                $('#photo_gallery').html(data);
            },
            error: function(data){
		console.log(data);
            }
        });
}

function addPhotos(post_id) {
	Data = new FormData();
	Data.append('post_id', post_id);
	$.each($("#photos-file")[0].files,function(key, file){
		Data.append('file[]',file);
	});
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: path + 'edit/addphotos',
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
                $('#photo_gallery').html(data);
            },
            error: function(data){
		console.log(data);
            }
        });
}
</script>
<style>
.input__file {
  opacity: 0;
  visibility: hidden;
  position: absolute;
}

.input__file-button-text {
  text-align: center;
  line-height: 1;
  margin-top: 1px;
}

.input__file-button {
  width: 50%;
  height: 30px;
  background: #1bbc9b;
  color: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  border-radius: 3px;
  cursor: pointer;
  margin: 0 auto;
}
</style>
