<!DOCTYPE html>
<html class="bg-life-gray" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{ mix('css/app.min.css') }}?v={{ filemtime(public_path('css/app.min.css')) }}">

        <script src="{{ mix('js/app.js') }}?v={{ filemtime(public_path('js/app.js')) }}" defer></script>

        <script src="https://kit.fontawesome.com/9476028306.js" crossorigin="anonymous"></script>

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        @if($boards->isEmpty())
            @livewire('app.on-boarding')
        @else
            <div class="min-h-screen bg-life-gray">
                @include('layouts.navigation')

                <main>
                    {{ $slot }}
                </main>
            </div>
        @endif

        @livewireScripts
    </body>
</html>
