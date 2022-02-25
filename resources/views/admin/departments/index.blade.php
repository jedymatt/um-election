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
                    <table class="table-auto rounded-md overflow-hidden shadow-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($departments as $department)
                                <tr>
                                    <td>{{ $department->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.departments.show', $department) }}">View</a>
                                        <a href="{{ route('admin.departments.edit', $department) }}">Edit</a>
                                        <form class="inline-block" method="POST"
                                            action="{{ route('admin.departments.destroy', $department) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @method('delete')
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>Empty Records</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
