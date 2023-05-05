<?php $activePage = 'map';?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                                    <div class="col-12 py-3">
                                        <div class="">
                                            <div class="form-group chevron-field">
                                                <input type="text"
                                                       name="address"
                                                       placeholder="address"
                                                       id="address"
                                                       class="form-control map-input mb-3 d-none"
                                                       value="">
                                                <input type="hidden" name="address_latitude" id="address-latitude" value="52.3675734" />
                                                <input type="hidden" name="address_longitude" id="address-longitude" value="4.9041389" />
                                            </div>
                                        </div>
                                        <div id="address-map-container" style="width:100%;height:800px; ">
                                            <div style="width: 100%; height: 100%" id="address-map"></div>
                                        </div>
                                    </div>
</div>
</div>
@endsection
@section('custom_js')
<script>
 function success(position) {
    const latitude  = position.coords.latitude;
    const longitude = position.coords.longitude;
	$('#address-latitude').val(latitude);
	$('#address-longitude').val(longitude);
  }
  function error() {
	$('#address-latitude').val(52.3675734);
	$('#address-longitude').val(4.9041389);
  }
  if (!navigator.geolocation) {
    console.log('Geolocation не поддерживается вашим браузером');
  } else {
    navigator.geolocation.getCurrentPosition(success, error);
  }
window.onload = function() {
        const latitude = parseFloat(document.getElementById("address-latitude").value) || 48.464717;
        const longitude = parseFloat(document.getElementById("address-longitude").value) || 35.046183;

        const map = new google.maps.Map(document.getElementById('address-map'), {
            center: {lat: latitude, lng: longitude},
            zoom: 13
        });
<?php
  foreach ($posts as $post) {
?>
        var position = new google.maps.LatLng(<?php echo $post->address_latitude; ?>, <?php echo $post->address_longitude; ?>);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: '<?php echo $post->title ?>'+String.fromCharCode(13)+'<?php echo $post->address ?>'
        });
	marker.addListener('click', function() {
		location.href="/post/{{ $post->id }}";
	});
<?php
  }
?>

}

</script>
@endsection
