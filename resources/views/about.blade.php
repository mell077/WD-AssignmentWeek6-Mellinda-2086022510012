<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya | Portofolio Nama Kamu</title>
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

    {{--HEADER--}}
    <header class="bg-indigo-600 text-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-3">Tentang Saya</h1>
            <p class="text-indigo-100 text-lg">Sedikit cerita tentang Mell dan dunia di balik setiap foto.</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-12 space-y-16">

        {{--PROFIL--}}
        <section class="flex flex-col md:flex-row items-center gap-10">
            <img src="https://pictureurl.com/api/storage/file?key=u%2Fanon%2Ff2e53063-834d-4e36-b60c-064fa09c8973-image.png" alt="Foto profil"
                 class="w-56 h-56 rounded-2xl object-cover shadow-lg">
            <div class="md:flex-1">
                <h2 class="text-2xl font-bold mb-3">Halo, saya Nama Mellinda</h2>
                <p class="text-gray-600 mb-3">
                    Seorang fotografer yang senang mengabadikan momen, menangkap cerita, 
                    dan menemukan keindahan dari hal-hal sederhana. Tertarik pada fotografi ibadah, 
                    acara, potret, dan kehidupan sehari-hari.
                </p>
                <p class="text-gray-600">
                    Melalui setiap foto, semua ingin menyimpan cerita dan menghadirkan 
                    kembali momen-momen berharga yang punya makna.
                </p>
            </div>
        </section>

        {{--PENDIDIKAN--}}
        <section>
            <h2 class="text-2xl font-bold mb-6">Pendidikan</h2>
            <div class="space-y-4 border-l-4 border-indigo-600 pl-6">
                <div>
                    <h3 class="font-semibold">Universitas Ciputa Makassar</h3>
                    <p class="text-gray-600">InformatikaS</p>
                    <p class="text-sm text-gray-500">2025 - Sekarang</p>
                </div>
                <div>
                    <h3 class="font-semibold">SMA Katolik Rajwali Makassar</h3>
                    <p class="text-gray-600">IPA</p>
                    <p class="text-sm text-gray-500">2022 - 2025S</p>
                </div>
            </div>
        </section>

        {{--SKILL--}}
        <section>
            <h2 class="text-2xl font-bold mb-6">Skill</h2>
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <div class="flex justify-between mb-1"><span>Church Photography</span><span>90%</span></div>
                    <div class="w-full bg-gray-200 rounded-full h-3"><div class="bg-indigo-600 h-3 rounded-full" style="width: 90%"></div></div>
                </div>
                <div>
                    <div class="flex justify-between mb-1"><span>Event Photography</span><span>80%</span></div>
                    <div class="w-full bg-gray-200 rounded-full h-3"><div class="bg-indigo-600 h-3 rounded-full" style="width: 80%"></div></div>
                </div>
                <div>
                    <div class="flex justify-between mb-1"><span>Portrait Photography</span><span>75%</span></div>
                    <div class="w-full bg-gray-200 rounded-full h-3"><div class="bg-indigo-600 h-3 rounded-full" style="width: 75%"></div></div>
                </div>
                <div>
                    <div class="flex justify-between mb-1"><span>Street Photography</span><span>50%</span></div>
                    <div class="w-full bg-gray-200 rounded-full h-3"><div class="bg-indigo-600 h-3 rounded-full" style="width: 50%"></div></div>
                </div>
            </div>
        </section>

        {{-- PENGALAMAN --}}
        <section>
            <h2 class="text-2xl font-bold mb-6">Pengalaman &amp; Organisasi</h2>
            <ul class="space-y-3 text-gray-600 list-disc pl-6">
                <li>Anggota media ISU</li>
                <li>Koordinator Divisi Media di UKM dan FDU Kristen</li>
                <li>Fotografi ibadah di hari sabtu dan minggu</li>
            </ul>
        </section>

    </main>

    {{--FOOTER--}}
    <footer class="bg-gray-900 text-gray-300 py-6 mt-12">
        <div class="max-w-6xl mx-auto px-6 text-center text-sm">
            &copy; 2026 Holaa foto yokk. All rights reserved.
        </div>
    </footer>

</body>
</html>