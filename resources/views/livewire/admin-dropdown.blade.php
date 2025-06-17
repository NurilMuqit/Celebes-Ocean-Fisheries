<div class="relative font-semibold bg-white rounded-lg">
    {{-- Button Profile --}}
    <button wire:click="$toggle('isOpen')"
        class="flex items-center space-x-2 px-3 py-1 rounded-lg hover:bg-gray-200 transition w-full md:w-auto">
        <span class="text-biru truncate max-w-[100px]">Hi, {{ Auth::user()->name }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-biru" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    {{-- Dropdown --}}
    <div 
        class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 shadow-lg rounded-lg transition-all duration-200 ease-in-out z-30"
        x-cloak
        style="opacity: {{ $isOpen ? '1' : '0' }}; pointer-events: {{ $isOpen ? 'auto' : 'none' }}; transform: translateY({{ $isOpen ? '0' : '-10px' }});"
    >
        @if($isOpen)
            <button wire:click="confirmLogout" class="block w-full text-left px-4 py-2 text-red-500 rounded-lg hover:ring-2 hover:ring-red-300 transition">
                Logout
            </button>
        @endif
    </div>

    {{-- Modal Logout --}}
    @if($showLogoutModal)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white py-6 px-4 sm:px-10 rounded-lg shadow-lg w-11/12 max-w-md text-center mx-auto">
            <h2 class="text-lg font-bold mb-1 text-shadow-md text-red-800">Logout from this session?</h2>
            <p class="font-normal italic">Are you sure want to logout?</p>                            
            <p class="font-normal italic mb-4">You can login with your email and password</p>
            <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-10 mt-2">
                <button wire:click="logout"
                        class="w-full sm:w-auto px-6 py-2 bg-white text-red-800 rounded-lg border-2 border-red-800 hover:bg-red-200 drop-shadow-md font-bold transition">
                        Logout
                </button>
                <button wire:click="$set('showLogoutModal', false)"
                        class="w-full sm:w-auto text-biru px-6 py-2 bg-white border-2 border-biru rounded-lg hover:bg-gray-100 drop-shadow-md font-bold transition">
                        Cancel
                </button>               
            </div>
        </div>
    </div>
    @endif
</div>
