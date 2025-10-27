<x-modal.modal id="reservationModal" maxWidth="2xl">
    <x-slot name="title">
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="w-5 h-5 text-red-600" fill="none" 
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      d="M8 7V3m8 4V3m-9 8h10m-11 8h12a2 2 0 002-2v-7H4v7a2 2 0 002 2z" />
            </svg>
            <h2 class="text-lg font-semibold text-gray-800">Reservation Form</h2>
        </div>
    </x-slot>

    <!-- STEP 1 -->
    <div class="reservation-step1 px-6 py-4 space-y-6 text-gray-800 overflow-y-auto max-h-[65vh]">
                <h3 class="font-semibold text-base border-b border-gray-200 pb-1">Reservation Details</h3>

        <form class="space-y-5">
            <!-- Full Name -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">First Name</label>
                    <input type="text" placeholder="Enter first name" 
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Last Name</label>
                    <input type="text" placeholder="Enter last name" 
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-medium mb-1">Permanent Address</label>
                <input type="text" placeholder="Street, Barangay, etc."
                    class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
            </div>

            <!-- City and Zip -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">City</label>
                    <input type="text" placeholder="Enter city" 
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Zip Code</label>
                    <input type="text" placeholder="Enter ZIP code"
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
            </div>

            <!-- Contact Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Phone Number</label>
                    <input type="text" placeholder="+63 900 000 0000"
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email Address</label>
                    <input type="email" placeholder="you@example.com"
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
            </div>

            <!-- Check-in / Check-out -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Check-in Date</label>
                    <input type="date" 
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Check-in Time</label>
                    <select 
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                        <option>-- Select --</option>
                        <option>8:00 AM</option>
                        <option>10:00 AM</option>
                        <option>12:00 PM</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Check-out Time</label>
                    <select 
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                        <option>-- Select --</option>
                        <option>2:00 PM</option>
                        <option>4:00 PM</option>
                        <option>6:00 PM</option>
                    </select>
                </div>
            </div>

            <!-- Guests -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Adults</label>
                    <select 
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Children</label>
                    <select 
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div>

            <!-- Occasion -->
            <div>
                <label class="block text-sm font-medium mb-1">Occasion</label>
                <select name="occasion" id="occasion"
                    class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                    <option>Birthday Party</option>
                    <option>Business Meeting</option>
                    <option>Others</option>
                </select>
            </div>
        </form>

    </div>

    <!-- STEP 2 -->
    <div class="reservation-step2-partyselected hidden px-6 py-4 space-y-6 text-gray-800 overflow-y-auto max-h-[65vh]">
        <x-modal.pick-party/>
    </div>

    <!-- STEP 3 -->
    <div class="reservation-step3 hidden px-6 py-4 space-y-6 text-gray-800 overflow-y-auto max-h-[65vh]">
        <x-modal.food-package/>
    </div>

    <x-slot name="footer">
        <div class="flex justify-between items-center w-full">
            <button 
                onclick="prevStep()" 
                id="prevBtn"
                class="hidden px-4 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium transition">
                Back
            </button>

            <div class="flex gap-3">
                <button 
                    onclick="closeModal('reservationModal')" 
                    class="px-4 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium transition">
                    Cancel
                </button>

                <button 
                    id="nextBtn"
                    class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white font-semibold shadow-sm transition">
                    Next
                </button>

                <button 
                    id="confirmBtn"
                    class="hidden px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white font-semibold shadow-sm transition">
                    Confirm Reservation
                </button>
            </div>
        </div>
    </x-slot>
</x-modal.modal>

<script>
  let currentStep = 1;

  const step1 = document.querySelector('.reservation-step1');
  const step2 = document.querySelector('.reservation-step2-partyselected');
  const step3 = document.querySelector('.reservation-step3');

  const nextBtn = document.getElementById('nextBtn');
  const prevBtn = document.getElementById('prevBtn');
  const confirmBtn = document.getElementById('confirmBtn');

  // SELECT THE OCCASION DROPDOWN SPECIFICALLY 
  const occasionSelect = step1.querySelector('select[name="occasion"]') 
      || step1.querySelector('#occasion');          // OPTIONS QUERY SELECT EITHER NAME OR ID

    nextBtn.addEventListener('click', () => {
    const selectedOccasion = occasionSelect?.value.trim(); 

    //  STEP 1 TO STEP 2(IF BDAY PARTY SELECTED) TO STEP3  or STEP 1 TO STEP 3
    if (currentStep === 1) {
        step1.classList.add('hidden');

        if (selectedOccasion === 'Birthday Party') {
            
            step2.classList.remove('hidden');       // SHOW THE PICK PARTY FOR BDAY
            step3.classList.add('hidden');          // HIDE STEP 3 FORM
            
            currentStep = 2;                        //SET CURRENT STEP TO 2 

            // BUTTON STATES
            prevBtn.classList.remove('hidden');     // TO BACK STEP 1
            nextBtn.classList.remove('hidden');     // TO PROCEED STEP 3
            confirmBtn.classList.add('hidden');     // OFF CONFIRMED BUTTON SINCE IT NEEDS TO PROCEED STEP 3
        } else {
            // HASN'T SELECTED BIRTDAY PARTY, REMOVE HIDDEN IN STEP 3 TO SHOW THE FORM
            
            step3.classList.remove('hidden');       // ADD STEP 3 FORMS
            step2.classList.add('hidden');          // ADD HIDDEN IN STEP 2
            
            currentStep = 3;                        //SET CURRENT STEP TO 3

            // BUTTON STATES
            prevBtn.classList.remove('hidden');     // TO BACK STEP2
            nextBtn.classList.add('hidden');        // OFF SINCE ITS STEP 3
            confirmBtn.classList.remove('hidden');  // ADD CONFIRMED SINCE ITS LAST STEP
        }
    }

    //  STEP 2 TO STEP 3
    else if (currentStep === 2) {
        //FORMS STATE
        step2.classList.add('hidden');              // OFF STEP 2 
        step3.classList.remove('hidden');           // SHOW STEP 3 FORMS 
        currentStep = 3;                            // SET CURRENT STEP TO 3

        //BUTTON STATES
        prevBtn.classList.remove('hidden');         // TO BACK STEP 1
        nextBtn.classList.add('hidden');            // TO STEP 3
        confirmBtn.classList.remove('hidden');      // OFF CONFIRMED BUTTON SINCE IT NEEDS TO PROCEED STEP 3
    }
});


  function prevStep() {
    // STEP 3 TO STEP 2
    if (currentStep === 3) {
        
        step3.classList.add('hidden');              //OFF STEP 3
        step2.classList.remove('hidden');           //SHOW STEP 2 FORM
        step1.classList.add('hidden');              //OFF STEP 1
        currentStep = 2;                            //SET CURRENT STEP INTO 2

        prevBtn.classList.remove('hidden');         //TO STEP 2
        nextBtn.classList.remove('hidden');         //TO STEP 3
        confirmBtn.classList.add('hidden');         //HIDE SINCE IT IS STEP 2
    } 
    // STEP 2 to STEP 1
    else if (currentStep === 2) {                   
        step2.classList.add('hidden');              //OFF STEP 2
        step1.classList.remove('hidden');           //SHOW STEP 1 FORM
        step3.classList.add('hidden');              //OFF STEP 3
        currentStep = 1;                            //SET CURRENT STEP INTO 1

        prevBtn.classList.add('hidden');            //OFF BEC, IT IS STEP 1
        nextBtn.classList.remove('hidden');         //TO STEP 2
        confirmBtn.classList.add('hidden');         //HIDE SINCE IT IS STEP 1
    }
}

</script>
