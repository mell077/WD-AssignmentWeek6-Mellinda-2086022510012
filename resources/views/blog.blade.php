<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Portofolio Nama Kamu</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- ================= NAVBAR ================= --}}
    {{-- Boleh diganti dengan navbar readymadeui kamu. Pastikan link: /, /about, /blog, /contact --}}
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
            </ul>
        </div>

        <ul id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-3 font-medium">
            <li><a href="/" class="{{ request()->is('/') ? 'text-indigo-600' : 'text-gray-600' }}">Home</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'text-indigo-600' : 'text-gray-600' }}">About</a></li>
            <li><a href="/blog" class="{{ request()->is('blog') ? 'text-indigo-600' : 'text-gray-600' }}">Blog</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'text-indigo-600' : 'text-gray-600' }}">Contact</a></li>
        </ul>
    </nav>
    <script>
        document.getElementById('menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>


    {{-- HEADER --}} 
    <header class="bg-indigo-600 text-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-3">Blog Saya</h1>
            <p class="text-indigo-100 text-lg">Cerita atau makna di balik foto yang diabadikan.</p>
        </div>
    </header>

    {{-- DAFTARARTIKEL --}} 
    <main class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://pictureurl.com/api/storage/file?key=u%2Fanon%2F25fc9d11-9669-43f0-beb4-ee69a600780f-e5367f42df76a700420320339e0037ef.jpg" alt="Pengalaman Pertama Belajar Laravel" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="text-sm text-gray-500">April 2025</span>
                    <h2 class="text-xl font-semibold mt-1 mb-2">Symphony Worship Makassar</h2>
                    <p class="text-gray-600 mb-4">Dokumentasi suasana ibadah dan momen-momen berkesan yang diabadikan melalui lensa kamera.</p>
                    <a href="#" class="text-indigo-600 font-medium hover:underline">Baca selengkapnya &rarr;</a>
                </div>
            </article>

            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://pictureurl.com/api/storage/file?key=u%2Fanon%2F25fc9d11-9669-43f0-beb4-ee69a600780f-e5367f42df76a700420320339e0037ef.jpg" alt="Cara Install Tailwind CSS di Laravel" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="text-sm text-gray-500">22 Oktober 2025</span>
                    <h2 class="text-xl font-semibold mt-1 mb-2">Makassar for Jesus</h2>
                    <p class="text-gray-600 mb-4">Dokumentasi momen pujian, penyembahan, dan suasana acara melalui fotografi.</p>
                    <a href="#" class="text-indigo-600 font-medium hover:underline">Baca selengkapnya &rarr;</a>
                </div>
            </article>

            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://pictureurl.com/api/storage/file?key=u%2Fanon%2F25fc9d11-9669-43f0-beb4-ee69a600780f-e5367f42df76a700420320339e0037ef.jpg" alt="Apa Itu Flutter dan Dart?" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="text-sm text-gray-500">17 & 24 April 2026</span>
                    <h2 class="text-xl font-semibold mt-1 mb-2">Akumuda Worship Rally</h2>
                    <p class="text-gray-600 mb-4">Mengabadikan berbagai momen selama kegiatan, mulai dari suasana panggung hingga interaksi para jemaat.</p>
                    <a href="#" class="text-indigo-600 font-medium hover:underline">Baca selengkapnya &rarr;</a>
                </div>
            </article>

        </div>
    </main>

    {{--FOOTER--}}
    <footer class="bg-gray-900 text-gray-300 py-6 mt-12">
        <div class="max-w-6xl mx-auto px-6 text-center text-sm">
            &copy; 2026 Holaa foto yokk. All rights reserved.
        </div>
    </footer>

</body>
</html>