<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Categories Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-indigo-50 via-blue-50 to-purple-100 min-h-screen">

<x-user-navbar />

<div class="flex justify-center px-4 py-10">
    <div class="w-full max-w-6xl">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-3">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-800">
                Category:
                <span class="text-indigo-600">{{ $category }}</span>
            </h2>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border">

            <!-- Table Header -->
            <div class="hidden sm:grid grid-cols-12 bg-indigo-500 text-white font-semibold text-sm">
                <div class="col-span-2 p-3 text-center">Quiz ID</div>
                <div class="col-span-6 p-3">Quiz Name</div>
                <div class="col-span-2 p-3 text-center">MCQ Count</div>
                <div class="col-span-2 p-3 text-center">Action</div>
            </div>

            <!-- Rows -->
            @foreach($quizData as $item)
            <div
                class="grid grid-cols-1 sm:grid-cols-12 items-center border-b hover:bg-indigo-50 transition">

                <!-- Quiz ID -->
                <div class="sm:hidden px-4 pt-4 text-xs font-bold text-gray-500">Quiz ID</div>
                <div class="col-span-2 px-4 py-3 text-center font-semibold text-gray-700">
                    {{ $item->id }}
                </div>

                <!-- Quiz Name -->
                <div class="sm:hidden px-4 text-xs font-bold text-gray-500">Quiz Name</div>
                <div class="col-span-6 px-4 py-3 text-gray-800 font-medium">
                    {{ $item->name }}
                </div>

                <!-- MCQ Count -->
                <div class="sm:hidden px-4 text-xs font-bold text-gray-500">MCQ Count</div>
                <div class="col-span-2 px-4 py-3 text-center text-gray-700 font-semibold">
                    {{ $item->mcq_count }}
                </div>

                <!-- Action -->
                <div class="sm:hidden px-4 text-xs font-bold text-gray-500">Action</div>
                <div class="col-span-2 px-4 py-3 flex justify-center">
                    <a href="/start-quiz/{{ $item->id }}/{{ $item->name }}"
                        class="px-4 py-2 rounded-xl bg-green-500 text-white font-semibold hover:bg-green-600 transition">
                        Attempt Quiz
                    </a>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>

</body>
</html>
