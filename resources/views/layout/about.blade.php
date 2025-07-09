@extends('app')

@section('title', 'About Us')

@section('content')
    {{-- about us --}}
    <section>
        <div class="py-5 px-4">
            <h1 class="font-bold text-biru text-2xl mb-5 ml-4 text-center lg:text-left" data-aos="fade-zoom">About Us</h1>
            <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center gap-8">
                <div class="lg:w-1/2 w-full flex justify-center mb-6 lg:mb-0">
                    <img src="{{ asset('images/pabrik2.png') }}" alt="pabrik2.png" class="w-full max-w-md h-52 sm:h-60 lg:h-64 rounded-md shadow-xl object-cover" data-aos="fade-down"></img>
                </div>
                <div class="lg:w-1/2 w-full text-biru lg:pl-10">
                    <h2 class="text-xl font-bold mb-4" data-aos="fade-left">Who Are We?</h2>
                    <p class="mb-4" data-aos="fade-left">A Global Seafood Processor Expert & Exporter based in Indonesia</p>
                    <p class="mb-4" data-aos="fade-left">PT. Celebes Ocean Fisheries company are based in Bantaeng, South Sulawesi and focused on providing
                        High Quality And Fresh Fishery Products</p>
                    <p data-aos="fade-left">Our company routinely sends frozen seafood products such as Octopus, Cuttlefish, Loligo Squid, Parrot
                        Fish, Tilapia, Yellowfin Baby Tuna, Skipjack, etc. to America, Mexico, Korea, Thailand, and
                        Singapore since 2019.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4 text-center">
                        <div>
                            <livewire:download-profile/>
                        </div>
                        @auth
                        <div>
                            <a class="italic underline underline-offset-2 font-bold hover:text-blue-400" href="{{ route('downloader') }}">View the downloader</a>
                        </div>    
                        @endauth
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Vision & Mission --}}
    <section class="flex justify-center">
        <div class="py-5 px-4 w-full max-w-7xl">
            <div class="flex flex-col lg:flex-row items-stretch justify-between gap-10">
                <div class="lg:w-3/5 w-full text-biru" data-aos="fade-right">
                    <h2 class="text-xl font-bold my-5">Our Vision and Mission</h2>
                    <p class="mb-4">To Be A Global Leader in Providing High-Quality, Sustainably Sourced Seafood Products, While Empowering Fishing Communities and Business Partners</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>
                            To provide fresh, high-quality seafood products that meet international food safety standards
                        </li>
                        <li>
                            To implement responsible and sustainable fishing practices to preserve marine resources
                        </li>
                        <li>
                            To build strong partnerships with local fishermen and business partners to improve their livelihoods
                        </li>
                        <li>
                            To raise public awareness about the importance of consuming sustainable seafood
                        </li>
                    </ul>
                </div>
                <div class="lg:w-2/5 w-full flex justify-center items-center" data-aos="fade-up">
                    <img src="{{ asset('images/pabrik3.png') }}" alt="pabrik3.png" class="w-full max-w-xs sm:max-w-sm md:max-w-md h-44 sm:h-64 object-cover rounded-md shadow-xl"></img>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Key Features --}}
    <section class="flex items-center justify-center">
        <div class="py-5 px-4 w-full max-w-7xl">
            <h2 class="text-xl font-bold my-5 text-center text-biru" data-aos="fade-down">Our Key Features</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 m-2 text-biru mx-auto justify-center" data-aos="fade-left">
                <div class="bg-white border-biru border-2 rounded-md px-5 py-4 w-full shadow-lg">
                    <h2 class="font-bold mb-2 text-lg">Integrity</h2>
                    <p class="mb-3">Integrity means telling the truth, keeping our word, and treating others with fairness
                        and respect.
                        Integrity is one of our most cherished assets. It must not be compromised.</p>
                </div>
                <div class="bg-white border-biru border-2 rounded-md px-5 py-4 w-full shadow-lg">
                    <h2 class="font-bold mb-2 text-lg">Quality</h2>
                    <p class="mb-3">Quality is exhibited in many ways by selling and supporting products and services that
                        delight
                        customers, establishing a work environment, and delivering financial results that meet investor
                        expectations.</p>
                </div>
                <div class="bg-white border-biru border-2 rounded-md px-5 py-4 w-full shadow-lg">
                    <h2 class="font-bold mb-2 text-lg">Commitment</h2>
                    <p class="mb-3">Commitment is important where we will continue to provide the best to our customers
                        and investors all
                        the time. Our opportunity to serve should be viewed as a privilege that is not to be taken for
                        granted.</p>
                </div>
                <div class="bg-white border-biru border-2 rounded-md px-5 py-4 w-full shadow-lg">
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
        <div class="py-5 px-4 w-full max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center gap-8">
                <div class="lg:w-1/2 w-full flex justify-center mb-6 lg:mb-0">
                    <img src="{{ asset('images/pegawai.png') }}" alt="pegawai.png" class="w-full max-w-xs sm:max-w-sm md:max-w-md h-44 sm:h-64 object-cover rounded-md shadow-xl" data-aos="fade-zoom"></img>
                </div>
                <div class="lg:w-1/2 w-full text-biru lg:pl-10">
                    <h2 class="text-xl font-bold mb-4" data-aos="fade-down">Our Service</h2>
                    <p class="mb-4" data-aos="fade-left">We commit to ensure the quality and security of our products. Our quality control
                        carefully observes seafood products alongside the execution of HACCP and GMP all through the
                        processing of our items.</p>
                    <p class="mb-4" data-aos="fade-left">We control the processing of our food from raw material to the final product. We have
                        also been equipped with equipment such as metal detectors to support our fishery production. </p>
                    <p class=""data-aos="fade-left">All products are stored below -25°C in our storage room to maintain quality.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- What Make Us Different? --}}
    <section class="flex items-center justify-center text-biru">
        <div class="py-5 px-4 w-full max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center gap-8">
                <div class="lg:w-1/2 w-full lg:pl-10 py-8">
                    <h2 class="text-xl font-bold" data-aos="fade-right">What Makes Us Different?</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="flex flex-col items-start text-center p-4 relative">
                            <h2 class="text-4xl font-bold text-blue-300 opacity-50 italic" data-aos="fade-up">01</h2>
                            <p class="relative text-lg leading-relaxed text-shadow-lg" data-aos="fade-zoom">Quality and Safe Shipment
                                Guarantee</p>
                        </div>
                        <div class="flex flex-col items-start text-center p-4 relative">
                            <h2 class="text-4xl font-bold text-blue-300 opacity-50 italic" data-aos="fade-up">02</h2>
                            <p class="relative text-lg leading-relaxed text-shadow-lg" data-aos="fade-zoom">Private Label Solutions</p>
                        </div>
                        <div class="flex flex-col items-start text-center p-4 relative">
                            <h2 class="text-4xl font-bold text-blue-300 opacity-50 italic" data-aos="fade-up">03</h2>
                            <p class="relative text-lg leading-relaxed text-shadow-lg" data-aos="fade-zoom">World Class Service for
                                Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Certification --}}
    <section class="flex items-center justify-center">
        <div class="py-5 px-4 w-full max-w-7xl">
            <h2 class="text-xl font-bold my-5 text-center text-biru" data-aos="fade-down">Certification</h2>
            <div class="grid grid-cols-2 gap-8 m-2 text-biru mx-auto justify-center">
                <div class="px-5 py-2 flex justify-center" data-aos="fade-right">
                    <img src="{{ asset('images/haccp.png') }}" alt="haccp.png" class="max-h-60 object-contain">
                </div>
                <div class="px-5 py-2 flex justify-center" data-aos="fade-left">
                    <img src="{{ asset('images/fda.png') }}" alt="fda.png" class="max-h-60 object-contain">
                </div>
            </div>
        </div>
    </section>
@endsection
