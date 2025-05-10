<div x-data="{ show: @entangle('showModal') }">

    {{-- Trigger button --}}
    <button @click="show = true" type="button"
        class="flex bg-biru text-putihsusu font-bold p-1 rounded-md mt-1 px-6 py-2 hover:bg-neutral-400">
        <svg class="w-5 h-5 text-putihsusu" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 13V4M7 14H5a1 1 0 00-1 1v4a1 1 0 001 1h14a1 1 0 001-1v-4a1 1 0 00-1-1h-2m-1-5-4 5-4-5m9 8h.01" />
        </svg>
        Company Profile
    </button>

    {{-- Modal --}}
    <div
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 z-50"
        x-cloak
    >
        <div class="bg-white rounded-lg w-1/3 shadow-lg">
            <div class="grid place-content-end p-2">
                <button type="button" @click="show = false" >
                    <svg class="w-6 h-6 text-biru hover:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                    </svg>
                </button>
            </div>
            <div class="px-6 py-3 mb-3">
                <h2 class="text-lg font-bold text-center mb-4 text-biru">Please submit your email to download this file</h2>

                <form wire:submit.prevent="submit" class="space-y-4">
    
                    <input type="text" wire:model.defer="name" placeholder="Name"
                        class="w-full p-2 shadow-lg rounded focus:outline-none focus:ring focus:ring-blue-400" required>
    
                    <input type="text" wire:model.defer="phone_number" placeholder="Phone Number"
                        class="w-full p-2 shadow-lg rounded focus:outline-none focus:ring focus:ring-blue-400" required>
    
                    <input type="email" wire:model.defer="email" placeholder="Email"
                        class="w-full p-2 shadow-lg rounded focus:outline-none focus:ring focus:ring-blue-400" required>
    
                    <input type="text" wire:model.defer="company" placeholder="Company"
                        class="w-full p-2 shadow-lg rounded focus:outline-none focus:ring focus:ring-blue-400" required>
    
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="bg-biru text-putihsusu font-bold py-2 px-6 rounded hover:bg-blue-500">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Flash message testing --}}
    @if (session()->has('message'))
    <div class="fixed bottom-4 right-4 bg-green-500 text-white p-3 rounded shadow-lg">
        {{ session('message') }}
    </div>
    @endif

</div>

{{-- Script download --}}
<script>
    window.addEventListener('download-file', event => {
        const link = document.createElement('a');
        link.href = event.detail.url;
        link.download = '';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>
