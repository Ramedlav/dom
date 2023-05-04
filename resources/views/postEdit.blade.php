<?php $activePage = 'post-edit';?>
@extends('layouts.app')

@section('content')
<section class="all-posts-page">
    <div class="container py-2 d-flex align-items-center">
        <h2 class="css-1q56cn me-3">{{__('Edit post') }}</h2>
        <div>
            <button class="btn btn-warning next-button px-3" onclick="javascript:window.history.back();">{{ __('Back') }}</button>
	</div>

    </div>
    <div class="bg-all-posts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12  pt-5">
                    <div class="card post-card">
                        <div class="card-body p-0">
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

                                <form action="{{ route('edit', $post->id) }}"
                                      method="post"
                                      enctype="multipart/form-data"
                                      class="form-adding">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="legend">
                                            {{__('Basic information') }}
                                        </h4>
                                    </div>
                                    <div class="col-12 py-3">
                                        <input type="hidden"
                                               name="images"
                                               id="images"
                                               class="form-control"
                                               value="1">
                                        <div class="form-group">
                                            <label class="control-label d-flex align-items-center mb-1" for="title">
                                                {{ __('title') }}
                                                <span class="css-1pnqrd4 ms-1 d-none d-sm-block">
                                                    <span role="button" class="css-12mkfdx tooltip">
                                                        <img src="/img/icons/question-circle.svg">
                                                        <span class="tooltiptext">
                                                            {{__('Enter a title that will contain a unique feature of your property and may be of interest to searchers (e.g. "after renovation", "close to the park", etc.)') }}
                                                         </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <input type="text"
                                                   name="title"
						   maxlength="50"
                                                   placeholder="{{__('title')}}"
                                                   id="title"
                                                   class="form-control"
                                                   value="{{ ($errors->all()) ? old('title'):$post->title }}">
                                        </div>
                                    </div>
                                    <div class="col-12 py-3">
                                        <div class="form-group chevron-field">
                                            <label class="control-label d-flex align-items-center mb-1">
                                                {{ __('Type of announcement') }}
                                                <span class="css-1pnqrd4 ms-1 d-none">
                                                    <span role="button" class="css-12mkfdx tooltip">
                                                        <img src="/img/icons/question-circle.svg">
                                                        <span class="tooltiptext">
                                                            {{__('Any text...') }}
                                                         </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <select class="form-control" name="type_announcement">
                                                @foreach($announcements as $announcement)
                                                    <option {{ (($post->type_announcement ?? old('type_announcement'))==$announcement->id?"selected":"") }}
                                                        value="{{ $announcement->id }}">{{ __("$announcement->title") }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="chevron-icon-lev">
                                                <img src="/img/icons/chevron.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-sm-flex ">
                                        <div class="col-sm-6 pe-sm-3 py-3 d-none">
                                            <div class="form-group chevron-field">
                                                <label for="b2b" class="control-label control-label-req mb-1">{{ __('status') }}</label>
                                                <select class="form-control" name="status_id" id="b2b" value="{{ $post->status_id ?? old('status_id') }}">
                                                    @foreach($statuses as $status)
                                                        <option value="{{ $status->id }}"
                                                            @if($status->id == $post->status_id) selected @endif>
                                                            {{ $status->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-sm-flex">
                                        <div class="col-sm-4 pe-sm-3 py-3">
                                            <div class="form-group chevron-field">
                                                <label for="price" class="control-label control-label-req mb-1">{{ __('category') }}</label>
                                                <select class="form-control" name="sale_id" id="sale" value="{{ $post->sale_id ?? old('sale_id') }}" onchange="ShowHidePrices()">
                                                    @foreach($sales as $sale)
                                                        <option value="{{ $sale->id }}"
                                                            @if($sale->id == $post->sale_id) selected @endif>
                                                            {{ __("$sale->title") }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 px-sm-3 py-3">
                                            <div class="form-group chevron-field">
                                                <label for="price" class="control-label control-label-req mb-1">{{ __('price') }}</label>
                                                <input type="number"
                                                       name="price"
                                                       placeholder="{{__('€')}}"
                                                       id="price"
                                                       class="form-control"
                                                       value="{{ $post->price ?? old('price') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ps-sm-3 py-3">
                                            <div class="form-group chevron-field">
                                                <label for="rent_price" class="control-label control-label-req mb-1">
                                                    {{ __('rent price') }}
                                                </label>
                                                <input type="number"
                                                       name="rent_price"
                                                       placeholder="{{__('€ / month')}}"
                                                       id="rent_price"
                                                       class="form-control"
                                                       value="{{ $post->rent_price ?? old('rent_price') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 pt-4">
                                        <h4 class="legend">
                                            {{__('Update multimedia') }}
                                        </h4>
{{--
                                        <p>
                                            <em>
                                                <strong>
                                                    <font style="vertical-align: inherit;">
                                                        {{__('Update at least one photo') }}
                                                    </font>
                                                </strong>
                                                <font style="vertical-align: inherit;">
                                                    {{__('otherwise your ad will be displayed') }}
                                                </font>
                                                <strong>
                                                    <font style="vertical-align: inherit;">
                                                        {{__('at the end of the ad list') }}
                                                    </font>
                                                </strong>
                                                <font style="vertical-align: inherit;">
                                                    {{__('.') }}
                                                </font>
                                            </em>
                                        </p>
--}}
                                    </div>
                                    <div class="col-12 d-md-flex py-3">
                                        <div class="col-md-8 pe-md-3">
                                            <div class="row" id="photo_gallery">
                                                @include('postEditGallery')
                                            </div>
                                        </div>
                                        <div class="col-md-4 ps-md-3 pt-3 pt-md-0">
                                            <div class="uploader-descrambler">
                                                <p><font style="vertical-align: inherit;">{{__('You can add up to 20 photos with a minimum size of 800x600 pixels and a file size of no more than 5 MB in JPG, JPEG or PNG format.') }}</font></p>
                                                <p><font style="vertical-align: inherit;">{{__('To add multiple photos once, select them while holding down the Ctrl key on your keyboard.') }}</font></p>
                                                <p><font style="vertical-align: inherit;">{{__('The first photo will be displayed as the main photo of the object.') }}</font></p>
                                                <p><font style="vertical-align: inherit;">{{__('You can change the order of the photos by dragging the thumbnails with the mouse button pressed.') }}</font></p>
                                                <p><font style="vertical-align: inherit;">{{__('Ideal image dimensions are 830x500 pixels.') }} </font>
{{--
                                                    <a href="#"><font style="vertical-align: inherit;">{{__('Find out more') }}</font>
                                                    </a>
                                                    <font style="vertical-align: inherit;">
                                                         {{__('.')}}
                                                    </font>
--}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-sm-flex">
                                        <div class="col-sm-6 pe-sm-3 py-3">
                                            <div class="form-group">
                                                <label for="movie_link"
                                                       class="control-label d-flex align-items-center">
                                                       {{ __('Movie') }}
                                                       <span class="css-1pnqrd4 ms-1 d-none d-sm-block">
                                                            <span role="button" class="css-12mkfdx tooltip">
                                                                <img src="/img/icons/question-circle.svg">
                                                                <span class="tooltiptext">
                                                                    {{__('If you have added a video promoting your property to YouTube, we will also place it on the page of your advertisement in Freebe.Place.') }}
                                                                </span>
                                                            </span>
                                                        </span>
                                                </label>
                                                <input 
                                                       type="text"
                                                       name="movie_link"
                                                       id="movie_link"
						       placeholder="{{ __('paste link') }}"
                                                       class="form-control"
                                                       value="{{ $post->movie_link ?? old('movie_link') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-sm-3 py-3">
                                            <div class="form-group">
                                                <label for="wirtual_link"
                                                       class="control-label d-flex align-items-center">
                                                       {{ __('Wirtual walk') }}
                                                       <span class="css-1pnqrd4 ms-1 d-none d-sm-block">
                                                            <span role="button" class="css-12mkfdx tooltip">
                                                                <img src="/img/icons/question-circle.svg">
                                                                <span class="tooltiptext">
                                                                    {{__('If you have a link to a virtual tour site promoting your property, we will also place it on your Freebe.Place listing page.') }}
                                                                </span>
                                                            </span>
                                                        </span>
                                                </label>
                                                <input 
                                                       type="text"
                                                       name="wirtual_link"
						       placeholder="{{ __('paste link') }}"
                                                       id="wirtual_link"
                                                       class="form-control"
                                                       value="{{ $post->wirtual_link ?? old('wirtual_link') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 pt-4">
                                        <h4 class="legend">
                                            {{__('Location') }}
                                        </h4>
                                    </div>

                                    <div class="col-12 py-3">
                                        <div class="">
                                            <div class="form-group chevron-field">
                                                <label for="address" class="control-label control-label-req">{{ __('address') }}</label>
                                                <input type="text"
                                                       name="address"
                                                       placeholder="address"
                                                       id="address"
                                                       class="form-control map-input mb-3"
                                                       value="{{ $post->address }}">
                                                <input type="hidden" name="address_latitude" id="address-latitude" value="{{ $post->address_latitude }}" />
                                                <input type="hidden" name="address_longitude" id="address-longitude" value="{{ $post->address_longitude }}" />
                                            </div>
                                        </div>
                                        <div id="address-map-container" style="width:100%;height:300px; ">
                                            <div style="width: 100%; height: 100%" id="address-map"></div>
                                        </div>
                                    </div>

                                    <div class="col-12 pt-4">
                                        <h4 class="legend">
                                            {{__('Detailed information') }}
                                        </h4>
                                    </div>
                                    <div class="col-12  py-3">
                                        <div class=" ">
                                            <div class="form-group">
                                                <label for="description" class="control-label control-label-req">{{ __('description') }}</label>
                                                <textarea rows='8'
                                                          type="text"
	                                                  maxlength="5000"
                                                          name="description"
                                                          placeholder="{{__('description')}}"
                                                          id="description"
                                                          class="form-control description">{!! ($errors->all()) ? old('description'):$post->description !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-sm-flex ">
                                        <div class="col-sm-4 pe-sm-4 py-3">
                                            <div class="form-group chevron-field">
                                                <label for="rooms" class="control-label control-label-req">
                                                    {{ __('number of rooms') }}
                                                </label>
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
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 px-sm-2 py-3">
                                            <div class="form-group">
                                                <label for="square" class="control-label control-label-req">
                                                    {{ __('square м²') }}
                                                </label>
                                                <input type="number"
                                                      name="square"
                                                      placeholder="square"
                                                      id="square"
                                                      class="form-control"
                                                      value="{{ $post->square ?? old('square') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ps-sm-4 py-3">
                                            <div class="form-group chevron-field">
                                                <label for="bedrooms"
                                                       class="control-label control-label-req">
                                                        {{ __('number of bedrooms') }}
                                                </label>
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
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-sm-flex ">
                                        <div class="col-sm-4 pe-sm-4 py-3">
                                            <div class="form-group chevron-field">
                                                <label class="control-label" class="control-label">
                                                    {{ __('Type of construction') }}
                                                </label>
                                                <select class="form-control" name="construction">
                                                    @foreach($constructions as $construction)
                                                        <option {{ (($post->construction ?? old('construction'))==$construction->id?"selected":"") }}
                                                            value="{{ $construction->id }}">
                                                            {{ __("$construction->title") }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 px-sm-2 py-3">
                                            <div class="form-group chevron-field">
                                                <label class="control-label " class="control-label">
                                                    {{ __('Floor') }}
                                                </label>
                                                <select class="form-control" name="floor">
                                                    @foreach($floors as $floor)
                                                        <option {{ (($post->floor ?? old('floor'))==$floor->id?"selected":"") }} value="{{ $floor->id }}">{{ __("$floor->title") }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ps-sm-4 py-3">
                                            <div class="form-group">
                                                <label class="control-label " class="control-label">
                                                    {{ __('Number of floors') }}
                                                </label>
                                                <input type="number" min="1"
                                                     class="form-control"
                                                     name="floors"
                                                     value="{{ $post->floors ?? old('floors') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-sm-flex ">
                                        <div class=" col-sm-4 pe-sm-4 py-3">
                                            <div class="form-group chevron-field">
                                                <label class="control-label " class="control-label">
                                                    {{ __('Building material') }}
                                                </label>
                                                <select class="form-control" name="material">
                                                    <option value="0">{{ __('choose') }}</option>
                                                        @foreach($materials as $material)
                                                            <option {{ (($post->material ?? old('material'))==$material->id?"selected":"") }} value="{{ $material->id }}">{{ __("$material->title") }}</option>
                                                        @endforeach
                                                </select>
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-4 px-sm-2 py-3">
                                            <div class="form-group chevron-field">
                                                <label class="control-label " class="control-label">
                                                    {{ __('Windows') }}
                                                </label>
                                                <select class="form-control" name="windows">
                                                    <option value="0">{{ __('choose') }}</option>
                                                    @foreach($windows as $window)
                                                        <option {{ (($post->windows ?? old('windows'))==$window->id?"selected":"") }} value="{{ $window->id }}">{{ __("$window->title") }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ps-sm-4 py-3">
                                            <div class="form-group chevron-field">
                                                <label class="control-label " class="control-label">
                                                    {{ __('Heating') }}
                                                </label>
                                                <select class="form-control" name="heating">
                                                    <option value="0">{{ __('choose') }}</option>
                                                    @foreach($heatings as $heating)
                                                        <option {{ (($post->heating ?? old('heating'))==$heating->id?"selected":"") }} value="{{ $heating->id }}">{{ __("$heating->title") }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-sm-flex">
                                        <div class="col-sm-4 pe-sm-4 py-3">
                                            <div class="form-group">
                                                <label class="control-label " class="control-label">
                                                    {{ __('Year of construction') }}
                                                </label>
                                                <input type="text" class="form-control" name="year_construction" value="{{ $post->year_construction ?? old('year_construction') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 px-sm-2 py-3">
                                            <div class="form-group chevron-field">
                                                <label class="control-label " class="control-label">
                                                    {{ __('Finish condition') }}
                                                </label>
                                                <select class="form-control" name="finish_condition">
                                                    <option value="0">{{ __('choose') }}</option>
                                                        @foreach($finish_conditions as $finish_condition)
                                                            <option {{ (($post->finish_condition ?? old('finish_condition'))==$finish_condition->id?"selected":"") }} value="{{ $finish_condition->id }}">{{ __("$finish_condition->title") }}</option>
                                                        @endforeach
                                                </select>
                                                <div class="chevron-icon-lev">
                                                    <img src="/img/icons/chevron.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ps-sm-4 py-3">
                                            <div class="form-group">
                                                <label class="control-label " class="control-label">
                                                    {{ __('Available from') }}
                                                </label>
                                                <input type="date"
                                                       class="form-control"
                                                       name="available_date"
                                                       value="{{ $post->available_date }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-checkboxes">
                                        <h4 class="pt-4">{{ __('Media') }}</h4><hr>
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
                                        <h4 class="pt-4">{{ __('Security') }}</h4><hr>
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
                                        <h4 class="pt-4">{{ __('Equipment') }}</h4><hr>
                                        <div class="row ">
                                            <div class="col-sm-4 mb-2">
                                                <input name="furniture" type="checkbox" {{ (($post->furniture ?? old('furniture'))==1?"checked":"") }} id="checkbox-equipment_types-furniture" value="1">
                                                <label for="checkbox-equipment_types-furniture">{{ __('furniture') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input name="washing_machine" type="checkbox" {{ (($post->washing_machine ?? old('washing_machine'))==1?"checked":"") }} id="checkbox-equipment_types-washing_machine" value="1">
                                                <label for="checkbox-equipment_types-washing_machine">{{ __('washing machine') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input name="dishwasher" type="checkbox" {{ (($post->dishwasher ?? old('dishwasher'))==1?"checked":"") }} id="checkbox-equipment_types-dishwasher" value="1">
                                                <label for="checkbox-equipment_types-dishwasher">{{ __('dishwasher') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input name="refrigerator" type="checkbox" {{ (($post->refrigerator ?? old('refrigerator'))==1?"checked":"") }} id="checkbox-equipment_types-fridge" value="1">
                                                <label for="checkbox-equipment_types-fridge">{{ __('refrigerator') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input name="stove" type="checkbox" {{ (($post->stove ?? old('stove'))==1?"checked":"") }} id="checkbox-equipment_types-stove" value="1">
                                                <label for="checkbox-equipment_types-stove">{{ __('stove') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input name="oven" type="checkbox" {{ (($post->oven ?? old('oven'))==1?"checked":"") }} id="checkbox-equipment_types-oven" value="1">
                                                <label for="checkbox-equipment_types-oven">{{ __('oven') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input name="tv_set" type="checkbox" {{ (($post->tv_set ?? old('tv_set'))==1?"checked":"") }} id="checkbox-equipment_types-tv" value="1">
                                                <label for="checkbox-equipment_types-tv">{{ __('TV set') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-checkboxes">
                                        <h4 class="pt-4">{{ __('Additional information') }}</h4><hr>
                                        <div class="row ">
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="garage" name="garage" {{ (($post->garage ?? old('garage'))==1?"checked":"") }} value="1">
                                                <label for="garage">{{ __('garage') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="balcony" name="balcony" {{ (($post->balcony ?? old('balcony'))==1?"checked":"") }} value="1">
                                                <label for="balcony">{{ __('balcony') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="terrace" name="terrace" {{ (($post->terrace ?? old('terrace'))==1?"checked":"") }} value="1">
                                                <label for="terrace">{{ __('terrace') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="garden" name="garden" {{ (($post->garden ?? old('garden'))==1?"checked":"") }} value="1">
                                                <label for="garden">{{ __('garden') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="room_utilitarian" name="room_utilitarian" {{ (($post->room_utilitarian ?? old('room_utilitarian'))==1?"checked":"") }} value="1">
                                                <label for="room_utilitarian">{{ __('room utilitarian') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="two_level" name="two_level" {{ (($post->two_level ?? old('two_level'))==1?"checked":"") }} value="1">
                                                <label for="two_level">{{ __('two level') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="separate_kitchen" name="separate_kitchen" {{ (($post->separate_kitchen ?? old('separate_kitchen'))==1?"checked":"") }} value="1">
                                                <label for="separate_kitchen">{{ __('separate kitchen') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="only_for_non_smokers" name="only_for_non_smokers" {{ (($post->only_for_non_smokers ?? old('only_for_non_smokers'))==1?"checked":"") }} value="1">
                                                <label for="only_for_non_smokers">{{ __('only for non smokers') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="air_conditioning" name="air_conditioning" {{ (($post->air_conditioning ?? old('air_conditioning'))==1?"checked":"") }} value="1">
                                                <label for="air_conditioning">{{ __('air conditioning') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="elevator" name="elevator" {{ (($post->elevator ?? old('elevator'))==1?"checked":"") }} value="1">
                                                <label for="elevator">{{ __('elevator') }}</label>
                                            </div>
                                            <div class="col-sm-4 mb-2">
                                                <input type="checkbox" id="basement" name="basement" {{ (($post->basement ?? old('basement'))==1?"checked":"") }} value="1">
                                                <label for="basement">{{ __('basement') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 py-5 d-flex justify-content-center">
                                        <button type="submit"
                                                class="btn btn-default progress-button">{{ __('Save') }}</button>
                                        {{-- <button type="submit" class="btn btn-success progress-button">{{ __('Save') }}</button>        --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
<script>
document.addEventListener("DOMContentLoaded", ready);
function ready(){
	$('#description').summernote({
        height: 300, lang:'{{ app()->getLocale() }}-GB',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
        ]
    });
	$('#sale').change();
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
function ShowHidePrices() {
	if ($('#sale').val() == 1) {
		$('#rent_price').attr('disabled','disabled');
		$('#price').removeAttr('disabled');
	} else {
		$('#price').attr('disabled','disabled');
		$('#rent_price').removeAttr('disabled');
	}
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
