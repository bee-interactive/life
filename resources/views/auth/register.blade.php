<x-guest-layout>
    <x-auth-card>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-input id="name" placeholder="Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-6">
                <x-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            </div>

            <div class="mt-6">
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
            </div>

            <div class="mt-6">
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="password_confirmation" />
            </div>

            <div class="flex justify-between">
                <div class="block mt-4">
                    <a class="underline underline-offset-2 text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:decoration-life focus:text-life" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </div>

            <div class="flex items-center mt-12">
                <x-button class="w-full rounded-xl shadow-lg text-center py-4 justify-center">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
