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
    @guest
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
    @endguest

    {{-- admin edit --}}
    @auth
        <section class="flex justify-center mb-10">
            <div class="w-3/4">
                <button class="mb-4 px-3 py-2 bg-putihsusu rounded-lg hover:bg-neutral-400"><svg
                        class="w-6 h-6 text-biru dark:text-biru" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                </button>

                <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                    <table class="w-full border-collapse">
                        <thead class="bg-biru text-white">
                            <tr>
                                <th class="py-3 px-4 text-center">No</th>
                                <th class="py-3 px-4 text-center">Product</th>
                                <th class="py-3 px-4 text-center">Description</th>
                                <th class="py-3 px-4 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-blue-700">
                            <tr class="border-t">
                                <td class="py-3 px-4">1</td>
                                <td class="py-3 px-4">Nama Produk 1</td>
                                <td class="py-3 px-4 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                    dignissim velit nisi, a finibus leo ornare quis.</td>
                                <td class="py-3 px-4 flex space-x-2">
                                    <button class="text-blue-500">&#9998;</button>
                                    <button class="text-red-500">&#128465;</button>
                                </td>
                            </tr>
                            <tr class="border-t">
                                <td class="py-3 px-4">2</td>
                                <td class="py-3 px-4">Nama Produk 2</td>
                                <td class="py-3 px-4 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                    dignissim velit nisi, a finibus leo ornare quis.</td>
                                <td class="py-3 px-4 flex space-x-2">
                                    <button class="text-blue-500">&#9998;</button>
                                    <button class="text-red-500">&#128465;</button>
                                </td>
                            </tr>
                            <tr class="border-t">
                                <td class="py-3 px-4">3</td>
                                <td class="py-3 px-4">Nama Produk 3</td>
                                <td class="py-3 px-4 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                    dignissim velit nisi, a finibus leo ornare quis.</td>
                                <td class="py-3 px-4 flex space-x-2">
                                    <button class="text-blue-500">&#9998;</button>
                                    <button class="text-red-500">&#128465;</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @endauth
    
@endsection
