@extends('app')

@section('title', __('Not Found'))

@section('content')
    <section class="text-putihsusu">
        <div class="container flex justify-center items-center">
            <img class="my-10" src="{{ asset('images/404.png') }}" alt="">
        </div>
        <div class="text-center mb-10">
            <h1 class="font-bold text-2xl">Something Is Wrong!</h1>
            <p>The requested resource could not be found</p>
        </div>
    </section>
@endsection
