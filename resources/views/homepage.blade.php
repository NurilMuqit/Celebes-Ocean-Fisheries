<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-montserrat">

    {{-- Navbar --}}
    <header class="bg-white">
        <nav class=" bg-biru mx-auto flex rounded-b-lg justify-between p-6 lg:px-8">
            <div class="flex items-center ml-5">
                <a href="#">
                    {{-- ganti ke logo --}}
                    <h1 class=" font-bold">LOGO</h1>
                </a>
            </div>
            <div class="flex flex-row space-x-32 text-putihsusu font-semibold mr-20">
                <a href="#home" class="hover:text-gray-300">Home</a>
                <a href="#products" class="hover:text-gray-300">Products</a>
                <a href="#about" class="hover:text-gray-300">About Us</a>
            </div>
        </nav>
    </header>

    {{-- Hero --}}
    <section id="home" class="bg-cover bg-center h-screen flex items-center"
        style="background-image: url('{{ asset('images/dummy.png') }}');">
        <div class="container mx-auto text-center">
            {{-- ganti ke logo --}}
            <h1 class="font-bold">LOGO</h1>
            <h1 class="text-biru font-bold text-5xl text-shadow-xl mb-2">Celebes Ocean Fisheries</h1>
            <p class="text-biru text-lg max-w-6xl mx-auto">Celebes Ocean Fisheries adalah sebuah
                perusahaan Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </section>

    {{-- Products --}}
    <section id="products" class="bg-white py-20">
        <div class="container mx-auto text-center">

            <h1 class="text-biru font-bold text-5xl mb-5 text-shadow-xl">Products</h1>
            <p class="text-biru text-lg mb-5 max-w-7xl mx-auto">Celebes Ocean Fisheries memiliki spesialisasi di bidang
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 m-5">
                <div class="bg-gray-100 rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="product" class="object-cover rounded-lg">
                    <h1 class="text-blue-500 text-lg mt-4 text-center">Product No 1</h1>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="product" class="object-cover rounded-lg">
                    <h1 class="text-blue-500 text-lg mt-4 text-center">Product No 2</h1>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="product" class="object-cover rounded-lg">
                    <h1 class="text-blue-500 text-lg mt-4 text-center">Product No 3</h1>
                </div>
            </div>


        </div>

</body>

</html>
