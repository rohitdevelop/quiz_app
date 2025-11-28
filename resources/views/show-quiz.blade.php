<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Categories Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-linear-to-br from-blue-50 via-indigo-50 to-purple-100 min-h-screen">

<x-navbar name={{$name}}></x-navbar>

<div class="flex justify-center px-4 py-10">

    <div class="w-full max-w-6xl">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-3">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-800">
                Quiz:
                <span class="text-indigo-600">{{$quizName}}</span>
            </h2>

            <a href="/add-quiz"
                class="px-5 py-2 rounded-xl bg-indigo-500 text-white font-semibold shadow hover:bg-indigo-600 transition">
                ← Back
            </a>
        </div>


        <!-- List Card -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border">

            <!-- Header Row -->
            <div class="hidden sm:grid grid-cols-12 bg-indigo-500 text-white text-sm font-semibold">
                <div class="col-span-2 p-3 text-center">MCQ ID</div>
                <div class="col-span-10 p-3">Question</div>
            </div>

            <!-- MCQ Rows -->
            @foreach($mcqs as $mcq)
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-y-2 sm:gap-y-0 items-center border-b hover:bg-indigo-50 transition">

                <!-- Mobile -->
                <div class="sm:hidden text-xs text-gray-500 px-4 pt-3">MCQ ID</div>

                <div class="col-span-2 text-center px-4 py-2 font-bold text-gray-700">
                    {{$mcq->id}}
                </div>

                <div class="sm:hidden text-xs text-gray-500 px-4">Question</div>

                <div class="col-span-10 px-4 pb-4 sm:py-2 text-gray-800 leading-relaxed">
                    {{$mcq->question}}
                </div>

            </div>
            @endforeach

        </div>

    </div>

</div>

</body>


</html>