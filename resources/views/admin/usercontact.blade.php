@extends('app')

@section('title', 'User Contact')

@section('content')

    {{-- title --}}
    <section>
        <div class="p-8 rounded-lg  w-full max-w-3xl">
            <a class="text-biru font-bold text-shadow-md text-lg flex" onclick="window.location.href='/'"><svg
                    class="w-6 h-6 text-biru hover:text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
                User Contact</a>
        </div>
    </section>

    <section class="flex justify-center mb-10">
        <div class="w-3/4">

            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <table class="w-full border-collapse">
                    <thead class="bg-biru text-white">
                        <tr>
                            <th class="py-3 px-4 text-center">No</th>
                            <th class="py-3 px-4 text-center">Name</th>
                            <th class="py-3 px-4 text-center">Email</th>
                            <th class="py-3 px-4 text-center">Phone Number</th>
                            <th class="py-3 px-4 text-center">Details</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue-700">
                        @foreach ($form as $f)
                        <tr class="border-t text-center">
                            <td class="py-3 px-4">{{ $f -> id }}</td>
                            <td class="py-3 px-4">{{ $f -> name }}</td>
                            <td class="py-3 px-4">{{ $f -> email }}</td>
                            <td class="py-3 px-4">{{ $f -> phone }}</td>
                            <td class="py-3 px-4">
                                <a class="text-blue-500 flex justify-center items-center" href="{{ route('user.contact.edit', $f->id) }}"><svg class="w-6 h-6 text-biru hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                                  </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection