<x-app-layout>
    <div class="pt-6 pb-32">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-2 gap-x-5 gap-y-5">
                <div class="rounded-xl bg-white text-gray-900 hover:text-white flex flex-col justify-between hover:bg-life hover:shadow-md custom-shadow p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h2 class="mt-16 font-medium leading-5">Work and business</h2>
                    <p class="pt-2 text-xs text-[#9c9c9e]">{{ rand(0, 124) }} éléments</p>
                </div>
                <div class="rounded-xl bg-white text-gray-900 hover:text-white flex flex-col justify-between hover:bg-life hover:shadow-md custom-shadow p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    <h2 class="mt-16 font-medium leading-5">Inspiration & divers</h2>
                    <p class="pt-2 text-xs text-[#9c9c9e]">{{ rand(0, 124) }} éléments</p>
                </div>
                <div class="rounded-xl bg-white text-gray-900 hover:text-white flex flex-col justify-between hover:bg-life hover:shadow-md custom-shadow p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h2 class="mt-16 font-medium leading-5">Voyages et astuces</h2>
                    <p class="pt-2 text-xs text-[#9c9c9e]">{{ rand(0, 124) }} éléments</p>
                </div>
                <div class="rounded-xl bg-white text-gray-900 hover:text-white flex flex-col justify-between hover:bg-life hover:shadow-md custom-shadow p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <h2 class="mt-16 font-medium leading-5">Maison et ménage</h2>
                    <p class="pt-2 text-xs text-[#9c9c9e]">{{ rand(0, 124) }} éléments</p>
                </div>
                <div class="rounded-xl bg-white text-gray-900 hover:text-white flex flex-col justify-between hover:bg-life hover:shadow-md custom-shadow p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                    <h2 class="mt-16 font-medium leading-5">Mes ressources</h2>
                    <p class="pt-2 text-xs text-[#9c9c9e]">{{ rand(0, 124) }} éléments</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bg-life-gray bottom-0 left-0 right-0">
        <div class="grid grid-cols-3 gap-0 py-4 justify-between items-center">
            <div class="text-right flex justify-start px-8 w-full">
                <a href="/dashboard">
                    <div class="h-8 w-8 text-[#82868a]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="text-center flex justify-center select-none focus:outline-none focus:ring-0">
                <button class="rounded-full bg-life w-14 h-14 text-white text-center flex items-center justify-center select-none focus:outline-none focus:ring-0">
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
