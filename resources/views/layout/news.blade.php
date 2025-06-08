@extends('app')

@section('title', 'News & Articles')

@section('content')

    @guest
        {{-- search bar --}}
        <section class="p-7">
            <div class="flex items-center justify-between ml-6">
                <div class="text-biru flex">
                    <h2 class="font-bold text-xl">News & Articles</h2>
                </div>
                <form action="{{ route('news.all') }}" method="GET" class="flex items-center bg-white rounded-lg shadow-lg overflow-hidden w-1/3 mr-6">
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="p-2 w-full text-gray-700 focus:outline-none placeholder:italic placeholder:text-biru"
                        placeholder="Search">
                    <button class="p-2  text-biru hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        </section>

        {{-- recent article --}}
        @if ($latestNews)
            <section>
                <a href="{{ route('news.show', ['news_slug' => $latestNews->news_slug]) }}">
                    <div class="py-10 px-4 mx-10 hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out">
                        <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center">
                            <div class="lg:w-1/2 w-full flex justify-center mb-6 lg:mb-0">
                                <img src="{{ asset('storage/' . $latestNews->image) }}" class="bg-gray-300 w-full h-60 lg:w-4/5 lg:h-64 rounded-md shadow-xl object-cover" alt="{{ $latestNews->title }}">
                            </div>
                            <div class="lg:w-1/2 w-full text-biru lg:pl-10 mr-10 justify-center">
                                <h2 class="text-2xl font-bold mb-4">{{ $latestNews->title }}</h2>
                                <div class="flex gap-5 text-biru">
                                    <p class="mb-4 font-semibold">{{ $latestNews->user->name ?? 'Unknown' }}</p>
                                    <p class="mb-4 italic">{{ $latestNews->created_at->diffForHumans() }}</p>
                                </div>
                                <p>{{ Str::limit(strip_tags($latestNews->description), 300, '...') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
        @else
            <section class="text-center text-gray-500 py-10">
            <p>No news available.</p>
            </section>
        @endif

        {{-- weekly update --}}
        @if ($threeLatestNews->isNotEmpty())
            <section>
                <div class="max-w-7xl mx-auto p-6 mt-5 text-biru">
                    <h1 class="text-center text-2xl font-bold mb-6 ">Weekly Update</h1>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach ($threeLatestNews as $weeklyUpdate)
                            <a href="{{ route('news.show', ['news_slug' => $weeklyUpdate->news_slug]) }}">
                                <div class="p-4 hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out">
                                    <img src="{{ asset('storage/' . $weeklyUpdate->image) }}" class="w-full h-48 rounded-lg mb-4 object-cover" alt="{{ $weeklyUpdate->title }}">
                                    <div class="flex justify-between text-sm text-gray-500 mb-2">
                                        <span class="text-biru font-semibold">{{ $weeklyUpdate->user->name ?? 'Unknown' }}</span>
                                        <span class="text-biru italic"> {{ $weeklyUpdate->created_at->diffForHumans() }} </span>
                                    </div>
                                    <h2 class="font-semibold text-lg leading-snug">{{ $weeklyUpdate->title }}</h2>
                                </div> 
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        

        {{-- Articles --}}
        @if ($tenFirstNews->isNotEmpty())
            <section>
                <div class="max-w-7xl mx-auto mb-20 mt-5 text-biru">
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
                        @foreach ($tenFirstNews as $tenten)
                            <a href="{{ route('news.show', ['news_slug' => $tenten->news_slug]) }}">
                                <div class="p-4 hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out">
                                    <img src="{{ asset('storage/' . $tenten->image) }}" class="w-full h-48 rounded-lg mb-4 object-cover" alt="{{ $tenten->title }}">
                                    <div class="flex justify-between text-sm text-gray-500 mb-2">
                                        <span class="text-biru font-semibold">{{ $tenten->user->name ?? 'Unknown' }}</span>
                                        <span class="text-biru italic"> {{ $tenten->created_at->diffForHumans() }} </span>
                                    </div>
                                    <h2 class="font-semibold text-lg leading-snug">{{ $tenten->title }}</h2>
                                </div>     
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endguest

    @auth
        {{-- search bar --}}
        <section class="p-7">
            <div class="flex items-center justify-between ml-6">
                <div class="text-biru flex">
                    <h2 class="font-bold text-xl">News & Articles</h2>
                </div>
                <form action="{{ route('news') }}" method="GET" class="flex items-center bg-white rounded-lg shadow-lg overflow-hidden w-1/3 mr-6">
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="p-2 w-full text-gray-700 focus:outline-none placeholder:italic placeholder:text-biru"
                        placeholder="Search">
                    <button class="p-2  text-biru hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        </section>

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

                <div class="bg-white rounded-lg shadow-xl overflow-hidden" x-data="modalDelete()">
                    <table class="w-full border-collapse">
                        <thead class="bg-biru text-white">
                            <tr>
                                <th class="py-3 px-4 text-center font-medium">No</th>
                                <th class="py-3 px-4 text-center font-medium">News</th>
                                <th class="py-3 px-4 text-center font-medium">Description</th>
                                <th class="py-3 px-4 text-center font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-blue-700">
                            @forelse ($news as $n)
                            <tr class="border-t">
                                <td class="py-3 px-4">{{ $news->firstItem() + $loop->index }}</td>
                                <td class="py-3 px-4">{{ $n -> title }}</td>
                                <td class="py-3 px-4 text-sm">{{ Str::limit(strip_tags($n-> description ), 120, '...') }}</td>
                                <td class="py-3 px-4 flex space-x-2">
                                    <a class="text-blue-500" href="{{ route('news.edit', ['news_slug'=> $n-> news_slug ]) }}">&#9998;</a>
                                    <button type="button" @click="openModal('{{ route('news.delete', $n->news_slug) }}', '{{ $n->title }}')">&#128465;</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-6 text-center text-gray-500 italic">
                                    No news found{{ request('search') ? ' for "' . request('search') . '"' : '' }}.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- modal delete --}}
                    <div x-show="show" x-cloak class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
                        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                            <h2 class="text-lg font-bold mb-4 text-center text-red-900">Delete This News?</h2>
                            <p class="text-center text-red-500 italic font-medium">This action cannot be undone. Are you sure want to delete this news?</p>
                            <div class="mt-6 flex justify-end space-x-5 justify-center">
                                <form :action="deleteUrl" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-10 py-1 font-bold shadow-xl text-red-900 border border-red-900 rounded-lg hover:bg-red-600 hover:text-white">Delete</button>
                                </form>
                                <button @click="show = false" class="px-10 py-1 font-bold shadow-xl border border-biru text-biru rounded-lg hover:bg-biru hover:text-putihsusu">Cancel</button>
                            </div>
                        </div>
                    </div>
                    
                    {{-- script for modal delete --}}
                    <script>
                    function modalDelete() {
                        return {
                            show: false,
                            itemName: '',
                            deleteUrl: '',
                            openModal(url, name) {
                                this.itemName = name;
                                this.deleteUrl = url;
                                this.show = true;
                            }
                        }
                    }
                    </script>

                </div>

                {{-- pagination --}}
                <div class="mt-4">
                    {{ $news->links() }}
                </div>

            </div>
        </section>

        {{-- modal --}}
        <x-modal/>
    @endauth

@endsection
