<header>
    <nav class=" bg-biru items-center mx-auto flex rounded-b-lg justify-between px-2">
        <div class="flex items-center">
            <a href="#">
                <img src="{{ asset('images/logopt.png') }}" alt="" class="h-20 w-auto">
            </a>
        </div>
        <div class="flex flex-row space-x-16 text-putihsusu font-bold mr-10">
            <a href="{{ route('home') }}" class="hover:text-gray-300">Home</a>
            <a href="{{ route('about') }}" class="hover:text-gray-300">About Us</a>
            <a href="{{ route('product') }}" class="hover:text-gray-300">Products</a>
            <a href="#contact" class="hover:text-gray-300">Contact Us</a>
            <a href="{{ route('news') }}" class="hover:text-gray-300">News & Articles</a>
            @auth
                <div x-data="{ open: false }" class="relative font-semibold">
                    <button @click="open = !open"
                        class="flex items-center space-x-2 px-3 py-1 rounded-lg hover:bg-gray-300">
                        <span class="text-gray-700">Hi, {{ Auth::user()->name }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 shadow-lg rounded-lg">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block w-full text-left px-4 py-2 text-red-500 hover:bg-red-100">Logout</button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>

    </nav>
</header>
