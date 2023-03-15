<div class="tab-pane  fade show active"
     id="home-private-filters"
     role="tabpanel"
     aria-labelledby="private-filters">
    <div class="d-sm-flex">
        <div class="col-sm-8 pe-sm-4">
            <div class="form-group mb-2">
                {{-- <label for="address">{{ __('address') }}</label> --}}
                <input type="text"
                        name="address"
                        placeholder="address"
                        id="address"
                        class="form-control map-input mb-2"
                        value="{{ $post->address ?? old('address') }}" >
                @foreach($posts as $post)
                    <input type="hidden" name="address_latitude" id="address-latitude" value=" {{ $post->address_latitude }} " />
                    <input type="hidden" name="address_longitude" id="address-longitude" value=" {{ $post->address_longitude }} " />
                @endforeach

            </div>
            <div id="address-map-container" style="width:100%;height:200px;" class="d-none">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>

            <div class="form-group mb-2">
                <label for="from_price">from</label>
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
            <div class="form-group mb-2">
                <label for="to_price">to</label>
                <select class="form-control" id="to_price" name="to_price" autocomplete="off">
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
        </div>
        <div class="col-sm-4">
            <div class="form-group mb-2">
                <select class="form-control">
                    <option selected="">{{__('Rent')}}</option>
                    <option>{{__('Buy')}}</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="city-km">distance</label>
                <select name="filter_km" id="city-km" autocomplete="off" class="form-control">
                    <option selected="" value="0">+ 0 km</option>
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
            <div class="form-group">
                <label for="">search button</label>
                <button  class="btn  btn-block w-100 next-button p-o" type="submit">
                    <div class="d-flex justify-content-center">
                        {{ __('Search') }}:&nbsp;
                        <div id="result" class="">
                        </div>
                        <p class="mb-0">&nbsp;{{ __('posts') }}</p>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
