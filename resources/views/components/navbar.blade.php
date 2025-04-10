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
            <livewire:admin-dropdown />
        @endauth
        </div>

    </nav>
</header>
