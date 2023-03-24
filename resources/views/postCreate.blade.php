<?php $activePage = 'post-create';?>
@extends('layouts.app')

@section('content')
<section class="all-posts-page">
    <div class="container py-2">
        <h2 class="css-1q56cn">{{__('New post') }}</h2>
    </div>
    <div class="bg-all-posts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 pt-5">
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

                                <form action={{Route('create')}}
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
                                            <div class="form-group">
                                                <label class="control-label d-flex align-items-center" for="title">
                                                    {{ __('title') }}
                                                    <span class="css-1pnqrd4 ms-1">
                                                        <span role="button" class="css-12mkfdx tooltip">
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
                                                                    <path fill="#00B54B" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path>
                                                            </svg>
                                                            <span class="tooltiptext">
                                                                {{__('Any text...') }}
                                                             </span>
                                                        </span>
                                                    </span>
                                                </label>
                                                <input type="text"
                                                       name="title"
                                                       placeholder="{{__('title')}}"
                                                       id="title"
                                                       class="form-control"
                                                       value="{{ $post->title ?? old('title') }}">
                                            </div>
                                        </div>
                                        <div class="col-12 d-md-flex">
                                            <div class="col-md-6 pe-md-3 py-3">
                                                <div class="form-group">
                                                    <label for="price" class="control-label control-label-req">{{ __('price') }}</label>
                                                    <input type="text"
                                                           name="price"
                                                           placeholder="{{__('€')}}"
                                                           id="price"
                                                           class="form-control"
                                                           value="{{ $post->price ?? old('price') }}">
                                                    <span class="form-label-down">
                                                        {{__('€') }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ps-md-3 py-3">
                                                <div class="form-group">
                                                    <label for="square"
                                                           class="control-label">
                                                           {{ __('square') }}
                                                           <span class="css-1pnqrd4 ms-1">
                                                            <span role="button" class="css-12mkfdx tooltip">
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
                                                                        <path fill="#00B54B" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path>
                                                                </svg>
                                                                <span class="tooltiptext">
                                                                    {{__('Any text...') }}
                                                                 </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                    <input type="text"
                                                           name="square"
                                                           placeholder="{{__('square')}}"
                                                           id="square"
                                                           class="form-control"
                                                           value="{{ $post->square ?? old('square') }}">
                                                     <span class="form-label-down">
                                                        {{__('м²') }}
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-md-flex">
                                            <div class="col-md-6 pe-md-3 py-3">
                                                <div class="form-group chevron-field">
                                                    <label for="rooms" class="control-label control-label-req">{{ __('number of rooms') }}</label>
                                                    <select name="rooms" id="rooms" class="form-control" value="{{ $post->rooms ?? old('rooms') }}">
                                                        <option id="1" value="1">1</option>
                                                        <option id="2" value="2">2</option>
                                                        <option id="3" value="3">3</option>
                                                        <option id="4" value="4">4</option>
                                                        <option id="5" value="5">5</option>
                                                        <option id="6" value="6">6</option>
                                                        <option id="7" value="7">7</option>
                                                        <option id="8" value="8">8</option>
                                                        <option id="9" value="9">9</option>
                                                        <option id="10" value="10">10</option>
                                                    </select>
                                                    <div class="chevron-icon-lev">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                <path fill="#292929" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ps-md-3 py-3">
                                                <div class="form-group chevron-field">
                                                    <label for="bedrooms" class="control-label control-label-req">{{ __('number of bedrooms') }}</label>
                                                    <select name="bedrooms" id="bedrooms" class="form-control " value="{{ $post->bedrooms ?? old('bedrooms') }}">
                                                        <option id="1b" value="1">1</option>
                                                        <option id="2b" value="2">2</option>
                                                        <option id="3b" value="3">3</option>
                                                        <option id="4b" value="4">4</option>
                                                        <option id="5b" value="5">5</option>
                                                        <option id="6b" value="6">6</option>
                                                        <option id="7b" value="7">7</option>
                                                        <option id="8b" value="8">8</option>
                                                        <option id="9b" value="9">9</option>
                                                        <option id="10b" value="10">10</option>
                                                    </select>
                                                    <div class="chevron-icon-lev">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                <path fill="#292929" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-md-flex ">
                                            <div class="col-md-6 pe-md-3 py-3">
                                                <div class="form-group chevron-field">
                                                    <label for="price" class="control-label control-label-req">{{ __('category') }}</label>
                                                    <select class="form-control" name="sale_id" id="sale" value="{{ $post->sale_id ?? old('sale_id') }}">
                                                        @foreach($sales as $sale)
                                                            <option value="{{ $sale->id }}">
                                                                {{ $sale->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="chevron-icon-lev">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                <path fill="#292929" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ps-md-3 py-3">
                                                <div class="form-group chevron-field">
                                                    <label for="b2b" class="control-label control-label-req">{{ __('status') }}</label>
                                                    <select class="form-control" name="status_id" id="b2b" value="{{ $post->status_id ?? old('status_id') }}">
                                                        @foreach($statuses as $status)
                                                            <option value="{{ $status->id }}">
                                                                {{ $status->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="chevron-icon-lev">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                <path fill="#292929" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 pt-4">
                                            <h4 class="legend">
                                                {{__('Add multimedia') }}
                                            </h4>
                                            <p>
                                                <em>
                                                    <strong>
                                                        <font style="vertical-align: inherit;">
                                                            {{__('Add at least one photo') }}
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
                                        </div>
                                        <div class="col-12 d-md-flex py-3">
                                            <div class="col-md-8 pe-md-3">
                                                <div class="form-group">
                                                    <input multiple="multiple" type="file" name="images[]" id="images" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ps-md-3 pt-3 pt-md-0">
                                                <div class="uploader-descrambler">
                                                    <p><font style="vertical-align: inherit;">{{__('You can add up to 20 photos with a minimum size of 800x600 pixels and a file size of no more than 5 MB in JPG, JPEG or PNG format.') }}</font></p>
                                                    <p><font style="vertical-align: inherit;">{{__('To add multiple photos at once, select them while holding down the Ctrl key on your keyboard.') }}</font></p>
                                                    <p><font style="vertical-align: inherit;">{{__('Первая фотография будет отображаться как основная фотография объекта.') }}</font></p>
                                                    <p><font style="vertical-align: inherit;">{{__('You can change the order of the photos by dragging the thumbnails with the mouse button pressed.') }}</font></p>
                                                    <p><font style="vertical-align: inherit;">{{__('Ideal image dimensions are 830x500 pixels.') }} </font>
                                                        <a href="#"><font style="vertical-align: inherit;">{{__('Find out more') }}</font>
                                                        </a>
                                                        <font style="vertical-align: inherit;">
                                                             {{__('.')}}
                                                        </font>
                                                    </p>
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
                                                <div class="form-group">
                                                    <label for="address" class="control-label control-label-req">{{ __('address') }}</label>
                                                    <input type="text"
                                                           name="address"
                                                           placeholder="address"
                                                           id="address"
                                                           class="form-control map-input mb-3"
                                                           value="">
                                                    <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                                    <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                                                    <div class="chevron-icon-lev">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 fa-xs " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                <path fill="#292929" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="address-map-container" style="width:100%;height:400px; ">
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
                                                              name="description"
                                                              placeholder="{{__('description')}}"
                                                              id="description"
                                                              class="form-control description">
                                                              {{ $post->description ?? old('description') }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 pt-4">
                                            <h4 class="legend">
                                                {{__('Additional Information') }}
                                            </h4>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between flex-wrap py-md-3">
                                            <div class="col-12 col-md-3 col-sm-6">
                                                <div class="form-group d-flex align-items-center mb-2">
                                                    <input type="checkbox" id="garage" name="garage" value="1">
                                                    <label for="garage" class="">{{ __('garage') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-6">
                                                <div class="form-group d-flex align-items-center mb-2">
                                                    <input type="checkbox" id="balcony" name="balcony" value="1">
                                                    <label for="balcony" class="">{{ __('balcony') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-6">
                                                <div class="form-group d-flex align-items-center mb-2">
                                                    <input type="checkbox" id="terrace" name="terrace" value="1">
                                                    <label for="terrace" class="">{{ __('terrace') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-6">
                                                <div class="form-group d-flex align-items-center mb-2">
                                                    <input type="checkbox" id="garden" name="garden" value="1">
                                                    <label for="garden" class="">{{ __('garden') }}</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 py-5 d-flex justify-content-center">
                                            <button type="submit"
                                                    class="btn btn-default">{{ __('Add') }}</button>
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

@section('custom_js')
    <script>
        document.addEventListener("DOMContentLoaded", ready);
        function ready(){
            $('#description').summernote({
                height: 200,
                lang:'{{ app()->getLocale() }}-GB',
                toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ]
            });
        };

    </script>
@endsection


