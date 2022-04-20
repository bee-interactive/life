<x-app-layout>
    <div class="pt-6 pb-32">
        <div class="max-w-7xl mx-auto px-8">
            <div class="mb-8">
                <x-input id="search" placeholder="Search for anything that you have saved" class="block w-full" type="text" name="search" :value="old('search')" required autocomplete="search" />
            </div>

            <div class="grid grid-cols-2 gap-x-5 gap-y-5">
                @foreach(auth()->user()->boards as $board)
                    <a href="{{ $board->path() }}" class="rounded-xl bg-white text-gray-900 group flex flex-col justify-between hover:bg-life hover:shadow-md custom-shadow p-5">
                        <i class="h-6 w-6 group-hover:text-white {{ $board->icon }}"></i>
                        <h2 class="mt-16 font-medium leading-5 group-hover:text-white">{{ $board->name }}</h2>
                        <p class="pt-2 text-xs text-[#9c9c9e] group-hover:text-white">{{ $board->countBookmarks() }}</p>
                    </a>
                @endforeach

                <a href="{{ route('boards.create') }}" class="rounded-xl bg-transparent text-center text-gray-500 border-4 items-center border-gray-400/50 border-dashed group flex justify-center hover:border-life/90 hover:bg-gray-100 custom-shadow p-5">
                    <h2 class="font-medium leading-5 group-hover:text-life">Add a<br>new board</h2>
                </a>
            </div>
        </div>
    </div>

    <div class="fixed bg-white/50 rounded-t-xl shadow-lg backdrop-blur-sm bottom-0 left-0 right-0">
        <div class="grid grid-cols-3 gap-0 py-3 justify-between items-center">
            <div class="text-right flex justify-start px-8 w-full">
                <a href="/dashboard">
                    <div class="h-8 w-8 text-[#82868a]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="text-center -mt-8 flex justify-center select-none focus:outline-none focus:ring-0">
                <button class="rounded-full shadow-lg shadow-life/50 bg-life w-14 h-14 text-white text-center flex items-center justify-center select-none focus:outline-none focus:ring-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 select-none focus:outline-none focus:ring-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
            <div class="text-right flex justify-end px-8 w-full">
                <div class="h-8 w-8 text-[#82868a]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
