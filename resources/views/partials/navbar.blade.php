<nav class="bg-gradient-to-r from-[#0f172a] to-[#0e7490] shadow-xl border-b border-cyan-400/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            
            <!-- Logo & Links -->
            <div class="flex items-center space-x-8">
                
                <!-- Logo -->
                <a href="/home" class="flex items-center">
                    <svg class="h-8 w-8 text-cyan-300 drop-shadow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <span class="ml-2 text-xl font-bold text-white">Laravel</span>
                </a>

                <!-- Navigation Links -->
                <div class="hidden md:flex space-x-4">
                    @auth
                        <a href="{{ route('home') }}" class="text-gray-200 hover:text-cyan-300 px-3 py-2 rounded-md text-sm font-medium transition">
                            Home
                        </a>
                        <a href="{{ route('about') }}" class="text-gray-200 hover:text-cyan-300 px-3 py-2 rounded-md text-sm font-medium transition">
                            About
                        </a>
                        <a href="{{ route('contact') }}" class="text-gray-200 hover:text-cyan-300 px-3 py-2 rounded-md text-sm font-medium transition">
                            Contact
                        </a>
                        <a href="{{ route('posts.index') }}" class="text-gray-200 hover:text-cyan-300 px-3 py-2 rounded-md text-sm font-medium transition">
                            Posts
                        </a>
                    @else
                        <a href="{{ route('posts.index') }}" class="text-gray-200 hover:text-cyan-300 px-3 py-2 rounded-md text-sm font-medium transition">
                            Posts
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Right Side -->
            <div class="flex items-center space-x-4">
                @auth
                    <!-- User Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false"
                                class="flex items-center space-x-3 focus:outline-none">

                            <!-- Avatar -->
                            <div class="h-10 w-10 rounded-full bg-cyan-500 flex items-center justify-center text-white font-bold ring-2 ring-offset-2 ring-cyan-500 hover:ring-cyan-300 transition">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>

                            <!-- User Info -->
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-medium text-white">{{ auth()->user()->name }}</p>

                                @if(auth()->user()->isAdmin())
                                    <span class="text-xs font-medium text-yellow-300">Admin</span>
                                @else
                                    <span class="text-xs text-gray-300">User</span>
                                @endif
                            </div>

                            <svg class="w-5 h-5 text-gray-200 transition-transform" :class="{'rotate-180': open}"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-56 bg-[#1e293b] rounded-lg shadow-lg border border-cyan-500/20 py-2 z-50"
                             style="display: none;">

                            <a href="{{ route('profile.show') }}"
                               class="flex items-center px-4 py-2 text-sm text-gray-200 hover:bg-cyan-600/20 hover:text-cyan-300 transition">
                                Profile
                            </a>

                            <div class="border-t border-gray-700 my-1"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="flex items-center w-full text-left px-4 py-2 text-sm text-red-400 hover:bg-red-600/20 transition">
                                    Logout
                                </button>
                            </form>

                        </div>
                    </div>

                @else

                    <a href="{{ route('login') }}"
                       class="text-gray-200 hover:text-cyan-300 px-3 py-2 rounded-md text-sm font-medium transition">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="bg-cyan-500 hover:bg-cyan-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition shadow-sm">
                        Register
                    </a>

                @endauth
            </div>

        </div>
    </div>
</nav>
