<div x-data="{ open: @entangle('isOpen') }">

    <div x-show="open" class="fixed inset-0 bg-gray-500 bg-opacity-50 z-40 transition-opacity" x-transition.opacity></div>

    <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg w-96 p-6">
            <h1 class="text-xl font-bold text-biru text-center">Thank You!</h1>
            <p class="text-biru italic px-10 text-center mt-2">
                Thank you for sending your warm message. Can’t wait to work with you soon.
            </p>
            <div class="flex justify-center mt-4">
                <button @click="$wire.emit('closemodal')" class="bg-biru text-white px-6 py-2 rounded-md">
                    Okay
                </button>
            </div>
        </div>
    </div>

</div>
