<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Department') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Department Name')"/>
                        <div class="block mt-1 w-full p-2 rounded bg-gray-100">
                            {{ $department->name }}
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-blue-500"
                            href="{{ route('admin.departments.edit', $department) }}">Edit Department</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
