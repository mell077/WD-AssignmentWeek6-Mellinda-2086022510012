@extends('layouts.app')

@section('title', 'Dashboard Admin | Portofolio')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold">Dashboard Admin</h1>
        <a href="/admin/login" class="text-indigo-600 font-medium hover:underline">Keluar</a>
    </div>

    <div class="grid gap-6 md:grid-cols-3 mb-10">
        <div class="bg-white rounded-xl shadow-md p-6">
            <p class="text-gray-500 text-sm">Total Artikel</p>
            <p class="text-3xl font-bold">3</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6">
            <p class="text-gray-500 text-sm">Pesan Masuk</p>
            <p class="text-3xl font-bold">5</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6">
            <p class="text-gray-500 text-sm">Pengunjung</p>
            <p class="text-3xl font-bold">120</p>
        </div>
    </div>

    <h2 class="text-xl font-semibold mb-4">Daftar Artikel</h2>
    <div class="bg-white rounded-xl shadow-md overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="px-6 py-3">Judul</th>
                    <th class="px-6 py-3">Tanggal</th>
                    <th class="px-6 py-3">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t">
                    <td class="px-6 py-3">Tips Memotret dengan Cahaya Alami</td>
                    <td class="px-6 py-3">[tanggal]</td>
                    <td class="px-6 py-3">Terbit</td>
                </tr>
                <tr class="border-t">
                    <td class="px-6 py-3">Mengenal Segitiga Eksposur</td>
                    <td class="px-6 py-3">[tanggal]</td>
                    <td class="px-6 py-3">Terbit</td>
                </tr>
                <tr class="border-t">
                    <td class="px-6 py-3">Pengalaman Pertama Memotret di Luar Ruangan</td>
                    <td class="px-6 py-3">[tanggal]</td>
                    <td class="px-6 py-3">Draft</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection