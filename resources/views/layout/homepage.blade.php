@extends('app')

@section('title', 'Homepage')

@section('content')
    {{-- Hero --}}
    <section id="home" class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('images/dummy.png') }}');">
        <div class="container mx-auto flex flex-col items-center justify-center text-center px-4">
            <div class="bg-white w-40 h-40 sm:w-60 sm:h-60 rounded-full flex flex-col items-center justify-center shadow-lg mb-4">
                <img src="{{ asset('images/logotext.png') }}" alt="Logo" class="w-28 h-28 sm:w-40 sm:h-40 object-contain" data-aos="fade-zoom">
            </div>
            <h1 class="text-biru font-bold text-2xl sm:text-4xl text-shadow-xl mb-2" data-aos="fade-zoom">Celebes Ocean Fisheries</h1>
            <p class="text-biru text-base sm:text-xl max-w-2xl mx-auto italic mb-1" data-aos="fade-zoom">Supplying Across the Globe</p>
            <p class="text-biru text-base sm:text-xl max-w-2xl mx-auto font-bold" data-aos="fade-up">SEAFOOD PROCESSOR EXPERT & EXPORTER</p>
        </div>
    </section>

    {{-- Products --}}
    <section id="products" class="py-12 sm:py-20">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-biru font-bold text-lg sm:text-xl mb-5 text-shadow-md" data-aos="fade-left">Products</h1>
            <p class="text-biru text-base sm:text-lg mb-5 max-w-3xl mx-auto" data-aos="fade-up">We provide fresh and frozen fishery products <br>
                All of our frozen and fresh fishery products are <b>caught fresh</b> from the ocean
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 m-5" data-aos="fade-up">
                @if ($products->isEmpty())
                    <div class="col-span-3 text-center">
                        <p class="text-center text-gray-500 py-10">No products available.</p>
                    </div>
                @else
                    @foreach ($products as $product)
                        <div class="rounded-lg shadow-lg p-6 flex flex-col items-center hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out bg-white">
                            <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" class="object-cover rounded-lg w-full h-44 sm:h-48">
                            <h1 class="text-biru text-base sm:text-lg mt-4 text-center">{{ $product->product_name }}</h1>
                        </div>
                    @endforeach
                @endif
            </div>
            @if (!$products->isEmpty())
                <div class="mt-8">
                    <a href="{{ route('product') }}" data-aos="fade-up"
                        class="bg-biru text-putihsusu shadow-md font-bold border border-putihsusu rounded-md py-2 px-8 hover:bg-blue-500 transition-colors">
                        View All Products
                    </a>
                </div>
            @endif
        </div>
    </section>

    {{-- About Us --}}
    <section id="about" class="py-10 px-4">
        <div class="flex items-center space-x-2 mb-4">
            <hr class="flex-grow border-t border-biru">
            <h2 class="text-base sm:text-lg md:text-xl font-bold text-biru whitespace-nowrap" data-aos="fade-left">Why Celebes Ocean Fisheries?</h2>
            <hr class="flex-grow border-t border-biru">
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center my-8 gap-6">
            <div class="lg:w-1/2 w-full mb-4 lg:mb-0 px-0 lg:px-12 text-justify text-biru">
                <p class="mt-4 text-center lg:text-justify" data-aos="fade-right">
                    Taste the difference of premium, sustainably sourced seafood, delivered with unmatched reliability and global reach – choose our fish export company for a partnership you can trust.
                </p>
            </div>
            <div class="lg:w-1/2 w-full flex justify-center">
                <img src="{{ asset('images/pabrik.png') }}" alt="pabrik.png" class="w-full max-w-xs sm:max-w-sm md:max-w-md h-40 sm:h-60 lg:w-96 lg:h-60 rounded-md shadow-xl object-cover" data-aos="fade-up">
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact">
        <div class="max-w-4xl mx-auto px-4 my-10 py-10 rounded-xl">
            <h2 class="text-lg sm:text-xl font-bold text-biru" data-aos="fade-down">Be Our Partner in Your Country</h2>
            <p class="text-biru mb-6 italic" data-aos="fade-down">Please contact us to know more about our company, products, and sample requests</p>
            <form method="POST" enctype="multipart/form-data" action="{{ route('form.add') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @csrf
                <div class="md:col-span-1 space-y-4" data-aos="fade-down">
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
                <div class="md:col-span-2 space-y-4" data-aos="fade-left">
                    <input type="text" placeholder="Subject" name="subject"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <textarea placeholder="Your Message" name="message"
                        class="w-full p-3 rounded-md shadow-lg h-28 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <div class="md:col-span-3 flex flex-col md:flex-row justify-end gap-2">
                    @guest
                    <button type="submit"
                        class="w-full md:w-auto bg-biru text-putihsusu font-semibold py-2 px-8 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors" data-aos="fade-zoom">
                        Submit
                    </button>
                    @endguest
                    @auth
                    <a href="{{ route('user.contact') }}"
                        class="w-full md:w-auto bg-biru text-putihsusu font-semibold py-2 px-8 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors text-center">
                        See Result
                    </a>
                    @endauth
                </div>
            </form>
        </div>
    </section>

    {{-- Modal --}}
    <x-modal />
@endsection
