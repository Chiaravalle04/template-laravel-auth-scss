<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fontawesome 6 cdn -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

        <!-- Usando Vite -->
        @vite(['resources/js/app.js'])
    </head>

    <body>

        <header class="admin d-flex ai-center jc-space-b">

            <a href="/">
                
                <h1>Dashboard</h1>
            
            </a>

            <input type="search" placeholder="Search" aria-label="Search">

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>

        </header>

        <div class="d-flex">

            <aside>

                <nav>

                    <ul>

                        <li>

                            <a class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'link-click' : '' }}" href="{{route('admin.dashboard')}}">
                                <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                            </a>

                        </li>

                    </ul>

                </nav>
        
            </aside>

            <section>

                <main>

                    @yield('content')

                </main>

            </section>

        </div>

    </body>

</html>