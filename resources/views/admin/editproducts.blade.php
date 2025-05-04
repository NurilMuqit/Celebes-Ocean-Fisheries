@extends('app')

@section('title', 'Edit Products')

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
                Edit Product</a>
        </div>
    </section>

    {{-- form section --}}
    <section>
        <form action="{{ route('product.edit.post', $product->product_slug) }}" method="POST" enctype="multipart/form-data" class="mt-4 grid grid-cols-2 gap-6 m-10">
            @csrf
            @method('PUT')

            <div class="flex flex-col">
                <label class="text-biru italic">Product Name</label>
                <input type="text" value="{{ $product-> product_name }}" name="product_name" placeholder="ex : Salmon"
                    class="w-full p-2 border border-biru rounded-md mt-1 focus:border-blue-600 focus:ring focus:ring-blue-500 outline-none">

                <label class="text-biru italic mt-4">Description</label>
                <textarea placeholder="ex : Chicken is an evolution of dinosaur" name="product_description" 
                    class="w-full p-2 border border-biru rounded-md mt-1 h-36 focus:border-blue-600 focus:ring focus:ring-blue-500 outline-none">{{ old('product_description', $product-> product_description) }}</textarea>
            </div>

            <div class="flex flex-col">
                <label class="text-biru italic">Product Image</label>
                <div class="mt-2 flex gap-4 items-center">
                    @if ($product->product_image)
                        <img src="{{ asset('storage/' . $product->product_image) }}" alt="Uploaded Image"
                            class="w-1/2 h-56 object-cover rounded-md border border-blue-400">
                    @endif            
                    <label
                        class="w-1/2 h-56 border-dashed border-2 border-blue-400 rounded-md relative flex flex-col items-center justify-center cursor-pointer hover:bg-blue-50 overflow-hidden">
                        
                        <input type="file" name="product_image" id="imageUpload" class="hidden" accept="image/png, image/jpeg" onchange="previewFile()">
            
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

            <div class="col-span-2 flex justify-end">
                <button type="submit"
                    class="bg-biru text-white px-6 py-2 rounded-md hover:bg-blue-900 transition font-bold">
                    Save Product
                </button>
            </div>
        </form>
    </section>

    {{-- Modal --}}
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
