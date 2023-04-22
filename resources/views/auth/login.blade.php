<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="font-semibold text-sm text-gray-600 hover:text-primary-600" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <div class="flex flex-row flex-grow mt-6">
                <x-button class="w-full justify-center">{{ __('Log in') }}</x-button>
            </div>

            <div class="flex items-center justify-between mt-6 mb-4">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="font-semibold text-sm text-gray-700 hover:text-primary-600">Register</a>
                @endif

                <div class="py-sm flex gap-x-3">
                    <div class="text-sm text-gray-600">Sign in with:</div>

                    <a href="{{ route('socialite.redirect', ['driver' => 'github']) }}" class="hover:text-primary-500" title="Github">
                        <i class="fa-brands fa-github"></i>
                    </a>

                    <a href="{{ route('socialite.redirect', ['driver' => 'google']) }}" class="hover:text-primary-500" title="Google">
                        <i class="fa-brands fa-google"></i>
                    </a>

                    <a href="{{ route('socialite.redirect', ['driver' => 'facebook']) }}" class="hover:text-primary-500" title="Facebook">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
