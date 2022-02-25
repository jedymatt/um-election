<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-end pb-4">
                        <x-button-link href="{{ route('admin.departments.create') }}">Add Department</x-button-link>
                    </div>
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Department Name
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Actions</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse($departments as $department)
                                            <tr>
                                                <!-- Name -->
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        {{ $department->name }}
                                                    </div>
                                                </td>
                                                <!-- Actions -->
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <!-- View -->
                                                    <a href="{{ route('admin.departments.show', $department) }}"
                                                       class="text-blue-600 hover:text-blue-900  mr-2">View</a>

                                                    <!-- Edit -->
                                                    <a href="{{ route('admin.departments.edit', $department) }}"
                                                       class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>

                                                    <form action="{{ route('admin.departments.destroy', $department) }}"
                                                          method="post"
                                                          class="inline-block"
                                                          onclick="return confirm('Are you sure you want to delete?')">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit"
                                                                class="text-red-600 hover:text-red-900">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="py-6 whitespace-nowrap" colspan="5">
                                                    <div class="flex items-center justify-center">
                                                        <span class="text-gray-500">No Departments</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
