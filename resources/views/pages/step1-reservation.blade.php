<x-guest-layout>
    <div class=" mx-4 sm:mx-auto bg-[#F2F3F4] dark:bg-gray-800 text-[#1b1b18] dark:text-black shadow-2xl overflow-hidden rounded-lg">
        <!-- Header -->
        <div class="bg-[#C85A54] py-6 px-6">
            <h1 class="text-white text-2xl font-bold text-center">Reservation Form</h1>
        </div>

        <!-- Body -->
        <div class="p-8">
            <form>
                <!-- Reservation Details Section -->
                <h2 class="text-lg font-semibold mb-6 dark:text-white">Reservation Details</h2>

                <!-- First Name and Last Name Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="firstName" class="block text-sm font-medium mb-2 dark:text-gray-200">First Name</label>
                        <input 
                            type="text" 
                            id="firstName" 
                            name="firstName"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium mb-2 dark:text-gray-200">Last Name</label>
                        <input 
                            type="text" 
                            id="lastName" 
                            name="lastName"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                    </div>
                </div>

                <!-- Permanent Address -->
                <div class="mb-6">
                    <label for="address" class="block text-sm font-medium mb-2 dark:text-gray-200">Permanent Address</label>
                    <input 
                        type="text" 
                        id="address" 
                        name="address"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    >
                </div>

                <!-- City and Zip Code Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="city" class="block text-sm font-medium mb-2 dark:text-gray-200">City</label>
                        <input 
                            type="text" 
                            id="city" 
                            name="city"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                    </div>
                    <div>
                        <label for="zipCode" class="block text-sm font-medium mb-2 dark:text-gray-200">Zip Code</label>
                        <input 
                            type="text" 
                            id="zipCode" 
                            name="zipCode"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                    </div>
                </div>

                <!-- Phone Number and Email Address Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="phone" class="block text-sm font-medium mb-2 dark:text-gray-200">Phone Number</label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium mb-2 dark:text-gray-200">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                    </div>
                </div>

                <!-- Check-in Date, Times, Adult, Children Row -->
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-6">
                    <div>
                        <label for="checkinDate" class="block text-sm font-medium mb-2 dark:text-gray-200">Check-in Date</label>
                        <input 
                            type="date" 
                            id="checkinDate" 
                            name="checkinDate"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                    </div>
                    <div>
                        <label for="checkinTime" class="block text-sm font-medium mb-2 dark:text-gray-200">Check-in Time</label>
                        <select 
                            id="checkinTime" 
                            name="checkinTime"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                            <option value=""></option>
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </div>
                    <div>
                        <label for="checkoutTime" class="block text-sm font-medium mb-2 dark:text-gray-200">Check-out Time</label>
                        <select 
                            id="checkoutTime" 
                            name="checkoutTime"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                            <option value=""></option>
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </div>
                    <div>
                        <label for="adult" class="block text-sm font-medium mb-2 dark:text-gray-200">Adult</label>
                        <select 
                            id="adult" 
                            name="adult"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5+</option>
                        </select>
                    </div>
                    <div>
                        <label for="children" class="block text-sm font-medium mb-2 dark:text-gray-200">Children</label>
                        <select 
                            id="children" 
                            name="children"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        >
                            <option value=""></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4+</option>
                        </select>
                    </div>
                </div>

                <!-- Occasions Section -->
                <div class="mb-6">
                    <label class="block text-sm font-medium mb-3 dark:text-gray-200">Occasions</label>
                    <div class="flex flex-wrap gap-6">
                        <label class="flex items-center cursor-pointer">
                            <input 
                                type="radio" 
                                name="occasion" 
                                value="birthday"
                                class="w-4 h-4 text-[#C85A54] focus:ring-[#C85A54] focus:ring-2 border-gray-300"
                            >
                            <span class="ml-2 text-sm dark:text-gray-200">Birthday party</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input 
                                type="radio" 
                                name="occasion" 
                                value="business"
                                class="w-4 h-4 text-[#C85A54] focus:ring-[#C85A54] focus:ring-2 border-gray-300"
                            >
                            <span class="ml-2 text-sm dark:text-gray-200">Business meeting</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input 
                                type="radio" 
                                name="occasion" 
                                value="others"
                                class="w-4 h-4 text-[#C85A54] focus:ring-[#C85A54] focus:ring-2 border-gray-300"
                            >
                            <span class="ml-2 text-sm dark:text-gray-200">Others</span>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button 
                        type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-8 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                    >
                        Next
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>