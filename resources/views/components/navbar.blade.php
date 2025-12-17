  <nav class="bg-indigo-900 shadow-lg sticky top-0 z-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between items-center h-16">

              <!-- Logo -->
              <div class="text-white font-bold text-2xl">
                  Quiz System
              </div>

              <!-- Desktop Menu -->
              <div class="hidden md:flex items-center space-x-4">
                  <a href="/admin-categories" class="text-gray-300 hover:bg-indigo-700 hover:text-white px-3 py-2 rounded-lg text-sm font-medium">
                      Categories
                  </a>
                  <a href="/add-quiz" class="text-gray-300 hover:bg-indigo-700 hover:text-white px-3 py-2 rounded-lg text-sm font-medium">
                      Quiz
                  </a>
                  <a href="/dashboard" class="text-gray-300 hover:bg-indigo-700 hover:text-white px-3 py-2 rounded-lg text-sm font-medium">
                      Dashboard
                  </a>
                  <span class="text-indigo-200 text-sm font-medium px-3 py-2 rounded-lg cursor-pointer">
                      Welcome {{$name}}
                  </span>
                  <a href="/admin-logout" class="bg-white text-indigo-900 hover:bg-gray-200 px-3 py-1.5 rounded-lg text-sm font-semibold shadow-md">
                      Logout
                  </a>
              </div>

              <!-- Mobile Menu Button -->
              <div class="flex md:hidden">
                  <button type="button" class="p-2 rounded-md text-gray-400 hover:text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-white"
                      aria-controls="mobile-menu" aria-expanded="false" onclick="toggleMenu()">
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                      </svg>
                  </button>
              </div>
          </div>
      </div>

      <!-- Mobile Menu -->
      <div class="hidden md:hidden px-2 pt-2 pb-3 space-y-1" id="mobile-menu">
          <a href="/admin-categories" class="block px-3 py-2 rounded-lg text-base font-medium text-gray-300 hover:bg-indigo-700 hover:text-white">
              Categories
          </a>
          <a href="/quiz" class="block px-3 py-2 rounded-lg text-base font-medium text-gray-300 hover:bg-indigo-700 hover:text-white">
              Quiz
          </a>
          <a href="#" class="block px-3 py-2 rounded-lg text-base font-medium bg-indigo-700 text-white">
              Logout
          </a>
      </div>
  </nav>

  <script>
      function toggleMenu() {
          const menu = document.getElementById('mobile-menu');
          menu.classList.toggle('hidden');
      }
  </script>