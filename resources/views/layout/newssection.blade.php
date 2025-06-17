@extends('app')

@section('title', $news->title)

@section('content')
    {{-- news section --}}
    <section class="py-6 px-4">
        <div class="flex items-center mb-4">
            <button class="mr-3" onclick="history.back()">
                <svg class="w-6 h-6 text-biru hover:text-neutral-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
            </button>
        </div>
        <div class="max-w-3xl mx-auto text-biru bg-white p-4 sm:p-6 rounded-lg shadow">
            <div class="text-center text-xl sm:text-2xl font-bold mb-2">{{ $news->title }}</div>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-3 sm:gap-8 text-sm mb-3">
                <p class="font-bold">{{ $news->user->name ?? 'Unknown' }}</p>
                <p class="italic">{{ $news->created_at->format('d-M-Y') }}</p>
            </div>
            <img src="{{ asset('storage/' . $news->image) }}" class="w-full max-h-72 sm:max-h-80 rounded-lg mb-5 object-cover" alt="{{ $news->title }}">
            <div class="text-base leading-relaxed text-justify trix-content">
                {!! $news->description !!}
            </div>
        </div>
    </section>
@endsection
