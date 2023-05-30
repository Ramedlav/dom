@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-5">
            <div class="card mt-4">
		<div class="container py-2 d-flex align-items-center">
			<h2 class="css-1q56cn">{{__('Users') }}</h2>
		</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
		<div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label d-flex align-items-center mb-1" for="filter_name">{{ __('Name') }}</label>
			    <input type="text" value="" class="form-control" id="filter_name">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label d-flex align-items-center mb-1" for="filter_phone">{{ __('Phone') }}</label>
			    <input type="text" value="" class="form-control" id="filter_phone">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label d-flex align-items-center mb-1" for="filter_phone">{{ __('Email') }}</label>
			    <input type="text" value="" class="form-control" id="filter_email">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label d-flex align-items-center mb-1" for="filter_role_id">{{ __('Role') }}</label>
                            <select id="filter_role_id" name="filter_role_id" class="form-control form-select">
                                <option value="0">{{ __('show all') }}</option>
                                <option value="1">{{ __('Administrator') }}</option>
                                <option value="2">{{ __('User') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label d-flex align-items-center mb-1" for="filter_status_id">{{ __('Status') }}</label>
                            <select id="filter_status_id" name="filter_status_id" class="form-control form-select">
                                <option value="0">{{ __('show all') }}</option>
                                <option value="1">{{ __('Enabled') }}</option>
                                <option value="2">{{ __('Disabled') }}</option>
                            </select>
                        </div>
                    </div>
                                    <div class="col-md-2 py-2 d-flex justify-content-center">
				        <div>
                                	        <button type="button" class="btn btn-default progress-button" title="{{ __('Search') }}" onclick="listusers()">
							<svg height="24px" width="24px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M448.3,424.7L335,311.3c20.8-26,33.3-59.1,33.3-95.1c0-84.1-68.1-152.2-152-152.2c-84,0-152,68.2-152,152.2  s68.1,152.2,152,152.2c36.2,0,69.4-12.7,95.5-33.8L425,448L448.3,424.7z M120.1,312.6c-25.7-25.7-39.8-59.9-39.8-96.3  s14.2-70.6,39.8-96.3S180,80,216.3,80c36.3,0,70.5,14.2,96.2,39.9s39.8,59.9,39.8,96.3s-14.2,70.6-39.8,96.3  c-25.7,25.7-59.9,39.9-96.2,39.9C180,352.5,145.8,338.3,120.1,312.6z"/></svg>
						</button>
					</div>
				        <div>
						<button class="btn btn-warning next-button py-2"  title="{{ __('Clear filter') }}" onclick="clearFilter()">
							<svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M2.21151 13.8205C2.35815 13.9402 2.54146 14 2.76142 14C3.12239 14 3.37056 13.8124 3.50592 13.4371L4.58037 10.5167H9.41117L10.4941 13.4371C10.6294 13.8124 10.8776 14 11.2386 14C11.4585 14 11.639 13.9402 11.78 13.8205C11.9267 13.6954 12 13.5404 12 13.3555C12 13.2468 11.969 13.1108 11.9069 12.9477L7.97293 2.70156C7.79244 2.23385 7.47377 2 7.01692 2C6.53187 2 6.1991 2.23657 6.01861 2.70972L2.09306 12.9477C2.03102 13.1108 2 13.2468 2 13.3555C2 13.5404 2.0705 13.6954 2.21151 13.8205ZM8.9797 9.26852H5.0203L6.97462 3.90075H7.02538L8.9797 9.26852ZM13 13.1053L14.7485 11.3568C14.5186 10.8745 14.4037 10.3005 14.4037 9.63489C14.4037 8.70453 14.6308 7.95267 15.0852 7.37931C15.545 6.80054 16.1346 6.51116 16.854 6.51116C17.6004 6.51116 18.19 6.79243 18.6227 7.35497C18.9793 7.81848 19.1889 8.41603 19.2517 9.14762C19.6763 9.28718 20.0754 9.52574 20.4131 9.86347L20.6987 10.149C20.7102 9.98232 20.716 9.81094 20.716 9.63489C20.716 8.31508 20.3888 7.25761 19.7343 6.46247C19.0798 5.66734 18.2197 5.26978 17.1542 5.26978C16.5646 5.26978 16.0318 5.40771 15.5558 5.68357C15.0852 5.95943 14.7147 6.34077 14.4442 6.82759H14.4118V2.75456C14.4118 2.53279 14.3442 2.35159 14.2089 2.21095C14.0791 2.07032 13.9114 2 13.7059 2C13.5003 2 13.33 2.07032 13.1947 2.21095C13.0649 2.35159 13 2.53279 13 2.75456V13.1053ZM16.9815 21.5001H20.0019C20.4161 21.5001 20.7519 21.8358 20.7519 22.2501C20.7519 22.6643 20.4161 23.0001 20.0019 23.0001H14.5005L14.5029 22.9927C14.0622 22.9544 13.6321 22.7667 13.2949 22.4296L10.571 19.7056C9.80965 18.9443 9.81042 17.7091 10.5727 16.9468L16.9473 10.5723C17.7095 9.80999 18.9447 9.80923 19.706 10.5706L22.43 13.2945C23.1913 14.0559 23.1906 15.291 22.4283 16.0533L16.9815 21.5001ZM18.0079 11.6329L13.851 15.7899L17.2107 19.1495L21.3676 14.9926C21.5453 14.8149 21.5436 14.5295 21.3693 14.3552L18.6454 11.6312C18.471 11.4569 18.1856 11.4552 18.0079 11.6329ZM12.7903 16.8505L11.6334 18.0075C11.4556 18.1852 11.4573 18.4706 11.6317 18.6449L14.3556 21.3689C14.5299 21.5432 14.8153 21.5449 14.9931 21.3672L16.15 20.2102L12.7903 16.8505Z" fill="#212121"/></svg>
						</button>
					</div>

                                    </div>
		</div>
                </div>
            </div>
                <div class="card-body">
			<div id="listusers" class="py-2"></div>
		</div>
        </div>
    </div>
</div>
@endsection
<script>
window.onload = function() {
	listusers();
}

function listusers() {
	name=$("#filter_name").val();
	phone=$("#filter_phone").val();
	email=$("#filter_email").val();
	role_id=$("#filter_role_id").val();
	status_id=$("#filter_status_id").val();
	Data = new FormData();
	Data.append('name',name);
	Data.append('phone',phone);
	Data.append('email',email);
	Data.append('role_id',role_id);
	Data.append('status_id',status_id);
        var path = $('#program_folder').val();
        $.ajax({
            type: 'POST',
            url: path + 'users/listusers',
            data: Data,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
	    processData: false,
	    contentType: false,
            success: function(data){
                $('#listusers').html(data);
		setDataTable();
            },
            error: function(data){
		console.log(data);
            }
        });
}

function clearFilter() {
        $('#filter_name').val('');
        $('#filter_phone').val('');
        $('#filter_email').val('');
        $('#filter_status_id').val('0');
        $('#filter_status_id').change();
        $('#filter_role_id').val('0');
        $('#filter_role_id').change();
        
        listusers();
    }

function setDataTable() {
	$(".tablesorted").dataTable({
		language: {
			"url" : "{{ asset('css/jquery/DataTables/lang/') }}/{{ app()->getLocale() }}.json",
		}
	});
}
</script>

