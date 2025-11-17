@php
    $foodPackages = [
        [
            'name' => 'Food Package 1',
            'image' => 'images/package1.png',
            'price' => 149,
            'items' => ['1pc Chicken McDo with McDoSpaghetti','12oz Coke'],
            'color' => 'from-blue-300 to-blue-400',
            'textColor' => 'text-blue-600',
            'category' => 'adults',
        ],
        [
            'name' => 'Food Package 2',
            'image' => 'images/package2.png',
            'price' => 199,
            'items' => ['1pc Chicken McDo with Rice','Medium Fries','Apple Pie','16oz Coke'],
            'color' => 'from-blue-300 to-blue-400',
            'textColor' => 'text-blue-600',
            'category' => 'adults',
        ],
        [
            'name' => 'Food Package 3',
            'image' => 'images/package3.png',
            'price' => 259,
            'items' => ['1pc Chicken McDo with McDoSpaghetti', 'Medium Fries', '16oz Coke'],
            'color' => 'from-blue-300 to-blue-400',
            'textColor' => 'text-blue-600',
            'category' => 'adults',
        ],
        [
            'name' => 'Food Package 4',
            'image' => 'images/package4.png',
            'price' => 219,
            'items' => ['4pc Chicken McNuggets with Rice', 'Regular Fries', '12oz Orange Juice', 'Sundae','Happy Meal Toy'],
            'color' => 'from-pink-200 to-pink-300',
            'textColor' => 'text-pink-600',
            'category' => 'kids',
        ],
        [
            'name' => 'Food Package 5',
            'image' => 'images/package5.png',
            'price' => 279,
            'items' => ['1pc Chicken McDo with McDoSpaghetti', 'Regular Fries', '12oz Orange Juice', 'Sundae','Happy Meal Toy'],
            'color' => 'from-pink-200 to-pink-300',
            'textColor' => 'text-pink-600',
            'category' => 'kids',
        ]
    ];

        $addonsOptions = [
            ['label' => '₱59 php - Regular Fries', 'value' => 'fries', 'price' => 59],
            ['label' => '₱150 php - Big Mac', 'value' => 'bigmac', 'price' => 150],
            ['label' => '₱52 php - Coke Float', 'value' => 'cokefloat', 'price' => 52],
        ];

        $addonRows = 3; 
@endphp

<div class="text-[#1b1b18] dark:text-black overflow-hidden rounded-lg">
    <!-- Header -->
    <div class="bg-[#C85A54] py-6 px-6 w-full">
        <h1 class="text-white text-2xl font-bold text-center">Food Package</h1>
    </div>

    <div class="p-8">
        <!-- Adults Section -->
        <h2 class="text-lg font-semibold mb-6 text-center dark:text-white">FOR ADULTS</h2>
        @foreach ($foodPackages as $index => $package)
            @if ($package['category'] === 'adults')
                <div class="bg-gradient-to-r {{ $package['color'] }} rounded-lg p-6 mb-4 shadow-md">
                    <div class="flex flex-col md:flex md:flex-row items-center justify-between">
                        <div class="flex items-center gap-6">
                            <img src="{{ asset($package['image']) }}" alt="{{ $package['name'] }}"
                                class="w-32 h-32 object-cover rounded-lg">
                            <div>
                                <h3 class="{{ $package['textColor'] }} font-bold text-sm mb-2">{{ $package['name'] }}</h3>
                                <ul class="text-xs space-y-1">
                                    @foreach ($package['items'] as $item)
                                        <li>• {{ $item }}</li>
                                    @endforeach
                                </ul>
                                <p class="text-red-600 font-bold text-2xl mt-3">₱{{ $package['price'] }}</p>
                            </div>
                        </div>

                        <input type="hidden" name="food_packages[{{ $index }}][name]" value="{{ $package['name'] }}">
                        <input type="hidden" name="food_packages[{{ $index }}][price]" value="{{ $package['price'] }}">

                        <div class="flex justify-center items-center gap-2">
                            <button type="button"
                                class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                                onclick="this.nextElementSibling.stepDown()">−</button>
                            <input type="number" name="food_packages[{{ $index }}][quantity]" min="0" value="0"
                                class="w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">
                            <button type="button"
                                class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                                onclick="this.previousElementSibling.stepUp()">+</button>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        <!-- Kids Section -->
        <h2 class="text-lg font-semibold mb-6 text-center dark:text-white">FOR KIDS</h2>
        @foreach ($foodPackages as $index => $package)
            @if ($package['category'] === 'kids')
                <div class="bg-gradient-to-r {{ $package['color'] }} rounded-lg p-6 mb-4 shadow-md">
                    <div class="flex flex-col md:flex md:flex-row items-center justify-between">
                        <div class="flex items-center gap-6">
                            <img src="{{ asset($package['image']) }}" alt="{{ $package['name'] }}"
                                class="w-32 h-32 object-cover rounded-lg">
                            <div>
                                <h3 class="{{ $package['textColor'] }} font-bold text-sm mb-2">{{ $package['name'] }}</h3>
                                <ul class="text-xs space-y-1">
                                    @foreach ($package['items'] as $item)
                                        <li>• {{ $item }}</li>
                                    @endforeach
                                </ul>
                                <p class="text-red-600 font-bold text-2xl mt-3">₱{{ $package['price'] }}</p>
                            </div>
                        </div>

                        <input type="hidden" name="food_packages[{{ $index }}][name]" value="{{ $package['name'] }}">
                        <input type="hidden" name="food_packages[{{ $index }}][price]" value="{{ $package['price'] }}">

                        <div class="flex justify-center items-center gap-2">
                            <button type="button"
                                class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                                onclick="this.nextElementSibling.stepDown()">−</button>
                            <input type="number" name="food_packages[{{ $index }}][quantity]" min="0" value="0"
                                class="w-14 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-[#C85A54] focus:outline-none">
                            <button type="button"
                                class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                                onclick="this.previousElementSibling.stepUp()">+</button>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        <!-- Add-ons Section -->
        <div class="bg-[#C85A54] py-6 px-6 -mx-8 mb-6">
            <h2 class="text-white text-xl font-bold text-center">Add more flavor to the mix!</h2>
        </div>
        <div class="space-y-4">
            @for ($i = 0; $i < $addonRows; $i++)
                <div class="flex justify-between gap-5">
                    <div class="w-full">
                        <label for="addons{{ $i + 1 }}" class="block text-sm font-medium mb-2 dark:text-gray-200">
                            Add-ons
                        </label>
                        <select id="addons{{ $i + 1 }}" name="addons[{{ $i }}][name]" class="addons-select w-full px-4 py-2 border border-gray-300 rounded-md 
                            focus:ring-2 focus:ring-[#C85A54] focus:border-transparent outline-none 
                            bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            onchange="updateAddonPrice({{ $i }}, this.value)">
                            <option value="">Select add-ons</option>

                            @foreach ($addonsOptions as $opt)
                                <option value="{{ $opt['value'] }}" data-price="{{ $opt['price'] }}">
                                    {{ $opt['label'] }}
                                </option>
                            @endforeach
                        </select>

                        <input type="hidden" name="addons[{{ $i }}][price]" id="addon-price-{{ $i }}" value="0">
                    </div>

                    <div class="flex items-end gap-2">
                        <button type="button"
                            class="qty-btn w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.nextElementSibling.stepDown()">−</button>

                        <input type="number" name="addons[{{ $i }}][quantity]" min="0" value="0" class="addon-qty w-14 text-center border border-gray-300 rounded-md focus:ring-2 
                        focus:ring-[#C85A54] focus:outline-none">

                        <button type="button"
                            class="qty-btn w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-700 rounded hover:bg-gray-300"
                            onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
                </div>
            @endfor
        </div>

    </div>
</div>
<script>
    function updateAddonPrice(index, value) {
        const select = document.querySelector(`#addons${index + 1}`);
        const priceField = document.querySelector(`#addon-price-${index}`);
        const selectedOption = select.options[select.selectedIndex];
        const price = selectedOption.getAttribute('data-price') || 0;
        priceField.value = price;
    }
    
</script>