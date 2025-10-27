<div class="space-y-8 text-gray-800">

    <!-- Header -->
    <div class="bg-red-600 text-white text-center py-3 rounded-t-lg font-bold text-lg">
        Food Package
    </div>

    <!-- FOR ADULTS -->
    <div>
        <h3 class="text-blue-800 font-semibold uppercase text-sm tracking-wider mb-3">For Adults</h3>

        <div class="space-y-4">
            <!-- Package 1 -->
            <label class="block relative border border-gray-200 rounded-xl overflow-hidden shadow hover:shadow-md cursor-pointer peer-checked:border-red-500 transition">
                <input type="radio" name="food_package" value="Package 1" class="peer hidden">
                <div class="flex items-center justify-between bg-white">
                    <div class="flex items-center gap-4 p-4">
                        <img src={{ asset('images/package1.png') }}
                             alt="Food Package 1" class="w-24 h-24 object-contain">
                        <div>
                            <h4 class="font-semibold text-gray-900">Food Package 1</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5">
                                <li>1pc Chicken McDo</li>
                                <li>Regular Fries</li>
                                <li>Iced Coke</li>
                            </ul>
                            <div class="font-bold text-red-600 mt-1">₱149</div>
                        </div>
                    </div>
                    <div class="absolute top-2 right-2">
                        <input type="radio" name="food_package" value="1" class="accent-red-600 scale-125">
                    </div>
                </div>
            </label>

            <!-- Package 2 -->
            <label class="block relative border border-gray-200 rounded-xl overflow-hidden shadow hover:shadow-md cursor-pointer transition">
                <input type="radio" name="food_package" value="Package 2" class="peer hidden">
                <div class="flex items-center justify-between bg-white">
                    <div class="flex items-center gap-4 p-4">
                        <img src={{ asset('images/package2.png') }}
                             alt="Food Package 2" class="w-24 h-24 object-contain">
                        <div>
                            <h4 class="font-semibold text-gray-900">Food Package 2</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5">
                                <li>1pc McSpaghetti</li>
                                <li>1pc Chicken McDo</li>
                                <li>Iced Tea</li>
                            </ul>
                            <div class="font-bold text-red-600 mt-1">₱199</div>
                        </div>
                    </div>
                </div>
            </label>

            <!-- Package 3 -->
            <label class="block relative border border-gray-200 rounded-xl overflow-hidden shadow hover:shadow-md cursor-pointer transition">
                <input type="radio" name="food_package" value="Package 3" class="peer hidden">
                <div class="flex items-center justify-between bg-white">
                    <div class="flex items-center gap-4 p-4">
                        <img src={{ asset('images/package3.png') }}
                             alt="Food Package 3" class="w-24 h-24 object-contain">
                        <div>
                            <h4 class="font-semibold text-gray-900">Food Package 3</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5">
                                <li>1pc McChicken Fillet</li>
                                <li>Regular Fries</li>
                                <li>McFloat</li>
                            </ul>
                            <div class="font-bold text-red-600 mt-1">₱250</div>
                        </div>
                    </div>
                </div>
            </label>
        </div>
    </div>

    <!-- FOR KIDS -->
    <div>
        <h3 class="text-pink-600 font-semibold uppercase text-sm tracking-wider mb-3">For Kids</h3>

        <div class="space-y-4">
            <!-- Package 4 -->
            <label class="block relative border border-gray-200 rounded-xl overflow-hidden shadow hover:shadow-md cursor-pointer transition">
                <input type="radio" name="food_package" value="Package 4" class="peer hidden">
                <div class="flex items-center justify-between bg-pink-50">
                    <div class="flex items-center gap-4 p-4">
                        <img src={{ asset('images/package4.png') }}
                             alt="Food Package 4" class="w-24 h-24 object-contain">
                        <div>
                            <h4 class="font-semibold text-gray-900">Food Package 4</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5">
                                <li>4pc Chicken McNuggets</li>
                                <li>Regular Fries</li>
                                <li>Orange Juice</li>
                                <li>Happy Meal Toy</li>
                            </ul>
                            <div class="font-bold text-red-600 mt-1">₱219</div>
                        </div>
                    </div>
                </div>
            </label>

            <!-- Package 5 -->
            <label class="block relative border border-gray-200 rounded-xl overflow-hidden shadow hover:shadow-md cursor-pointer transition">
                <input type="radio" name="food_package" value="Package 5" class="peer hidden">
                <div class="flex items-center justify-between bg-pink-50">
                    <div class="flex items-center gap-4 p-4">
                        <img src={{ asset('images/package5.png') }}
                             alt="Food Package 5" class="w-24 h-24 object-contain">
                        <div>
                            <h4 class="font-semibold text-gray-900">Food Package 5</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5">
                                <li>1pc Burger McDo</li>
                                <li>Regular Fries</li>
                                <li>Apple Juice</li>
                                <li>Happy Meal Toy</li>
                            </ul>
                            <div class="font-bold text-red-600 mt-1">₱279</div>
                        </div>
                    </div>
                </div>
            </label>
        </div>
    </div>

    <!-- ADD-ONS -->
    <div class="bg-red-600 text-white p-3 rounded-md">
        <h3 class="text-center font-bold text-base">Add more flavor to the mix!</h3>
        <p class="text-center text-xs mt-1">*You can choose more than one add-on.</p>

        <div class="flex justify-center gap-10 mt-3">
            <div class="text-center">
                <img src="{{ asset('images/prays.png') }}" class="w-14 mx-auto">
                <p class="text-sm mt-1">Regular Fries</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/burger.png') }}" class="w-14 mx-auto">
                <p class="text-sm mt-1">Big Mac</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/mcfloat.png') }}" class="w-14 mx-auto">
                <p class="text-sm mt-1">Coke Float</p>
            </div>
        </div>

        <div class="mt-3 text-center">
            <select class="px-4 py-2 rounded-md text-black w-48">
                <option value="">Select Add-on</option>
                <option value="Regular Fries">Regular Fries</option>
                <option value="Big Mac">Big Mac</option>
                <option value="Coke Float">Coke Float</option>
            </select>
        </div>
    </div>

</div>
