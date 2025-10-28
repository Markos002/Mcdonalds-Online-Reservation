<x-guest-layout>
    <div class="w-full max-w-5xl mx-4 sm:mx-auto bg-[#F2F3F4] dark:bg-gray-800 text-[#1b1b18] dark:text-white shadow-2xl overflow-hidden rounded-lg">
        <!-- Header -->
        <div class="bg-[#C85A54] py-6 px-6">
            <h1 class="text-white text-2xl font-bold text-center">Pick a party theme</h1>
        </div>

        <!-- Body -->
        <div class="p-8">
            <form>
                <!-- Party Themes Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
                    <!-- Madagascar -->
                    <label class="flex flex-col items-center cursor-pointer group">
                        <div class="w-full aspect-square bg-white rounded-lg overflow-hidden shadow-md mb-3 ring-2 ring-transparent group-hover:ring-[#C85A54] transition-all">
                            <img 
                                src="{{ asset('images/madagascar.png') }}" 
                                alt="Madagascar"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-medium dark:text-gray-200">Madagascar</span>
                            <input 
                                type="radio" 
                                name="theme" 
                                value="madagascar"
                                class="w-4 h-4 text-[#C85A54] focus:ring-[#C85A54] focus:ring-2 border-gray-300"
                            >
                        </div>
                    </label>

                    <!-- Happy -->
                    <label class="flex flex-col items-center cursor-pointer group">
                        <div class="w-full aspect-square bg-white rounded-lg overflow-hidden shadow-md mb-3 ring-2 ring-transparent group-hover:ring-[#C85A54] transition-all">
                            <img 
                                src="{{ asset('images/mcdo.png') }}" 
                                alt="Happy"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-medium dark:text-gray-200">Happy</span>
                            <input 
                                type="radio" 
                                name="theme" 
                                value="happy"
                                class="w-4 h-4 text-[#C85A54] focus:ring-[#C85A54] focus:ring-2 border-gray-300"
                            >
                        </div>
                    </label>

                    <!-- Cocomelon -->
                    <label class="flex flex-col items-center cursor-pointer group">
                        <div class="w-full aspect-square bg-white rounded-lg overflow-hidden shadow-md mb-3 ring-2 ring-transparent group-hover:ring-[#C85A54] transition-all">
                            <img 
                                src={{ asset('images/cocomelon.png') }}
                                alt="Cocomelon"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-medium dark:text-gray-200">Cocomelon</span>
                            <input 
                                type="radio" 
                                name="theme" 
                                value="cocomelon"
                                class="w-4 h-4 text-[#C85A54] focus:ring-[#C85A54] focus:ring-2 border-gray-300"
                            >
                        </div>
                    </label>

                    <!-- My little pony -->
                    <label class="flex flex-col items-center cursor-pointer group">
                        <div class="w-full aspect-square bg-white rounded-lg overflow-hidden shadow-md mb-3 ring-2 ring-transparent group-hover:ring-[#C85A54] transition-all">
                            <img 
                                src={{ asset('images/littlepony.png') }}
                                alt="My little pony"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-medium dark:text-gray-200">My little pony</span>
                            <input 
                                type="radio" 
                                name="theme" 
                                value="my-little-pony"
                                class="w-4 h-4 text-[#C85A54] focus:ring-[#C85A54] focus:ring-2 border-gray-300"
                            >
                        </div>
                    </label>
                </div>

                <!-- Package Information -->
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm mb-6">
                    <p class="text-sm mb-4 dark:text-gray-200">
                        Our party package starts at Php 2,500, valid for all themes. Just make a down payment at your preferred branch to get started!
                    </p>
                </div>

                <!-- Party Details Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                    <!-- Party Image -->
                    <div class="flex justify-center items-start">
                        <img 
                            src={{ asset('images/themeall.png') }}
                            alt="Party celebration"
                            class="rounded-lg shadow-md max-w-full h-auto"
                        >
                    </div>

                    <!-- Inclusions List -->
                    <div>
                        <h3 class="text-lg font-bold mb-4 dark:text-white">McDo Party Fee Inclusions:</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">Decorated Party Room</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">Full Hosting</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">30 invitations</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">30 party hats</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">30 activity tray mats</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">30 big red balloons</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">10 guest giveaways</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">3 parlor game prizes</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">FREE Gift item for the celebrant</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#C85A54] mr-2">•</span>
                                <span class="text-sm dark:text-gray-200">FREE Character Appearance (select stores)</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Additional Note -->
                <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg mb-6">
                    <p class="text-xs italic dark:text-gray-300">
                        *Additional giveaways and game prizes may be requested at an additional cost.
                    </p>
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