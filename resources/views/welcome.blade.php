 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz System Home</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 min-h-screen">

<x-user-navbar />

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Page Heading -->
    <div class="text-center mb-12">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-800">Check Your Skills</h1>
        <p class="mt-3 text-gray-500">Choose a category and test your knowledge 🚀</p>
    </div>

    <!-- Success Message -->
    @if(session('message-success'))
        <div class="mb-6 text-center">
            <p class="text-green-600 font-semibold">{{ session('message-success') }}</p>
        </div>
    @endif

    <!-- Search Bar -->
    <div class="flex justify-center mb-10">
        <div class="relative w-full max-w-lg">
            <input id="searchInput" type="text" placeholder="Search category..."
                class="w-full pl-12 pr-4 py-3 rounded-full border border-gray-300 shadow-sm
                       focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                🔍
            </span>
        </div>
    </div>

    <!-- Categories Card -->
    <section class="bg-white rounded-3xl shadow-xl overflow-hidden">

        <!-- Header -->
        <div class="flex items-center gap-4 px-6 py-5 bg-indigo-600 text-white">
            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">📚</div>
            <h2 class="text-2xl font-bold">All Categories</h2>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full min-w-[640px]">
                <thead class="bg-indigo-100 text-indigo-800">
                    <tr>
                        <th class="px-6 py-3 text-left">#</th>
                        <th class="px-6 py-3 text-left">Category</th>
                        <th class="px-6 py-3 text-left">Quizzes</th>
                        <th class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="categoryTable" class="divide-y">
                    @foreach($categories as $key => $category)
                    <tr class="hover:bg-indigo-50 transition">
                        <td class="px-6 py-4">{{ $key + 1 }}</td>
                        <td class="px-6 py-4 font-semibold">{{ $category->name }}</td>
                        <td class="px-6 py-4">{{ $category->quizzes_count }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="/user-quiz-list/{{ $category->id }}/{{str_replace(' ','-', $category->name )}}"
                               class="inline-block px-5 py-2 rounded-full bg-indigo-500 text-white hover:bg-indigo-600">
                               View
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if(count($categories) === 0)
            <div class="text-center py-16 text-gray-400">No categories found.</div>
        @endif
    </section>

    <!-- Top Quizzes -->
    <section class="mt-14">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">🔥 Top Quizzes</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($quizData as $item)
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ $item->name }}</h3>
                <a href="/start-quiz/{{ $item->id }}/{{str_replace(' ','-' ,$item->name)}}"
                   class="block text-center w-full py-3 rounded-xl bg-green-500 text-white font-semibold hover:bg-green-600">
                    Attempt Quiz
                </a>
            </div>
            @endforeach
        </div>
    </section>

</main>

<!-- Search Script -->
<script>
    const searchInput = document.getElementById('searchInput');
    const rows = document.querySelectorAll('#categoryTable tr');

    searchInput.addEventListener('input', function () {
        const value = this.value.toLowerCase();
        rows.forEach(row => {
            const name = row.children[1].innerText.toLowerCase();
            row.style.display = name.includes(value) ? '' : 'none';
        });
    });
</script>

</body>
</html>
 