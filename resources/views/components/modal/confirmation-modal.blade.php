<!-- Confirmation Modal -->
<div id="confirmationModal" class="hidden fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 max-w-sm w-full text-center">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">
            Confirm Your Reservation
        </h2>
        <p class="text-sm text-gray-600 dark:text-gray-300 mb-6">
            Are you sure you want to submit your reservation?
        </p>
        <div class="flex justify-center gap-4">
            <button 
                id="cancelConfirm"
                type="button"
                class="px-4 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 text-white font-semibold transition">
                Cancel
            </button>
            <button 
                id="acceptConfirm"
                type="submit"
                class="px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white font-semibold transition">
                Yes, Submit
            </button>
        </div>
    </div>
</div>
