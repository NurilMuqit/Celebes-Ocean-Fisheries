@extends('app')

@section('title', $form->name )

@section('content')
<section class="max-w-3xl mx-auto mt-8 mb-10 bg-white p-4 sm:p-8 rounded-xl shadow-md text-biru">
    <h2 class="text-2xl font-bold mb-6 text-center">Contact Detail</h2>

    <div class="space-y-4">
        <div class="flex flex-col sm:flex-row sm:justify-between">
            <span class="font-semibold mb-1 sm:mb-0">Name:</span>
            <span>{{ $form->name }}</span>
        </div>
        <div class="flex flex-col sm:flex-row sm:justify-between">
            <span class="font-semibold mb-1 sm:mb-0">Email:</span>
            <span class="break-all">{{ $form->email }}</span>
        </div>
        <div class="flex flex-col sm:flex-row sm:justify-between">
            <span class="font-semibold mb-1 sm:mb-0">Phone:</span>
            <span>{{ $form->phone }}</span>
        </div>
        <div class="flex flex-col sm:flex-row sm:justify-between">
            <span class="font-semibold mb-1 sm:mb-0">Subject:</span>
            <span>{{ $form->subject }}</span>
        </div>
        <div>
            <span class="font-semibold">Message:</span>
            <div class="mt-2 p-4 bg-gray-100 rounded text-gray-700 break-words">
                {{ $form->message }}
            </div>
        </div>
    </div>
</section>
@endsection
