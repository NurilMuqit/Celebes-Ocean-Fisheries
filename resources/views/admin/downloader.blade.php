@extends('app')

@section('title', 'Downloader')

@section('content')

    {{-- title & search bar--}}
    <section class="py-6 px-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="text-biru flex items-center">
                <a class="text-biru font-bold text-shadow-md text-lg flex items-center gap-2 cursor-pointer" onclick="window.location.href='/about'">
                    <svg class="w-6 h-6 text-biru hover:text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m15 19-7-7 7-7" />
                    </svg>
                    Downloader
                </a>
            </div>
            <form method="GET" action="{{ route('downloader') }}" class="flex items-center bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/3">
                <input type="text" name="search" value="{{ request('search') }}"
                    class="p-2 w-full text-gray-700 focus:outline-none placeholder:italic placeholder:text-biru"
                    placeholder="Search">
                <button type="submit" class="p-2 text-biru hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>
    </section>

    {{-- Downloader Data --}}
    <section>
        <div class="bg-white rounded-lg shadow-xl overflow-x-auto mx-0 md:mx-8 my-8 mx-8" x-data="modalDelete()">
            <table class="w-full border-collapse min-w-[700px]">
                <thead class="bg-biru text-white">
                    <tr>
                        <th class="py-3 px-2 text-center font-medium">No</th>
                        <th class="py-3 px-2 text-center font-medium">Name</th>
                        <th class="py-3 px-2 text-center font-medium">Phone Number</th>
                        <th class="py-3 px-2 text-center font-medium">Email</th>
                        <th class="py-3 px-2 text-center font-medium">Company</th>
                        <th class="py-3 px-2 text-center font-medium">Action</th>
                    </tr>
                </thead>
                <tbody class="text-blue-700">
                    @forelse ($downloaderPaginate as $d)
                    <tr class="border-t">
                        <td class="py-3 px-2 text-center">{{ $downloaderPaginate->firstItem() + $loop->index }}</td>
                        <td class="py-3 px-2 text-center">{{ $d->name }}</td>
                        <td class="py-3 px-2 text-center">{{ $d->phone_number }}</td>
                        <td class="py-3 px-2 text-center break-all">{{ $d->email }}</td>
                        <td class="py-3 px-2 text-center">{{ $d->company }}</td>
                        <td class="py-3 px-2 flex space-x-2 justify-center">
                            <a href="mailto:{{ $d->email }}" title="Email" class="text-red-500">&#9993;</a>
                            <a href="https://wa.me/{{ ltrim($d->phone_number) }}" title="Whatsapp" class="text-red-500">&#9742;</a>
                            <button type="button" class="text-red-500" title="Delete" @click="openModal('{{ route('downloader.delete', $d->id) }}', '{{ $d->name }}')">&#128465;</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-6 text-center text-gray-500 italic">
                            No downloader found{{ request('search') ? ' for "' . request('search') . '"' : '' }}.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- modal delete --}}
            <div x-show="show" x-cloak class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
                <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
                    <h2 class="text-lg font-bold mb-4 text-center text-red-900">Delete This Downloader Data?</h2>
                    <p class="text-center text-red-500 italic font-medium">This action cannot be undone. Are you sure want to delete this downloader data?</p>
                    <div class="mt-6 flex flex-col sm:flex-row justify-center gap-4">
                        <form :action="deleteUrl" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full sm:w-auto px-10 py-1 font-bold shadow-xl text-red-900 border border-red-900 rounded-lg hover:bg-red-600 hover:text-white">Delete</button>
                        </form>
                        <button @click="show = false" class="w-full sm:w-auto px-10 py-1 font-bold shadow-xl border border-biru text-biru rounded-lg hover:bg-biru hover:text-putihsusu">Cancel</button>
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
                        this.deleteUrl = url;
                        this.itemName = name;
                        this.show = true;
                    }
                }
            }
            </script>
        </div>

        {{-- pagination --}}
        <div class="mt-4 px-4">
            {{ $downloaderPaginate->links() }}
        </div>

        {{-- Modal --}}
        <x-modal/>

    </section>

@endsection
