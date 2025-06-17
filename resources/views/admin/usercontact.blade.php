@extends('app')

@section('title', 'User Contact')

@section('content')

    {{-- title --}}
    <section>
        <div class="px-4 py-6 rounded-lg w-full max-w-8xl mx-auto">
            <a class="text-biru font-bold text-shadow-md text-lg flex items-center gap-2 cursor-pointer" onclick="window.location.href='/'">
                <svg class="w-6 h-6 text-biru hover:text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
                User Contact
            </a>
        </div>
    </section>

    <section class="flex justify-center mb-10">
        <div class="w-full max-w-6xl px-2">
            <div class="bg-white rounded-lg shadow-xl overflow-x-auto" x-data="modalDelete()">
                <table class="w-full border-collapse min-w-[650px]">
                    <thead class="bg-biru text-white">
                        <tr>
                            <th class="py-3 px-2 text-center">No</th>
                            <th class="py-3 px-2 text-center">Name</th>
                            <th class="py-3 px-2 text-center">Email</th>
                            <th class="py-3 px-2 text-center">Phone Number</th>
                            <th class="py-3 px-2 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue-700">
                        @foreach ($form as $f)
                        <tr class="border-t text-center">
                            <td class="py-3 px-2">{{ $form->firstItem() + $loop->index }}</td>
                            <td class="py-3 px-2">{{ $f->name }}</td>
                            <td class="py-3 px-2 break-all">{{ $f->email }}</td>
                            <td class="py-3 px-2">{{ $f->phone }}</td>
                            <td class="py-3 px-2 flex space-x-2 justify-center">
                                <a class="text-blue-500" title="Detail" href="{{ route('user.contact.detail', $f->id) }}">
                                    <svg class="w-6 h-6 text-biru hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                                <a href="mailto:{{ $f->email }}" title="Email" class="text-red-500">&#9993;</a>
                                <a href="https://wa.me/{{ ltrim($f->phone) }}" title="Whatsapp" class="text-red-500">&#9742;</a>
                                <button type="button" class="text-red-500" title="Delete" @click="openModal('{{ route('user.contact.delete', $f->id) }}', '{{ $f->name }}')">&#128465;</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- modal delete --}}
                <div x-show="show" x-cloak class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
                    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
                        <h2 class="text-lg font-bold mb-4 text-center text-red-900">Delete This Data?</h2>
                        <p class="text-center text-red-500 italic font-medium">This action cannot be undone. Are you sure want to delete this data?</p>
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

            {{-- Modal --}}
            <x-modal/>

            {{-- pagination --}}
            <div class="mt-4 px-2">
                {{ $form->links() }}
            </div>

        </div>
    </section>
@endsection
