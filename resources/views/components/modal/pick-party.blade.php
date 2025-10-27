<div class="space-y-6 text-gray-800">
    <!-- Theme Selection -->
    <h3 class="text-lg font-semibold">Choose Your Party Theme</h3>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Theme Card -->
        <label class="relative group cursor-pointer">
            <input type="radio" name="theme" value="Madagascar" class="peer hidden">
            <div class="border-2 border-gray-200 peer-checked:border-red-500 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <img src="{{ asset('images/madagascar.png') }}" 
                    alt="Madagascar" class="w-full h-32 object-cover">
                <div class="text-center py-2 text-sm font-medium">Madagascar</div>
            </div>
        </label>

        <label class="relative group cursor-pointer">
            <input type="radio" name="theme" value="Happy" class="peer hidden">
            <div class="border-2 border-gray-200 peer-checked:border-red-500 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <img src={{ asset('images/mcdo.png') }} 
                    alt="Happy" class="w-full h-32 object-cover">
                <div class="text-center py-2 text-sm font-medium">Happy</div>
            </div>
        </label>

        <label class="relative group cursor-pointer">
            <input type="radio" name="theme" value="Cocomelon" class="peer hidden">
            <div class="border-2 border-gray-200 peer-checked:border-red-500 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <img src={{ asset('images/cocomelon.png') }}
                    alt="Cocomelon" class="w-full h-32 object-cover bg-white">
                <div class="text-center py-2 text-sm font-medium">Cocomelon</div>
            </div>
        </label>

        <label class="relative group cursor-pointer">
            <input type="radio" name="theme" value="My Little Pony" class="peer hidden">
            <div class="border-2 border-gray-200 peer-checked:border-red-500 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                <img src={{ asset('images/littlepony.png') }}
                    alt="My Little Pony" class="w-full h-32 object-cover bg-white">
                <div class="text-center py-2 text-sm font-medium">My Little Pony</div>
            </div>
        </label>
    </div>

    <!-- Info Section -->
    <p class="text-sm leading-relaxed">
        Our party package starts at <span class="font-semibold text-red-600">₱2,500</span>, valid for all themes.
        Just make a down payment at your preferred branch to get started!
    </p>

    <div class="flex flex-col md:flex-row items-center gap-6">
        <div class="">
            <img src="{{ asset('images/themeall.png')}}"alt="McDo Party" class="max-w-[300px] max-h-[300px] w-full h-full">
        </div>

        <ul class="text-sm list-disc space-y-1 pl-5">
            <p>McDo Party Fee Inclusions:</p>
            <li>Decorated Party Room</li>
            <li>Full Hosting</li>
            <li>30 Invitations</li>
            <li>30 Party Hats</li>
            <li>30 Activity Tray Mats</li>
            <li>30 Big Balloons</li>
            <li>10 Guest Giveaways</li>
            <li>Assorted Game Prizes</li>
            <li>FREE Gift Item for the Celebrant</li>
            <li>FREE Character Appearance (select stores)</li>
        </ul>
    </div>

    <p class="text-xs text-gray-600">
        *Additional giveaways and game prizes may be requested at an additional cost.
    </p>
</div>
