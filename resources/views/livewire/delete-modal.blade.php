<div
    x-data="{ show: @entangle('showDeleteModal') }"
    x-show="show"
    x-cloak
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
>
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-semibold mb-4">Konfirmasi Hapus</h2>
        <p>Apakah kamu yakin ingin menghapus produk ini?</p>
        <div class="mt-6 flex justify-end space-x-2">
            <button
                class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400"
                wire:click="cancelDelete"
            >Batal</button>
            <button
                class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600"
                wire:click="deleteConfirmed"
            >Hapus</button>
        </div>
    </div>
</div>
