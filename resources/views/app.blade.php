<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Celebes Ocean Fisheries</title>

    <link rel="icon" href="{{ asset('images/logopt.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Trix --}}
    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    @livewireStyles

</head>

<body class="font-montserrat bg-putihsusu flex flex-col min-h-screen">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000, // Durasi animasi (ms)
        once: true, // Hanya animasi sekali
    });
    </script>

    {{-- header --}}
    <x-navbar />

    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- footer --}}
    <x-footer />

    {{-- WhatsApp Popup --}}
    <livewire:whats-app-pop-up />

    @livewireScripts

</body>

</html>
