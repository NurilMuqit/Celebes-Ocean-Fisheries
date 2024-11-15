<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-montserrat">

    {{-- Navbar --}}
    <header class="bg-white">
        <nav class=" bg-biru mx-auto flex rounded-b-lg justify-between p-6 lg:px-8">
            <div class="flex items-center ml-5">
                <a href="#">
                    {{-- ganti ke logo --}}
                    <h1 class=" font-bold">LOGO</h1>
                </a>
            </div>
            <div class="flex flex-row space-x-20 text-putihsusu font-semibold mr-10">
                <a href="#home" class="hover:text-gray-300">Home</a>
                <a href="#about" class="hover:text-gray-300">About Us</a>
                <a href="#products" class="hover:text-gray-300">Products</a>
                <a href="#contact" class="hover:text-gray-300">Contact Us</a>
                <a href="#news" class="hover:text-gray-300">News & Articles</a>
            </div>
        </nav>
    </header>

    {{-- Hero --}}
    <section id="home" class="bg-cover bg-center h-screen flex items-center"
        style="background-image: url('{{ asset('images/dummy.png') }}');">
        <div class="container mx-auto text-center">
            {{-- ganti ke logo --}}
            <h1 class="font-bold">LOGO</h1>
            <h1 class="text-biru font-bold text-4xl text-shadow-xl mb-2">Celebes Ocean Fisheries</h1>
            <p class="text-biru text-xl max-w-6xl mx-auto italic mb-1">Suplying Across the Globe</p>
            <p class="text-biru text-xl max-w-6xl mx-auto font-bold">SEAFOOD PROCESSOR EXPERT & EXPORTER</p>

        </div>
    </section>

    {{-- Products --}}
    <section id="products" class="bg-white py-20">
        <div class="container mx-auto text-center">

            <h1 class="text-biru font-bold text-3xl mb-5 text-shadow-xl">Products</h1>
            <p class="text-biru text-lg mb-5 max-w-7xl mx-auto">We provide fresh and frozen fishery products <br> All of
                our frozen and fresh fishery products are <b>caught fresh</b> from the ocean</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 m-5">
                <div class="bg-abuabu2 rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="product" class="object-cover rounded-lg">
                    <h1 class="text-blue-500 text-lg mt-4 text-center">Product No 1</h1>
                </div>
                <div class="bg-abuabu2 rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="product" class="object-cover rounded-lg">
                    <h1 class="text-blue-500 text-lg mt-4 text-center">Product No 2</h1>
                </div>
                <div class="bg-abuabu2 rounded-lg shadow-lg p-6 flex flex-col items-center">
                    <img src="{{ asset('images/dummy.png') }}" alt="product" class="object-cover rounded-lg">
                    <h1 class="text-blue-500 text-lg mt-4 text-center">Product No 3</h1>
                </div>
            </div>
            <div class="mt-10">
                <a href=""
                    class="bg-white text-biru shadow-md  font-bold border border-biru rounded-md py-2 px-11">
                    View All Products
                </a>
            </div>
        </div>
    </section>

    {{-- About Us --}}
    <section id="about" class="bg-white">
        <div class="flex items-center space-x-2 mb-2">
            <hr class="flex-grow border-t border-blue-200">
            <h2 class="text-lg md:text-xl font-bold text-blue-800 whitespace-nowrap">Why Celebes Ocean Fisheries?</h2>
            <hr class="flex-grow border-t border-blue-200">
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center my-8 px-4">
            <div class="lg:w-1/2 w-full mb-4 lg:mb-0 m-5 ml-24">
                <p class="text-justify text-biru mt-4">
                    Celebes Ocean Fisheries serves the best quality products. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.
                </p>
            </div>
            <div class="lg:w-1/2 w-full flex justify-center">
                <div class="bg-gray-200 w-full h-60 lg:w-96 lg:h-60 rounded-md shadow-xl"></div>
            </div>
        </div>
    </section>

    {{-- contact --}}
    <section>
        <div class="max-w-4xl m-20 my-10 px-4">
            <h2 class="text-xl font-bold text-biru">Be Our Partner in Your Country</h2>
            <p class="text-biru mb-6 italic">Please contact us to know more about our company, products, and sample
                requests
            </p>
            <form class="grid grid-cols-1 md:grid-cols-3 gap-4">

                <div class="md:col-span-1 space-y-4 ">
                    <input type="text" placeholder="Name"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="email" placeholder="Email"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="text" placeholder="Phone Number"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="md:col-span-2 space-y-4">
                    <input type="text" placeholder="Subject"
                        class="w-full p-3 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <textarea placeholder="Your Opinion"
                        class="w-full p-3 rounded-md shadow-lg h-28 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="md:col-span-3 flex justify-end">
                    <button type="submit"
                        class="bg-blue-700 text-white py-2 px-6 rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit</button>
                </div>

            </form>
        </div>

    </section>

    {{-- footer --}}
    <footer class="bg-biru rounded-t-lg">
        <div class="flex">
            <div class="m-6">
                {{-- ganti ke logo --}}
                <h1 class=" font-bold">LOGO</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-40 ml-10 mt-4 text-putihsusu">

                <div>
                    <h1 class=" font-bold text-xl">Celebes Ocean Fisheries</h1>
                    <p class="italic">Supplying Across the Globe</p>
                    <p>SEAFOOD PROCESSOR EXPERT & EXPORTER</p>
                    <br>
                    <p class="text-sm">We also continue to update the information about the company through social
                        media. For the latest
                        information you can follow our social media.</p>
                </div>
                <div>
                    <h1 class=" font-bold">Let's Get in Touch</h1>
                    <div class="grid-cols-1 md:grid-cols-2 flex">
                        <div>
                            <div class="flex">
                                <svg class="h-5 w-5 text-putihsusu m-1" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <a href="">+62XXXXXXXX</a>
                            </div>
                            <div class="flex">
                                <svg class="h-5 w-5 text-putih-susu m-1" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <rect x="3" y="5" width="18" height="14" rx="2" />
                                    <polyline points="3 7 12 13 21 7" />
                                </svg>
                                <a href="">celebesoceanfisheries@gmail.com</a>
                            </div>
                            <div class="flex">
                                <svg class="h-5 w-5 text-putihsusu m-1" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                                <a href="">Waai, Kab. Maluku Tengah, Maluku <br> 97582 Indonesia</a>
                            </div>
                        </div>
                        <div class="ml-11">
                            <div class="flex">
                                <svg class="h-5 w-5 text-putihsusu m-1" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                </svg>
                                <a href="">Lorem ipsum</a>
                            </div>
                            <div class="flex">
                                <svg class="h-5 w-5 text-putihsusu m-1" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                </svg>
                                <a href="">Lorem ipsum</a>
                            </div>
                            <div class="flex">
                                <svg class="h-5 w-5 text-putihsusu m-1" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                    <rect x="2" y="9" width="4" height="12" />
                                    <circle cx="4" cy="4" r="2" />
                                </svg>
                                <a href="">Lorem ipsum</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <p class="text-putihsusu text-center py-4 mt-7">&copy; 2024 Celebes Ocean Fisheries. All Rights Reserved.</p>
    </footer>

</body>

</html>
