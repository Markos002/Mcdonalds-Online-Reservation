<div class=" text-[#1b1b18] dark:text-black overflow-hidden rounded-lg">
    <!-- Header -->
    <div class="bg-[#C85A54] py-6 px-6">
        <h1 class="text-white text-2xl font-bold text-center">Reservation Form</h1>
    </div>

    <!-- Body -->
    <div class="p-8">
        <!-- Reservation Details Section -->
        <h2 class="text-lg font-semibold mb-6 dark:text-white">Reservation Details</h2>

        <!-- First Name and Last Name Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="first_name" class="block text-sm font-medium mb-2 dark:text-gray-200">First Name</label>
                <input type="text" id="first_name" name="first_name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div>
                <label for="last_name" class="block text-sm font-medium mb-2 dark:text-gray-200">Last Name</label>
                <input type="text" id="last_name" name="last_name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
        </div>

        <!-- Permanent Address -->
        <div class="mb-6">
            <label for="address" class="block text-sm font-medium mb-2 dark:text-gray-200">Permanent Address</label>
            <input type="text" id="address" name="address"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>

        <!-- City and Zip Code Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="city" class="block text-sm font-medium mb-2 dark:text-gray-200">City</label>
                <input type="text" id="city" name="city"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div>
                <label for="zip_code" class="block text-sm font-medium mb-2 dark:text-gray-200">Zip Code</label>
                <input type="text" id="zip_code" name="zip_code" 
                    pattern="\d{4}"
                    maxlength="4"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 4)"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
        </div>

        <!-- Phone Number and Email Address Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="phone" class="block text-sm font-medium mb-2 dark:text-gray-200">Phone Number</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{11}" maxlength="11"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11)"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium mb-2 dark:text-gray-200">Email Address</label>
                <input type="email" id="email" name="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
        </div>

        <!-- Check-in Date, Times, Adult, Children Row -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div>
                <label for="check_in_date" class="block text-sm font-medium mb-2 dark:text-gray-200">Check-in Date</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white" name="check_in_date" id="check_in_date" value="{{ $date }}" readonly>        
                </div>
            <div>
                <label for="check_in_time" class="block text-sm font-medium mb-2 dark:text-gray-200">Check-in Time</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white" name="check_in_time" id="check_in_time" value="{{ $timeIn }}" readonly>        
            </div>
            <div>
                <label for="check_out_time" class="block text-sm font-medium mb-2 dark:text-gray-200">Check-out
                    Time</label>
                <select id="check_out_time" name="check_out_time"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value=""></option>
                    <option value="morning">Morning</option>
                    <option value="afternoon">Afternoon</option>
                    <option value="evening">Evening</option>
                </select>
            </div>
            <div>
                <label for="adult" class="block text-sm font-medium mb-2 dark:text-gray-200">Adult</label>
                <input type="number" id="adult" name="adults" maxlength="11"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11)"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div>
                <label for="kids" class="block text-sm font-medium mb-2 dark:text-gray-200">Children</label>
                <input type="number" id="kids" name="kids" maxlength="11"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11)"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
        </div>

        <!-- Occasions Section -->
        <div class="mb-6">
            <label class="block text-sm font-medium mb-3 text-white">Occasions</label>
            <div class="flex flex-wrap gap-6">
                <div class="max-w-4xl mx-auto">
                    <div class="flex flex-wrap gap-3">
                        <!-- Birthday Party Pill -->
                        <label class="cursor-pointer">
                            <input type="radio" name="occasion" value="birthday" class="peer sr-only">
                            <div
                                class="px-6 py-3 bg-gray-800 text-white border-2 border-gray-600 rounded-full flex items-center gap-2 transition-all duration-300 peer-checked:bg-[#C85A54] peer-checked:border-[#C85A54] peer-checked:text-white hover:border-[#C85A54] hover:shadow-md">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z">
                                    </path>
                                </svg>
                                <span class="font-medium">Birthday Party</span>
                            </div>
                        </label>

                        <!-- Business Meeting Pill -->
                        <label class="cursor-pointer">
                            <input type="radio" name="occasion" value="business" class="peer sr-only">
                            <div
                                class="px-6 py-3 bg-gray-800 text-white border-2 border-gray-600 rounded-full flex items-center gap-2 transition-all duration-300 peer-checked:bg-[#C85A54] peer-checked:border-[#C85A54] peer-checked:text-white hover:border-[#C85A54] hover:shadow-md">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="font-medium">Business Meeting</span>
                            </div>
                        </label>

                        <!-- Others Pill -->
                        <label class="cursor-pointer">
                            <input type="radio" name="occasion" value="others" class="peer sr-only">
                            <div
                                class="px-6 py-3 bg-gray-800 text-white border-2 border-gray-600 rounded-full flex items-center gap-2 transition-all duration-300 peer-checked:bg-[#C85A54] peer-checked:border-[#C85A54] peer-checked:text-white hover:border-[#C85A54] hover:shadow-md">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <span class="font-medium">Others</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>