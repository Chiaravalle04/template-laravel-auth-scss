<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Favicon-->
        <link rel="shortcut icon" href="./public/favicon.ico" type="image/x-icon">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Vite -->
        @vite(['resources/js/app.js'])
    </head>

    <body>

        <header>

            <div class="main-container">

                <nav class="d-flex jc-space-b ai-center">
        
                    <!-- Left Side Of Navbar -->
                    <ul>

                        <li>

                            <a href="{{url('/') }}">{{ __('Home') }}</a>

                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="d-flex">

                        <!-- Authentication Links -->
                        @guest
                        
                        <li class="login-register">

                            <a href="{{ route('login') }}">{{ __('Login') }}</a>

                        </li>

                        @if (Route::has('register'))

                        <li class="login-register">

                            <a href="{{ route('register') }}">{{ __('Register') }}</a>

                        </li>

                        @endif

                        @else

                        <li>

                            <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div aria-labelledby="navbarDropdown">

                                <a href="{{ route('admin.dashboard') }}">{{__('Dashboard')}}</a>

                                <a href="{{ url('profile') }}">{{__('Profile')}}</a>

                                <a href="{{ route('logout') }}" onclick="event.preventDefault();

                                                    document.getElementById('logout-form').submit();">

                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>

                        </li>

                        @endguest

                    </ul>

                </nav>

            </div>
            
        </header>

        <main>

            @yield('content')

        </main>

    </body>

</html>