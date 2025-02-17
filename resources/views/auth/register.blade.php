<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input 
                id="email" 
                class="block mt-1 w-full border-2 border-black rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-700" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autofocus 
                autocomplete="username" 
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Shop Name -->
        <div class="mt-4">
            <x-input-label for="shop_name" :value="__('Shop Name')" />
            <x-text-input 
                id="shop_name" 
                class="block mt-1 w-full border-2 border-black rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-700" 
                type="text" 
                name="shop_name" 
                :value="old('shop_name')" 
                required 
                autocomplete="shop_name" 
            />
            <x-input-error :messages="$errors->get('shop_name')" class="mt-2" />
        </div>

        <!-- Owner Name -->
        <div class="mt-4">
            <x-input-label for="owner_name" :value="__('Owner Name')" />
            <x-text-input 
                id="owner_name" 
                class="block mt-1 w-full border-2 border-black rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-700" 
                type="text" 
                name="owner_name" 
                :value="old('owner_name')" 
                required 
                autocomplete="owner_name" 
            />
            <x-input-error :messages="$errors->get('owner_name')" class="mt-2" />
        </div>

        <!-- Customer ID -->
        <div class="mt-4">
            <x-input-label for="customer_id" :value="__('Customer ID')" />
            <x-text-input 
                id="customer_id" 
                class="block mt-1 w-full border-2 border-black rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-700" 
                type="text" 
                name="customer_id" 
                :value="old('customer_id')" 
                required 
                autocomplete="customer_id" 
            />
            <x-input-error :messages="$errors->get('customer_id')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input 
                id="password" 
                class="block mt-1 w-full"
                type="password"
                name="password"
                required 
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input 
                id="password_confirmation" 
                class="block mt-1 w-full"
                type="password"
                name="password_confirmation" 
                required 
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
