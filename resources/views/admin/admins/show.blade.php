<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12 px-8">
        {{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
        {{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
        {{--                <div class="p-6 bg-white border-b border-gray-200">--}}
        {{--                    {{ $admin }}--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3">
                <div class="col-span-1 px-0">
                    Admin Information
                </div>
                <div class="col-span-2">
                    <div class="bg-white p-4 rounded-md shadow">
                        <div>
                            <x-label for="name" value="Full Name"/>
                            <x-input class="mt-1 w-full" type="text" value="{{ $admin->name }}"
                                     id="name" name="name" disabled/>
                        </div>
                        <div class="mt-4">
                            <x-label for="email" value="Email"/>
                            <x-input id="email" name="email" value="{{ $admin->email }}"
                                     type="email" class="mt-1 w-full" disabled/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
