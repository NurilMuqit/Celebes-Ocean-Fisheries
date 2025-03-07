@extends('app')

@section('title', __('Forbidden'))

@section('content')
    <section class="text-biru">
        <div class="container flex justify-center items-center">
            <img class="my-10" src="{{ asset('images/403.png') }}" alt="">
        </div>
        <div class="text-center mb-10">
            <h1 class="font-bold text-2xl">Something Is Wrong!</h1>
            <p>You don't have permission to access the resource</p>
        </div>
    </section>
@endsection
