@extends('app')

@section('title', 'All News')

@section('content')
    {{-- search bar --}}
    <section class="py-6 px-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="text-biru flex items-center">
                <button class="mr-3" onclick="window.location.href='/news'">
                    <svg class="w-6 h-6 text-biru hover:text-neutral-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m15 19-7-7 7-7" />
                    </svg>
                </button>
                <h2 class="font-bold text-xl">News & Articles</h2>
            </div>
            <form method="GET" action="{{ route('news.all') }}" class="flex items-center bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3">
                <input type="text" name="search" value="{{ request('search') }}"
                    class="p-2 w-full text-gray-700 focus:outline-none placeholder:italic placeholder:text-biru"
                    placeholder="Search">
                <button class="p-2 text-biru hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>
    </section>

    {{-- all news --}}
    @if ($news->isEmpty())
        <div class="max-w-5xl mx-auto text-center mt-10">
            <p class="text-biru text-lg">No news found{{ request('search') ? ' for "' . request('search') . '"' : '' }}.</p>
        </div>
    @else
    <section>
        <div class="max-w-5xl mx-auto mb-10 px-4">
            <div class="space-y-6">
                @foreach ($news as $n)
                    <a href="{{ route('news.show', ['news_slug' => $n->news_slug]) }}"
                       class="flex flex-col sm:flex-row p-4 hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out bg-white rounded-lg">
                        <img src="{{ asset('storage/' . $n->image) }}" class="w-full sm:w-1/4 h-40 sm:h-32 rounded-md object-cover" alt="{{ $n->title }}">
                        <div class="w-full sm:w-3/4 sm:pl-4 mt-4 sm:mt-0">
                            <h2 class="font-bold text-base sm:text-lg text-biru">{{ $n->title }}</h2>
                            <div class="flex flex-wrap gap-4 text-biru text-sm font-semibold mt-2">
                                <p>{{ $n->user->name ?? 'Unknown' }}</p>
                                <p class="italic font-normal">{{ $n->created_at->diffForHumans() }}</p>
                            </div>
                            <p class="text-biru text-sm mt-2">{!! Str::limit(strip_tags($n->description), 100, '...') !!}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- pagination --}}
    <div class="mt-4 px-4">
        {{ $news->links() }}
    </div>

@endsection
