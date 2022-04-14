<x-guest-layout>
    <x-auth-card>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input id="email" placeholder="Enter your email" class="block w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
            </div>

            <div class="mt-6">
                <x-input id="password" class="block w-full" type="password" name="password" placeholder="Enter your password" required autocomplete="current-password" />
            </div>

            <div class="flex justify-between">
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-life shadow-sm focus:border-life focus:ring-2 focus:ring-life focus:ring-opacity-90" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <div class="mt-4">
                        <a class="underline underline-offset-2 text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:decoration-life focus:text-life" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                @endif
            </div>

            <div class="flex items-center mt-12">
                <x-button class="w-full rounded-xl shadow-lg text-center py-4 justify-center">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
