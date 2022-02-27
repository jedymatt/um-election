<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manage Admins
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(auth('admin')->user()->can('create', \App\Models\Admin::class))
                    <div class="flex justify-end pb-4">
                        <x-button-link href="{{ route('admin.admins.create') }}">Create Admin</x-button-link>
                    </div>
                    @endif
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Role
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Actions</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($admins as $admin)
                                            <tr>
                                                <!-- Name -->
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        {{ $admin->name }}
                                                    </div>
                                                </td>
                                                <!-- Email -->
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        {{ $admin->email }}
                                                    </div>
                                                </td>
                                                <!-- Role -->
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <div class="flex items-center">
                                                        @if($admin->is_superadmin)
                                                            Super Administrator
                                                        @else
                                                            Administrator
                                                        @endif
                                                    </div>
                                                </td>
                                                <!-- Actions -->
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <!-- View -->
                                                    <a href="{{ route('admin.admins.show', $admin) }}"
                                                       class="text-blue-600 hover:text-blue-900  mr-2">View</a>

                                                    <!-- Edit -->
                                                    <a href="{{ route('admin.admins.edit', $admin) }}"
                                                       class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>

                                                    <form action="{{ route('admin.admins.destroy', $admin) }}"
                                                          method="post"
                                                          class="inline-block">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit"
                                                                class="text-red-600 hover:text-red-900">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
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
