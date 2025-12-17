<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <x-user-navbar />

    <div class="flex flex-col items-center justify-start w-full px-4">

        <h1 class="text-4xl font-extrabold mb-8 text-gray-800 text-center">
            Check Your Skills
        </h1>

        <!-- 🔍 Search with Icon -->
        <div class="w-full max-w-md mb-10 relative">
            <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                </svg>
            </span>

            <input
                id="searchInput"
                type="text"
                placeholder="Search category..."
                class="w-full pl-12 pr-5 py-3 border border-gray-300 rounded-full shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-400
                       focus:border-indigo-400 text-gray-700 placeholder-gray-400">
        </div>

        <!-- Categories -->
        <div class="w-full max-w-5xl">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

                <!-- Header -->
                <div class="px-6 py-5 border-b flex items-center bg-indigo-50">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex justify-center items-center mr-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        All Categories
                    </h2>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[600px]">
                        <thead class="bg-indigo-600 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left">S.No</th>
                                <th class="px-6 py-3 text-left">Category</th>
                                <th class="px-6 py-3 text-left">Quiz Count</th>
                                <th class="px-6 py-3 text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody id="categoryTable" class="divide-y divide-gray-200">
                            @foreach($categories as $key => $category)
                            <tr class="hover:bg-indigo-50 transition duration-200">
                                <td class="px-6 py-4">{{ $key + 1 }}</td>

                                <td class="px-6 py-4 font-medium text-gray-800">
                                    {{ $category->name }}
                                </td>

                                <td class="px-6 py-4 font-medium text-gray-800">
                                    {{ $category->quizzes_count }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <a href="user-quiz-list/{{ $category->id }}/{{ $category->name }}"
                                        class="inline-block bg-indigo-500 text-white px-4 py-2 rounded-full
                                               hover:bg-indigo-600 transition duration-200">
                                        View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Empty State -->
                @if(count($categories) == 0)
                <div class="text-center py-16 text-gray-400 text-lg font-medium">
                    No categories found.
                </div>
                @endif

            </div>
        </div>
    </div>

    <!-- 🔥 Search Script -->
    <script>
        const searchInput = document.getElementById("searchInput");
        const rows = document.querySelectorAll("#categoryTable tr");

        searchInput.addEventListener("keyup", function () {
            const value = this.value.toLowerCase();

            rows.forEach(row => {
                const categoryName = row.children[1].innerText.toLowerCase();

                if (categoryName.includes(value)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    </script>

</body>
</html>
