<?php $activePage = 'saved-search';?>
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
                                <div class="col-12 col-lg-6">
                                    <h2 class="css-1q56cn">{{__('My saved search') }}</h2>
					<div class="search-card">
						@if (Auth::user()->saved_search)
						<div class="form-group">
							<label for="email_notify" class="control-label mt-4 me-2">{{ __('Email notifications') }}</label>
							<select id="email_notify" class="form-select form-control" onchange="setEmailNotify();">
								<option value="0">{{ __('Do not send') }}</option>
								<option value="1">{{ __('Immediately') }}</option>
								<option value="2">{{ __('Once a day') }}</option>
							</select>
						</div>
						<div class="form-group inside">
							<button type="button" 
								data-cy="remove-saved-search" 
								onclick="delSavedSearch();"
								class="btn btn-danger delete-button">
								<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"></path></svg>
								 {{ __('Remove from saved') }}
							</button>
						</div>
						@else
							<h2>
								{{ __('You don\'t have a saved search') }}
							</h2>
						@endif
					</div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <h2 class="css-1q56cn">{{__('Info search') }}</h2>
					<div class="search-card">
						@if (Auth::user()->saved_search)
							<div class="form-group">
								@if (!empty($info_search["address"]))
									<h4>{{ $info_search["address"] }}</h4>
								@else
									<h4>{{ __('All addresses') }}</h4>
								@endif
								@foreach ($detail_search as $detail) 
									@if (!$loop->first) {{ ',' }} @endif
									{{ __($detail) }}
								@endforeach

							</div>
							<div class="form-group inside">
								<form action="{{ route('home_filters') }}">
			<input type="hidden" name="address" value="{{ $info_search['address'] ?? old('address') }}" >
			<input type="hidden" name="address_latitude" value="{{ $info_search['address_latitude'] ?? old('address_latitude') }}" />
			<input type="hidden" name="address_longitude"  value="{{ $info_search['address_longitude'] ?? old('address_longitude') }}" />
			<input type="hidden" name="type_announcement" value="{{ $info_search['type_announcement'] ?? old('type_announcement') }}">
			<input type="hidden" name="sale" value="{{ $info_search['sale'] ?? old('sale') }}">
			<input type="hidden" name="rooms" value="{{ $info_search['rooms'] ?? old('rooms') }}">
			<input type="hidden" name="square" value="{{ $info_search['square'] ?? old('square') }}">
			<input type="hidden" name="bedrooms" value="{{ $info_search['bedrooms'] ?? old('bedrooms') }}">
			<input type="hidden" name="construction" value="{{ $info_search['construction'] ?? old('construction') }}">
			<input type="hidden" name="floor" value="{{ $info_search['floors'] ?? old('floors') }}">
			<input type="hidden" name="floors" value="{{ $info_search['rooms'] ?? old('rooms') }}">
			<input type="hidden" name="material" value="{{ $info_search['material'] ?? old('material') }}">
			<input type="hidden" name="windows" value="{{ $info_search['windows'] ?? old('windows') }}">
			<input type="hidden" name="heating" value="{{ $info_search['heating'] ?? old('heating') }}">
			<input type="hidden" name="year_construction" value="{{ $info_search['year_construction'] ?? old('year_construction') }}">
			<input type="hidden" name="finish_condition" value="{{ $info_search['finish_condition'] ?? old('finish_condition') }}">
			<input type="hidden" name="internet" value="{{ $info_search['internet'] ?? old('internet') }}">
			<input type="hidden" name="cable_tv" value="{{ $info_search['cable_tv'] ?? old('cable_tv') }}">
			<input type="hidden" name="telephone" value="{{ $info_search['telephone'] ?? old('telephone') }}">
			<input type="hidden" name="anti_burglary_blinds" value="{{ $info_search['anti_burglary_blinds'] ?? old('anti_burglary_blinds') }}">
			<input type="hidden" name="anti_burglary_door" value="{{ $info_search['anti_burglary_door'] ?? old('anti_burglary_door') }}">
			<input type="hidden" name="intercom_videophone" value="{{ $info_search['intercom_videophone'] ?? old('intercom_videophone') }}">
			<input type="hidden" name="monitoring_protection" value="{{ $info_search['monitoring_protection'] ?? old('monitoring_protection') }}">
			<input type="hidden" name="alarm_system" value="{{ $info_search['alarm_system'] ?? old('alarm_system') }}">
			<input type="hidden" name="closed_area" value="{{ $info_search['closed_area'] ?? old('closed_area') }}">
			<input type="hidden" name="furniture" value="{{ $info_search['furniture'] ?? old('furniture') }}">
			<input type="hidden" name="washing_machine" value="{{ $info_search['washing_machine'] ?? old('washing_machine') }}">
			<input type="hidden" name="dishwasher" value="{{ $info_search['dishwasher'] ?? old('dishwasher') }}">
			<input type="hidden" name="refrigerator" value="{{ $info_search['refrigerator'] ?? old('refrigerator') }}">
			<input type="hidden" name="stove" value="{{ $info_search['stove'] ?? old('stove') }}">
			<input type="hidden" name="oven" value="{{ $info_search['oven'] ?? old('oven') }}">
			<input type="hidden" name="tv_set" value="{{ $info_search['tv_set'] ?? old('tv_set') }}">
			<input type="hidden" name="garage" value="{{ $info_search['garage'] ?? old('garage') }}">
			<input type="hidden" name="balcony" value="{{ $info_search['balcony'] ?? old('balcony') }}">
			<input type="hidden" name="terrace" value="{{ $info_search['terrace'] ?? old('terrace') }}">
			<input type="hidden" name="garden" value="{{ $info_search['garden'] ?? old('garden') }}">
			<input type="hidden" name="room_utilitarian" value="{{ $info_search['room_utilitarian'] ?? old('room_utilitarian') }}">
			<input type="hidden" name="two_level" value="{{ $info_search['two_level'] ?? old('two_level') }}">
			<input type="hidden" name="separate_kitchen" value="{{ $info_search['separate_kitchen'] ?? old('separate_kitchen') }}">
			<input type="hidden" name="only_for_non_smokers" value="{{ $info_search['only_for_non_smokers'] ?? old('only_for_non_smokers') }}">
			<input type="hidden" name="air_conditioning" value="{{ $info_search['air_conditioning'] ?? old('air_conditioning') }}">
			<input type="hidden" name="elevator" value="{{ $info_search['elevator'] ?? old('elevator') }}">
			<input type="hidden" name="basement" value="{{ $info_search['basement'] ?? old('basement') }}">
								<button type="submit" 
									data-cy="remove-saved-search" 
									class="btn btn-success progress-button">
									<svg height="24px" width="24px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M448.3,424.7L335,311.3c20.8-26,33.3-59.1,33.3-95.1c0-84.1-68.1-152.2-152-152.2c-84,0-152,68.2-152,152.2  s68.1,152.2,152,152.2c36.2,0,69.4-12.7,95.5-33.8L425,448L448.3,424.7z M120.1,312.6c-25.7-25.7-39.8-59.9-39.8-96.3  s14.2-70.6,39.8-96.3S180,80,216.3,80c36.3,0,70.5,14.2,96.2,39.9s39.8,59.9,39.8,96.3s-14.2,70.6-39.8,96.3  c-25.7,25.7-59.9,39.9-96.2,39.9C180,352.5,145.8,338.3,120.1,312.6z"/></svg>
									{{ __('Show matching ads') }}
								</button>
								</form>
							</div>
						@endif
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
function setEmailNotify() {
	Data = new FormData();
	Data.append('email_notify', $('#email_notify').val());
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: path + 'setEmailNotify',
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
            },
            error: function(data){
		console.log(data);
            }
        });
}
function delSavedSearch() {
	Data = new FormData();
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: path + 'delSavedSearch',
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
		toastr.success('',"{{ __('Remove saved search successfully') }}");
		window.location.reload();
            },
            error: function(data){
		console.log(data);
            }
        });
}
</script>
<style>
.search-card {
  background: #fff;
  border: none;
  border-radius: 0;
  min-height: 188px;
  padding: 14 14 14 14;
  position: relative;
}
.inside {
  /* абсолютное позиционирование */
  position: absolute;
  /* прижимаем блок к нижней границе относительно блока с position: relative*/
  bottom: 0;
  padding-bottom: 10px;
  padding-left: 4px;
}
</style>