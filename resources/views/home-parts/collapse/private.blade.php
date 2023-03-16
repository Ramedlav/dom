<div class="collapse p-md-3" id="collapsePrivatePostsFilters">
    <div class="card card-body card-filters-collapse">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-2">
                <label>{{__('time on freebe')}}</label>
                <fieldset>
                    <div>
                        <input type="radio" id="all_days" name="days" value="" checked>
                        <label for="all_days">{{__('show all')}}</label>
                    </div>
                    <div>
                        <input type="radio" id="today" name="days" value="today" >
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
            </div>

            <div class="col-12 col-sm-2">
                <label>{{__('number of rooms')}}</label>
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
            </div>


            <div class="col-12 col-sm-2">
                <label>{{__('square')}}</label>
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
            </div>

            <div class="col-12 col-sm-2">
                <label>{{__('number of bedrooms')}}</label>
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
            </div>

            <div class="col-12 col-sm-2">
                <input type="checkbox" id="garage" name="garage" >
                <label for="garage">{{__('garage')}}</label>
                <hr/>
                <div class="form-control">
                    <label>{{__('free space')}}</label><br/>
                    <input type="checkbox" id="balcony" name="balcony" >
                    <label for="balcony">{{__('balcony')}}</label><br/>
                    <input type="checkbox" id="terrace" name="terrace" >
                    <label for="terrace">{{__('terrace')}}</label><br/>
                    <input type="checkbox" id="garden" name="garden" >
                    <label for="garden">{{__('garden')}}</label><br/>
                </div>
            </div>
            {{-- <button type="submit" class="btn btn-primary">{{__('Apply')}}</button> --}}
        </div>
    </div>
</div>
