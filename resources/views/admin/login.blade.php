@extends('layouts.app')

@section('title', 'Login Admin | Portofolio')

@section('content')
<section class="min-h-[70vh] flex items-center justify-center px-6 py-12">
    <form action="/admin" method="GET" class="w-full max-w-md bg-white rounded-xl shadow-md p-8 space-y-5">
        <h1 class="text-2xl font-bold text-center">Login Admin</h1>

        <div>
            <label for="email" class="block mb-1 font-medium">Email</label>
            <input type="email" id="email" required placeholder="admin@contoh.com"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div>
            <label for="password" class="block mb-1 font-medium">Password</label>
            <input type="password" id="password" required placeholder="••••••••"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <button type="submit"
                class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700 transition">
            Masuk
        </button>
    </form>
</section>
@endsection