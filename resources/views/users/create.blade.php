<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-900">Create New User</h1>
                    <a href="{{ route('users.index') }}"
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200">
                        Back to Users
                    </a>
                </div>
                <form action="{{ route('users.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" name="phone" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" name="address" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Create User
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
