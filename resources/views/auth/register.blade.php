<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="p-4 p-md-5 border rounded-3 bg-light">
        @csrf

        <!-- Name -->
        <div class="form-floating mb-3">
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-label for="name" :value="__('Nome')" />
            <x-input-error :messages="$errors->get('name')" class="" />
        </div>

        <!-- Email Address -->
        <div class="form-floating mb-3">
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-label for="email" :value="__('E-mail')" />
            <x-input-error :messages="$errors->get('email')" class="" />
        </div>

        <!-- Password -->
        <div class="form-floating mb-3">
            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-label for="password" :value="__('Senha')" />
            <x-input-error :messages="$errors->get('password')" class="" />
        </div>

        <!-- Confirm Password -->
        <div class="form-floating mb-3">
            <x-text-input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="" />
        </div>

        <div class="">
            <a class="" href="{{ route('login') }}">
                {{ __('Já tenho uma conta') }}
            </a>

            <x-primary-button class="w-100 btn btn-lg btn-primary">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
