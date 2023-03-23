<section>

    <header>

        <h2>{{ __('Update Password') }}</h2>

        <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf

        @method('put')

        <label for="current_password">{{__('Current Password')}}</label>
        
        <input type="password" name="current_password" id="current_password" autocomplete="current-password">
       
        @error('current_password')
            <span class="invalid-feedback mt-2" role="alert">
                <strong>{{ $errors->updatePassword->get('current_password') }}</strong>
            </span>
        @enderror

        <label for="password">{{__('New Password')}}</label>

        <input type="password" name="password" id="password" autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback mt-2" role="alert">
                <strong>{{ $errors->updatePassword->get('password')}}</strong>
            </span>
        @enderror


        <label for="password_confirmation">{{__('Confirm Password')}}</label>

        <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password">
        
        @error('password_confirmation')
            <span class="invalid-feedback mt-2" role="alert">
                <strong>{{ $errors->updatePassword->get('password_confirmation')}}</strong>
            </span>
        @enderror

        <button type="submit">{{ __('Save') }}</button>

        @if (session('status') === 'password-updated')
            <script>
                const show = true;
                setTimeout(() => show = false, 2000)
                const el = document.getElementById('status')
                if (show) {
                    el.style.display = 'block';
                }
            </script>
            <p id='status' class=" fs-5 text-muted">{{ __('Saved.') }}</p>
        @endif

    </form>

</section>