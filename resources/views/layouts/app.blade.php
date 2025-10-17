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

   <!-- Footer Modern 2025 -->
    <footer class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 text-white overflow-hidden">
        <!-- Decorative Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-400 rounded-full blur-3xl"></div>
        </div>

        <!-- Main Footer Content -->
        <div class="relative z-10 container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                <!-- Brand Section -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 p-3 rounded-xl shadow-lg">
                            <svg class="w-10 h-10 text-blue-900" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-white">DKR Pramuka</h3>
                            <p class="text-xs text-blue-200">UIN Sultanah Nahrasiyah</p>
                        </div>
                    </div>
                    <p class="text-blue-200 text-sm leading-relaxed mb-6">
                        Dewan Kerja Ranting Pramuka Universitas Islam Negeri Sultanah Nahrasiyah. Membentuk karakter dan kepemimpinan.
                    </p>

                    <!-- Social Media -->
                    <div class="flex gap-3">
                        <a href="#" class="group relative bg-white/10 hover:bg-yellow-400 backdrop-blur-sm p-3 rounded-xl transition border border-white/20">
                            <svg class="w-5 h-5 text-white group-hover:text-blue-900 transition" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="group relative bg-white/10 hover:bg-orange-500 backdrop-blur-sm p-3 rounded-xl transition border border-white/20">
                            <svg class="w-5 h-5 text-white group-hover:text-white transition" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="group relative bg-white/10 hover:bg-blue-400 backdrop-blur-sm p-3 rounded-xl transition border border-white/20">
                            <svg class="w-5 h-5 text-white group-hover:text-white transition" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="group relative bg-white/10 hover:bg-green-500 backdrop-blur-sm p-3 rounded-xl transition border border-white/20">
                            <svg class="w-5 h-5 text-white group-hover:text-white transition" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <div class="w-1 h-6 bg-gradient-to-b from-yellow-400 to-orange-500 rounded-full"></div>
                        Link Cepat
                    </h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="group flex items-center gap-2 text-blue-200 hover:text-yellow-400 transition">
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('posts.index') }}" class="group flex items-center gap-2 text-blue-200 hover:text-yellow-400 transition">
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Berita & Artikel
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('events.index') }}" class="group flex items-center gap-2 text-blue-200 hover:text-yellow-400 transition">
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Kegiatan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gallery.index') }}" class="group flex items-center gap-2 text-blue-200 hover:text-yellow-400 transition">
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Galeri Foto
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="group flex items-center gap-2 text-blue-200 hover:text-yellow-400 transition">
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Tentang Kami
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <div class="w-1 h-6 bg-gradient-to-b from-yellow-400 to-orange-500 rounded-full"></div>
                        Kontak Kami
                    </h4>
                    <ul class="space-y-4">
                        <li>
                            <a href="mailto:dkr@uinsultanah.ac.id" class="group flex items-start gap-3 text-blue-200 hover:text-yellow-400 transition">
                                <div class="bg-white/10 p-2 rounded-lg group-hover:bg-yellow-400/20 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-blue-300">Email</div>
                                    <div class="font-semibold">dkr@uinsultanah.ac.id</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+62xxxxxxxxx" class="group flex items-start gap-3 text-blue-200 hover:text-yellow-400 transition">
                                <div class="bg-white/10 p-2 rounded-lg group-hover:bg-yellow-400/20 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-blue-300">Telepon</div>
                                    <div class="font-semibold">+62 xxx-xxxx-xxxx</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-start gap-3 text-blue-200">
                                <div class="bg-white/10 p-2 rounded-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-blue-300">Alamat</div>
                                    <div class="font-semibold">Kampus UIN Sultanah Nahrasiyah</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h4 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <div class="w-1 h-6 bg-gradient-to-b from-yellow-400 to-orange-500 rounded-full"></div>
                        Newsletter
                    </h4>
                    <p class="text-blue-200 text-sm mb-4">
                        Dapatkan info terbaru kegiatan dan berita DKR Pramuka
                    </p>
                    <form class="space-y-3">
                        <div class="relative">
                            <input type="email"
                                placeholder="Email Anda"
                                class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-blue-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent backdrop-blur-sm">
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 font-bold py-3 rounded-xl hover:shadow-lg transform hover:scale-105 transition">
                            Berlangganan
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="relative z-10 border-t border-white/10">
            <div class="container mx-auto px-4 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-blue-200 text-sm text-center md:text-left">
                        &copy; {{ date('Y') }} <span class="font-bold text-yellow-400">DKR Pramuka UIN Sultanah Nahrasiyah</span>. All rights reserved.
                    </div>
                    <div class="flex flex-wrap justify-center gap-6 text-sm">
                        <a href="#" class="text-blue-200 hover:text-yellow-400 transition">Kebijakan Privasi</a>
                        <a href="#" class="text-blue-200 hover:text-yellow-400 transition">Syarat & Ketentuan</a>
                        <a href="#" class="text-blue-200 hover:text-yellow-400 transition">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top Button -->
        <button id="backToTop" class="fixed bottom-8 right-8 bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 p-4 rounded-full shadow-2xl hover:shadow-yellow-400/50 transform hover:scale-110 transition opacity-0 invisible z-50">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        </button>
    </footer>


    @stack('scripts')

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.remove('opacity-0', 'invisible');
                backToTop.classList.add('opacity-100', 'visible');
            } else {
                backToTop.classList.add('opacity-0', 'invisible');
                backToTop.classList.remove('opacity-100', 'visible');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
