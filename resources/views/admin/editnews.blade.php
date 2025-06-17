@extends('app')

@section('title', 'Edit News')

@section('content')

    {{-- title --}}
    <section>
        <div class="px-4 py-6 rounded-lg w-full max-w-8xl mx-auto">
            <a class="text-biru font-bold text-shadow-md text-lg flex items-center gap-2 cursor-pointer" onclick="window.location.href='/news'">
                <svg class="w-6 h-6 text-biru hover:text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
                Edit News
            </a>
        </div>
    </section>

    {{-- form section --}}
    <section>
        <form action="{{ route('news.edit.post', $news->news_slug ) }}" method="POST" enctype="multipart/form-data"
              class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-8 px-4 md:px-12 py-8 w-full max-w-8xl mx-auto">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-biru italic">Title</label>
                <input type="text" placeholder="ex : Fish" name="title" value="{{ $news->title }}"
                    class="w-full p-2 border border-biru focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-md mt-1">
                <label class="block text-biru italic mt-4">Description</label>
                <input id="description" type="hidden" name="description" value="{{ $news->description }}">
                <trix-editor input="description"
                    class="trix-content mt-1 border border-biru rounded-md h-48 overflow-y-auto"></trix-editor>
            </div>

            <div class="flex flex-col justify-between h-full">
                <div>
                    <label class="block text-biru italic mb-2">News Image</label>
                    <div class="flex flex-col sm:flex-row gap-4 items-center">
                        @if ($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" alt="Uploaded Image"
                                class="w-full sm:w-1/2 h-44 sm:h-56 object-cover rounded-md border border-blue-400 mb-2 sm:mb-0">
                        @endif            
                        <label
                            class="w-full sm:w-1/2 h-44 sm:h-56 border-dashed border-2 border-blue-400 rounded-md relative flex flex-col items-center justify-center cursor-pointer hover:bg-blue-50 overflow-hidden">
                            <input type="file" name="image" id="imageUpload" class="hidden" accept="image/png, image/jpeg" onchange="previewFile()">
                            <span id="icon" class="text-biru text-xl z-10">
                                <svg class="w-6 h-6 text-biru" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p id="uploadText" class="text-biru italic text-sm text-center z-10">Change image (JPG, PNG)</p>
                            <img id="imagePreview" class="absolute top-0 left-0 w-full h-full object-cover rounded-md hidden" />
                        </label>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="w-full md:w-auto bg-biru font-bold text-putihsusu px-8 py-2 rounded-md">Save News</button>
                </div>
            </div>
        </form>
    </section>

    {{-- modal --}}
    <x-modal/>

    {{-- Script --}}
    <script>
        function previewFile() {
            const input = document.getElementById('imageUpload');
            const file = input.files[0];
            const preview = document.getElementById('imagePreview');
            const icon = document.getElementById('icon');
            const text = document.getElementById('uploadText');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    icon.classList.add('hidden');
                    text.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }
        }
    </script>    

@endsection
