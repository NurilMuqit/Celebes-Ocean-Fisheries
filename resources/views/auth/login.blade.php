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

<body class="bg-biru font-montserrat flex items-center justify-center min-h-screen px-2">
    <div class="bg-white px-4 py-8 sm:px-8 rounded-2xl shadow-lg w-full max-w-xs sm:max-w-md">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/logotext.png') }}" alt="Logo" class="h-16 sm:h-20 object-contain">
        </div>
        <h2 class="text-lg sm:text-xl font-bold text-biru text-center">Login Page</h2>
        <p class="text-xs sm:text-sm text-gray-500 text-center mb-6">Insert your email and password</p>

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-biru text-sm sm:text-base" for="email">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base"
                    required>
            </div>
            <div class="mb-4">
                <label class="block text-biru text-sm sm:text-base" for="password">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm sm:text-base"
                    required>
            </div>
            <button type="submit"
                class="w-full bg-blue-700 text-putihsusu py-2 rounded-lg hover:bg-blue-800 transition font-semibold text-base sm:text-lg">Login</button>
        </form>
    </div>
</body>

</html>
