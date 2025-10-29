<div class="text-[#1b1b18] dark:text-black  overflow-hidden rounded-lg">
    <!-- Header -->
    <div class="bg-[#C85A54] py-6 px-6 w-full">
        <h1 class="text-white text-2xl font-bold text-center">Food Package</h1>
    </div>
    <div class="p-8">
        <!-- Body -->
        <form>
            <!-- Food Packages Section -->
            <h2 class="text-lg font-semibold mb-6 text-center dark:text-white">FOR ADULTS</h2>

            <!-- Package 1 -->
            <div class="bg-gradient-to-r from-blue-300 to-blue-400 rounded-lg p-6 mb-4 shadow-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <img src={{ asset('images/package1.png') }} alt="Food Package 1"
                            class="w-24 h-24 object-cover rounded-lg">
                        <div>
                            <h3 class="text-blue-600 font-bold text-sm mb-2">Food Package 1</h3>
                            <ul class="text-xs space-y-1">
                                <li>• 1pc Chicken McDo</li>
                                <li>• 1pc McDospaghetti</li>
                                <li>• Fries</li>
                                <li>• Coke</li>
                            </ul>
                            <p class="text-red-600 font-bold text-2xl mt-3">₱149</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center gap-2">
                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.nextElementSibling.stepDown()">−</button>

                        <input type="number" name="package1_qty" min="0" value="0"
                            class="w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">

                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>
            </div>

            <!-- Package 2  -->
            <div class="bg-gradient-to-r from-blue-300 to-blue-400 rounded-lg p-6 mb-4 shadow-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <img src={{ asset('images/package2.png') }} alt="Food Package 2"
                            class="w-24 h-24 object-cover rounded-lg">
                        <div>
                            <h3 class="text-blue-600 font-bold text-sm mb-2">Food Package 2</h3>
                            <ul class="text-xs space-y-1">
                                <li>• 1pc Chicken McDo</li>
                                <li>• Ala King</li>
                                <li>• 1pc Burger McDo</li>
                                <li>• Fries</li>
                                <li>• Coke</li>
                            </ul>
                            <p class="text-red-600 font-bold text-2xl mt-3">₱199</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center gap-2">
                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.nextElementSibling.stepDown()">−</button>

                        <input type="number" name="package2_qty" min="0" value="0"
                            class="w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">

                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>
            </div>

            <!-- Package 3  -->
            <div class="bg-gradient-to-r from-blue-300 to-blue-400 rounded-lg p-6 mb-6 shadow-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <img src={{ asset('images/package3.png') }} alt="Food Package 3"
                            class="w-24 h-24 object-cover rounded-lg">
                        <div>
                            <h3 class="text-blue-600 font-bold text-sm mb-2">Food Package 3</h3>
                            <ul class="text-xs space-y-1">
                                <li>• 2pc Chicken McDo with</li>
                                <li>• Mcdospaghetti</li>
                                <li>• Burger McDo</li>
                                <li>• Fries</li>
                                <li>• Coke</li>
                            </ul>
                            <p class="text-red-600 font-bold text-2xl mt-3">₱259</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center gap-2">
                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.nextElementSibling.stepDown()">−</button>

                        <input type="number" name="package3_qty" min="0" value="0"
                            class="w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">

                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>
            </div>

            <!-- For Kids  -->
            <h2 class="text-lg font-semibold mb-6 text-center dark:text-white">FOR KIDS</h2>

            <!-- Package 4  -->
            <div class="bg-gradient-to-r from-pink-200 to-pink-300 rounded-lg p-6 mb-4 shadow-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <img src={{ asset('images/package4.png') }} alt="Food Package 4"
                            class="w-24 h-24 object-cover rounded-lg">
                        <div>
                            <h3 class="text-pink-600 font-bold text-sm mb-2">Food Package 4</h3>
                            <ul class="text-xs space-y-1">
                                <li>• 4pc Chicken McNuggets with</li>
                                <li>• Mcdospaghetti</li>
                                <li>• Regular Fries</li>
                                <li>• 1 box of Sundae</li>
                                <li>• Orange Juice</li>
                            </ul>
                            <p class="text-red-600 font-bold text-2xl mt-3">₱219</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center gap-2">
                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.nextElementSibling.stepDown()">−</button>

                        <input type="number" name="package4_qty" min="0" value="0"
                            class="w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">

                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>
            </div>

            <!-- Package 5  -->
            <div class="bg-gradient-to-r from-pink-200 to-pink-300 rounded-lg p-6 mb-6 shadow-md">
                <div class="grid grid-cols-1 place-content-center md:flex  md:items-center md:justify-between">
                    <div class=" flex items-center gap-6">
                        <img src={{ asset('images/package5.png') }} alt="Food Package 5"
                            class="w-24 h-24 object-cover rounded-lg">
                        <div>
                            <h3 class="text-pink-600 font-bold text-sm mb-2">Food Package 5</h3>
                            <ul class="text-xs space-y-1">
                                <li>• 1pc Chicken McDo with</li>
                                <li>• Mcdospaghetti</li>
                                <li>• Regular Fries</li>
                                <li>• 1 box of Sundae</li>
                                <li>• Regular Iced Tea</li>
                            </ul>
                            <p class="text-red-600 font-bold text-2xl mt-3">₱279</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center gap-2">
                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.nextElementSibling.stepDown()">−</button>

                        <input type="number" name="package5_qty" min="0" value="0"
                            class="w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">

                        <button type="button"
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>

                </div>
            </div>

            <!-- Add More Flavor Section -->
            <div class="bg-[#C85A54] py-6 px-6 -mx-8 mb-6">
                <h2 class="text-white text-xl font-bold text-center">Add more flavor to the mix!</h2>
            </div>

            <!-- Add-ons Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-6">
                <!-- Regular Fries -->
                <div class="flex flex-col items-center">
                    <img src={{ asset('images/prays.png') }} alt="Regular Fries" class="w-20 h-20 object-contain mb-2">
                    <p class="text-xs text-center dark:text-gray-200">Regular Fries</p>
                </div>

                <!-- Big Mac -->
                <div class="flex flex-col items-center">
                    <img src={{ asset('images/burger.png') }} alt="Big Mac" class="w-20 h-20 object-contain mb-2">
                    <p class="text-xs text-center dark:text-gray-200">Big Mac</p>
                </div>

                <!-- Coke Float -->
                <div class="flex flex-col items-center">
                    <img src={{ asset('images/mcfloat.png') }} alt="Coke Float" class="w-20 h-20 object-contain mb-2">
                    <p class="text-xs text-center dark:text-gray-200">Coke Float</p>
                </div>
            </div>

            <div class="space-y-4">
                <!-- Row 1 -->
                <div class="flex justify-between gap-5">
                    <div class="w-full">
                        <label for="addons1" class="block text-sm font-medium mb-2 dark:text-gray-200">Add-ons</label>
                        <select id="addons1" name="addons"
                            class="addons-select w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="">Select add-ons</option>
                            <option value="fries">₱59 php - Regular Fries</option>
                            <option value="bigmac">₱150 php - Big Mac</option>
                            <option value="cokefloat">₱52 php - Coke Float</option>
                        </select>
                    </div>
                    <div class="flex items-end gap-2">
                        <button type="button"
                            class="qty-btn w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.nextElementSibling.stepDown()">−</button>
                        <input type="number" name="quantity" min="0" value="0"
                            class="addon-qty w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">
                        <button type="button"
                            class="qty-btn w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="flex justify-between gap-5">
                    <div class="w-full">
                        <select id="addons2" name="addons"
                            class="addons-select w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="">Select add-ons</option>
                            <option value="fries">₱59 php - Regular Fries</option>
                            <option value="bigmac">₱150 php - Big Mac</option>
                            <option value="cokefloat">₱52 php - Coke Float</option>
                        </select>
                    </div>
                    <div class="flex items-end gap-2">
                        <button type="button"
                            class="qty-btn w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.nextElementSibling.stepDown()">−</button>
                        <input type="number" name="quantity" min="0" value="0"
                            class="addon-qty w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">
                        <button type="button"
                            class="qty-btn w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="flex justify-between gap-5">
                    <div class="w-full">
                        <select id="addons3" name="addons"
                            class="addons-select w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="">Select add-ons</option>
                            <option value="fries">₱59 php - Regular Fries</option>
                            <option value="bigmac">₱150 php - Big Mac</option>
                            <option value="cokefloat">₱52 php - Coke Float</option>
                        </select>
                    </div>
                    <div class="flex items-end gap-2">
                        <button type="button"
                            class="qty-btn w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.nextElementSibling.stepDown()">−</button>
                        <input type="number" name="quantity" min="0" value="0"
                            class="addon-qty w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">
                        <button type="button"
                            class="qty-btn w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>