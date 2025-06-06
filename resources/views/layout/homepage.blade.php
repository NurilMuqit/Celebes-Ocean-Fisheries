@extends('app')

@section('title', 'Homepage')

@section('content')
    {{-- Hero --}}
    <section id="home" class="bg-cover bg-center h-screen flex items-center justify-center"
        style="background-image: url('{{ asset('images/dummy.png') }}');">
        <div class="container mx-auto flex flex-col items-center justify-center text-center">
            <div class="bg-white w-60 h-60 rounded-full flex flex-col items-center justify-center shadow-lg mb-4">
                <img src="{{ asset('images/logotext.png') }}" alt="Logo" class="w-50 h-50">
            </div>
            <h1 class="text-biru font-bold text-4xl text-shadow-xl mb-2">Celebes Ocean Fisheries</h1>
            <p class="text-biru text-xl max-w-6xl mx-auto italic mb-1">Supplying Across the Globe</p>
            <p class="text-biru text-xl max-w-6xl mx-auto font-bold">SEAFOOD PROCESSOR EXPERT & EXPORTER</p>
        </div>
    </section>


    {{-- Products --}}
    <section id="products" class="py-20">
        <div class="container mx-auto text-center">

            <h1 class="text-biru font-bold text-xl mb-5 text-shadow-md">Products</h1>
            <p class="text-biru text-lg mb-5 max-w-7xl mx-auto">We provide fresh and frozen fishery products <br>
                All of
                our frozen and fresh fishery products are <b>caught fresh</b> from the ocean</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 m-5">
                @if ($products->isEmpty())
                    <div class="col-span-3 text-center">
                        <p class="text-center text-gray-500 py-10">No products available.</p>
                    </div>
                @else
                    @foreach ($products as $product)
                    <div class="rounded-lg shadow-lg p-6 flex flex-col items-center hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                        <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}"
                            class="object-cover rounded-lg w-full h-48 ">
                        <h1 class="text-biru text-lg mt-4 text-center">{{ $product->product_name }}</h1>
                    </div>                    
                    @endforeach
            </div>
                <div class="mt-10">
                    <a href="{{ route('product') }}"
                        class="bg-biru text-putihsusu shadow-md  font-bold border border-putihsusu rounded-md py-2 px-11 hover:bg-blue-500">
                        View All Products
                    </a>
                </div>
                @endif
        </div>
    </section>

    {{-- About Us --}}
    <section id="about" class="py-10">
        <div class="flex items-center space-x-2 mb-2">
            <hr class="flex-grow border-t border-biru">
            <h2 class="text-lg md:text-xl font-bold text-biru whitespace-nowrap">Why Celebes Ocean Fisheries?</h2>
            <hr class="flex-grow border-t border-biru">
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center my-8 px-4">
            <div class="lg:w-1/2 w-full mb-4 lg:mb-0 m-5 ml-24">
                <p class="text-justify text-biru mt-4">
                    Taste the difference of premium, sustainably sourced seafood, delivered with unmatched reliability and global reach - choose our fish export company for a partnership you can trust
                </p>
            </div>
            <div class="lg:w-1/2 w-full flex justify-center">
                <img src="{{ asset('images/pabrik.png') }}" alt="pabrik.png" class="w-full h-60 lg:w-96 lg:h-60 rounded-md shadow-xl"></img>
            </div>
        </div>
    </section>

    {{-- contact --}}
    <section id="contact">
        <div class="max-w-4xl m-20 my-10 px-4 py-10">
            <h2 class="text-xl font-bold text-biru">Be Our Partner in Your Country</h2>
            <p class="text-biru mb-6 italic">Please contact us to know more about our company, products, and sample
                requests
            </p>
            <form method="POST" enctype="multipart/form-data" action="{{ route('form.add') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @csrf
                <div class="md:col-span-1 space-y-4 ">
                    <input type="text" placeholder="Name" name="name"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="email" placeholder="Email" name="email"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="text" placeholder="Phone Number (ex: 6281234567890)" name="phone"
                        pattern="^62[0-9]{7,14}$"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        title="number only, start with 62 without +, example: 6281234567890">  
                </div>

                <div class="md:col-span-2 space-y-4">
                    <input type="text" placeholder="Subject" name="subject"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <textarea placeholder="Your Message" name="message"
                        class="w-full p-3 rounded-md shadow-lg h-28 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="md:col-span-3 flex justify-end">
                    @guest
                    <button type="submit"
                    class="bg-biru text-putihsusu font-semibold py-2 px-16 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit</button>
                    @endguest
                    @auth
                    <a href="{{ route('user.contact') }}"
                    class="bg-biru text-putihsusu font-semibold py-2 px-16 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">See Result</a>
                    @endauth
                </div>

            </form>
        </div>

    </section>

    {{-- modal --}}
    <x-modal/>
@endsection
