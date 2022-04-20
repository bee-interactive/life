<x-app-layout>
    <div class="pt-6 pb-32">
        <div class="max-w-7xl mx-auto px-8">
            <h2 class="font-medium mb-2 text-center leading-5 group-hover:text-white">{{ $board->name }}</h2>
            <p class="text-center mb-4">{{ $board->countBookmarks() }}</p>
        </div>
    </div>
</x-app-layout>
