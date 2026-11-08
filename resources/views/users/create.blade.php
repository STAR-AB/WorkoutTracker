<x-layout>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-md p-8">

            <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Create User</h1>

            <form action="{{ route('users.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf

                <div class="flex flex-col gap-1">
                    <label for="name" class="text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" id="name" name="name" required
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="email" class="text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" required
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" required
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <button type="submit"
                    class="mt-2 bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">
                    Create User
                </button>
            </form>

        </div>
    </div>
</x-layout>