@extends('layouts.app')

@section('content')
{{-- @php /** @var \App\Models\Post $post */ @endphp --}}
<section class="home-filters-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <button id="navbar-filter"
                                    class="navbar-toggler"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#navbarFilter"
                                    aria-controls="navbarFilter"
                                    aria-expanded="false"
                                    aria-label="{{ __('Toggle navigation') }}">
                                <span>
                                    <i class="fa-solid fa-filter"></i>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarFilter">
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav1 ms-auto1">
                                    <div class="nav-item">
                                        <label class="label-dropdown">{{__('time on freebe')}}</label>
                                        <fieldset>
                                            <div>
                                                <input type="radio" id="all_days" name="days" value="" checked>
                                                <label for="all_days">{{__('show all')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="today" name="days" value="0" >
                                                <label for="today">{{__('today')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="3_day" name="days" value="3">
                                                <label for="3_day">{{__('3 days ago')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="5_day" name="days" value="5">
                                                <label for="5_day">{{__('5 days ago')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="10_day" name="days" value="10">
                                                <label for="10_day">{{__('10 days ago')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="30_day" name="days" value="30">
                                                <label for="30_day">{{__('30 days ago')}}</label>
                                            </div>
                                        </fieldset>
                                        <hr>
                                    </div>
                                    <div class="nav-item">
                                        <label class="label-dropdown">{{__('price from')}}</label>
                                        <select class="form-control" id="from_price" name="from_price" autocomplete="off">
                                            <option selected="" value="0">{{ __('any') }}</option>
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
                                        <hr>
                                    </div>
                                    <div class="nav-item">
                                        <label class="label-dropdown">{{__('number of rooms')}}</label>
                                        <fieldset>
                                            <div>
                                                <input type="radio" id="all_rooms" name="rooms" value="" checked>
                                                <label for="all_rooms">{{__('show all')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="1_rooms" name="rooms" value="1" >
                                                <label for="1_rooms">{{__('1 room')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="2_rooms" name="rooms" value="2">
                                                <label for="2_rooms">{{__('2 rooms')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="3_rooms" name="rooms" value="3">
                                                <label for="3_rooms">{{__('3 rooms')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="4_rooms" name="rooms" value="4">
                                                <label for="4_rooms">{{__('4 rooms')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="5_rooms" name="rooms" value="5">
                                                <label for="5_rooms">{{__('5 rooms')}}</label>
                                            </div>
                                        </fieldset>
                                        <hr>
                                    </div>
                                    <div class="nav-item">
                                        <label class="label-dropdown">{{__('square')}}</label>
                                        <fieldset>
                                            <div>
                                                <input type="radio" id="all_square" name="square" value="" checked>
                                                <label for="all_square">{{__('show all')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="50_m" name="square" value="50" >
                                                <label for="50_m">{{__('50 м² and more')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="75_m" name="square" value="75">
                                                <label for="75_m">{{__('75 м² and more')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="100_m" name="square" value="100">
                                                <label for="100_m">{{__('100 м² and more')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="150_m" name="square" value="150">
                                                <label for="150_m">{{__('150 м² and more')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="200_m" name="square" value="200">
                                                <label for="200_m">{{__('200 м² and more')}}</label>
                                            </div>
                                        </fieldset>
                                        <hr>
                                    </div>
                                    <div class="nav-item">
                                        <label class="label-dropdown">{{__('number of bedrooms')}}</label>
                                        <fieldset>
                                            <div>
                                                <input type="radio" id="all_bedrooms" name="bedrooms" value="" checked>
                                                <label for="all_bedrooms">{{__('show all')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="1_bedrooms" name="bedrooms" value="1" >
                                                <label for="1_bedrooms">{{__('1 bedroom')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="2_bedrooms" name="bedrooms" value="2">
                                                <label for="2_bedrooms">{{__('2 bedrooms')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="3_rooms" name="bedrooms" value="3">
                                                <label for="3_bedrooms">{{__('3 bedrooms')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="4_bedrooms" name="bedrooms" value="4">
                                                <label for="4_bedrooms">{{__('4 bedrooms')}}</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="5_bedrooms" name="bedrooms" value="5">
                                                <label for="5_bedrooms">{{__('5 and more bedrooms')}}</label>
                                            </div>
                                        </fieldset>
                                        <hr>
                                    </div>
                                    <div class="nav-item">
                                        <input type="checkbox" id="garage" name="garage" >
                                        <label for="garage">{{__('garage')}}</label>
                                        <hr/>
                                        <div class="form-control">
                                            <label class="label-dropdown">{{__('free space')}}</label><br/>
                                            <input type="checkbox" id="balcony" name="balcony" >
                                            <label for="balcony">{{__('balcony')}}</label><br/>
                                            <input type="checkbox" id="terrace" name="terrace" >
                                            <label for="terrace">{{__('terrace')}}</label><br/>
                                            <input type="checkbox" id="garden" name="garden" >
                                            <label for="garden">{{__('garden')}}</label><br/>
                                        </div>
                                    <div class="nav-item my-2">
                                        <button class="btn btn-primary w-100" onclick="getFilters()">{{__('Apply')}}</button>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-md-9">
                <div class="" id="gridPosts">
                    @include('gridPosts')

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
<script>
function getFilters() {
	var Data = new FormData();
	Data.append('days',$('input[name=days]:checked').val());
	Data.append('price',$('#from_price').val());
	Data.append('rooms',$('input[name=rooms]:checked').val());
	Data.append('square',$('input[name=square]:checked').val());
	Data.append('bedrooms',$('input[name=bedrooms]:checked').val());
	Data.append('garage', $("#garage").is( ":checked" ) ? 1 : 0);
	Data.append('balcony', $("#balcony").is( ":checked" ) ? 1 : 0);
	Data.append('terrace', $("#terrace").is( ":checked" ) ? 1 : 0);
	Data.append('garden', $("#garden").is( ":checked" ) ? 1 : 0);
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: path + 'filterPosts',
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	        processData: false,
	        contentType: false,
            success: function(data){
                $('#gridPosts').html(data);
		doc_w = $(document).width();
		doc_h = $(document).height();
		if (doc_w < 500) $('#navbar-filter').click();
            },
            error: function(data){
		console.log(data);
            }
        });
}
</script>
