@extends('app')

@section('title', 'Add News')

@section('content')

    {{-- title --}}
    <section>
        <div class="p-8 rounded-lg  w-full max-w-3xl">
            <a class="text-biru font-bold text-shadow-md text-lg flex" onclick="window.location.href='/product'"><svg
                    class="w-6 h-6 text-biru hover:text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
                Add News</a>
        </div>
    </section>

    {{-- form section --}}
    <section>
        <form class="mt-4 grid grid-cols-2 gap-6 m-20" method="POST" action="{{ route('news.add.post') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label class="block text-biru italic" for="title">Title</label>
                <input type="text" placeholder="ex : Fish" name="title" value="{{ old('title') }}"
                    class="w-full p-2 border border-biru focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-md mt-1">
                <label class="block text-biru italic mt-4" for="description">Description</label>
                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                <trix-editor input="description"
                    class="trix-content mt-1 border border-biru rounded-md h-48 overflow-y-auto"></trix-editor>
            </div>
            
            <div class="flex flex-col justify-between h-full">
                <div>
                    <label class="block text-biru italic">News Image</label>
                    <div onclick="document.getElementById('imageUpload').click()"
                    class="border-dashed border-2 border-blue-300 rounded-md flex flex-col items-center justify-center h-80 cursor-pointer mt-1 hover:bg-blue-50">
                    <span id="icon" class="text-blue-700">
                        <svg class="w-6 h-6 text-biru" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <p id="uploadText" class="text-biru italic">Select image (JPG, PNG) Max 2MB</p>
                    <div id="previewContainer" class="absolute flex flex-col items-center gap-2 mt-2"></div>
                    <input type="file" id="imageUpload" name="image" accept="image/*" class="hidden"
                        onchange="previewFile()">
                </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-biru font-bold text-putihsusu px-8 py-2 rounded-md mt-4">Add News</button>
                </div>
            </div>
        </form>
    </section>
    
    {{-- modal --}}
    <x-modal/>

    {{-- script --}}
    <script>
        function previewFile() {
            const file = document.getElementById('imageUpload').files[0];
            const previewContainer = document.getElementById('previewContainer');
    
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    let imgPreview = document.getElementById('previewImage');
    
                    if (!imgPreview) {
                        imgPreview = document.createElement('img');
                        imgPreview.id = 'previewImage';
                        imgPreview.classList.add('mt-2', 'max-h-72', 'rounded-md');
                        previewContainer.appendChild(imgPreview);
                    }
    
                    imgPreview.src = e.target.result;

                    uploadText.style.display = 'none';
                    icon.style.display = 'none';

                };
                reader.readAsDataURL(file);
            }
        }
    </script>

@endsection
