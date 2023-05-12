@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center bg-all-posts">
        <div class="col-md-8 pt-5">
            <div class="card mt-5">
		<div class="container py-2 d-flex align-items-center">
			<h2 class="css-1q56cn me-3">{{__('My profile') }}</h2>
		</div>
                <div class="card-body bg-login">
                    <form method="POST" action="{{ route('saveprofile') }}">
                        @csrf
                            <input type="hidden" value="{{$user->id}}" name="user_id">

                        <div class="row">
			<div class="col-md-8">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name ?? old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                            <div class="col-md-8">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone ?? old('phone') }}" autocomplete="phone" >

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email ?? old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
			</div>
			<div class="col-md-4 mb-3 text-center thumb form-group">
				<a href="#">
					<img class="img-fluid" src="{{ asset('/storage/usersphoto') }}/{{$user->id}}{{$user->logo}}" onclick="clickUpdatePhoto(event, {{ $user->id }});">
					<div class="css-1quvv2t-mp">
						<a class="css-qczclw edit-link-icon me-2 mt-0"
							href="#"
							onclick="clickUpdatePhoto(event, {{ $user->id }});"
							title="{{ __('Update photo') }}">
							<img src="/img/icons/edit-square-outline.svg">
						</a>
						<a class="css-qczclw delete-link-icon me-2"
							href="#"
							onclick="clickDeletePhoto(event, {{ $user->id }});"
							title="{{ __('Delete photo') }}">
							<img src="/img/icons/delete-outline.svg">
						</a>
					</div>
				</a>
				<input name="file-{{ $user->id }}[]" type="file" id="photo-file-{{ $user->id }}" class="input input__file" onchange="updatePhoto({{ $user->id }})" accept="image/*">
			</div>
			</div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary progress-button">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
<script>
function updatePhoto(user_id) {
	f=$("#photo-file-"+user_id)[0].files;
	Data = new FormData();
	Data.append('user_id', user_id);
	$(f).each(function(index, file) {
		Data.append('file[]',file);
	});

        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: path + 'updateuserphoto',
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
		location.reload();
            },
            error: function(data){
		console.log(data);
            }
        });
}

function clickUpdatePhoto(events, user_id) {
	events.preventDefault();
	$('#photo-file-'+user_id).click();
}
function clickDeletePhoto(events, user_id) {
	events.preventDefault();
	Data = new FormData();
	Data.append('user_id', user_id);
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: path + 'deleteuserphoto',
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
		location.reload();
            },
            error: function(data){
		console.log(data);
            }
        });
}
</script>