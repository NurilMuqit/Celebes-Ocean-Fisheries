@extends('app')

@section('title', 'Downloader')

@section('content')

    {{-- title & search bar--}}
    <section class="p-7">
        <div class="flex items-center justify-between ml-6">
            <div class="text-biru flex">
                <h2 class="font-bold text-xl">View the Downloader</h2>
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

    {{-- Downloader Data --}}
    <section>
        <div class="bg-white rounded-lg shadow-xl overflow-hidden mx-20 my-10">
            <table class="w-full border-collapse">
                <thead class="bg-biru text-white">
                    <tr>
                        <th class="py-3 px-4 text-center">No</th>
                        <th class="py-3 px-4 text-center">Name</th>
                        <th class="py-3 px-4 text-center">Phone Number</th>
                        <th class="py-3 px-4 text-center">Email</th>
                        <th class="py-3 px-4 text-center">Company</th>
                        <th class="py-3 px-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-blue-700">

                    @foreach ($downloader as $d)
                    <tr class="border-t">
                        <td class="py-3 px-4 text-center">{{ $d -> id }}</td>
                        <td class="py-3 px-4 text-center">{{ $d -> name }}</td>
                        <td class="py-3 px-4 text-center">{{ $d -> phone_number }}</td>
                        <td class="py-3 px-4 text-center">{{ $d -> email }}</td>
                        <td class="py-3 px-4 text-center">{{ $d -> company }}</td>
                        <td class="py-3 px-4 flex space-x-2 justify-center">
                            <button class="text-red-500">&#9993;</button>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </section>

@endsection