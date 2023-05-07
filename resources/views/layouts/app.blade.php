<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://freebe.space/img/homepage/favicon_white.ico">
    <!--- Awesomes Fonts --->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css"
    integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h"
    crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="{{ asset('css/jquery/jquery-2.1.1.min.js') }}"></script>
    {{-- <script src="{{ asset('summernote/summernote.js') }}"></script>
    <script src="{{ asset('summernote/lang/summernote-en-GB.js') }}"></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" rel="stylesheet">
    <!-- Styles -->
    {{-- <link href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/toastr/toastr.css') }}">
    <script src="{{ asset('plugins/toastr/toastr.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery/DataTables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/all.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('summernote/summernote.css') }}" rel="stylesheet" /> --}}
{{--    <link href="{{ asset('chosen/chosen.min.css') }}" rel="stylesheet">--}}
 <!-- include summernote css/js-->

    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet">
        <!-- PROGRAMM FOLDER PATH FOR AJAX-->
        <input type="hidden" id="program_folder" name="program_folder" value="{{ asset('') }}">
</head>
<body>
    <div id="app">
		        @include('layouts.header')
		        <main class="main-wrapper pb-4">
		            @yield('content')
		        </main>
		        @include('layouts.copyright')
    </div>

    {{-- <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&region=EN&language=en&libraries=places&callback=initialize" async defer></script>
    <script src="/js/mapInput.js"></script>
    <script src="{{ asset('css/jquery/DataTables/js/jquery.dataTables.min.js') }}"></script>

    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
        // Your custom options
        });
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
{{--
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '755928329356222',
      cookie     : true,
      xfbml      : true,
      version    : 'v16.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v16.0" nonce="L9lHA5Qd"></script>
--}}
    @yield('custom_js')
</body>
</html>
