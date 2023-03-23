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

                            <div class="form-group">
                                <label for="price">{{ __('price') }}</label>
                                <input type="number" name="price" placeholder="price" id="price" class="form-control" value="{{ $post->price ?? old('price') }}">
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('description') }}</label>
                                <textarea rows=10 type="text" name="description" placeholder="description" id="description" class="form-control description">{!! ($errors->all()) ? old('description'):$post->description !!}</textarea>
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="index">{{ __('index') }}</label>--}}
{{--                                <input type="text" name="index" placeholder="index" id="index" class="form-control" value="{{ ($errors->all()) ? old('index'):$post->index }}">--}}
{{--                            </div>--}}

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

                    <div class="form-group">
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

                    <div class="form-group">
                        <label for="square">{{ __('square м²') }}</label>
                        <input type="number" name="square" placeholder="square" id="square" class="form-control" value="{{ $post->square ?? old('square') }}">
                    </div>

                    <div class="form-group">
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
                    <hr/>
                    <div class="form-group">
                        <input type="checkbox" id="garage" name="garage" value="1" {{ (($post->garage ?? old('garage'))==1?"checked":"") }}>
                        <label for="garage">{{ __('garage') }}</label>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label>{{__('free space')}}</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="balcony" name="balcony" value="1" {{ (($post->balcony ?? old('balcony'))==1?"checked":"") }}>
                        <label for="balcony">{{ __('balcony') }}</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" id="terrace" name="terrace" value="1" {{ (($post->terrace ?? old('terrace'))==1?"checked":"") }}>
                        <label for="terrace">{{ __('terrace') }}</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" id="garden" name="garden" value="1" {{ (($post->garden ?? old('garden'))==1?"checked":"") }}>
                        <label for="garden">{{ __('garden') }}</label>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="sale" id="sale" value="{{ $post->sale ?? old('sale') }}">
                            <option value = "0">{{__('rent')}}</option>
                            <option value = "1">{{__('sale')}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="b2b">{{ __('status') }}</label>
                        <select class="form-control" name="" id="b2b" value="{{ $post->b2b ?? old('b2b') }}">
                            <option value = "0">{{__('private')}}</option>
                            <option value = "1">{{__('business to business')}}</option>
                        </select>
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
