@extends('app')

@section('title', __('Too Many Requests'))

@section('content')
    <section class="text-biru mt-10 flex flex-col justify-center items-center">
        <div class="w-96 h-96 flex items-center justify-center overflow-hidden rounded">
            <img class="object-contain w-full h-full" src="{{ asset('images/429.png') }}" alt="">
        </div>
        <div class="text-center mb-10">
            <h1 class="font-bold text-2xl">Something Is Wrong!</h1>
            <p>Too many requests</p>
        </div>
    </section>
@endsection
