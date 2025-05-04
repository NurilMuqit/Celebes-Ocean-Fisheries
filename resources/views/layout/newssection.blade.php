@extends('app')

@section('title',$news-> title )

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
            <div class="text-center text-2xl font-bold">{{ $news -> title }}</div>
            <div class="flex justify-center items-center gap-8 text-sm">
                <p class="font-bold">{{ $news -> user -> name ?? 'Unknown' }}</p>
                <p class="italic">{{ $news-> created_at -> format('d-M-Y') }}</p>
            </div>
            <img src="{{ asset('storage/' . $news->image) }}" class="w-full h-64  rounded-lg my-5"></img>
            <div class="text-base leading-relaxed text-justify trix-content">
                <p class="text-justify">{!! $news -> description !!}</p>
            </div>
        </div>
    </section>
@endsection
