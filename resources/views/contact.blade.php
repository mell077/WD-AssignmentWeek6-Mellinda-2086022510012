<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | Portofolio Nama Kamu</title>
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

    {{--HEADER--}}
    <header class="bg-indigo-600 text-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-3">Hubungi Saya</h1>
            <p class="text-indigo-100 text-lg">Ingin berkolaborasi? Kirim pesan di sini.</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-12 grid gap-10 md:grid-cols-2">

        {{--FORM--}}
        <form class="bg-white rounded-xl shadow-md p-8 space-y-5"
              onsubmit="event.preventDefault(); alert('Terima kasih! Pesanmu sudah terkirim (demo).'); this.reset();">
            <div>
                <label for="nama" class="block mb-1 font-medium">Nama</label>
                <input type="text" id="nama" required placeholder="Nama lengkap"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label for="email" class="block mb-1 font-medium">Email</label>
                <input type="email" id="email" required placeholder="email@contoh.com"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label for="pesan" class="block mb-1 font-medium">Pesan</label>
                <textarea id="pesan" rows="5" required placeholder="Tulis pesanmu..."
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>
            <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700 transition">
                Kirim Pesan
            </button>
        </form>

        {{--INFO KONTAK--}}
        <div class="space-y-6">
            <h2 class="text-2xl font-bold">Informasi Kontak</h2>
            <div class="bg-white rounded-xl shadow-md p-6 space-y-4">
                <p><span class="font-semibold">📧 Email:</span> <a href="mailto:email@contoh.com" class="text-indigo-600 hover:underline">mellindaanggryani@gmail.com</a></p>
                <p><span class="font-semibold">📍 Lokasi:</span> Makassar, Sulawesi Selatan</p>
                <p><span class="font-semibold">📸 Instagram:</span> <a href="https://instagram.com/mellindaanggryani" target="_blank" class="text-indigo-600 hover:underline">@mellindaanggryani</a></p>
            </div>
        </div>

    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-gray-300 py-6 mt-12">
        <div class="max-w-6xl mx-auto px-6 text-center text-sm">
            &copy; 2026 Holaa foto yokkS. All rights reserved.
        </div>
    </footer>

</body>
</html>