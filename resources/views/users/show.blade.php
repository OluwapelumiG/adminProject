<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">User Details</h1>

            <div class="space-y-4 mb-6">
                <div class="flex items-center">
                    <span class="text-gray-600 font-semibold w-24">Name:</span>
                    <span class="text-gray-800">{{ $user->name }}</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-600 font-semibold w-24">Phone:</span>
                    <span class="text-gray-800">{{ $user->phone }}</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-600 font-semibold w-24">Email:</span>
                    <span class="text-gray-800">{{ $user->email }}</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-600 font-semibold w-24">Address:</span>
                    <span class="text-gray-800">{{ $user->address }}</span>
                </div>
            </div>

            <div class="flex space-x-4">
                <a href="{{ route('users.edit', $user) }}"
                    class="inline-flex items-center px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-md transition duration-150 ease-in-out">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit
                </a>

                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-md transition duration-150 ease-in-out">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
