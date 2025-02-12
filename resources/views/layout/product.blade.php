@extends('app')

@section('title', 'Products')

@section('content')
    {{-- descripton & search bar --}}
    <section class="p-7">
        <div class="flex items-center justify-between text-white ml-6">
            <div class="text-putihsusu">
                <h2 class="font-bold text-xl">Products</h2>
                <p class="italic text-sm">
                    We provide fresh and frozen fishery products. <br>
                    All of our frozen and fresh fishery products are <b>caught fresh</b> from the ocean.
                </p>
            </div>
            <div class="flex items-center bg-white rounded-lg shadow-lg overflow-hidden w-1/3 mr-6">
                <input type="text"
                    class="p-2 w-full text-gray-700 focus:outline-none placeholder:italic placeholder:text-biru"
                    placeholder="Search">
                <button class="p-2  text-biru hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    {{-- products --}}
    <section class="px-20 pb-10 pt-4">
        <div class="grid grid-cols-3 gap-20">
            <div class="relative bg-gray-300 rounded-lg p-4 h-60 w-text-center">
                <img src="" alt="">
                <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-white">Product No 1</p>
            </div>
            <div class="relative bg-gray-300 rounded-lg p-4 text-center">
                <img src="" alt="">
                <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-white">Product No 2</p>
            </div>
            <div class="relative bg-gray-300 rounded-lg p-4 text-center">
                <img src="" alt="">
                <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-white">Product No 3</p>
            </div>
            <div class="relative bg-gray-300 rounded-lg p-4 h-60 w-text-center">
                <img src="" alt="">
                <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-white">Product No 4</p>
            </div>
            <div class="relative bg-gray-300 rounded-lg p-4 text-center">
                <img src="" alt="">
                <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-white">Product No 5</p>
            </div>
            <div class="relative bg-gray-300 rounded-lg p-4 text-center">
                <img src="" alt="">
                <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-white">Product No 6</p>
            </div>
            <div class="relative bg-gray-300 rounded-lg p-4 h-60 w-text-center">
                <img src="" alt="">
                <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-white">Product No 7</p>
            </div>
            <div class="relative bg-gray-300 rounded-lg p-4 text-center">
                <img src="" alt="">
                <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-white">Product No 8</p>
            </div>
            <div class="relative bg-gray-300 rounded-lg p-4 text-center">
                <img src="" alt="">
                <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-white">Product No 9</p>
            </div>
        </div>
    </section>
@endsection
