<header>
    <nav class=" bg-white items-center mx-auto flex rounded-b-lg justify-between px-2">
        <div class="flex items-center">
            <a href="#">
                <img src="{{ asset('images/logopt.png') }}" alt="" class="h-20 w-auto">
            </a>
        </div>
        <div class="flex flex-row space-x-16 text-biru font-bold mr-10">
            <a href="{{ route('home') }}" class="hover:text-blue-400">Home</a>
            <a href="{{ route('about') }}" class="hover:text-blue-400">About Us</a>
            <a href="#products" class="hover:text-blue-400">Products</a>
            <a href="#contact" class="hover:text-blue-400">Contact Us</a>
            <a href="#news" class="hover:text-blue-400">News & Articles</a>
        </div>
    </nav>
</header>
