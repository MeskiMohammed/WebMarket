<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class='flex gap-2'>
            <!-- nom -->
            <div class="mt-4">
                <x-input-label for="nom" :value="__('nom')" />
                    <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                        <x-input-error :messages="$errors->get('nom')" class="mt-2" />
            </div>

            <!-- prenom -->
            <div class="mt-4">
                <x-input-label for="prenom" :value="__('prenom')" />
                    <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autocomplete="prenom" />
                        <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
            </div>
        </div>

        <div class='flex gap-2'>
            <!-- adresse -->
            <div class="mt-4">
                <x-input-label for="adresse" :value="__('adresse')" />
                    <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autocomplete="adresse" />
                        <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
            </div>

            <!-- ville -->
            <div class="mt-4">
                <x-input-label for="ville" :value="__('ville')" />
                    <x-text-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autocomplete="ville" />
                        <x-input-error :messages="$errors->get('ville')" class="mt-2" />
            </div>
        </div>


        <div class='flex gap-2'>
            <!-- email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- tel -->
            <div class="mt-4">
                <x-input-label for="tel" :value="__('tel')" />
                    <x-text-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autocomplete="tel" />
                        <x-input-error :messages="$errors->get('tel')" class="mt-2" />
            </div>
        </div>


        <div class='flex gap-2'>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
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
