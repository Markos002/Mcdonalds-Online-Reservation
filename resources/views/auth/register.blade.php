<x-auth-layout>
    <div class="min-h-screen flex items-center justify-center text-white">
        <div class="w-full max-w-md bg-[#2b0000]/60 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-[#ffcc00]/20">
             <div class="text-center mb-6">
                <img src="{{ asset('circle1.png') }}" alt="McDonald's" class="w-20 mx-auto mb-2">
                <h1 class="text-3xl font-bold text-[#ffcc00]">Registration</h1>
                <p class="text-gray-200 text-sm">Please register here to make your first reservation</p>
            </div>
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div>
                    <x-input-label for="username" :value="__('Username')" class="text-yellow-400" />
                    <x-text-input id="username" class="text-black block mt-1 w-full rounded-md border-none focus:ring-[#ffcc00]" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2 text-red-400" />
                </div>
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-yellow-400" />
                    <x-text-input id="email" class="text-black block mt-1 w-full rounded-md border-none focus:ring-[#ffcc00]" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
                </div>
                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-yellow-400" />
                    <x-text-input id="password" class="text-black block mt-1 w-full rounded-md border-none focus:ring-[#ffcc00]" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
                </div>
                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-yellow-400" />
                    <x-text-input id="password_confirmation" class="text-black block mt-1 w-full rounded-md border-none focus:ring-[#ffcc00]" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-yellow-500 hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#ffcc00]" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button.primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-button.primary-button>
                </div>
            </form>
        </div>
    </div>
</x-auth-layout>

