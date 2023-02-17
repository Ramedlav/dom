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

                            <div class="form-group">
                                <label for="index">{{ __('index') }}</label>
                                <input type="text" name="index" placeholder="index" id="index" class="form-control" value="{{ ($errors->all()) ? old('index'):$post->index }}">
                            </div>

                            <div class="form-group">
                                <label for="address">{{ __('address') }}</label>
                                <input type="text" name="address" placeholder="address" id="address" class="form-control" value="{{ ($errors->all()) ? old('address'):$post->address }}">
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


				</div>
				<div class="col-12 col-sm-6">
                    <div class="row" id="photo_hallery">
        	            @include('postEditGallery')
			<div class="text-center" style="margin: 15px 0;">
			   <input name="file" type="file" id="photos-file" class="input input__file" multiple onchange="addPhotos()">
			   <label for="photos-file">
			      <span class="input__file-button-text btn btn-success">{{ __('Add photos') }}</span>
			   </label>
			</div>
		    </div>
				</div>
			</div>
                            <div class="card-footer form-group"><button type="submit" class="btn btn-success progress-button">{{ __('Edit') }}</button></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
	selector:'textarea.description',
	height: 300
});

function updatePhoto(photo_id) {
	console.log($("#photo-file-"+photo_id)[0].files[0]);
	console.log(photo_id);
}

function addPhotos() {
	$.each($("#photos-file")[0].files,function(key, input){
		console.log(input);
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
