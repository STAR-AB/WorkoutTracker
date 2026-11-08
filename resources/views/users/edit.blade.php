<x-layout title="Edit User">
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-md p-8">

            <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Users</h1>

            <form action="{{ route('users.update', $user->id) }}" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')

                <div class="flex flex-col gap-1">
                    <label for="name" class="text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}"
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="email" class="text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}"
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" id="password" name="password"
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="flex gap-2 mt-2">
                    <a href="{{ route('users.index') }}"
                        class="flex-1 text-center bg-gray-200 text-gray-700 font-semibold py-2 rounded-lg hover:bg-gray-300 transition">
                        Cancel
                    </a>
                    <button type="submit"
                        class="flex-1 bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">
                        Update User
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-layout>