<nav class="navbar navbar-expand-md navbar-light  main-header py-0">
    <div class="container h-100">
        <a class="navbar-brand" href="{{ url('/') }}">
            <div  width="153" height="35" class="text-white">
                LOGO
            </div>

            {{-- <img src="https://statics.otodom.pl/fp_statics/images/logo/otodom_logo_2021_white.svg" width="153" height="35" alt=""> --}}
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
                            <a class="dropdown-item" href="{{ route('ShowDialogs') }}">{{ __('My dialogs') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
		<li class="nav-item dropdown">
                        <a id="langDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <div>
                                <img class="img-thumbnail1" src="{{ asset('/storage/flags/' . App()->getLocale().'.png' ) }}">
                            </div>

                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
				<a class="dropdown-item" href="{{ route('locale', 'en') }}"><img src="{{ asset('/storage/flags/en.png' ) }}"> English</a>
				<a class="dropdown-item" href="{{ route('locale', 'pl') }}"><img src="{{ asset('/storage/flags/pl.png' ) }}"> Polska</a>
				<a class="dropdown-item" href="{{ route('locale', 'nl') }}"><img src="{{ asset('/storage/flags/nl.png' ) }}"> Nederlands</a>
				<a class="dropdown-item" href="{{ route('locale', 'ua') }}"><img src="{{ asset('/storage/flags/ua.png' ) }}"> Українська</a>
                        </div>
		</li>
            </ul>
        </div>
    </div>
</nav>
