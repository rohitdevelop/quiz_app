<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Quiz Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-linear-to-br from-blue-50 to-indigo-100 min-h-screen">

<x-navbar name={{$name}}></x-navbar>

<div class="flex justify-center px-4 py-10">
    <div class="w-full max-w-lg">

        <div class="bg-white/90 backdrop-blur-lg shadow-2xl rounded-3xl p-6 sm:p-8 border">

            @if(!session('quizDetails'))

            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6 tracking-wide">
                Create New Quiz
            </h2>

            <form action="/add-quiz" method="get" class="space-y-5">

                <div>
                    <label class="text-sm font-semibold text-gray-600">Quiz Name</label>
                    <input type="text" placeholder="Enter Quiz name" required name="quiz"
                        class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-600">Category</label>
                    <select name="category_id"
                        class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none transition">
                        @foreach($categories as $category)
                        <option value={{$category->id}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit"
                    class="w-full py-3 rounded-xl bg-linear-to-r from-blue-500 to-indigo-600 text-white font-bold tracking-wide hover:scale-105 transition-transform duration-300 shadow-md">
                    Create Quiz
                </button>

            </form>

            @else

            <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-5">
                <p class="text-green-700 font-bold text-lg">
                    Quiz : {{session('quizDetails')->name}}
                </p>
                <p class="text-green-600 text-sm mt-1">
                    Total MCQs : {{$totalMCQs}}

                    @if($totalMCQs>0)
                    <a class="ml-2 text-yellow-600 font-semibold underline hover:text-yellow-700"
                        href="show-quiz/{{session('quizDetails')->id}}/{{session('quizDetails')->name}}">
                        View MCQs →
                    </a>
                    @endif

                </p>
            </div>

            <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">
                Add MCQs
            </h2>

            <form action="add-mcq" method="post" class="space-y-5">
                @csrf

                <div>
                    <label class="text-sm font-semibold text-gray-600">Question</label>
                    <textarea placeholder="Enter your question" name="question"
                        class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition"></textarea>
                    @error('question')
                    <div class="text-red-500 text-sm mt-1">{{$message}}</div>
                    @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <div>
                        <input type="text" placeholder="Option A" name="a"
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-300 focus:outline-none">
                        @error('a')<div class="text-red-500 text-sm">{{$message}}</div>@enderror
                    </div>

                    <div>
                        <input type="text" placeholder="Option B" name="b"
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-300 focus:outline-none">
                        @error('b')<div class="text-red-500 text-sm">{{$message}}</div>@enderror
                    </div>

                    <div>
                        <input type="text" placeholder="Option C" name="c"
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-300 focus:outline-none">
                        @error('c')<div class="text-red-500 text-sm">{{$message}}</div>@enderror
                    </div>

                    <div>
                        <input type="text" placeholder="Option D" name="d"
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-300 focus:outline-none">
                        @error('d')<div class="text-red-500 text-sm">{{$message}}</div>@enderror
                    </div>

                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-600">Correct Answer</label>
                    <select name="correct_ans"
                        class="w-full mt-1 px-4 py-3 border rounded-xl focus:ring-2 focus:ring-green-400 focus:outline-none transition">
                        <option value="">Select Right Answer</option>
                        <option value="a">Option A</option>
                        <option value="b">Option B</option>
                        <option value="c">Option C</option>
                        <option value="d">Option D</option>
                    </select>
                    @error('correct_ans')
                    <div class="text-red-500 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-3">

                    <button type="submit" name="submit" value="add-more"
                        class="w-full py-3 rounded-xl bg-blue-500 hover:bg-blue-600 text-white font-bold shadow transition">
                        Add More
                    </button>

                    <button type="submit" name="submit" value="done"
                        class="w-full py-3 rounded-xl bg-green-500 hover:bg-green-600 text-white font-bold shadow transition">
                        Add & Finish
                    </button>

                </div>

                <a href="/end-quiz"
                    class="block text-center mt-4 py-3 rounded-xl bg-red-500 hover:bg-red-600 text-white font-bold transition">
                    Finish Quiz
                </a>

            </form>

            @endif

        </div>

    </div>
</div>

</body>


</html>