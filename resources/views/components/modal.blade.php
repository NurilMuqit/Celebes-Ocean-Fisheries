@if(session('modal_type'))
<div id="modal" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full mx-4">
        <div class="text-center">
            <h1 class="text-2xl font-bold mb-2 mt-3 text-shadow-sm {{ session('modal_type') == 'success' ? 'text-biru' : 'text-red-500' }}">
                {{ session('modal_type') == 'success' ? 'Added!' : 'Failed!' }}
            </h1>
            <p class="mb-6 text-biru italic">{{ session('message') }}</p>
            <a href="#" 
            onclick="event.preventDefault(); document.getElementById('modal').remove()" class="block w-full {{ session('modal_type') == 'success' ? 'bg-biru hover:bg-blue-700' : 'bg-red-500 hover:bg-red-700' }} text-white font-bold px-6 py-2 rounded-md transition-all duration-300">
                {{ session('modal_type') == 'success' ? 'Okay' : 'Try Again' }}
            </a>
        </div>
    </div>
</div>
@endif