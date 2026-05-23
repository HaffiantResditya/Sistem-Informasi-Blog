<nav class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="text-2xl font-bold tracking-tight">Haffiant Blog</div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                    class="text-sm font-medium {{ request()->routeIs('home') ? 'text-blue-600' : 'hover:text-blue-600 transition' }}">Beranda</a>
                <a href="{{ route('articles') }}"
                    class="text-sm font-medium {{ request()->routeIs('articles') ? 'text-blue-600' : 'hover:text-blue-600 transition' }}">Artikel</a>
                <a href="{{ route('categories') }}"
                    class="text-sm font-medium {{ request()->routeIs('categories') ? 'text-blue-600' : 'hover:text-blue-600 transition' }}">Kategori</a>
                <a href="{{ route('about') }}"
                    class="text-sm font-medium {{ request()->routeIs('about') ? 'text-blue-600' : 'hover:text-blue-600 transition' }}">Tentang</a>
                <button
                    class="bg-black text-white px-6 py-2 text-sm font-medium hover:bg-gray-800 transition">Subscribe</button>
            </div>
            <button class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</nav>
