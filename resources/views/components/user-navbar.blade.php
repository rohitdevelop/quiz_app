<nav class="bg-linear-to-r from-blue-600 via-blue-700 to-blue-800 shadow-xl sticky top-0 z-50 backdrop-blur-sm bg-opacity-95">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">

        <div class="flex justify-between items-center">

            <!-- Logo with Icon -->
            <div class="flex items-center space-x-3 group cursor-pointer">
                <span class="text-2xl font-bold tracking-tight text-white drop-shadow-lg">
                    Quiz<span class="text-blue-200">System</span>
                </span>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center space-x-2">

                 <a href="/" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-white hover:bg-blue-500/20  transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span>Home</span>
            </a>

            <a href="/categories-list" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-white hover:bg-blue-500/20 transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
                <span>Categories</span>
            </a>

            <a href="/blog" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-white hover:bg-blue-500/20 transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                <span>Blog</span>
            </a>

                @if(session('user'))
                
                <!-- User Profile Section -->
                <div class="flex items-center space-x-3 ml-4 pl-4 border-l border-white border-opacity-30">
                    
                    <!-- User Avatar & Name -->
                    <a href="/user-details" class="flex items-center space-x-2 text-black bg-white bg-opacity-10 
                       px-4 py-1.5 rounded-lg hover:bg-opacity-20 transition-all duration-300 hover:shadow- group">
                        <div class="w-8 h-8 bg-blue-300 rounded-full flex items-center justify-center text-blue-900 font-bold text-sm">
                            {{ strtoupper(substr(session('user')->name, 0, 1)) }}
                        </div>
                        <span class="font-medium">{{session('user')->name}}</span>
                        <svg class="w-4 h-4 opacity-70 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>

                    <!-- Logout Button -->
                    <a href="user-logout" class="bg-red-500 text-white font-medium px-5 py-2.5 rounded-lg 
                       hover:bg-red-600 transition-all duration-300 hover:shadow-xl 
                       hover:scale-105 active:scale-95 flex items-center space-x-2">
                        <span>Logout</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                    </a>
                </div>

                @else

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-2 ml-4 pl-4 border-l border-white border-opacity-30">
                    <a href="/user-login" class="bg-white text-blue-700 font-semibold px-5 py-2.5 rounded-lg 
                       hover:bg-blue-50 transition-all duration-300  hover:scale-105 active:scale-95
                       flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        <span>Login</span>
                    </a>

                    <a href="/user-signup" class="bg-linear-to-r from-green-400 to-green-500 text-white font-semibold px-5 py-2.5 rounded-lg 
                       hover:from-green-500 hover:to-green-600 transition-all duration-300 
                       hover:shadow-green-500/50 hover:scale-105 active:scale-95 flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                        </svg>
                        <span>Sign Up</span>
                    </a>
                </div>

                @endif

            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button onclick="toggleMobileMenu()" class="text-white text-3xl p-2 hover:bg-white hover:bg-opacity-20 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-white" aria-label="Menu">
                    <svg id="menu-open-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="menu-close-icon" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-white border-opacity-20">
        <div class="px-4 pt-4 pb-3 space-y-2 bg-linear-to-b from-blue-700/50 to-blue-800/50 backdrop-blur-lg">
            
            @if(session('user'))
            <!-- Mobile User Profile -->
            <div class="flex items-center space-x-3 px-3 py-3 mb-3 bg-white bg-opacity-10 rounded-lg border border-white border-opacity-20">
                <div class="w-10 h-10 bg-blue-300 rounded-full flex items-center justify-center text-blue-900 font-bold shadow-lg">
                    {{ strtoupper(substr(session('user')->name, 0, 1)) }}
                </div>
                <div class="flex flex-col">
                    <span class="text-white text-sm font-semibold">{{session('user')->name}}</span>
                    <span class="text-blue-200 text-xs">Member</span>
                </div>
            </div>
            @endif

            <!-- Mobile Navigation Links -->
            <a href="/" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span>Home</span>
            </a>

            <a href="/categories-list" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
                <span>Categories</span>
            </a>

            <a href="/blog" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                <span>Blog</span>
            </a>

            @if(session('user'))
            <!-- Mobile User Details Link -->
            <a href="/user-details" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-base font-medium text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <span>My Profile</span>
            </a>

            <!-- Mobile Logout Button -->
            <a href="user-logout" class="flex items-center justify-center space-x-2 mt-4 px-4 py-3 rounded-lg text-base font-semibold bg-red-500 text-white hover:bg-red-600 transition-all duration-300 shadow-lg hover:shadow-red-500/50 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>Logout</span>
            </a>

            @else

            <!-- Mobile Auth Buttons -->
            <div class="space-y-2 mt-4">
                <a href="/user-login" class="flex items-center justify-center space-x-2 px-4 py-3 rounded-lg text-base font-semibold bg-white text-blue-700 hover:bg-blue-50 transition-all duration-300 shadow-lg active:scale-95">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    <span>Login</span>
                </a>

                <a href="/user-signup" class="flex items-center justify-center space-x-2 px-4 py-3 rounded-lg text-base font-semibold bg-linear-to-r from-green-400 to-green-500 text-white hover:from-green-500 hover:to-green-600 transition-all duration-300 shadow-lg hover:shadow-green-500/50 active:scale-95">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                    <span>Sign Up</span>
                </a>
            </div>

            @endif
        </div>
    </div>
</nav>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const openIcon = document.getElementById('menu-open-icon');
        const closeIcon = document.getElementById('menu-close-icon');
        
        // Toggle menu visibility
        menu.classList.toggle('hidden');
        
        // Toggle icons
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('mobile-menu');
        const menuButton = event.target.closest('button[onclick="toggleMobileMenu()"]');
        const mobileMenu = event.target.closest('#mobile-menu');
        
        if (!menuButton && !mobileMenu && !menu.classList.contains('hidden')) {
            toggleMobileMenu();
        }
    });
    
    // Close mobile menu on window resize to desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) {
            const menu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('menu-open-icon');
            const closeIcon = document.getElementById('menu-close-icon');
            
            if (!menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        }
    });
</script>