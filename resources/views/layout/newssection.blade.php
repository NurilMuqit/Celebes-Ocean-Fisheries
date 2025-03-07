@extends('app')

@section('title', 'title')

@section('content')
    {{-- news section --}}
    <section class="m-7">
        <div class="flex">
            <button class="mr-3" onclick="window.location.href='/news'"> <svg
                    class="w-6 h-6 text-biru hover:text-neutral-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
            </button>
        </div>
        <div class="max-w-3xl mx-auto my-10  text-biru p-6 rounded-lg">
            <div class="text-center text-2xl font-bold">Indonesia Punya Peluang Besar untuk Pasar Seafood Dunia</div>
            <div class="flex justify-center items-center gap-8 text-sm text-white">
                <p class="font-bold">ADMIN</p>
                <p class="italic">10 hour ago</p>
            </div>
            <div class="w-full h-64 bg-gray-300 rounded-lg my-5"></div>
            <div class="text-base leading-relaxed text-justify">
                <p>Komoditas Seafood Dunia memiliki nilai pasar hingga US$ 419,09 miliar di tahun 2030. Sementara di tahun 2023, diketahui nilai pasar seafood dunia sebesar Rp 269,30 miliar dengan compounded annual growth rate (CAGR) naik sebesar 6,52% pada 2023-2030.</p>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim velit nisi, a finibus leo ornare quis. Quisque ante velit, sagittis et sapien at, lobortis viverra ligula.</p>
                <p class="mt-4">Praesent iaculis, lectus at accumsan interdum, quam diam viverra sem, ut scelerisque sem odio et lorem.</p>
            </div>
        </div>
    </section>
@endsection
