@extends('app')

@section('title', __('Payment Required'))

@section('content')
    <section class="text-putihsusu">
        <div class="container flex justify-center items-center">
            <img class="my-10" src="{{ asset('images/402.png') }}" alt="">
        </div>
        <div class="text-center mb-10">
            <h1 class="font-bold text-2xl">Something Is Wrong!</h1>
            <p>Payment required, please complete your purchase to proceed</p>
        </div>
    </section>
@endsection