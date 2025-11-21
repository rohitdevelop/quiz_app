<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Categories Page</title>
    @vite(['resources/css/app.css'])
    <!-- Heroicons CDN -->
    <script src="https://cdn.jsdelivr.net/npm/heroicons@2.0.18/24/outline/index.js"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <x-navbar name={{$name}}></x-navbar>

    <!-- Success Message -->
    @if(session('success'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
        <div class="bg-green-50 border-l-4 border-green-500 text-green-800 px-4 py-3 rounded-lg shadow-sm flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            {{ session('success') }}
        </div>
    </div>
    @endif

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Add Category Form -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-800">Add Category</h2>
                    </div>

                    <form action="/add-category" method="post" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Category Name</label>
                            <input
                                name="category"
                                type="text"

                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200"
                                placeholder="Enter category name">
                        </div>
                        @error('category')
                        <div class="text-red-600">{{$message}}</div>
                        @enderror

                        <button
                            type="submit"
                            class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition duration-200 font-semibold shadow-md hover:shadow-lg flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Add Category
                        </button>
                    </form>
                </div>
            </div>

            <!-- Categories Table -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="px-6 py-5 border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                </svg>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800">All Categories</h2>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-blue-600 text-white">
                                <tr>
                                    <th class="px-4 py-3 text-left text-sm font-semibold">S.No</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold">Category</th>
                                    <th class="px-4 py-3 text-left text-sm font-semibold hidden sm:table-cell">Creator</th>
                                    <th class="px-4 py-3 text-center text-sm font-semibold">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @foreach($categories as $index => $category)
                                <tr class="hover:bg-gray-50 transition duration-150">
                                    <td class="px-4 py-4 text-sm text-gray-700 font-medium">{{ $category->id }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-900 font-medium">{{ $category->name }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-600 hidden sm:table-cell">{{ $category->creator }}</td>
                                    <td class="px-4 py-4">
                                        <div class="flex gap-2 justify-center items-center">

                                            <!-- Delete Form -->
                                            <form action="/delete-category/{{ $category->id }}" method="POST"

                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="openModal({{ $category->id }}, '{{ $category->name }}')"
                                                    type="button"
                                                    class="inline-flex items-center px-3 py-2 bg-red-500 text-white text-sm rounded-lg hover:bg-red-600 transition duration-200 shadow-sm hover:shadow-md"
                                                    title="Delete Category">
                                                    <svg class="w-4 h-4 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                    <span class="hidden sm:inline">Delete</span>
                                                </button>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @if(count($categories) == 0)
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                        <p class="mt-4 text-gray-500">No categories found. Add your first category!</p>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
    <!-- Delete Modal -->
   <div id="deleteModal"
    class="fixed inset-0 hidden z-50 flex items-center justify-center backdrop-blur-sm bg-transparent bg-opacity-40">
    <div
        class="bg-white rounded-xl p-6 max-w-sm w-full text-center shadow-lg transform transition-transform duration-200 scale-95 opacity-0">
        <h3 class="text-xl font-semibold mb-4">Are you sure you want to delete?</h3>
        <p id="modalCategoryName" class="mb-6 font-medium text-gray-700"></p>
        <div class="flex justify-center gap-4">
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-500 px-4 py-2 rounded-lg text-white hover:bg-red-600 font-medium">OK</button>
            </form>
            <button onclick="closeModal()"
                class="bg-gray-300 px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-400 font-medium">Cancel</button>
        </div>
    </div>
</div>



    <script>
        function openModal(id, name) {
    const modal = document.getElementById('deleteModal');
    const modalContent = modal.querySelector('div');

    document.getElementById('modalCategoryName').innerText = `"${name}"`;
    document.getElementById('deleteForm').action = `/delete-category/${id}`;

    modal.classList.remove('hidden');
    
    // Animate modal in
    setTimeout(() => {
        modalContent.classList.remove('scale-95', 'opacity-0');
        modalContent.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeModal() {
    const modal = document.getElementById('deleteModal');
    const modalContent = modal.querySelector('div');

    // Animate modal out
    modalContent.classList.add('scale-95', 'opacity-0');
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 200);
}

    </script>

</body>

</html>