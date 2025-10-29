<x-guest-layout>
    <form>
    <!-- STEP 1 -->
    <div class="reservation-step1 bg-[#F2F3F4] dark:bg-gray-800 text-[#1b1b18] dark:text-black overflow-hidden rounded-lg">
        <x-step1-reservation/>
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
                onclick="prevStep()"
                class="hidden px-4 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 text-white font-semibold shadow-sm transition">
                Previous
            </button>
            <!-- Next -->
            <button 
                id="nextBtn"
                onclick="nextStep()"
                class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white font-semibold shadow-sm transition">
                Next
            </button>
            <!-- Confirm -->
            <button 
                id="confirmBtn"
                class="hidden px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white font-semibold shadow-sm transition">
                Confirm Reservation
            </button>
        </div>
    </form>
</x-guest-layout>
