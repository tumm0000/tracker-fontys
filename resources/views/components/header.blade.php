<nav class="bg-voodoo border-b border-voodoo/20 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="text-white font-serif italic text-2xl">Logo</a>
            </div>
            
            <!-- Navigation Links -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/resources" class="text-white hover:text-lavender-gray transition-colors">Resources</a>
                <a href="/bookings" class="text-white hover:text-lavender-gray transition-colors">Bookings</a>
                <a href="#about" class="text-white hover:text-lavender-gray transition-colors">About</a>
                <div class="relative group">
                    <button class="text-white hover:text-lavender-gray transition-colors flex items-center gap-1">
                        More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-48 bg-voodoo rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-voodoo/20">
                        <div class="py-2">
                            <a href="/faq" class="block px-4 py-2 text-white hover:text-lavender-gray hover:bg-voodoo/50 transition-colors">FAQ</a>
                            <a href="/contact" class="block px-4 py-2 text-white hover:text-lavender-gray hover:bg-voodoo/50 transition-colors">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Login Button -->
            <div>
                <a href="/login" class="bg-white text-voodoo px-6 py-2 rounded-lg font-medium hover:bg-lavender-gray transition-colors">
                    Login
                </a>
            </div>
        </div>
    </div>
</nav>
