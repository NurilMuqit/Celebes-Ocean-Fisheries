@extends('app')

@section('title', 'Homepage')

@section('content')
    {{-- Hero --}}
    <section id="home" class="bg-cover bg-center h-screen flex items-center"
        style="background-image: url('{{ asset('images/dummy.png') }}');">
        <div class="container mx-auto text-center">
            <h1 class="font-bold">LOGO</h1>
            <h1 class="text-white font-bold text-4xl text-shadow-xl mb-2">Celebes Ocean Fisheries</h1>
            <p class="text-white text-xl max-w-6xl mx-auto italic mb-1">Suplying Across the Globe</p>
            <p class="text-white text-xl max-w-6xl mx-auto font-bold">SEAFOOD PROCESSOR EXPERT & EXPORTER</p>
        </div>
    </section>

    {{-- Products --}}
    <section id="products" class="bg-biru py-20">
        <div class="container mx-auto text-center">

            <h1 class="text-putihsusu font-bold text-3xl mb-5 text-shadow-xl">Products</h1>
            <p class="text-putihsusu text-lg mb-5 max-w-7xl mx-auto">We provide fresh and frozen fishery products <br>
                All of
                our frozen and fresh fishery products are <b>caught fresh</b> from the ocean</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 m-5">
                <div class="bg-abuabu2 rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="product" class="object-cover rounded-lg">
                    <h1 class="text-blue-500 text-lg mt-4 text-center">Product No 1</h1>
                </div>
                <div class="bg-abuabu2 rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="product" class="object-cover rounded-lg">
                    <h1 class="text-blue-500 text-lg mt-4 text-center">Product No 2</h1>
                </div>
                <div class="bg-abuabu2 rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="product" class="object-cover rounded-lg">
                    <h1 class="text-blue-500 text-lg mt-4 text-center">Product No 3</h1>
                </div>
            </div>
            <div class="mt-10">
                <a href=""
                    class="bg-biru text-putihsusu shadow-md  font-bold border border-putihsusu rounded-md py-2 px-11 hover:bg-blue-500">
                    View All Products
                </a>
            </div>
        </div>
    </section>

    {{-- About Us --}}
    <section id="about" class="bg-biru">
        <div class="flex items-center space-x-2 mb-2">
            <hr class="flex-grow border-t border-putihsusu">
            <h2 class="text-lg md:text-xl font-bold text-putihsusu whitespace-nowrap">Why Celebes Ocean Fisheries?</h2>
            <hr class="flex-grow border-t border-putihsusu">
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center my-8 px-4">
            <div class="lg:w-1/2 w-full mb-4 lg:mb-0 m-5 ml-24">
                <p class="text-justify text-putihsusu mt-4">
                    Celebes Ocean Fisheries serves the best quality products. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.
                </p>
            </div>
            <div class="lg:w-1/2 w-full flex justify-center">
                <div class="bg-gray-200 w-full h-60 lg:w-96 lg:h-60 rounded-md shadow-xl"></div>
            </div>
        </div>
    </section>

    {{-- contact --}}
    <section class="bg-biru">
        <div class="max-w-4xl m-20 my-10 px-4">
            <h2 class="text-xl font-bold text-putihsusu">Be Our Partner in Your Country</h2>
            <p class="text-putihsusu mb-6 italic">Please contact us to know more about our company, products, and sample
                requests
            </p>
            <form class="grid grid-cols-1 md:grid-cols-3 gap-4">

                <div class="md:col-span-1 space-y-4 ">
                    <input type="text" placeholder="Name"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="email" placeholder="Email"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="text" placeholder="Phone Number"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="md:col-span-2 space-y-4">
                    <input type="text" placeholder="Subject"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <textarea placeholder="Your Opinion"
                        class="w-full p-3 rounded-md shadow-lg h-28 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="md:col-span-3 flex justify-end">
                    <button type="submit"
                        class="bg-putihsusu text-biru font-semibold py-2 px-16 rounded-md hover:bg-neutral-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit</button>
                </div>

            </form>
        </div>

    </section>
@endsection
