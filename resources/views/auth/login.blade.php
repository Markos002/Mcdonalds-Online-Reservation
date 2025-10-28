<x-auth-layout>
    <div class="min-h-screen flex items-center justify-center text-white">
        <div class="w-full max-w-md bg-[#2b0000]/60 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-[#ffcc00]/20">
            <div class="text-center mb-6">
                <img src="{{ asset('circle1.png') }}" alt="McDonald's" class="w-20 mx-auto mb-2">
                <h1 class="text-3xl font-bold text-[#ffcc00]">Welcome Back!</h1>
                <p class="text-gray-200 text-sm">Log in to continue your reservation 🍔</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-center text-green-400" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-[#ffcc00]" />
                    <x-text-input id="email" class="block mt-1 w-full rounded-md border-none focus:ring-[#ffcc00]" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-[#ffcc00]" />
                    <x-text-input id="password" class="block mt-1 w-full rounded-md border-none focus:ring-[#ffcc00]" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#ffcc00] focus:ring-[#ffcc00]" name="remember">
                    <label for="remember_me" class="ml-2 text-sm text-gray-300">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-gray-300 hover:text-[#ffcc00] transition">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif

                    <x-button.primary-button class="ms-4">
                        {{ __('Login') }}
                    </x-button.primary-button>
                </div>
            </form>

            <p class="text-center text-gray-300 text-sm mt-6">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-[#ffcc00] hover:underline">
                    {{ __('Register now!') }}
                </a>
            </p>
        </div>
    </div>
</x-auth-layout>
