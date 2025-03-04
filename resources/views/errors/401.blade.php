@extends('app')

@section('title', __('Unauthorized'))

@section('content')
    <section class="text-putihsusu">
        <div class="container flex justify-center items-center">
            <img class="my-10" src="{{ asset('images/401.png') }}" alt="">
        </div>
        <div class="text-center mb-10">
            <h1 class="font-bold text-2xl">Something Is Wrong!</h1>
            <p>You are unauthorized</p>
        </div>
    </section>
@endsection
