@extends('app')

@section('title', 'About Us')

@section('content')
    {{-- about us --}}
    <section>
        <div class="py-10 px-4">
            <h1 class="font-bold text-putihsusu text-2xl mb-5 ml-4 text-center lg:text-left">About Us</h1>
            <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center">
                <div class="lg:w-1/2 w-full flex justify-center mb-6 lg:mb-0">
                    <div class="bg-gray-200 w-full h-60 lg:w-4/5 lg:h-64 rounded-md shadow-xl"></div>
                </div>
                <div class="lg:w-1/2 w-full text-putihsusu lg:pl-10 mr-10 ">
                    <h2 class="text-xl font-bold mb-4">Who Are We?</h2>
                    <p class="mb-4">A Global Seafood Processor Expert & Exporter based in Indonesia</p>
                    <p class="mb-4">PT. Celebes Ocean Fisheries company are based in Ambon, Maluku and focused on providing
                        High Quality And Fresh Fishery Products</p>
                    <p>Our company routinely sends frozen seafood products such as Octopus, Cuttlefish, Loligo Squid, Parrot
                        Fish, Tilapia, Yellowfin Baby Tuna, Skipjack, etc. to America, Mexico, Korea, Thailand, and
                        Singapore since 2019.</p>
                    <button type="submit"
                        class="flex bg-putihsusu text-biru font-bold p-1 rounded-md mt-1 px-6 hover:bg-neutral-400">
                        <svg class="w-6 h-6 text-gray-800 dark:text-biru" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01" />
                        </svg>
                        Company Profile
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Vision & Mission --}}
    <section class="flex items-center justify-center">
        <div class="py-10 px-4">
            <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center">
                <div class="lg:w-1/2 w-full text-putihsusu lg:pl-10 mr-10 justify-center">
                    <h2 class="text-xl font-bold my-5">Our Vision and Mission</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="lg:w-1/2 w-full flex justify-center mb-6 lg:mb-0">
                    <div class="bg-gray-200 w-full h-60 lg:w-4/5 lg:h-64 rounded-md shadow-xl"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Key Features --}}
    <section class="flex items-center justify-center">
        <div class="py-10 px-4">
            <h2 class="text-xl font-semibold my-5 text-center text-putihsusu">Our Key Features</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 m-5 text-semibold text-biru mx-auto justify-center">
                <div class="bg-white rounded-md px-5 py-2 w-60">
                    <h2 class="font-bold mb-2 text-lg">Integrity</h2>
                    <p class="mb-3">Integrity means telling the truth, keeping our word, and treating others with fairness
                        and respect.
                        Integrity is one of our most cherished assets. It must not be compromised.</p>
                </div>
                <div class="bg-white rounded-md px-5 py-2 w-60">
                    <h2 class="font-bold mb-2 text-lg">Quality</h2>
                    <p class="mb-3">Quality is exhibited in many ways by selling and supporting products and services that
                        delight
                        customers, establishing a work environment, and delivering financial results that meet investor
                        expectations.</p>
                </div>
                <div class="bg-white rounded-md px-5 py-2 w-60">
                    <h2 class="font-bold mb-2 text-lg">Commitment</h2>
                    <p class="mb-3">Commitment is important where we will continue to provide the best to our customers
                        and investors all
                        the time. Our opportunity to serve should be viewed as a privilege that is not to be taken for
                        granted.</p>
                </div>
                <div class="bg-white rounded-md px-5 py-2 w-60">
                    <h2 class="font-bold mb-2 text-lg">Innovation</h2>
                    <p class="mb-3">Innovation means inventing, designing, and developing products and services that have
                        high appeal in
                        the marketplace and strengthen customer preference for the Celebes Ocean Fisheries project.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Service --}}
    <section class="flex items-center justify-center">
        <div class="py-10 px-4">
            <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center">
                <div class="lg:w-1/2 w-full flex justify-center mb-6 lg:mb-0">
                    <div class="bg-gray-200 w-full h-60 lg:w-4/5 lg:h-64 rounded-md shadow-xl"></div>
                </div>
                <div class="lg:w-1/2 w-full text-putihsusu lg:pl-10 mr-10 justify-center">
                    <h2 class="text-xl font-bold mb-4">Our Service</h2>
                    <p class="mb-4">We commit to ensure the quality and security of our products. Our quality control
                        carefully observes seafood products alongside the execution of HACCP and GMP all through the
                        processing of our items.</p>
                    <p class="mb-4">We control the processing of our food from raw material to the final product. We have
                        also been equipped with equipment such as metal detectors to support our fishery production. </p>
                    <p class="">All products are stored below -25°C in our storage room to maintain quality.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- What Make Us Different? --}}
    <section class="flex items-center justify-center text-putihsusu">
        <div class="py-10 px-4">
            <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center">
                <div class="lg:w-1/2 w-full lg:pl-10 mr-10 py-8">
                    <h2 class="text-xl font-bold">What Makes Us Different?</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="flex flex-col items-start text-center p-4">
                            <h2 class="text-4xl font-bold text-blue-300 opacity-50 italic absolute">01</h2>
                            <p class="relative text-lg leading-relaxed mt-5 text-shadow-lg">Quality and Safe Shipment
                                Guarantee</p>
                        </div>
                        <div class="flex flex-col items-start text-center p-4">
                            <h2 class="text-4xl font-bold text-blue-300 opacity-50 italic absolute">02</h2>
                            <p class="relative text-lg leading-relaxed mt-5 text-shadow-lg">Private Label Solutions</p>
                        </div>
                        <div class="flex flex-col items-start text-center p-4">
                            <h2 class="text-4xl font-bold text-blue-300 opacity-50 italic absolute">03</h2>
                            <p class="relative text-lg leading-relaxed mt-5 text-shadow-lg">World Class Service for
                                Customers</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex justify-center mb-6 lg:mb-0">
                    <div class="bg-gray-200 w-full h-60 lg:w-4/5 lg:h-64 rounded-md shadow-xl"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Certification --}}
    <section class="flex items-center justify-center">
        <div class="py-10 px-4">
            <h2 class="text-xl font-semibold my-5 text-center text-putihsusu">Certification</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8 m-5 text-semibold text-biru mx-auto justify-center">
                <div class="px-5 py-2 w-60">
                    <img src="{{ asset('images/haccp.png') }}" alt="">
                </div>
                <div class="px-5 py-2 w-60">
                    <img src="{{ asset('images/gmp.png') }}" alt="">
                </div>
                <div class="px-5 py-2 w-60">
                    <img src="{{ asset('images/fda.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
