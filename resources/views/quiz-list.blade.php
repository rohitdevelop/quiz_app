<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Categories Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-linear-to-br from-indigo-50 via-blue-50 to-purple-100 min-h-screen">

<x-navbar name={{$name}}></x-navbar>

<div class="flex justify-center px-4 py-10">

    <div class="w-full max-w-5xl">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-3">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-800">
                Category:
                <span class="text-indigo-600">{{$category}}</span>
            </h2>
            <a href="/add-quiz"
                class="px-5 py-2 rounded-xl bg-indigo-500 text-white font-semibold shadow hover:bg-indigo-600 transition">
                ← Back
            </a>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border">

            <!-- Table Header -->
            <div class="hidden sm:grid grid-cols-12 bg-indigo-500 text-white font-semibold text-sm">
                <div class="col-span-2 p-3 text-center">Quiz ID</div>
                <div class="col-span-8 p-3">Quiz Name</div>
                <div class="col-span-2 p-3 text-center">Action</div>
            </div>

            <!-- Rows -->
            @foreach($quizData as $item)
            <div
                class="grid grid-cols-1 sm:grid-cols-12 gap-y-3 sm:gap-y-0 items-center border-b hover:bg-indigo-50 transition">

                <!-- Mobile Labels -->
                <div class="sm:hidden px-4 pt-4 text-xs font-bold text-gray-500">Quiz ID</div>

                <div class="col-span-2 px-4 py-2 text-center font-bold text-gray-700">
                    {{$item->id}}
                </div>

                <div class="sm:hidden px-4 text-xs font-bold text-gray-500">Name</div>

                <div class="col-span-8 px-4 py-2 text-gray-800 font-medium">
                    {{$item->name}}
                </div>

                <div class="sm:hidden px-4 text-xs font-bold text-gray-500">Action</div>

                <div class="col-span-2 px-4 py-2 flex justify-center">
                    <a href="/show-quiz/{{$item->id}}/{{$item->name}}"
                        class="p-2 rounded-lg bg-indigo-100 hover:bg-indigo-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 -960 960 960" fill="currentColor" class="text-indigo-700">
                            <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
                        </svg>
                    </a>
                </div>

            </div>
            @endforeach

        </div>

    </div>
</div>

</body>


</html>