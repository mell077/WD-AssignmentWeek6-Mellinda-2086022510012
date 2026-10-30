<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="/" class="text-xl font-bold text-indigo-600">Portofolio</a>

        <button id="menu-btn" class="md:hidden p-2 text-gray-700" aria-label="Buka menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <ul class="hidden md:flex gap-8 font-medium">
            <li><a href="/" class="{{ request()->is('/') ? 'text-indigo-600' : 'text-gray-600 hover:text-indigo-600' }}">Home</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'text-indigo-600' : 'text-gray-600 hover:text-indigo-600' }}">About</a></li>
            <li><a href="/blog" class="{{ request()->is('blog') ? 'text-indigo-600' : 'text-gray-600 hover:text-indigo-600' }}">Blog</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'text-indigo-600' : 'text-gray-600 hover:text-indigo-600' }}">Contact</a></li>
            <li><a href="/admin/login" class="{{ request()->is('admin*') ? 'text-indigo-600' : 'text-gray-600 hover:text-indigo-600' }}">Admin</a></li>
        </ul>
    </div>

    <ul id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-3 font-medium">
        <li><a href="/" class="text-gray-600">Home</a></li>
        <li><a href="/about" class="text-gray-600">About</a></li>
        <li><a href="/blog" class="text-gray-600">Blog</a></li>
        <li><a href="/contact" class="text-gray-600">Contact</a></li>
        <li><a href="/admin/login" class="text-gray-600">Admin</a></li>
    </ul>
</nav>

<script>
    document.getElementById('menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>