<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-900 dark:text-white">
                Edit Reservation
            </h2>
            <div class="flex items-center gap-3">
                <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                    Draft
                </span>
            </div>
        </div>
    </x-slot>
    @php
        $foodPackages = [
            [
                'name' => 'Food Package 1',
                'price' => 149,
                'items' => ['1pc Chicken McDo with McDoSpaghetti','12oz Coke'],
            ],
            [
                'name' => 'Food Package 2',
                'price' => 199,
                'items' => ['1pc Chicken McDo with Rice','Medium Fries','Apple Pie','16oz Coke'],
            ],
            [
                'name' => 'Food Package 3',
                'price' => 259,
                'items' => ['1pc Chicken McDo with McDoSpaghetti', 'Medium Fries', '16oz Coke'],
            ],
            [
                'name' => 'Food Package 4',
                'price' => 219,
                'items' => ['4pc Chicken McNuggets with Rice', 'Regular Fries', '12oz Orange Juice', 'Sundae','Happy Meal Toy'],
            ],
            [
                'name' => 'Food Package 5',
                'price' => 279,
                'items' => ['1pc Chicken McDo with McDoSpaghetti', 'Regular Fries', '12oz Orange Juice', 'Sundae','Happy Meal Toy'],
            ]
        ];
        $addonsOptions = [
            [
                'name' => 'Fries', 'price' => 59
            ],
            [
                'name' => 'Bigmac', 'price' => 150
            ], 
            [
                'name' => 'Cokefloat', 'price' => 52
            ], 
        ];
        $existingPackages = $guestData->foodPack->keyBy('name');
    @endphp

    <div class="py-8 px-6 max-w-[1600px] mx-auto">
        <form method="POST" action="{{ route('admin.reservation.update', $guestData->guest_id) }}" class="space-y-8">
            @csrf
            @method('PUT')

            <!-- TWO-COLUMN LAYOUT -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <!-- LEFT SIDE — RESERVATION FORM (2 columns wide) -->
                <div class="lg:col-span-2">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 overflow-hidden">
                        
                        <!-- Header -->
                        <div class="bg-gradient-to-r from-[#C85A54] to-[#d67168] py-6 px-8">
                            <h2 class="text-white text-2xl font-bold flex items-center gap-3">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Guest Information
                            </h2>
                        </div>

                        <!-- Body -->
                        <div class="p-8 space-y-8">
                            
                            <!-- Personal Details Section -->
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-5 flex items-center gap-2">
                                    <div class="w-1 h-6 bg-[#C85A54] rounded-full"></div>
                                    Personal Details
                                </h3>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="relative">
                                        <input type="hidden" name="guest_id" value="{{ $guestData->guest_id }}">
                                        <label for="first_name" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                            First Name <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="first_name" name="first_name" required
                                            class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white placeholder-gray-400"
                                            placeholder="Enter first name"
                                            value="{{ old('first_name', $guestData->first_name )}}">
                                            
                                    </div>
                                    <div class="relative">
                                        <label for="last_name" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                            Last Name
                                        </label>
                                        <input type="text" id="last_name" name="last_name"
                                            class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white placeholder-gray-400"
                                            placeholder="Enter last name"
                                            value="{{ old('last_name', $guestData->last_name )}}">
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Information Section -->
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-5 flex items-center gap-2">
                                    <div class="w-1 h-6 bg-[#C85A54] rounded-full"></div>
                                    Contact Information
                                </h3>
                                
                                <div class="space-y-6">
                                    <div class="relative">
                                        <label for="address" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                            Permanent Address
                                        </label>
                                        <input type="text" id="address" name="address"
                                            class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white placeholder-gray-400"
                                            placeholder="Street address, P.O. box"
                                            value="{{ old('address', $guestData->address )}}">
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="relative">
                                            <label for="city" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                                City
                                            </label>
                                            <input type="text" id="city" name="city"
                                                class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white placeholder-gray-400"
                                                placeholder="City name"
                                                value="{{ old('city', $guestData->city )}}">
                                        </div>
                                        <div class="relative">
                                            <label for="zip_code" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                                Zip Code
                                            </label>
                                            <input type="text" id="zip_code" name="zip_code"
                                                maxlength="4" pattern="\d{4}"
                                                oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,4)"
                                                class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white placeholder-gray-400"
                                                placeholder="0000"
                                                value="{{ old('zip_code', $guestData->zip_code )}}">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="relative">
                                            <label for="phone" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                                Phone Number
                                            </label>
                                            <div class="relative">
                                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                                    📱
                                                </span>
                                                <input type="tel" id="phone" name="phone" maxlength="11"
                                                    oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,11)"
                                                    class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white placeholder-gray-400"
                                                    placeholder="09123456789"
                                                    value="{{ old('phone', $guestData->phone )}}">
                                            </div>
                                        </div>
                                        <!--
                                        <div class="relative">
                                            <label for="email" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                                Email Address
                                            </label>
                                            <div class="relative">
                                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                                                    ✉️
                                                </span>
                                                <input type="email" id="email" name="email"
                                                    class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white placeholder-gray-400"
                                                    placeholder="you@example.com">
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            </div>

                            <!-- Reservation Details Section -->
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-5 flex items-center gap-2">
                                    <div class="w-1 h-6 bg-[#C85A54] rounded-full"></div>
                                    Reservation Details
                                </h3>
                                
                                <div class="space-y-6">
                                    <!-- Date & Time
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="relative">
                                            <label for="check_in_date" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                                Check-in Date
                                            </label>
                                            <input type="date" id="check_in_date" name="check_in_date"
                                                class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white">
                                        </div>
                                        <div class="relative">
                                            <label for="check_in_time" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                                Check-in Time
                                            </label>
                                            <select id="check_in_time" name="check_in_time"
                                                class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white appearance-none cursor-pointer">
                                                <option value="">Select time...</option>
                                                <option value="morning">🌅 Morning</option>
                                                <option value="afternoon">☀️ Afternoon</option>
                                                <option value="evening">🌙 Evening</option>
                                            </select>
                                        </div>
                                    </div>
                                    -->
                                    <!-- Guest Count -->
                                    <div class="grid grid-cols-2 gap-6">
                                        <div class="relative">
                                            <label for="adult" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                                Adults
                                            </label>
                                            <input type="number" id="adult" name="adults" min="0"
                                                class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white"
                                                placeholder="0"
                                                value="{{ old('adult',$guestData->partyDetail->adults)}}">
                                        </div>
                                        <div class="relative">
                                            <label for="kids" class="block text-sm font-semibold mb-2 text-gray-700 dark:text-gray-200">
                                                Children
                                            </label>
                                            <input type="number" id="kids" name="kids" min="0"
                                                class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-xl focus:ring-4 focus:ring-[#C85A54]/20 focus:border-[#C85A54] outline-none transition-all bg-white dark:bg-gray-700 dark:text-white"
                                                placeholder="0"
                                                value="{{ old('adult',$guestData->partyDetail->kids)}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Occasion Section -->
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-5 flex items-center gap-2">
                                    <div class="w-1 h-6 bg-[#C85A54] rounded-full"></div>
                                    Select Occasion
                                </h3>
                                
                                <div class="flex flex-wrap gap-4">
                                    <label class="cursor-pointer group">
                                        <input type="radio" name="occasion" value="birthday" class="peer sr-only" 
                                        {{ old('occasion', $guestData->partyDetail->occasion) === 'birthday' ? 'checked' : '' }}>
                                        <div class="px-6 py-3.5 bg-white dark:bg-gray-700 border-2 border-gray-200 dark:border-gray-600 rounded-xl flex items-center gap-3 transition-all peer-checked:bg-gradient-to-r peer-checked:from-[#C85A54] peer-checked:to-[#d67168] peer-checked:border-[#C85A54] peer-checked:shadow-lg peer-checked:shadow-[#C85A54]/30 hover:border-[#C85A54]/50">
                                            <span class="text-2xl">🎂</span>
                                            <span class="font-semibold text-gray-700 dark:text-gray-200 peer-checked:text-white group-has-[:checked]:text-white">Birthday Party</span>
                                        </div>
                                    </label>
                                    <label class="cursor-pointer group">
                                        <input type="radio" name="occasion" value="business" class="peer sr-only"
                                        {{ old('occasion', $guestData->partyDetail->occasion) === 'business' ? 'checked' : '' }}>
                                        <div class="px-6 py-3.5 bg-white dark:bg-gray-700 border-2 border-gray-200 dark:border-gray-600 rounded-xl flex items-center gap-3 transition-all peer-checked:bg-gradient-to-r peer-checked:from-[#C85A54] peer-checked:to-[#d67168] peer-checked:border-[#C85A54] peer-checked:shadow-lg peer-checked:shadow-[#C85A54]/30 hover:border-[#C85A54]/50">
                                            <span class="text-2xl">💼</span>
                                            <span class="font-semibold text-gray-700 dark:text-gray-200 peer-checked:text-white group-has-[:checked]:text-white">Business Meeting</span>
                                        </div>
                                    </label>
                                    <label class="cursor-pointer group">
                                        <input type="radio" name="occasion" value="others" class="peer sr-only"
                                        {{ old('occasion', $guestData->partyDetail->occasion) === 'others' ? 'checked' : '' }}>
                                        <div class="px-6 py-3.5 bg-white dark:bg-gray-700 border-2 border-gray-200 dark:border-gray-600 rounded-xl flex items-center gap-3 transition-all peer-checked:bg-gradient-to-r peer-checked:from-[#C85A54] peer-checked:to-[#d67168] peer-checked:border-[#C85A54] peer-checked:shadow-lg peer-checked:shadow-[#C85A54]/30 hover:border-[#C85A54]/50">
                                            <span class="text-2xl">🎉</span>
                                            <span class="font-semibold text-gray-700 dark:text-gray-200 peer-checked:text-white group-has-[:checked]:text-white">Other</span>
                                        </div>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <!-- PICK A PARTY THEME -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 overflow-hidden sticky top-6">
                        <div class="bg-gradient-to-r from-purple-500 to-pink-500 py-6 px-6">
                            <h2 class="text-white text-xl font-bold text-center flex items-center justify-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                                </svg>
                                Party Theme
                            </h2>
                        </div>
                        <div class="p-6">
                            <p class="text-sm text-gray-600 dark:text-gray-400 text-center mb-4">
                                Choose a theme for your celebration
                            </p>
                            <div class="space-y-3">
                                <label class="block cursor-pointer">
                                    <input type="radio" name="party_package" value="madagascar" class="peer sr-only"
                                        {{ old('party_package', $guestData->partyDetail->party_package) == 'madagascar' ? 'checked' : '' }}>>
                                    <div class="p-4 border-2 border-gray-200 dark:border-gray-600 rounded-xl hover:border-purple-500 transition-all peer-checked:border-purple-500 peer-checked:bg-purple-50 dark:peer-checked:bg-purple-900/20">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-semibold text-gray-900 dark:text-white">Madagascar </p>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <label class="block cursor-pointer">
                                    <input type="radio" name="party_package" value="happy" class="peer sr-only"
                                        {{ old('party_package', $guestData->partyDetail->party_package) == 'happy' ? 'checked' : '' }}>>
                                    <div class="p-4 border-2 border-gray-200 dark:border-gray-600 rounded-xl hover:border-pink-500 transition-all peer-checked:border-pink-500 peer-checked:bg-pink-50 dark:peer-checked:bg-pink-900/20">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-semibold text-gray-900 dark:text-white">Happy</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <label class="block cursor-pointer">
                                    <input type="radio" name="party_package" value="cocomelon" class="peer sr-only"
                                        {{ old('party_package', $guestData->partyDetail->party_package) == 'cocomelon' ? 'checked' : '' }}>>
                                    <div class="p-4 border-2 border-gray-200 dark:border-gray-600 rounded-xl hover:border-blue-500 transition-all peer-checked:border-blue-500 peer-checked:bg-blue-50 dark:peer-checked:bg-blue-900/20">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-semibold text-gray-900 dark:text-white">Cocomelon</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <label class="block cursor-pointer">
                                    <input type="radio" name="party_package" value="my-little-pony" class="peer sr-only"
                                    {{ old('party_package', $guestData->partyDetail->party_package) == 'my-little-pony' ? 'checked' : '' }}>>
                                    <div class="p-4 border-2 border-gray-200 dark:border-gray-600 rounded-xl hover:border-blue-500 transition-all peer-checked:border-blue-500 peer-checked:bg-blue-50 dark:peer-checked:bg-blue-900/20">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <p class="font-semibold text-gray-900 dark:text-white">My Little Pony</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT SIDE — THEME & FOOD PACKAGE -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- FOOD PACKAGE PREVIEW -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-red-500 py-6 px-6">
                            <h2 class="text-white text-xl font-bold text-center flex items-center justify-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                                Food Package
                            </h2>
                        </div>
                        <div class="p-6">
                            <p class="text-sm text-gray-600 dark:text-gray-400 text-center mb-4">
                                @foreach($foodPackages as $index => $package)
                                    @php
                                        $dbPackage = $existingPackages->get($package['name']);
                                        $quantity = $dbPackage ? $dbPackage->quantity : 0;
                                    @endphp
                                    <div class="bg-gradient-to-r rounded-lg shadow-md p-6">
                                        <div class="flex flex-col md:flex-row justify-between items-center gap-6 bg-white p-3 rounded-lg">
                                            <!-- Package Details -->
                                            <div class="flex gap-5 items-center ">
                                                <div>
                                                    <h3 class="font-bold  text-sm">
                                                        {{ $package['name'] }}
                                                    </h3>
                                                    <ul class="text-xs mt-2 space-y-1">
                                                        @foreach($package['items'] as $item)
                                                            <li>• {{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                    <p class="text-red-600 font-bold text-lg mt-2">
                                                        ₱{{ number_format($package['price']) }}
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Hidden Inputs -->
                                            <input type="hidden" name="food_packages[{{ $index }}][name]" value="{{ $package['name'] }}">
                                            <input type="hidden" name="food_packages[{{ $index }}][price]" value="{{ $package['price'] }}">

                                            <!-- Quantity Controls -->
                                            <div class="flex gap-2 items-center">
                                                <input type="number" min="0"
                                                    name="food_packages[{{ $index }}][quantity]"
                                                    value="{{ $quantity }}"
                                                    class="w-16 text-center border rounded-md py-1">
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 overflow-hidden">
                        <div class="bg-gradient-to-r from-teal-500 to-cyan-500 py-6 px-6">
                            <h2 class="text-white text-xl font-bold text-center flex items-center justify-center gap-2">
                                ➕ Add-Ons
                            </h2>
                        </div>

                        <div class="p-6 space-y-4">

                        @foreach($addonsOptions as $index => $addon)

                            @php
                                $dbAddon = $existingPackages->get($addon['name']);
                                $quantity = $dbAddon ? $dbAddon->quantity : 0;
                            @endphp

                            <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow">

                                <div>
                                    <h3>{{ $addon['name'] }}</h3>
                                    <p>₱{{ number_format($addon['price']) }}</p>
                                </div>
                                <input type="hidden" name="addons[{{ $index }}][name]" value="{{ $addon['name'] }}">
                                <input type="hidden" name="addons[{{ $index }}][price]" value="{{ $addon['price'] }}">
                                <input type="number"
                                    name="addons[{{ $index }}][quantity]"
                                    value="{{ $quantity }}"
                                    min="0"
                                    class="w-16 text-center border rounded">
                            </div>

                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="mt-8 flex justify-between items-center">
                <a href="{{ route('admin.appointments') }}" 
                    class="px-6 py-3 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-xl font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transition-all">
                    Back
                </a>
                <div class="flex gap-4">
                    <button type="submit" 
                        class="px-8 py-3 bg-gradient-to-r from-[#C85A54] to-[#d67168] text-white rounded-xl font-bold shadow-lg shadow-[#C85A54]/30 hover:shadow-xl hover:shadow-[#C85A54]/40 transition-all">
                        Submit
                    </button>
                </div>
            </div>

        </form>
    </div>
</x-app-layout>