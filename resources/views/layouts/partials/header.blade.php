<header class="bg-white shadow-md fixed top-0 w-full z-99">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-2">

            <!-- Logo -->
            <div>
                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="Digipal Solutions Logo"
                        class="h-12"></a>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">Portfolio</a>
                <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-500 font-medium">Services</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-500 font-medium">About</a>
                <a href="{{ route('blog') }}" class="text-gray-700 hover:text-blue-500 font-medium">Blogs</a>
                <a href="{{ route('contact') }}"
                    class="ml-4 inline-block px-5 py-2 bg-gradient-to-r from-blue-500 to-green-400 text-white rounded-md shadow hover:scale-103 transition duration-300 text-base font-medium">
                    Let's Talk
                </a>
            </nav>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button class="text-gray-700 focus:outline-none">
                    <!-- Hamburger icon -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
</header>
