@extends('layouts.app')

@section('title', 'Tentang Kami - DKR Pramuka UIN')

@section('content')
<!-- Hero Section dengan Gradient Modern -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-32 overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-96 h-96 bg-yellow-400 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block mb-6 px-5 py-2 bg-yellow-400/20 backdrop-blur-sm rounded-full text-sm font-bold border border-yellow-300/30">
                🎯 About Us
            </div>
            <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                Tentang <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-400">DKR Pramuka</span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-50 leading-relaxed max-w-3xl mx-auto">
                Dewan Kerja Ranting Pramuka UIN Sultanah Nahrasiyah - Membangun Generasi Berkarakter dan Berintegritas
            </p>
        </div>
    </div>

    <!-- Wave Separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 fill-current text-white" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</section>

<!-- Profile Section -->
<section class="py-20 bg-gradient-to-b from-white via-blue-50 to-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Profile Card -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-t-4 border-yellow-400 mb-16">
                <div class="p-8 md:p-12">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-4 rounded-2xl shadow-xl">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-4xl font-extrabold text-blue-900">Profil Organisasi</h2>
                            <p class="text-gray-600 font-semibold">Mengenal lebih dekat DKR Pramuka</p>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed text-lg mb-6">
                            <span class="font-bold text-blue-900">Dewan Kerja Ranting (DKR) Pramuka UIN Sultanah Nahrasiyah</span> adalah organisasi kepramukaan di tingkat ranting yang bergerak di lingkungan kampus. Kami berkomitmen untuk membentuk karakter mahasiswa yang berakhlak mulia, memiliki jiwa kepemimpinan, dan berkontribusi positif bagi masyarakat.
                        </p>

                        <p class="text-gray-700 leading-relaxed text-lg">
                            Melalui berbagai kegiatan kepramukaan, pelatihan, dan pengabdian masyarakat, kami berupaya menjadi wadah pengembangan diri yang holistik bagi seluruh anggota.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision & Mission Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Vision Card -->
                <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 border-t-4 border-orange-500 transform hover:-translate-y-2">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-4 rounded-2xl shadow-xl group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-extrabold text-blue-900">Visi</h3>
                        </div>

                        <div class="bg-gradient-to-br from-orange-50 to-yellow-50 rounded-2xl p-6 border-2 border-orange-200">
                            <p class="text-gray-800 leading-relaxed text-lg font-medium">
                                Menjadi organisasi kepramukaan yang <span class="font-bold text-orange-700">unggul</span> dalam membentuk karakter dan kepemimpinan mahasiswa yang <span class="font-bold text-orange-700">berakhlak mulia</span>, <span class="font-bold text-orange-700">mandiri</span>, dan <span class="font-bold text-orange-700">berdaya saing</span> di tingkat nasional.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-500 border-t-4 border-blue-600 transform hover:-translate-y-2">
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-4 rounded-2xl shadow-xl group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-extrabold text-blue-900">Misi</h3>
                        </div>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-4 border-l-4 border-blue-600 hover:shadow-md transition-all">
                                <div class="bg-gradient-to-br from-yellow-400 to-orange-500 p-2 rounded-lg flex-shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-gray-800 font-semibold leading-relaxed">Menyelenggarakan kegiatan kepramukaan yang berkualitas dan inovatif</span>
                            </li>
                            <li class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-4 border-l-4 border-blue-600 hover:shadow-md transition-all">
                                <div class="bg-gradient-to-br from-yellow-400 to-orange-500 p-2 rounded-lg flex-shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-gray-800 font-semibold leading-relaxed">Membentuk karakter dan jiwa kepemimpinan yang berintegritas tinggi</span>
                            </li>
                            <li class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-4 border-l-4 border-blue-600 hover:shadow-md transition-all">
                                <div class="bg-gradient-to-br from-yellow-400 to-orange-500 p-2 rounded-lg flex-shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-gray-800 font-semibold leading-relaxed">Mengembangkan potensi, kreativitas, dan keterampilan anggota secara holistik</span>
                            </li>
                            <li class="flex items-start gap-3 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-4 border-l-4 border-blue-600 hover:shadow-md transition-all">
                                <div class="bg-gradient-to-br from-yellow-400 to-orange-500 p-2 rounded-lg flex-shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-gray-800 font-semibold leading-relaxed">Membangun kerjasama dan jaringan dengan berbagai pihak untuk kemajuan organisasi</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Values Section -->
            <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 rounded-3xl shadow-2xl p-8 md:p-12 text-white border-t-4 border-yellow-400">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-3 mb-4">
                        <div class="bg-yellow-400 p-3 rounded-xl shadow-xl">
                            <svg class="w-8 h-8 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-4xl font-extrabold mb-3">Nilai-Nilai Kami</h2>
                    <p class="text-blue-100 text-lg font-semibold">Prinsip yang menjadi landasan setiap kegiatan</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border-2 border-white/20 hover:bg-white/20 transition-all">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 shadow-xl">
                            <span class="text-3xl">🏆</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-yellow-300">Integritas</h3>
                        <p class="text-blue-100 leading-relaxed">Menjunjung tinggi kejujuran dan konsistensi dalam setiap tindakan</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border-2 border-white/20 hover:bg-white/20 transition-all">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 shadow-xl">
                            <span class="text-3xl">🤝</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-yellow-300">Kerjasama</h3>
                        <p class="text-blue-100 leading-relaxed">Membangun kolaborasi solid untuk mencapai tujuan bersama</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border-2 border-white/20 hover:bg-white/20 transition-all">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 shadow-xl">
                            <span class="text-3xl">💡</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-yellow-300">Inovasi</h3>
                        <p class="text-blue-100 leading-relaxed">Mengembangkan kreativitas dan ide-ide baru yang bermanfaat</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border-2 border-white/20 hover:bg-white/20 transition-all">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 shadow-xl">
                            <span class="text-3xl">🎯</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-yellow-300">Profesional</h3>
                        <p class="text-blue-100 leading-relaxed">Menjalankan tugas dengan penuh tanggung jawab dan dedikasi</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border-2 border-white/20 hover:bg-white/20 transition-all">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 shadow-xl">
                            <span class="text-3xl">❤️</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-yellow-300">Pengabdian</h3>
                        <p class="text-blue-100 leading-relaxed">Memberikan kontribusi nyata untuk kemajuan masyarakat</p>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border-2 border-white/20 hover:bg-white/20 transition-all">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 shadow-xl">
                            <span class="text-3xl">🌟</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-yellow-300">Keunggulan</h3>
                        <p class="text-blue-100 leading-relaxed">Selalu berusaha memberikan yang terbaik dalam setiap hal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-yellow-400 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-black mb-6">
                Bergabunglah Bersama Kami!
            </h2>
            <p class="text-xl md:text-2xl mb-10 text-orange-50 leading-relaxed">
                Mari bersama membangun karakter dan kepemimpinan melalui kegiatan kepramukaan yang inspiratif
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('events.index') }}"
                   class="group bg-white text-orange-600 px-10 py-5 rounded-xl font-black text-lg hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300 shadow-2xl hover:shadow-3xl hover:scale-110 inline-flex items-center justify-center gap-3">
                    Lihat Kegiatan
                    <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('contact') }}"
                   class="group bg-transparent border-2 border-white px-10 py-5 rounded-xl font-black text-lg hover:bg-white hover:text-orange-600 transition-all duration-300 shadow-2xl hover:shadow-3xl hover:scale-110 inline-flex items-center justify-center gap-3">
                    Hubungi Kami
                    <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS -->
<style>
@keyframes pulse {
    0%, 100% {
        opacity: 0.1;
    }
    50% {
        opacity: 0.2;
    }
}

.animate-pulse {
    animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}
</style>
@endsection
