<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="p-4 p-md-5 border rounded-3 bg-light">
        @csrf

        <!-- Email Address -->
        <div class="form-floating mb-3">
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-label for="email" :value="__('Email')" />
            <x-input-error :messages="$errors->get('email')" class="" />
        </div>

        <!-- Password -->
        <div class="form-floating mb-3">
            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-label for="password" :value="__('Password')" />
            <x-input-error :messages="$errors->get('password')" class="" />
        </div>

        <!-- Remember Me -->
        <div class="checkbox mb-3">
            <label for="remember_me" class="">
                <input id="remember_me" type="checkbox" class="" name="remember">
                <span class="">{{ __('Permanecer conectado') }}</span>
            </label>
        </div>

        <div class="">
            <!-- @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif -->

            <x-primary-button class="w-100 btn btn-lg btn-primary">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
