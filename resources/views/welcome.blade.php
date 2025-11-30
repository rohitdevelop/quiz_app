<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Categories</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <x-user-navbar />

    <div class="flex flex-col items-center justify-start w-full ">

        <h1 class="text-4xl font-extrabold mb-8 text-gray-800 text-center">Check Your Skills</h1>

        <!-- Search -->
        <div class="w-full max-w-md mb-10">
            <input
                class="w-full px-5 py-3 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 text-gray-700 placeholder-gray-400"
                type="text"
                placeholder="Search quiz...">
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
                    <h2 class="text-2xl font-bold text-gray-800">All Categories</h2>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[600px]">
                        <thead class="bg-indigo-600 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left">S.No</th>
                                <th class="px-6 py-3 text-left">Category</th>
                                <th class="px-6 py-3 text-left">Quize Count</th>
                                <th class="px-6 py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($categories as $key => $category)
                            <tr class="hover:bg-indigo-50 transition duration-200">
                                <td class="px-6 py-4">{{ $key + 1 }}</td>
                                <td class="px-6 py-4 font-medium text-gray-800">{{ $category->name }}</td>
                                <td class="px-6 py-4 font-medium text-gray-800">{{ $category->quizzes_count }}</td>
                                <td class="px-6 py-4 text-center">
                                    <a href="user-quiz-list/{{ $category->id }}/{{ $category->name }}"
                                        class="inline-block bg-indigo-500 text-white px-4 py-2 rounded-full hover:bg-indigo-600 transition duration-200">
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
                    No categories found. Add your first category!
                </div>
                @endif

            </div>
        </div>

    </div>

</body>
</html>
