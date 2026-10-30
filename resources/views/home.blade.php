<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Portofolio Nama Kamu</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

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

    {{--HERO--}}
    <header class="bg-indigo-600 text-white">
        <div class="max-w-6xl mx-auto px-6 py-20 flex flex-col-reverse md:flex-row items-center gap-10">
            <div class="md:w-1/2 text-center md:text-left">
                <p class="text-indigo-200 mb-2">Halo, saya</p>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Mellinda</h1>
                <p class="text-lg text-indigo-100 mb-8">
                    Seorang fotografer yang suka mengabadikan momen dan melihat cerita di balik setiap foto.
                </p>
                <div class="flex gap-4 justify-center md:justify-start">
                    <a href="/blog" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-lg hover:bg-indigo-50 transition">Lihat Blog</a>
                    <a href="/contact" class="border border-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">Hubungi Saya</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://pictureurl.com/api/storage/file?key=u%2Fanon%2Ff2e53063-834d-4e36-b60c-064fa09c8973-image.png" alt="Foto profil"
                     class="w-56 h-56 md:w-72 md:h-72 rounded-full object-cover border-4 border-white shadow-xl">
            </div>
        </div>
    </header>

    {{--SKILL--}}
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center mb-2">Yang Saya Pelajari</h2>
        <p class="text-center text-gray-500 mb-10">Beberapa bidang fotografi yang sedang dipelajari.</p>

        <div class="grid gap-6 md:grid-cols-3">
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition">
                <div class="text-4xl mb-3">📸</div>
                <h3 class="text-xl font-semibold mb-2">Photography</h3>
                <p class="text-gray-600">Mengabadikan momen melalui foto.</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition">
                <div class="text-4xl mb-3">💡</div>
                <h3 class="text-xl font-semibold mb-2">Composition & Lighting</h3>
                <p class="text-gray-600">Memahami komposisi dan pencahayaan dalam fotografi.</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition">
                <div class="text-4xl mb-3">🎨</div>
                <h3 class="text-xl font-semibold mb-2">Canva</h3>
                <p class="text-gray-600">Membuat desain kreatif menggunakan Canva.</p>
            </div>
        </div>
    </section>

    {{--PROYEK--}}
    <section class="max-w-6xl mx-auto px-6 pb-8">
        <h2 class="text-3xl font-bold text-center mb-2">Proyek Saya</h2>
        <p class="text-center text-gray-500 mb-10">Beberapa proyek fotografi yang pernah dikerjakan.</p>

        <div class="grid gap-6 md:grid-cols-3">
            <article class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://pictureurl.com/api/storage/file?key=u%2Fanon%2F1f839883-5b7c-426e-8f2d-062c28ff6c02-5ccccd97c9ef939f87852b30c29545fa.jpg" alt="Proyek 1" class="w-full h-40 object-cover">
                <div class="p-5">
                    <h3 class="font-semibold text-lg mb-1">Church Photography</h3>
                    <p class="text-gray-600 text-sm">Mendokumentasikan momen ibadah dan kegiatan gereja.</p>
                </div>
            </article>
            <article class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://i.pinimg.com/1200x/2b/39/d8/2b39d88a37580d56a093e361944b7704.jpg" alt="Proyek 2" class="w-full h-40 object-cover">
                <div class="p-5">
                    <h3 class="font-semibold text-lg mb-1">Event Photography</h3>
                    <p class="text-gray-600 text-sm">Mengabadikan momen penting dalam berbagai acara.</p>
                </div>
            </article>
            <article class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="https://pictureurl.com/api/storage/file?key=u%2Fanon%2F3db7817d-b0ae-41c6-87ab-71c88dea599e-419b7e1e97a97121a283bf9f3f5ad2a6.jpg" alt="Proyek 3" class="w-full h-40 object-cover">
                <div class="p-5">
                    <h3 class="font-semibold text-lg mb-1">Street Photography</h3>
                    <p class="text-gray-600 text-sm">Mengabadikan momen dan cerita dari kehidupan sehari-hari.</p>
                </div>
            </article>
        </div>
    </section>

    {{--FOOTER--}}
    <footer class="bg-gray-900 text-gray-300 py-6 mt-12">
        <div class="max-w-6xl mx-auto px-6 text-center text-sm">
            &copy; 2026 Holaa foto yokkS. All rights reserved.
        </div>
    </footer>

</body>
</html>