@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="row">
        <div class="col-12">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div id="slide_1" class="carousel-item active">
                        <img src="/img/c-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div id="slide_2" class="carousel-item">
                        <img src="/img/c-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div id="slide_3" class="carousel-item">
                        <img src="/img/c-3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="left carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Предыдущий</span>
                </a>
                <a class="right carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Следующий</span>
                </a>
            </div>
        </div>
    </div>

        <div class="col-12">
            <div class="card">
                <div class="post-header p-2 m-2">
			<form action="{{ route('home_filters') }}" method="POST">
                        @csrf
			<div class="row">
				<div class="col-sm-6">
				  <input type="text" name="city" placeholder="{{ __('City, address, etc') }}" value="" class="form-control" id="input-city" />
				  <div id="city-box"></div>
				</div>
				<div class="col-sm-2">
					<select name="filter_km" id="city-km" autocomplete="off" class="form-control">
						<option value="0">+ 0 km</option>
						<option value="1">+ 1 km</option>
						<option value="2">+ 2 km</option>
						<option value="5">+ 5 km</option>
						<option value="10">+ 10 km</option>
						<option value="15">+ 15 km</option>
						<option value="30">+ 30 km</option>
						<option value="50">+ 50 km</option>
						<option value="100">+ 100 km</option>
					</select>
				</div>
				<div class="col-sm-2">
		<select class="form-control" id="from_price" name="from_price" autocomplete="off">
                    <option selected="" value="0">€ 0</option>
                    <option value="50000">€ 50.000</option>
                    <option value="75000">€ 75.000</option>
                    <option value="100000">€ 100.000</option>
                    <option value="125000">€ 125.000</option>
                    <option value="150000">€ 150.000</option>
                    <option value="175000">€ 175.000</option>
                    <option value="200000">€ 200.000</option>
                    <option value="225000">€ 225.000</option>
                    <option value="250000">€ 250.000</option>
                    <option value="275000">€ 275.000</option>
                    <option value="300000">€ 300.000</option>
                    <option value="325000">€ 325.000</option>
                    <option value="350000">€ 350.000</option>
                    <option value="375000">€ 375.000</option>
                    <option value="400000">€ 400.000</option>
                    <option value="450000">€ 450.000</option>
                    <option value="500000">€ 500.000</option>
                    <option value="550000">€ 550.000</option>
                    <option value="600000">€ 600.000</option>
                    <option value="650000">€ 650.000</option>
                    <option value="700000">€ 700.000</option>
                    <option value="750000">€ 750.000</option>
                    <option value="800000">€ 800.000</option>
                    <option value="900000">€ 900.000</option>
                    <option value="1000000">€ 1.000.000</option>
                    <option value="1250000">€ 1.250.000</option>
                    <option value="1500000">€ 1.500.000</option>
                    <option value="2000000">€ 2.000.000</option>
                    <option value="2500000">€ 2.500.000</option>
                    <option value="3000000">€ 3.000.000</option>
                    <option value="3500000">€ 3.500.000</option>
                    <option value="4000000">€ 4.000.000</option>
                    <option value="4500000">€ 4.500.000</option>
                    <option value="5000000">€ 5.000.000</option>
		</select>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-primary btn-block w-100" type="submit">{{ __('Search') }}</button>
				</div>
			</div>
		</div>
		</form>
            </div>
            <div class="card p-2 my-2">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Chto to nado vyvesti))))))') }}
                </div>
            </div>
        </div>
    </div>
                @include('layouts.copyright')

</div>
@endsection


<script>
// AJAX call for autocomplete 
document.addEventListener("DOMContentLoaded", function(){
	$("#input-city").keyup(function(e){
        var path = $('#program_folder').val();
	if (e.keyCode === 27) {         
		$('#city-box').hide();
	} else {
		Data = new FormData();
		Data.append('keyword',$(this).val());
		
		$.ajax({
		type: "POST",
		url: path + 'getcity',
		headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
		processData: false,
		contentType: false,
		data: Data,
		success: function(data){
			$("#city-box").show();
			$("#city-box").html(data);
		}
		});
	}
	});
});
function selectCity(val) {
	$("#input-city").val(val);
	$("#city-box").hide();
}
</script>
