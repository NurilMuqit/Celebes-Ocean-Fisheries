@extends('app')

@section('title', __('Page Expired'))

@section('content')
    <section class="text-putihsusu">
        <div class="container flex justify-center items-center">
            <img class="my-10" src="{{ asset('images/419.png') }}" alt="">
        </div>
        <div class="text-center mb-10">
            <h1 class="font-bold text-2xl">Something Is Wrong!</h1>
            <p>Page expired</p>
        </div>
    </section>
@endsection
