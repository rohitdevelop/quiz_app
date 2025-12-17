<nav class="bg-blue-600 shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3">

        <div class="flex justify-between items-center">

            <!-- Logo -->
            <div class="text-2xl font-extrabold tracking-wide text-white">
                Quiz System
            </div>

            <!-- Links -->
            <div class="hidden md:flex items-center space-x-4">

                <a href="/" class="text-white px-4 py-2 rounded-md transition-all duration-300 
               hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-900">
                    Home
                </a>

                <a href="/categories-list" class="text-white px-4 py-2 rounded-md transition-all duration-300 
               hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-900">
                    Categories
                </a>
                <a href="admin-logout" class="text-white px-4 py-2 rounded-md transition-all duration-300 
               hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-900">
                    Blog
                </a>
                @if(session('user'))
                <a href="/user-details" class="text-blue-100 cursor-pointer font-semibold px-3">
                    Welcome, {{session('user')->name}}
</a>

                <a href="user-logout" class="bg-red-500 text-white px-4 py-2 rounded-md 
               hover:bg-red-600 transition-all duration-300 hover:shadow-lg">
                    Logout
                </a>

                @else

                <a href="/user-login" class="bg-white text-blue-600 px-4 py-2 rounded-md 
               hover:bg-blue-100 transition-all duration-300 hover:shadow-lg">
                    Login
                </a>

                <a href="/user-signup" class="bg-white text-blue-600 px-4 py-2 rounded-md 
               hover:bg-blue-100 transition-all duration-300 hover:shadow-lg">
                    Signup
                </a>

                @endif



            </div>

            <!-- Mobile Button -->
            <div class="md:hidden">
                <button class="text-white text-2xl">☰</button>
            </div>

        </div>

    </div>
</nav>