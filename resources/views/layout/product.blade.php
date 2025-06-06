@extends('app')

@section('title', 'Products')

@section('content')
    {{-- descripton & search bar --}}
    <section class="p-7">
        <div class="flex items-center justify-between text-white ml-6">
            <div class="text-biru">
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
        @if ($products->isNotEmpty())
        <section class="px-20 pb-10 pt-4 mb-10">
            <div class="grid grid-cols-3 gap-20">
                @foreach ($products as $product)
                <div class="group relative rounded-lg p-4 h-60 w-full text-center hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out">
            
                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}"
                        class="w-full h-full object-cover rounded-lg">

                    <p class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 text-biru font-bold">
                        {{ $product->product_name }}
                    </p>

                    <div class="absolute top-0 left-0 w-full bg-white rounded-lg p-4 shadow-lg z-10
                                opacity-0 invisible scale-95 translate-y-2
                                group-hover:opacity-100 group-hover:visible group-hover:scale-100 group-hover:translate-y-0
                                transition-all duration-300 ease-in-out
                                flex flex-col items-center
                                max-w-full">

                        <h3 class="text-biru font-bold text-lg text-center">{{ $product->product_name }}</h3>

                        <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}"
                            class="w-40 h-40 object-cover rounded mb-2 shadow-md">

                        
                        <div class="trix-content text-biru text-sm font-medium text-center mt-1">
                            {!! $product->product_description !!}
                        </div>

                    </div>

                </div>
                @endforeach
            </div>
        </section>

        @else
            <section class="text-center text-gray-500 py-10">
                <p>No products available.</p>
            </section>
        @endif
        
    @endguest

    {{-- admin edit --}}
    @auth
        <section class="flex justify-center mb-10">
            <div class="w-3/4">
                <a href="{{ route('product.add') }}" class="inline-block">
                    <div class="mb-4 px-3 py-2 bg-biru rounded-lg hover:bg-blue-500 w-fit">
                        <svg class="w-6 h-6 text-putihsusu" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7 7V5" />
                        </svg>
                    </div>
                </a>
                
                <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                    <table class="w-full border-collapse">
                        <thead class="bg-biru text-white">
                            <tr>
                                <th class="py-3 px-4 text-center font-medium">No</th>
                                <th class="py-3 px-4 text-center font-medium">Product</th>
                                <th class="py-3 px-4 text-center font-medium">Description</th>
                                <th class="py-3 px-4 text-center font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-blue-700">
                            @foreach ($productsPaginate as $product )
                            <tr class="border-t">
                                <td class="py-3 px-4 text-center">{{ $productsPaginate->firstItem() + $loop->index }}</td>
                                <td class="py-3 px-4 text-center">{{ $product-> product_name }}</td>
                                <td class="py-3 px-4 text-center">{{ Str::limit(strip_tags($product-> product_description ), 30, '...') }}</td>
                                <td class="py-3 px-4 flex space-x-2 justify-center">
                                    <a class="text-blue-500" href="{{ route('product.edit', ['product_slug'=> $product-> product_slug ] ) }}">&#9998;</a>
                                <form action="{{ route('product.delete', ['product_slug'=> $product-> product_slug ] ) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin mau hapus?')">&#128465;</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- pagination --}}
                <div class="mt-4">
                    {{ $productsPaginate->links() }}
                </div>

            </div>
        </section>

        {{-- modal --}}
        <x-modal/>
    @endauth

@endsection
