<header class="topbar sticky top-0 z-60 w-full bg-white border-b border-gray-100 shadow-sm transition-all duration-200">
  <div class="px-6 py-3 flex items-center justify-between min-h-[70px]">
    
    <div id="leftNavbar" class="flex items-center justify-between w-64 px-4">
      
      <div id="headerLogo" class="flex items-center transition-all duration-300 transform origin-left">
        <a href="#" class="block truncate">
          <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="Logo" class="h-8" />
        </a>
      </div>

      <button id="sidebarToggleBtn" class="nav-link flex items-center justify-center p-2 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-300 origin-left" aria-label="Toggle Navigation Sidebar">
        <svg class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>

    </div>

    <div class="flex items-center gap-2 md:gap-4">
      <ul class="flex items-center gap-1 md:gap-3 m-0 p-0 list-none flex-row">
        
        <li class="inline-block relative">
          <a class="nav-link flex items-center justify-center p-2 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-full transition-colors dark-layout" href="javascript:void(0)">
            <svg class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
          </a>
          <a class="nav-link hidden items-center justify-center p-2 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-full transition-colors light-layout" href="javascript:void(0)">
            <svg class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m0 13.5V21M4.22 4.22l1.59 1.59m12.38 12.38l1.59 1.59M3 12h2.25m13.5 0H21M5.81 18.19l-1.59 1.59m14.38-14.38l-1.59 1.59M12 7.5a4.5 4.5 0 110 9 4.5 4.5 0 010-9z" />
            </svg>
          </a>
        </li>

        <li class="inline-block relative group">
          <a class="nav-link flex items-center justify-center p-2 hover:bg-gray-50 rounded-full transition-colors" href="javascript:void(0)" id="drop2">
            <img src="{{ asset('assets/images/svgs/icon-flag-en.svg') }}" alt="English" class="w-5 h-5 rounded-full object-cover" />
          </a>
          <div class="hidden group-focus-within:block group-hover:block absolute right-0 mt-2 w-48 bg-white border border-gray-100 rounded-xl shadow-xl z-50 py-2">
            <a href="javascript:void(0)" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
              <img src="{{ asset('assets/images/svgs/icon-flag-en.svg') }}" alt="English" class="w-5 h-5 rounded-full object-cover" />
              <span>English (UK)</span>
            </a>
            <a href="javascript:void(0)" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
              <img src="{{ asset('assets/images/svgs/icon-flag-fr.svg') }}" alt="French" class="w-5 h-5 rounded-full object-cover" />
              <span>Français</span>
            </a>
          </div>
        </li>

        <li class="inline-block relative group">
          <a class="nav-link flex items-center justify-center p-2 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-full transition-colors relative" href="javascript:void(0)" id="drop1">
            <svg class="w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-blue-600 rounded-full"></span>
          </a>
        </li>

        <li class="inline-block relative group">
          <a class="nav-link flex items-center justify-center p-1 hover:ring-2 hover:ring-blue-100 rounded-full transition-all" href="javascript:void(0)" id="drop3">
            <div class="w-9 h-9 overflow-hidden rounded-full border border-gray-200 bg-gray-50">
              <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="User Avatar" class="w-full h-full object-cover" />
            </div>
          </a>
          <div class="hidden group-focus-within:block group-hover:block absolute right-0 mt-2 w-80 bg-white border border-gray-100 rounded-2xl shadow-xl z-50 p-6">
            <div class="flex items-center gap-4 pb-4 border-b border-gray-100">
              <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="Profile" class="w-12 h-12 rounded-full object-cover" />
              <div>
                <h5 class="text-gray-900 font-semibold text-base mb-0.5">Mathew Anderson</h5>
                <p class="text-gray-400 text-xs mb-0">Designer</p>
              </div>
            </div>
            <div class="py-3 flex flex-col gap-1">
              <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-xl text-sm text-gray-600 hover:bg-gray-50 transition-colors">
                <svg class="w-5 h-5 text-gray-400 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
                <span>My Profile</span>
              </a>
            </div>
            <div class="pt-2">
              <a href="./main/authentication-login.html" class="block w-full text-center px-4 py-2.5 text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 rounded-xl transition-colors">
                Log Out
              </a>
            </div>
          </div>
        </li>

      </ul>
    </div>
    
  </div>
</header>