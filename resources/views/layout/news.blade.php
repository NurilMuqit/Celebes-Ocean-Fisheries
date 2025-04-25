@extends('app')

@section('title', 'News & Articles')

@section('content')

    {{-- search bar --}}
    <section class="p-7">
        <div class="flex items-center justify-between ml-6">
            <div class="text-biru flex">
                <h2 class="font-bold text-xl">News & Articles</h2>
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

    @guest
        {{-- recent article --}}
        <section>
            <div class="py-10 px-4 mx-10">
                <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center">
                    <div class="lg:w-1/2 w-full flex justify-center mb-6 lg:mb-0">
                        <div class="bg-gray-300 w-full h-60 lg:w-4/5 lg:h-64 rounded-md shadow-xl"></div>
                    </div>
                    <div class="lg:w-1/2 w-full text-biru lg:pl-10 mr-10 justify-center">
                        <h2 class="text-2xl font-bold mb-4">{{ $news-> title }}</h2>
                        <div class="flex gap-5 text-biru">
                            <p class="mb-4 font-semibold">ADMIN</p>
                            <p class="mb-4 italic">10 hour ago </p>
                        </div>
                        <p class="">Komoditas Seafood Dunia memiliki nilai pasar hingga US$ 419,09 miliar di tahun 2030.
                            Sementara di tahun 2023, diketahui nilai pasar seafood dunia sebesar Rp 269,30 miliar dengan
                            compounded annual growth rate (CAGR) naik sebesar 6,52% pada 2023-2030......</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- weekly update --}}
        <section>
            <div class="max-w-7xl mx-auto p-6 mt-28 text-biru">
                <h1 class="text-center text-2xl font-bold mb-6 text-shadow-lg">Weekly Update</h1>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                    <div class="rounded-xl p-4">
                        <div class="bg-gray-300 h-48 rounded mb-4"></div>
                        <div class="flex justify-between text-sm text-gray-500 mb-2">
                            <span class="text-biru font-semibold">ADMIN</span>
                            <span class="text-biru italic">4 days ago</span>
                        </div>
                        <h2 class="font-semibold text-lg leading-snug">RI Eksportir Ikan Terbesar di Dunia Urutan 13, tapi Kalah
                            dari Vietnam</h2>
                    </div>

                    <div class=" p-4">
                        <div class="bg-gray-300 h-48 rounded mb-4"></div>
                        <div class="flex justify-between text-sm text-gray-500 mb-2">
                            <span class="text-biru font-semibold">ADMIN</span>
                            <span class="text-biru italic">4 days ago</span>
                        </div>
                        <h2 class="font-semibold text-lg leading-snug">Prabowo Sebut RI Punya Modal Jadi Eksportir Ikan Nomor
                            Satu Dunia</h2>
                    </div>

                    <div class=" p-4">
                        <div class="bg-gray-300 h-48 rounded mb-4"></div>
                        <div class="flex justify-between text-sm text-gray-500 mb-2">
                            <span class="text-biru font-semibold">ADMIN</span>
                            <span class="text-biru italic">2 days ago</span>
                        </div>
                        <h2 class="font-semibold text-lg leading-snug">Deretan Negara Tujuan Ekspor Perikanan Menjanjikan bagi
                            Indonesia...</h2>
                    </div>
                </div>
            </div>
        </section>

        {{-- Articles --}}
        <section>
            <div class="max-w-7xl mx-auto mb-20 mt-10 text-biru">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold">Articles</h2>
                    <a href="{{ route('news.all') }}" class="text-shadow-lg italic flex">See All <svg class="w-6 h-6 text-biru"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 mt-5">
                    <div class="p-4">
                        <div class="w-full h-36 bg-gray-300 rounded-lg mb-3"></div>
                        <p class="font-bold">Ekspor Produk Seafood Indonesia, Ini Manfaatnya!</p>
                    </div>
                    <div class="p-4">
                        <div class="w-full h-36 bg-gray-300 rounded-lg mb-3"></div>
                        <p class="font-bold">UMKM Sultra Sukses Ekspor Belasan Ton Daging Rajungan...</p>
                    </div>
                    <div class="p-4">
                        <div class="w-full h-36 bg-gray-300 rounded-lg mb-3"></div>
                        <p class="font-bold">Pj Gubernur Jateng Lepas Ekspor Perdana 20 Ton Udang...</p>
                    </div>
                    <div class="p-4">
                        <div class="w-full h-36 bg-gray-300 rounded-lg mb-3"></div>
                        <p class="font-bold">KKP: Ekspor produk perikanan Mei 2024 capai 2,3 miliar dolar...</p>
                    </div>
                    <div class="p-4">
                        <div class="w-full h-36 bg-gray-300 rounded-lg mb-3"></div>
                        <p class="font-bold">Ekspor Produk Seafood Indonesia, Ini Manfaatnya!</p>
                    </div>
                    <div class="p-4">
                        <div class="w-full h-36 bg-gray-300 rounded-lg mb-3"></div>
                        <p class="font-bold">UMKM Sultra Sukses Ekspor Belasan Ton Daging Rajungan...</p>
                    </div>
                    <div class="p-4">
                        <div class="w-full h-36 bg-gray-300 rounded-lg mb-3"></div>
                        <p class="font-bold">Pj Gubernur Jateng Lepas Ekspor Perdana 20 Ton Udang...</p>
                    </div>
                    <div class="p-4">
                        <div class="w-full h-36 bg-gray-300 rounded-lg mb-3"></div>
                        <p class="font-bold">KKP: Ekspor produk perikanan Mei 2024 capai 2,3 miliar dolar...</p>
                    </div>
                </div>
            </div>
        </section>
    @endguest

    @auth
        <section class="flex justify-center mb-10">
            <div class="w-3/4">
                <a href="{{ route('news.add') }}" class="inline-block" >
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
                                <th class="py-3 px-4 text-center">No</th>
                                <th class="py-3 px-4 text-center">News</th>
                                <th class="py-3 px-4 text-center">Description</th>
                                <th class="py-3 px-4 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-blue-700">
                            @foreach ($news as $n)
                            <tr class="border-t">
                                <td class="py-3 px-4">{{ $n -> id }}</td>
                                <td class="py-3 px-4">{{ $n -> title }}</td>
                                <td class="py-3 px-4 text-sm">{{ $n -> description }}</td>
                                <td class="py-3 px-4 flex space-x-2">
                                    <a class="text-blue-500" href="{{ route('news.edit', $n -> id) }}">&#9998;</a>
                                    <form action="{{ route('news.delete', $n->id) }}" method="POST" style="display:inline;">
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
            </div>
        </section>

        {{-- modal --}}
        <x-modal/>
    @endauth

@endsection
