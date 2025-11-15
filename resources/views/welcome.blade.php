<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo App</title>
  @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
  <div class="w-full max-w-2xl">
    <div class="bg-white shadow-xl rounded-xl p-6">
      <h1 class="text-2xl font-bold text-gray-800 mb-4">Todo App</h1>

      <form action="/todos" method="POST" class="flex gap-3 mb-6">
        @csrf
        <input type="text" name="title" required placeholder="Add new task"
               class="flex-1 rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"/>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Add</button>
      </form>

      <ul class="space-y-3">
        @foreach($todos as $todo)
          <li class="flex items-center justify-between bg-gray-50 p-3 rounded-lg border border-gray-200">
            <form action="/todos/{{ $todo->id }}/toggle" method="POST" class="flex items-center gap-3">
              @csrf
              @method('PATCH')
              <button type="submit" class="w-6 h-6 rounded-full border @if($todo->completed) bg-blue-500 text-white @endif flex items-center justify-center">
                @if($todo->completed) ✓ @endif
              </button>
              <span class="@if($todo->completed) line-through text-gray-400 @endif">{{ $todo->title }}</span>
            </form>

            <form action="/todos/{{ $todo->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-600 hover:underline">Delete</button>
            </form>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</body>
</html>
