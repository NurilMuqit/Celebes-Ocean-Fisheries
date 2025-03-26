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
    <section class="">
        <form class="mt-4 grid grid-cols-2 gap-6 m-10">

            <div class="flex flex-col">
                <label class="text-biru italic">Product Name</label>
                <input type="text" placeholder="Salmon"
                    class="w-full p-2 border border-biru rounded-md mt-1 focus:border-blue-600 focus:ring focus:ring-blue-500 outline-none">

                <label class="text-biru italic mt-4">Description</label>
                <textarea placeholder="Chicken is an evolution of dinosaur"
                    class="w-full p-2 border border-biru rounded-md mt-1 h-36 focus:border-blue-600 focus:ring focus:ring-blue-500 outline-none"></textarea>
            </div>

            <div class="flex flex-col">
                <label class="text-biru italic">Product Image</label>
                <div class="mt-2 flex gap-4 items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="Uploaded Image"
                        class="w-1/2 h-56 object-cover rounded-md border border-blue-400">
                    <label
                        class="w-1/2 h-56 border-dashed border-2 border-blue-400 rounded-md flex flex-col items-center justify-center cursor-pointer hover:bg-blue-50">
                        <input type="file" class="hidden" accept="image/png, image/jpeg">
                        <span class="text-biru text-xl"><svg class="w-6 h-6 text-biru" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <p class="text-biru italic text-sm text-center">Change image (JPG, PNG)</p>
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

@endsection
