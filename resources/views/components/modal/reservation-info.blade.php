        <h3 class="font-semibold text-base border-b border-gray-200 pb-1">Reservation Details</h3>

        <form class="space-y-5">
            <!-- Full Name -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">First Name</label>
                    <input type="text" placeholder="Enter first name" required
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Last Name</label>
                    <input type="text" placeholder="Enter last name" required
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-medium mb-1">Permanent Address</label>
                <input type="text" placeholder="Street, Barangay, etc." required
                    class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
            </div>

            <!-- City and Zip -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">City</label>
                    <input type="text" placeholder="Enter city" required
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
                    <input type="text" placeholder="+63 900 000 0000" required
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email Address</label>
                    <input type="email" placeholder="you@example.com" required
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
            </div>

            <!-- Check-in / Check-out -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Check-in Date</label>
                    <input type="date"  required
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Check-in Time</label>
                    <select  required
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                        <option>-- Select --</option>
                        <option>8:00 AM</option>
                        <option>10:00 AM</option>
                        <option>12:00 PM</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Check-out Time</label>
                    <select required
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
                    <select required
                        class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Children</label>
                    <select required
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
                <select required
                    class="w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                    <option disabled selected> --- SELECT ---</option>
                    <option>Birthday Party</option>
                    <option>Business Meeting</option>
                    <option>Others</option>
                </select>
            </div>
        </form>
