<div x-data="{ show: @entangle('showModal') }">

    {{-- Trigger button --}}
    <button @click="show = true" type="button"
        class="flex bg-biru text-putihsusu font-bold p-1 rounded-md mt-1 px-6 hover:bg-neutral-400">
        <svg class="w-6 h-6 text-putihsusu" xmlns="http://www.w3.org/2000/svg" fill="none"
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
        <div class="bg-white rounded-lg p-8 w-96 shadow-lg">

            <h2 class="text-xl font-bold text-center mb-4 text-biru">Submit your info to download</h2>

            <form wire:submit.prevent="submit" class="space-y-4">

                <input type="text" wire:model.defer="name" placeholder="Name"
                    class="w-full p-2 border rounded focus:ring focus:ring-blue-400" required>

                <input type="text" wire:model.defer="phone_number" placeholder="Phone Number"
                    class="w-full p-2 border rounded focus:ring focus:ring-blue-400" required>

                <input type="email" wire:model.defer="email" placeholder="Email"
                    class="w-full p-2 border rounded focus:ring focus:ring-blue-400" required>

                <input type="text" wire:model.defer="company" placeholder="Company"
                    class="w-full p-2 border rounded focus:ring focus:ring-blue-400" required>

                <div class="flex justify-center space-x-4 mt-4">
                    <button type="submit"
                        class="bg-biru text-putihsusu font-bold py-2 px-6 rounded hover:bg-blue-500">
                        Submit
                    </button>
                    <button type="button" @click="show = false"
                        class="bg-red-500 text-putihsusu font-bold py-2 px-6 rounded hover:bg-red-600">
                        Cancel
                    </button>
                </div>
            </form>
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
