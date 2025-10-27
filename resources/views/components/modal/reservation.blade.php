<x-modal.modal id="reservationModal" maxWidth="lg">
    <x-slot name="title">RESERVATION FORM</x-slot>

    <div class="px-6 py-1 space-y-4 overflow-y-auto max-h-[60vh]">
        <h3 class="font-semibold text-lg text-black">Reservation Details</h3>
        
        <!-- Grid Form -->
        <form class="space-y-4 text-black">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium mb-1">First Name</label>
              <input type="text" class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Last Name</label>
              <input type="text" class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Permanent Address</label>
            <input type="text" class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium mb-1">City</label>
              <input type="text" class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Zip Code</label>
              <input type="text" class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium mb-1">Phone Number</label>
              <input type="text" class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Email Address</label>
              <input type="email" class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
              <label class="block text-sm font-medium mb-1">Check-in Date</label>
              <input type="date" class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Check-in Time</label>
              <select class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
                <option>--</option>
                <option>8:00 AM</option>
                <option>10:00 AM</option>
                <option>12:00 PM</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Check-out Time</label>
              <select class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
                <option>--</option>
                <option>2:00 PM</option>
                <option>4:00 PM</option>
                <option>6:00 PM</option>
              </select>
            </div>
          </div>
          
          <div class="grid grid-col-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium mb-1">Adult</label>
              <select class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Children</label>
              <select class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500">
                <option>0</option>
                <option>1</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <!-- Radio -->
          <div>
            <label class="block text-sm font-medium mb-2">Occasions</label>
            <div class="flex items-center space-x-4">
              <label class="flex items-center space-x-2">
                <input type="radio" name="occasion" class="accent-red-600">
                <span>Birthday party</span>
              </label>
              <label class="flex items-center space-x-2">
                <input type="radio" name="occasion" class="accent-red-600">
                <span>Business meeting</span>
              </label>
              <label class="flex items-center space-x-2">
                <input type="radio" name="occasion" class="accent-red-600">
                <span>Others</span>
              </label>
            </div>
          </div>
        </form>
      </div>

    <x-slot name="footer">
        <button 
            onclick="closeModal('reservationModal')" 
            class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium transition">
            Cancel
        </button>

        <button 
            class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white font-medium transition">
            Confirm
        </button>
    </x-slot>
</x-modal.modal>