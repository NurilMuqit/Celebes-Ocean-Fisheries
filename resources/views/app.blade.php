<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Celebes Ocean Fisheries</title>

    <link rel="icon" href="{{ asset('images/logopt.png') }}" type="image/png">

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Trix --}}
    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    @livewireStyles

</head>

<body class="font-montserrat bg-putihsusu flex flex-col min-h-screen">

    {{-- header --}}
    <x-navbar />

    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- footer --}}
    <x-footer />

    {{-- WhatsApp Popup --}}
    <livewire:whats-app-popup />

    @livewireScripts

</body>

</html>
