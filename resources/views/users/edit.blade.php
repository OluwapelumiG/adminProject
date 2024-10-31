<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Edit User</h1>
                    <a href="{{ route('users.index') }}"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-md">Back
                        to Users</a>
                </div>
                <form action="{{ route('users.update', $user) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" name="phone" value="{{ $user->phone }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" name="address" value="{{ $user->address }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <small class="text-sm text-gray-500">Leave blank to keep the current password</small>
                    </div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update User
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
