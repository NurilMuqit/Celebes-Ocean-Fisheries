@extends('app')

@section('title', '{{ $form-> name }}')

@section('content')
<section class="max-w-3xl mx-auto mt-10 mb-10 bg-white p-8 rounded-xl shadow-md text-biru">
    <h2 class="text-2xl font-bold mb-6 text-center">Contact Detail</h2>

    <div class="space-y-4">
        <div class="flex justify-between">
            <span class="font-semibold">Name:</span>
            <span>{{ $form->name }}</span>
        </div>
        <div class="flex justify-between">
            <span class="font-semibold">Email:</span>
            <span>{{ $form->email }}</span>
        </div>
        <div class="flex justify-between">
            <span class="font-semibold">Phone:</span>
            <span>{{ $form->phone }}</span>
        </div>
        <div class="flex justify-between">
            <span class="font-semibold">Subject:</span>
            <span>{{ $form->subject }}</span>
        </div>
        <div>
            <span class="font-semibold">Message:</span>
            <div class="mt-2 p-4 bg-gray-100 rounded text-gray-700">
                {{ $form->message }}
            </div>
        </div>
    </div>

</section>


@endsection