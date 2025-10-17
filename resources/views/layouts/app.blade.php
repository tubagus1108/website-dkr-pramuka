<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Website Resmi Dewan Kerja Ranting Pramuka UIN Sultanah Nahrasiyah')">
    <title>@yield('title', 'DKR Pramuka UIN Sultanah Nahrasiyah')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/Logo-Pramuka.jpeg') }}" alt="Logo Pramuka" class="h-12">
                    <div>
                        <h1 class="text-lg font-bold text-gray-800">DKR Pramuka</h1>
                        <p class="text-xs text-gray-600">UIN Sultanah Nahrasiyah</p>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('posts.index') }}" class="text-gray-700 hover:text-blue-600 font-medium {{ request()->routeIs('posts.*') ? 'text-blue-600' : '' }}">
                        Berita
                    </a>
                    <a href="{{ route('events.index') }}" class="text-gray-700 hover:text-blue-600 font-medium {{ request()->routeIs('events.*') ? 'text-blue-600' : '' }}">
                        Kegiatan
                    </a>
                    <a href="{{ route('gallery.index') }}" class="text-gray-700 hover:text-blue-600 font-medium {{ request()->routeIs('gallery.*') ? 'text-blue-600' : '' }}">
                        Galeri
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">
                        Tentang
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 font-medium {{ request()->routeIs('contact') ? 'text-blue-600' : '' }}">
                        Kontak
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="{{ route('posts.index') }}" class="block py-2 text-gray-700 hover:text-blue-600">Berita</a>
                <a href="{{ route('events.index') }}" class="block py-2 text-gray-700 hover:text-blue-600">Kegiatan</a>
                <a href="{{ route('gallery.index') }}" class="block py-2 text-gray-700 hover:text-blue-600">Galeri</a>
                <a href="{{ route('about') }}" class="block py-2 text-gray-700 hover:text-blue-600">Tentang</a>
                <a href="{{ route('contact') }}" class="block py-2 text-gray-700 hover:text-blue-600">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 mt-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">DKR Pramuka UIN</h3>
                    <p class="text-gray-400 text-sm">
                        Dewan Kerja Ranting Pramuka Universitas Islam Negeri Sultanah Nahrasiyah
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Link Cepat</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Beranda</a></li>
                        <li><a href="{{ route('posts.index') }}" class="hover:text-white">Berita</a></li>
                        <li><a href="{{ route('events.index') }}" class="hover:text-white">Kegiatan</a></li>
                        <li><a href="{{ route('gallery.index') }}" class="hover:text-white">Galeri</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li>📧 dkr@uinsultanah.ac.id</li>
                        <li>📱 +62 xxx-xxxx-xxxx</li>
                        <li>📍 Kampus UIN Sultanah Nahrasiyah</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Media Sosial</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} DKR Pramuka UIN Sultanah Nahrasiyah. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
