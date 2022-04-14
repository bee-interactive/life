<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <x-input id="email" placeholder="Enter your email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
            </div>

            <div class="flex items-center mt-12">
                <x-button class="w-full rounded-xl shadow-lg text-center py-4 justify-center">
                    {{ __('Get reset link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
