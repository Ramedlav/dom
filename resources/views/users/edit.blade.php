@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center bg-all-posts">
        <div class="col-md-8 pt-5">
            <div class="card mt-5">
		<div class="container py-2 d-flex align-items-center">
			<h2 class="css-1q56cn me-3">{{__('Edit user') }}</h2>
		</div>
                <div class="card-body bg-login">
                    <form method="POST" action="{{ route('saveuser') }}">
                        @csrf
                            <input type="hidden" value="{{$user->id}}" name="user_id">

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
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
                            <div class="col-md-6">
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

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email ?? old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="role_id" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                <label><input type="radio" name="role_id" {{ ($user->role_id ?? old('role_id')) == 1?"checked":"" }} value="1">{{ __('Administrator') }}</label><br>
                                <label><input type="radio" name="role_id" {{ ($user->role_id ?? old('role_id')) == 2?"checked":"" }} value="2">{{ __('User') }}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="status_id" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <label><input type="radio" name="status_id" {{ ($user->status_id ?? old('status_id')) == 1?"checked":"" }} value="1">{{ __('Enabled') }}</label><br>
                                <label><input type="radio" name="status_id" {{ ($user->status_id ?? old('status_id')) == 2?"checked":"" }} value="2">{{ __('Disabled') }}</label>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 btn-group py-2 d-flex justify-content-center">
				<div>
	                                <button type="submit" class="btn btn-primary progress-button">{{ __('Save') }}</button>
				</div>
				<div>
					<a class="btn next-button" href="{{ route('users') }}">{{ __('Back') }}</a>
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
