<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Quiz Page</title>
    @vite(['resources/css/app.css'])
    <!-- Heroicons CDN -->
    <script src="https://cdn.jsdelivr.net/npm/heroicons@2.0.18/24/outline/index.js"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <x-navbar name={{$name}}></x-navbar>
    <div class="flex min-h-screen justify-center w-full items-baseline ">
        <div class="lg:col-span-1 ">
            <div class="bg-white mt-2 w-3xl text-center rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 p-6">
                @if(!session('quizeDetails'))
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800">Add Quiz</h2>
                </div>

                <form action="/add-quiz" method="get" class="space-y-4">
                    <div>
                        <input
                            name="quiz"
                            type="text"

                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200"
                            placeholder="Enter Quiz">
                    </div>
                    <!-- @error('category')
                        <div class="text-red-600">{{$message}}</div>
                        @enderror -->

                    <select name="category_id" type='text' class=" w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200">
                        @foreach($categories as $category)
                        <option value={{$category->id}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    <button
                        type="submit"
                        class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition duration-200 font-semibold shadow-md hover:shadow-lg flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Quiz
                    </button>
                </form>
                @else

             <div class="bg-white p-6 rounded-2xl shadow-md max-w-2xl mx-auto mt-6 space-y-5">

    <h2 class="text-2xl font-bold text-gray-800">
        Add MCQ for Quiz: <span class="text-indigo-600">{{ session('quizeDetails')->name }}</span>
    </h2>

    <!-- Question -->
    <div>
        <label class="text-gray-700 font-medium">Enter Question</label>
        <textarea
            name="question"
            class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                   focus:ring-indigo-500 transition duration-200"
            placeholder="Enter quiz question..."></textarea>
    </div>

    <!-- Options -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

        <div>
            <label class="text-gray-700 font-medium">Option A</label>
            <input
                name="option_a"
                type="text"
                class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                       focus:ring-indigo-500 transition duration-200"
                placeholder="Enter option A">
        </div>

        <div>
            <label class="text-gray-700 font-medium">Option B</label>
            <input
                name="option_b"
                type="text"
                class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                       focus:ring-indigo-500 transition duration-200"
                placeholder="Enter option B">
        </div>

        <div>
            <label class="text-gray-700 font-medium">Option C</label>
            <input
                name="option_c"
                type="text"
                class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                       focus:ring-indigo-500 transition duration-200"
                placeholder="Enter option C">
        </div>

        <div>
            <label class="text-gray-700 font-medium">Option D</label>
            <input
                name="option_d"
                type="text"
                class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                       focus:ring-indigo-500 transition duration-200"
                placeholder="Enter option D">
        </div>

    </div>

    <!-- Correct Answer -->
    <div>
        <label class="text-gray-700 font-medium block mb-2">Correct Answer</label>
        <select
            name="correct_option"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 transition">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
    </div>

    <!-- Submit Button -->
    <button
        type="submit"
        class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 
               transition shadow-md">
        Add Question
    </button>
    <button
        type="submit"
        class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 
               transition shadow-md">
        Add More
    </button>

</div>

                @endif
            </div>
        </div>
    </div>
</body>

</html>