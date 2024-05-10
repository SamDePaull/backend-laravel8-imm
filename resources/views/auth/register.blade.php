<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <img class="block mx-auto h-12 w-auto" src="https://via.placeholder.com/150" alt="Logo">
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-center font-semibold text-2xl text-gray-800 mb-6">{{ __('Register') }}</h2>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Username -->
                <div>
                    <x-label for="username" :value="__('Username')" />

                    <x-input id="username" class="block mt-1 w-full rounded-md" type="text" name="username" :value="old('username')" required autofocus />
                </div>

                <!-- Full Name -->
                <div class="mt-4">
                    <x-label for="nama_lengkap" :value="__('Full Name')" />

                    <x-input id="nama_lengkap" class="block mt-1 w-full rounded-md" type="text" name="nama_lengkap" :value="old('nama_lengkap')" required />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full rounded-md" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full rounded-md" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full rounded-md" type="password" name="password_confirmation" required />
                </div>

                <!-- Phone Number -->
                <div class="mt-4">
                    <x-label for="no_hp" :value="__('Phone Number')" />

                    <x-input id="no_hp" class="block mt-1 w-full rounded-md" type="text" name="no_hp" :value="old('no_hp')" required />
                </div>

                <!-- Country -->
                <div class="mt-4">
                    <x-label for="negara" :value="__('Country')" />

                    <x-input id="negara" class="block mt-1 w-full rounded-md" type="text" name="negara" :value="old('negara')" required />
                </div>

                <!-- Province -->
                <div class="mt-4">
                    <x-label for="provinsi" :value="__('Province')" />

                    <x-input id="provinsi" class="block mt-1 w-full rounded-md" type="text" name="provinsi" :value="old('provinsi')" required />
                </div>

                <!-- City -->
                <div class="mt-4">
                    <x-label for="kota" :value="__('City')" />

                    <x-input id="kota" class="block mt-1 w-full rounded-md" type="text" name="kota" :value="old('kota')" required />
                </div>

                <!-- Postal Code -->
                <div class="mt-4">
                    <x-label for="kode_pos" :value="__('Postal Code')" />

                    <x-input id="kode_pos" class="block mt-1 w-full rounded-md" type="text" name="kode_pos" :value="old('kode_pos')" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
