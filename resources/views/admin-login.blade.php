<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite(['resources/css/app.css'])
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-100">

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">
            Admin Login
        </h2>

        <form action="/admin-login" method="post" class="space-y-5">
           @csrf
            <!-- Admin Name -->
            <div>
                <label for="" class="block mb-1 text-gray-700 font-medium">Admin Name</label>
                <input 
                name="name"
                    type="text" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter admin name"
                >
            </div>

            <!-- Password -->
            <div>
                <label for="" class="block mb-1 text-gray-700 font-medium">Password</label>
                <input 
                name="password"
                    type="password" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter password"
                >
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-200 font-semibold">
                Login
            </button>

        </form>
    </div>

</body>
</html>
