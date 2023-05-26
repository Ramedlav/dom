@extends('layouts.app')

@section('content')
    <div class="container">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        <h1 class="mb-2 text-left">{{ __('Feedback form') }}</h1>
 
        @if(session('message'))
            <div class='alert alert-success'>
                {{ session('message') }}
            </div>
        @endif
 
        <div class="col-12 col-md-6">
            <form class="form-horizontal2" method="POST" action="/contact">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Name">{{ __('Name') }}</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                </div>
                            @error('name')
                                    <span class="invalid-feedback2" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                            @enderror
 
                <div class="form-group">
                    <label for="email">{{ __('Email') }} </label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                </div>
                            @error('email')
                                    <span class="invalid-feedback2" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                            @enderror
 
                <div class="form-group2">
                    <label for="message">{{ __('message') }} </label>
                    <textarea rows="7" class="form-control" id="message" name="message" required2 style="height: 120px;">{{ old('message') }}</textarea>
                </div>
                            @if($errors->has('message'))
                                    <span class="invalid-feedback2" role="alert">
                                        <strong>{{$errors->first('message')}}</strong>
                                    </span>
                            @endif
 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-2 progress-button" value="Send">{{ __('Send') }}</button>
                </div>
            </form>
        </div>
    </div> <!-- /container -->
@endsection