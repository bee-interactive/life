<x-app-layout>
    <div class="pt-6 pb-32">
        <div class="max-w-7xl mx-auto px-8">
            <h2 class="font-medium mb-4 leading-5 group-hover:text-white">Add a new board</h2>

            <form method="POST" action="{{ route('boards.store') }}">
                @csrf

                <div class="mb-6">
                    <x-input id="name" placeholder="Enter the board name" class="block w-full" type="text" name="name" :value="old('name')" required autocomplete="name" />
                </div>

                <div class="mb-6">
                    <x-input id="icon" placeholder="Choose an icon" class="block w-full" type="text" name="icon" :value="old('icon')" required autocomplete="icon" />
                </div>

                <div class="mb-4">
                    <x-input id="color" placeholder="Choose a color" class="block w-full" type="text" name="color" :value="old('color')" required autocomplete="color" />
                </div>

                <div class="flex items-center mt-12">
                    <x-button class="w-full rounded-xl shadow-lg text-center py-4 justify-center">
                        {{ __('Save') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
