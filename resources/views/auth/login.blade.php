@extends('layouts.app')

@section('content')

    <div class="main-container">

        <div class="login-card">

            <h1>{{ __('Login') }}</h1>
        
            <form method="POST" action="{{ route('login') }}">

                @csrf
    
                <!--Email-->
                <label for="email">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!--Password-->
                <label for="password">{{ __('Password') }}</label>

                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!--Checkbox-->
                <div class="checkbox-container d-flex ai-center">

                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">{{ __('Remember Me') }}</label>

                </div>

                <!--Submit-->
                <button type="submit">{{ __('Login') }}</button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </form>

        </div>

    </div>

@endsection