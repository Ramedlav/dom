<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="{{ asset('css/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('summernote/summernote.js') }}"></script>
    <script src="{{ asset('summernote/lang/summernote-en-GB.js') }}"></script>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.css' rel='stylesheet' />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('summernote/summernote.css') }}" rel="stylesheet" />

    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.css' rel='stylesheet' />

{{--    <link href="{{ asset('chosen/chosen.min.css') }}" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet">
        <!-- PROGRAMM FOLDER PATH FOR AJAX-->
        <input type="hidden" id="program_folder" name="program_folder" value="{{ asset('') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  main-header py-0">
            <div class="container h-100">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://statics.otodom.pl/fp_statics/images/logo/otodom_logo_2021_white.svg" width="153" height="35" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <div>
                                        <svg aria-hidden="true"
                                                focusable="false"
                                                data-prefix="far"
                                                data-icon="user"
                                                class="svg-inline--fa fa-user fa-w-14 "
                                                role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path>
                                        </svg>
                                        {{ Auth::user()->name }}
                                    </div>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('home') }}">{{ __('Home') }}</a>
                                    <a class="dropdown-item" href="{{ route('createCreateForm') }}">{{ __('New post') }}</a>
                                    <a class="dropdown-item" href="{{ route('showAll') }}">{{ __('All posts') }}</a>
                                    <a class="dropdown-item" href="{{ route('showMy') }}">{{ __('My posts') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script>
    //  $(document).ready(function () {
    //      $("#latitudeArea").addClass("d-none");
    //      $("#longtitudeArea").addClass("d-none");
    //  });
    </script>
    <script>
    function initialize() {

    // $('form').on('keyup keypress', function(e) {
    //     var keyCode = e.keyCode || e.which;
    //     if (keyCode === 13) {
    //         e.preventDefault();
    //         return false;
    //     }
    // });
    const locationInputs = document.getElementsByClassName("map-input");

    const autocompletes = [];
    const geocoder = new google.maps.Geocoder;
    for (let i = 0; i < locationInputs.length; i++) {

        const input = locationInputs[i];
        const fieldKey = input.id.replace("-input", "");
        const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';

        const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || 48.464717;
        const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 35.046183;

        const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
            center: {lat: latitude, lng: longitude},
            zoom: 13
        });
        const marker = new google.maps.Marker({
            map: map,
            position: {lat: latitude, lng: longitude},
        });

        marker.setVisible(isEdit);

        const autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.key = fieldKey;
        autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
    }

    for (let i = 0; i < autocompletes.length; i++) {
        const input = autocompletes[i].input;
        const autocomplete = autocompletes[i].autocomplete;
        const map = autocompletes[i].map;
        const marker = autocompletes[i].marker;

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            marker.setVisible(false);
            const place = autocomplete.getPlace();

            geocoder.geocode({'placeId': place.place_id}, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    const lat = results[0].geometry.location.lat();
                    const lng = results[0].geometry.location.lng();
                    setLocationCoordinates(autocomplete.key, lat, lng);
                }
            });

            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                input.value = "";
                return;
            }

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

        });
    }
    }

    function setLocationCoordinates(key, lat, lng) {
    const latitudeField = document.getElementById(key + "-" + "latitude");
    const longitudeField = document.getElementById(key + "-" + "longitude");
    latitudeField.value = lat;
    longitudeField.value = lng;
    }
    </script>
</body>
</html>
