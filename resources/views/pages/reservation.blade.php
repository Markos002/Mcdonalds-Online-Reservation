<x-guest-layout>
    <form id="reserveForm" method="POST" action="{{ route('guest.reservations.store') }}">
    <!-- STEP 1 -->
    @csrf
    <div class="reservation-step1 bg-[#F2F3F4] dark:bg-gray-800 text-[#1b1b18] dark:text-black overflow-hidden rounded-lg">
        <x-step1-reservation :date="$date" :timeIn="$timeIn"/>
    </div>

    <!-- STEP 2 -->
    <div class="reservation-step2-partyselected hidden  text-gray-800 overflow-y-auto">
        <x-step2-party/>
    </div>

    <!-- STEP 3 -->
    <div class="reservation-step3 hidden space-y-6 text-gray-800 overflow-y-auto ">
        <x-step3-reservation/>
    </div>
        <div class="flex gap-3 mt-4 justify-end p-5">
            <!-- Previous -->
            <button 
                id="prevBtn"
                type="button"
                onclick="prevStep()"
                class="hidden px-4 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 text-white font-semibold shadow-sm transition">
                Previous
            </button>
            <!-- Next -->
            <button 
                id="nextBtn"
                type="button"
                onclick="nextStep()"
                class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white font-semibold shadow-sm transition">
                Next
            </button>
            <!-- Confirm -->
            <button 
                id="confirmBtn"
                type="button"
                onclick="openConfirmationModal()"
                class="hidden px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white font-semibold shadow-sm transition">
                Confirm Reservation
            </button>
        </div>
    </form>
    <x-modal.confirmation-modal/>
</x-guest-layout>
<script>
function openConfirmationModal() {
    document.getElementById('confirmationModal').classList.remove('hidden');
    document.getElementById('confirmationModal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeConfirmationModal() {
    document.getElementById('confirmationModal').classList.add('hidden');
    document.getElementById('confirmationModal').classList.remove('flex');
    document.body.style.overflow = '';
}


document.getElementById('cancelConfirm').addEventListener('click', closeConfirmationModal);

document.getElementById('acceptConfirm').addEventListener('click', function() {
    closeConfirmationModal();
    document.getElementById('reserveForm').requestSubmit(); 
});

// close when clicking outside modal
document.getElementById('confirmationModal').addEventListener('click', (e) => {
    if (e.target === e.currentTarget) closeConfirmationModal();
});

document.addEventListener('DOMContentLoaded', function () {
    const packagePrice = document.getElementById('package_price');
    document.addEventListener('change', function(e) {
        if (e.target && e.target.name === 'occasion') {
            packagePrice.value = (e.target.value === 'birthday') ? '2500' : '';
        }
    });
});
</script>
