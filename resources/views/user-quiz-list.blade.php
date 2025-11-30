<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>user Categories Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-linear-to-br from-indigo-50 via-blue-50 to-purple-100 min-h-screen">

<x-user-navbar></x-user-navbar>

<div class="flex justify-center px-4 py-10">

    <div class="w-full max-w-5xl">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-3">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-800">
                Category:
                <span class="text-indigo-600">{{$category}}</span>
            </h2>
       
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
                    <a href=""
                        class="p-2 rounded-lg bg-green-200 hover:bg-green-300 transition">
                       Attemp Quize
                    </a>
                </div>

            </div>
            @endforeach

        </div>

    </div>
</div>

</body>


</html>