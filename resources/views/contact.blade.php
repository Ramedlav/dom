@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center bg-all-posts">
        <div class="col-md-8 pt-5">
		<div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
			{{ __('Thank you for your feedback! Your message has been successfully sent to the site administrator!') }}
		</div>
            <div class="card mt-5">
		<div class="container py-2 d-flex align-items-center">
			<h2 class="css-1q56cn me-3">{{__('Feedback form') }}</h2>
		</div>

                <div class="card-body bg-login">
                    <form2 method="POST" action="/contact">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? (Auth::check()?Auth::user()->name:'') }}" autocomplete="name" autofocus>
                                    <span class="invalid-feedback" role="alert" id="errorName"></span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') ?? (Auth::check()?Auth::user()->email:'') }}" autocomplete="email">
                                    <span class="invalid-feedback" role="alert" id="errorEmail"></span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label text-md-end">{{ __('message') }}</label>

                            <div class="col-md-6">
				<textarea rows="7" class="form-control" id="message" name="message" style="height: 120px;">{{ old('message') }}</textarea>
                                    <span class="invalid-feedback" role="alert" id="errorMessage"></span>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary progress-button" onclick="sendMessage()">
                                    {{ __('send') }}
                                </button>
                            </div>
                        </div>
                    </form2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
function sendMessage() {
	var form_data = new FormData();
	form_data.append('name', $('#name').val());
	form_data.append('email', $('#email').val());
	form_data.append('message', $('#message').val());
            $.ajax({
                url:"/contact",
                method: 'post',
                data:form_data,
		headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	        processData: false,
	        contentType: false,
                success:function(data)
                {
		        $('#successMsg').show();
			$('#errorName').html('');
			$('#name').removeClass('is-invalid');
			$('#errorEmail').html('');
			$('#email').removeClass('is-invalid');
			$('#errorMessage').html('');
			$('#message').removeClass('is-invalid');
                },
                error: function(data){
			if (data.responseJSON.errors.name) {
				$('#errorName').html('<strong>'+data.responseJSON.errors.name+'</strong>');
				$('#name').addClass('is-invalid');
			} else {
				$('#errorName').html('');
				$('#name').removeClass('is-invalid');
			}
			if (data.responseJSON.errors.email) {
				$('#errorEmail').html('<strong>'+data.responseJSON.errors.email+'</strong>');
				$('#email').addClass('is-invalid');
			} else {
				$('#errorEmail').html('');
				$('#email').removeClass('is-invalid');
			}
			if (data.responseJSON.errors.message) {
				$('#errorMessage').html('<strong>'+data.responseJSON.errors.message+'</strong>');
				$('#message').addClass('is-invalid');
			} else {
				$('#errorMessage').html('');
				$('#message').removeClass('is-invalid');
			}
                }
            });
}
</script>