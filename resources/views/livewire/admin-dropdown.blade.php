<div class="relative font-semibold bg-white rounded-lg">
    <button wire:click="$toggle('isOpen')"
        class="flex items-center space-x-2 px-3 py-1 rounded-lg hover:bg-gray-300">
        <span class="text-biru">Hi, {{ Auth::user()->name }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-biru" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 shadow-lg rounded-lg transition-all duration-300 ease-in-out"
        style="opacity: {{ $isOpen ? '1' : '0' }}; transform: translateY({{ $isOpen ? '0' : '-10px' }});">
        @if($isOpen)
                <button wire:click="confirmLogout" class="block w-full text-left px-4 py-2 text-red-500 rounded-lg hover:ring-2 hover:ring-red-300">Logout</button>
        @endif
    </div>

    {{-- modal logout --}}
    @if($showLogoutModal)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 text-red-800 ">
        <div class="bg-white py-6 px-10 rounded-lg shadow-lg w-auto text-center">
            <h2 class="text-lg font-bold mb-1 text-shadow-md">Logout from this session?</h2>
            <p class="font-normal italic">Are you sure want to logout?</p>                            
            <p class="font-normal italic">You can login with your email and password</p>
            <div class="flex justify-center space-x-10 mt-2">
                <button wire:click="logout"
                        class="px-10 py-1 bg-white text-red-800 rounded-lg border-2 border-red-800 hover:bg-red-300 drop-shadow-md">Logout</button>
                <button wire:click="$set('showLogoutModal', false)"
                        class=" text-biru px-10 py-1 bg-white border-2 border-biru rounded-lg hover:bg-gray-300 drop-shadow-md">Cancel</button>               
            </div>
        </div>
    </div>
    @endif
</div>