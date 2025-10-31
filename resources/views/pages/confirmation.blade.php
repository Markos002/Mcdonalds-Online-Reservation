<x-guest-layout>
    <div class=" text-[#1b1b18] dark:text-black overflow-hidden rounded-lg">
        <!-- Header -->
        <div class="bg-[#C85A54] py-6 px-6">
            <h1 class="text-white text-2xl font-bold text-center">Confirmation</h1>
        </div>

        <div class="p-8 text-white">
            <!-- Title -->
            <h2 class="text-xl font-bold  text-center mb-8">
                Title: "Birthday Party Reservation"
            </h2>

            <!-- Guest Information Section -->
            <div class="mb-8">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-2xl">👤</span>
                    <h3 class="text-lg font-semibold ">Guest Information</h3>
                </div>
                <ul class="space-y-2 text-white">
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Full Name:</span>
                        <span>John Doe</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Last Name:</span>
                        <span>Smith</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Permanent:</span>
                        <span>123 Main Street</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">City:</span>
                        <span >New York</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">ZIP Code:</span>
                        <span>10001</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Phone Number:</span>
                        <span >(555) 123-4567</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Email Address:</span>
                        <span>john.doe@email.com</span>
                    </li>
                </ul>
            </div>

            <!-- Party Details Section -->
            <div class="mb-8">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-2xl">🎉</span>
                    <h3 class="text-lg font-semibold text-white">Party Details</h3>
                </div>
                <ul class="space-y-2 text-white">
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Check-in Date:</span>
                        <span>December 25, 2024</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Check-in Time:</span>
                        <span>2:00 PM</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Check-out Time:</span>
                        <span>5:00 PM</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Adults:</span>
                        <span>4</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Kids:</span>
                        <span">2</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Party Package:</span>
                        <span>Premium Package</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Add-ons:</span>
                        <span>Face Painting, Balloons</span>
                    </li>
                </ul>
            </div>

            <div class="mb-8">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-2xl">🎉</span>
                    <h3 class="text-lg font-semibold text-white">Reservation Details</h3>
                </div>
                <ul class="space-y-2 text-white">
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Reservation ID</span>
                        <span>MCDO-2025-1025-1412</span>
                    </li>
                    <li class="flex">
                        <span class="font-medium min-w-[140px]">Status</span>
                        <span>Pending</span>
                    </li>
                </ul>
            </div>
            
            <div class="bg-gray-50 border-l-4 border-red-500 p-4 rounded mb-6 text-black">
                <p> ~ Your reservation has been successfully recorded.</p>
                <p> ~ For updates or cancellations, contact your chosen McDonald’s branch.</p>
            </div>


            <div class="bg-gray-50 border-l-4 border-red-500 p-4 rounded mb-6 text-black">
                <p> ~ Please visit your selected McDonald’s branch within 1–2 days to confirm and pay for your reservation.</p>
                <p> ~ Your booking will only be finalized once payment is received. Thank you for celebrating with McDonald’s Party Place! 🎈🍔.</p>
            </div>
            <!-- Footer Message -->
            <div class="bg-gray-50 border-l-4 border-red-500 p-4 rounded mb-6">
                <p class="text-sm text-gray-700 leading-relaxed">
                    Thanks for choosing McDonald's to celebrate your special day! 
                    Double-check your reservation details, and click Next to confirm.
                </p>
            </div>

            <!-- Next Button -->
            <div class="flex justify-end">
                <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition-all duration-300 hover:shadow-lg">
                    Next
                </button>
            </div>
        </div>
    
    </div>
</x-guest-layout>