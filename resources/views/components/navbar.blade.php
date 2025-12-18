<nav class="bg-linear-to-r from-indigo-900 via-indigo-800 to-purple-900 shadow-2xl sticky top-0 z-50 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo with Admin Badge -->
            <div class="flex items-center space-x-3 group cursor-pointer">
                <div class="bg-linear-to-br from-yellow-400 to-orange-500 p-2 rounded-xl shadow-lg group-hover:shadow-yellow-500/50 transition-all duration-300 group-hover:scale-110">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-white font-bold text-xl leading-tight">Quiz System</span>
                    <span class="text-yellow-300 text-xs font-semibold tracking-wider">ADMIN PANEL</span>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-2">
                
                <!-- Navigation Links -->
                <a href="/dashboard" class="group relative text-gray-200 hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span>Dashboard</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 group-hover:w-full transition-all duration-300"></div>
                </a>

                <a href="/admin-categories" class="group relative text-gray-200 hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                    <span>Categories</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 group-hover:w-full transition-all duration-300"></div>
                </a>

                <a href="/add-quiz" class="group relative text-gray-200 hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Quiz</span>
                    <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 group-hover:w-full transition-all duration-300"></div>
                </a>

                <!-- Divider -->
                <div class="h-8 w-px bg-white/20 mx-2"></div>

                <!-- Admin Profile -->
                <div class="flex items-center space-x-2 bg-white/10 px-4 py-2 rounded-lg border border-white/20">
                    <div class="w-8 h-8 bg-linear-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
                        {{ strtoupper(substr($name, 0, 1)) }}
                    </div>
                    <div class="flex flex-col">
                        <span class="text-white text-xs font-medium leading-tight">{{$name}}</span>
                        <span class="text-yellow-300 text-xs font-semibold">Admin</span>
                    </div>
                </div>

                <!-- Logout Button -->
                <a href="/admin-logout" class="bg-linear-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-lg text-sm font-semibold shadow-lg hover:from-red-600 hover:to-red-700 transition-all duration-300 hover:shadow-red-500/50 hover:scale-105 active:scale-95 flex items-center space-x-2">
                    <span>Logout</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex md:hidden">
                <button type="button" 
                    class="p-2 rounded-lg text-gray-300 hover:text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition-all duration-300"
                    aria-controls="mobile-menu" 
                    aria-expanded="false" 
                    onclick="toggleMenu()">
                    <svg id="menu-icon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden border-t border-white/10" id="mobile-menu">
        <div class="px-4 pt-4 pb-3 space-y-2 bg-linear-to-b from-indigo-900/50 to-purple-900/50 backdrop-blur-lg">
            
            <!-- Mobile Admin Profile -->
            <div class="flex items-center space-x-3 px-3 py-3 mb-3 bg-white/10 rounded-lg border border-white/20">
                <div class="w-10 h-10 bg-linear-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                    {{ strtoupper(substr($name, 0, 1)) }}
                </div>
                <div class="flex flex-col">
                    <span class="text-white text-sm font-semibold">{{$name}}</span>
                    <span class="text-yellow-300 text-xs font-semibold">Administrator</span>
                </div>
            </div>

            <!-- Mobile Navigation Links -->
            <a href="/dashboard" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-gray-200 hover:bg-white/10 hover:text-white transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span>Dashboard</span>
            </a>

            <a href="/admin-categories" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-gray-200 hover:bg-white/10 hover:text-white transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
                <span>Categories</span>
            </a>

            <a href="/add-quiz" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-gray-200 hover:bg-white/10 hover:text-white transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span>Quiz</span>
            </a>

            <!-- Mobile Logout Button -->
            <a href="/admin-logout" class="flex items-center justify-center space-x-2 mt-4 px-4 py-3 rounded-lg text-base font-semibold bg-linear-to-r from-red-500 to-red-600 text-white hover:from-red-600 hover:to-red-700 transition-all duration-300 shadow-lg hover:shadow-red-500/50 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>Logout</span>
            </a>
        </div>
    </div>
</nav>

<script>
    function toggleMenu() {
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        menu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
</script>