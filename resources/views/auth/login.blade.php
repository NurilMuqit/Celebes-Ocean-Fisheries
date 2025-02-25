<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - Celebes Ocean Fisheries</title>
    <link rel="icon" href="{{ asset('images/logopt.png') }}" type="image/png">

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-biru font-montserrat flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-96">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/logotext.png') }}" alt="Logo" class="h-20">
        </div>
        <h2 class="text-xl font-bold text-biru text-center">Login Page</h2>
        <p class="text-sm text-gray-500 text-center mb-6">Insert your email and password</p>
        
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-biru" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-biru" for="password">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-700 text-putihsusu py-2 rounded-lg hover:bg-blue-700 transition">Login</button>
        </form>
    </div>
</body>

</html>
