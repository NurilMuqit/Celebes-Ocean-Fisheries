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
                    <button type="submit" class="flex bg-putihsusu text-biru font-bold p-1 rounded-md mt-1 px-6 hover:bg-neutral-400">
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
    <section>
        <div class="py-10 px-4">
            <div class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-center">
                <div class="lg:w-1/2 w-full text-putihsusu lg:pl-10 mr-10 justify-center">
                    <h2 class="text-xl font-bold mb-5 mt-5">Our Vision and Mission</h2>
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


@endsection
