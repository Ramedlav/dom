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
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/all.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('summernote/summernote.css') }}" rel="stylesheet" />

{{--    <link href="{{ asset('chosen/chosen.min.css') }}" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet">
        <!-- PROGRAMM FOLDER PATH FOR AJAX-->
        <input type="hidden" id="program_folder" name="program_folder" value="{{ asset('') }}">
</head>
<body>
    <div id="app">
        @include('layouts.header')
        <main class="py-4">
            @yield('content')
        </main>
    @include('layouts.copyright')
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&region=EN&language=en&libraries=places&callback=initialize" async defer></script>
    <script src="/js/mapInput.js"></script>
    @yield('custom_js')
</body>
</html>
