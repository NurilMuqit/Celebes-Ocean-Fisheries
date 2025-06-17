<header x-data="{ open: false }" class="relative">
    <nav class="bg-biru items-center mx-auto flex rounded-b-lg justify-between px-2">
        <div class="flex items-center">
            <a href="#">
                <div class="bg-white rounded-full m-2">
                    <img src="{{ asset('images/logopt.png') }}" alt="" class="h-16 w-16 object-contain">
                </div>
            </a>
        </div>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex flex-row space-x-10 text-putihsusu font-bold mr-4">
            <a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors duration-200">Home</a>
            <a href="{{ route('about') }}" class="hover:text-gray-300 transition-colors duration-200">About Us</a>
            <a href="{{ route('product') }}" class="hover:text-gray-300 transition-colors duration-200">Products</a>
            <a href="{{ route('home') }}#contact" class="hover:text-gray-300 transition-colors duration-200">Contact Us</a>
            <a href="{{ route('news') }}" class="hover:text-gray-300 transition-colors duration-200">News & Articles</a>
            @auth
                <livewire:admin-dropdown />
            @endauth
        </div>

        {{-- Hamburger Icon --}}
        <div class="md:hidden flex items-center">
            <button @click="open = !open" class="text-putihsusu focus:outline-none">
                <svg x-show="!open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg x-show="open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </nav>
    
    {{-- Mobile Menu --}}
    <div 
        x-show="open" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden bg-biru rounded-b-lg shadow-lg z-50 px-4 py-3 space-y-3 text-putihsusu font-bold absolute w-full left-0"
        style="display: none;"
    >
        <a href="{{ route('home') }}" class="block hover:text-gray-300 transition-colors duration-200">Home</a>
        <a href="{{ route('about') }}" class="block hover:text-gray-300 transition-colors duration-200">About Us</a>
        <a href="{{ route('product') }}" class="block hover:text-gray-300 transition-colors duration-200">Products</a>
        <a href="{{ route('home') }}#contact" class="block hover:text-gray-300 transition-colors duration-200">Contact Us</a>
        <a href="{{ route('news') }}" class="block hover:text-gray-300 transition-colors duration-200">News & Articles</a>
        @auth
            <livewire:admin-dropdown />
        @endauth
    </div>
</header>
