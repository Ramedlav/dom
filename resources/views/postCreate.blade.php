@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header post-header">{{ __('New post') }}</div>

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

                        <form action={{Route('create')}} method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="title">{{ __('title') }}</label>
                                <input type="text" name="title" placeholder="title" id="title" class="form-control" value="{{ $post->title ?? old('title') }}">
                            </div>

                            <div class="form-group">
                                <label for="price">{{ __('price') }}</label>
                                <input type="number" name="price" placeholder="price" id="price" class="form-control" value="{{ $post->price ?? old('price') }}">
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('description') }}</label>
                                <textarea rows=10 type="text" name="description" placeholder="description" id="description" class="form-control description">{{ $post->description ?? old('description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="index">{{ __('index') }}</label>
                                <input type="text" name="index" placeholder="index" id="index" class="form-control" value="{{ $post->index ?? old('index') }}">
                            </div>

                            <div class="form-group">
                                <label for="rooms">{{ __('number of rooms') }}</label>
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
                            </div>

                            <div class="form-group">
                                <label for="square">{{ __('square м²') }}</label>
                                <input type="number" name="square" placeholder="square" id="square" class="form-control" value="{{ $post->square ?? old('square') }}">
                            </div>

                            <div class="form-group">
                                <label for="bedrooms">{{ __('number of bedrooms') }}</label>
                                <select name="bedrooms" id="bedrooms" class="form-control" value="{{ $post->bedrooms ?? old('bedrooms') }}">
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
                            </div>
                            <hr/>
                            <div class="form-group">
                                <input type="checkbox" id="garage" name="garage" value="1">
                                <label for="garage">{{ __('garage') }}</label>
                            </div>
                            <hr/>
                            <div class="form-group">
                            <label>{{__('free space')}}</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="balcony" name="balcony" value="1">
                                <label for="balcony">{{ __('balcony') }}</label>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" id="terrace" name="terrace" value="1">
                                <label for="terrace">{{ __('terrace') }}</label>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" id="garden" name="garden" value="1">
                                <label for="garden">{{ __('garden') }}</label>
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="sale" id="sale" value="{{ $post->sale ?? old('sale') }}">
                                    <option value = "0">{{__('rent')}}</option>
                                    <option value = "1">{{__('sale')}}</option>
                                </select>
                            </div>


                            <div class="form-group">
{{--                                <label for="images">images</label>--}}
                                <input multiple="multiple" type="file" name="images[]" id="images" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="address">{{ __('address') }}</label>
                                <input type="text"
                                       name="address"
                                       placeholder="address"
                                       id="address"
                                       class="form-control map-input"
                                       value="{{ $post->address ?? old('address') }}">
                                <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                            </div>
                            <div id="address-map-container" style="width:100%;height:400px; ">
                                <div style="width: 100%; height: 100%" id="address-map"></div>
                            </div>

                            <div class="card-footer form-group"><button type="submit" class="btn progress-button">{{ __('Add') }}</button></div>
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

</script>
