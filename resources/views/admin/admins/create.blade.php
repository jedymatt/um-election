<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin.admins.store') }}" method="post">
                    @csrf
                    <!-- Full Name -->
                        <div>
                            <x-label for="name" value="Full Name"/>
                            <x-input id="name" name="name" autocomplete required type="text"
                                     class="block mt-1 w-full"/>
                            @error('name')
                            <p class="text-sm text-red-600 py-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Email Address -->
                        <div class="mt-4">
                            <div>
                                <x-label for="email" :value="__('Email')"/>
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                         :value="old('email')" required autofocus/>
                            </div>
                            @error('email')
                            <p class="text-sm text-red-600 py-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')"/>

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="current-password"/>
                        </div>
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                     type="password"
                                     name="password_confirmation" required/>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                Register Admin
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
