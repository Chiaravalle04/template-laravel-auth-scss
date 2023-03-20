@extends('layouts.app')

@section('content')

    <div class="main-container d-flex jc-center">

        <div class="register-card">

            <h1>{{ __('Register') }}</h1>
        
            <form method="POST" action="{{ route('register') }}">

                @csrf

                <!--Name-->
                <label for="name">{{ __('Name') }}</label>

                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!--Email-->
                <label for="email">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!--Password-->
                <label for="password">{{ __('Password') }}</label>

                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!--Password Confirm-->
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

                <!--Submit-->
                <button type="submit">
                    {{ __('Register') }}
                </button>

            </form>

        </div>

    </div>
@endsection