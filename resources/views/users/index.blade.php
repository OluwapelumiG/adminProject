<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg transform transition-transform duration-300">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h1
                            class="text-2xl font-semibold text-gray-800 hover:text-gray-600 transition-colors duration-300">
                            All Users</h1>
                        <div class="flex space-x-4">
                            <a href="{{ route('users.export') }}"
                                class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transform hover:scale-105 transition-all duration-300 shadow-md hover:shadow-lg">
                                Export PDF
                            </a>
                            <a href="{{ route('users.create') }}"
                                class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transform hover:scale-105 transition-all duration-300 shadow-md hover:shadow-lg">
                                Create New User
                            </a>
                        </div>
                    </div>

                    @if (session('success'))
                        <div
                            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 animate-fade-in-down">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- <div class="mb-6 flex flex-wrap gap-4"> --}}
                    <form action="{{ route('users.search') }}" method="POST" class="flex gap-4 mb-6">
                        @csrf
                        <input type="text" name="search" id="search" placeholder="Search users..."
                            value="{{ request('search') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <select name="filterField" id="filterField"
                            class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Filter by...</option>
                            <option value="name" {{ request('filterField') == 'name' ? 'selected' : '' }}>Name
                            </option>
                            <option value="email" {{ request('filterField') == 'email' ? 'selected' : '' }}>Email
                            </option>
                            <option value="phone" {{ request('filterField') == 'phone' ? 'selected' : '' }}>Phone
                            </option>
                            <option value="address" {{ request('filterField') == 'address' ? 'selected' : '' }}>
                                Address</option>
                        </select>
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-all duration-300 shadow-md hover:shadow-lg">
                            Apply
                        </button>
                    </form>
                    {{-- <div class="flex space-x-4">
                            <select id="filterField"
                                class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Filter by...</option>
                                <option value="name">Name</option>
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                                <option value="address">Address</option>
                            </select>
                        </div> --}}
                    {{-- </div> --}}

                    <div class="overflow-x-auto rounded-lg shadow-lg">
                        <table class="w-full" id="usersTable">
                            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        #</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Phone</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Address</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                    <tr class="hover:bg-gray-50 transition-colors duration-150 ease-in-out">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $loop->iteration }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->phone }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $user->address }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-3">
                                            <a href="{{ route('users.show', $user) }}"
                                                class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-600 rounded-full hover:bg-blue-200 transition-all duration-300 transform hover:scale-105">
                                                <span>View</span>
                                            </a>
                                            <a href="{{ route('users.edit', $user) }}"
                                                class="inline-flex items-center px-3 py-1 bg-yellow-100 text-yellow-600 rounded-full hover:bg-yellow-200 transition-all duration-300 transform hover:scale-105">
                                                <span>Edit</span>
                                            </a>
                                            <form action="{{ route('users.destroy', $user) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-1 bg-red-100 text-red-600 rounded-full hover:bg-red-200 transition-all duration-300 transform hover:scale-105"
                                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                                    <span>Delete</span>
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

    <style>
        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.5s ease-out;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const filterField = document.getElementById('filterField');
            const table = document.getElementById('usersTable');
            const rows = table.getElementsByTagName('tr');

            function filterTable() {
                const searchText = searchInput.value.toLowerCase();
                const filterValue = filterField.value;

                for (let i = 1; i < rows.length; i++) {
                    const row = rows[i];
                    let text = '';

                    if (filterValue) {
                        const cell = row.querySelector(`td:nth-child(${getColumnIndex(filterValue)})`);
                        text = cell ? cell.textContent.toLowerCase() : '';
                    } else {
                        text = row.textContent.toLowerCase();
                    }

                    if (text.includes(searchText)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            }

            function getColumnIndex(field) {
                switch (field) {
                    case 'name':
                        return 2;
                    case 'phone':
                        return 3;
                    case 'email':
                        return 4;
                    case 'address':
                        return 5;
                    default:
                        return 0;
                }
            }

            searchInput.addEventListener('input', filterTable);
            filterField.addEventListener('change', filterTable);
        });
    </script>
</x-app-layout>
