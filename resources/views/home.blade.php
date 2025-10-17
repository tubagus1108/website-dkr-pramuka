@extends('layouts.app')

@section('title', 'Beranda - DKR Pramuka UIN Sultanah Nahrasiyah')

@section('content')
<!-- Hero Section dengan Gradient Modern & Animasi -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-32 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-yellow-300 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-400 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block mb-4 px-4 py-2 bg-yellow-400/20 backdrop-blur-sm rounded-full text-sm font-semibold border border-yellow-300/30">
                ✨ Gerakan Pramuka Indonesia
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight">
                Selamat Datang di
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-300 to-orange-400">
                    DKR Pramuka
                </span>
            </h1>
            <p class="text-xl md:text-2xl mb-12 text-blue-50 max-w-2xl mx-auto leading-relaxed">
                Dewan Kerja Ranting UIN Sultanah Nahrasiyah - Membangun karakter, kepemimpinan, dan kemandirian generasi muda
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('posts.index') }}"
                   class="group bg-yellow-400 text-blue-900 px-8 py-4 rounded-xl font-bold hover:bg-orange-500 hover:text-white transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105 flex items-center justify-center gap-2">
                    Lihat Berita
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('events.index') }}"
                   class="group bg-transparent border-2 border-yellow-400 backdrop-blur-sm px-8 py-4 rounded-xl font-bold hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105 flex items-center justify-center gap-2">
                    Kegiatan Kami
                    <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Wave Separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 fill-current text-white" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</section>

<!-- Announcements dengan Design Modern -->
@if($announcements->count() > 0)
<section class="bg-gradient-to-r from-orange-50 via-yellow-50 to-orange-50 border-b border-orange-200">
    <div class="container mx-auto px-4 py-5">
        <div class="flex items-start gap-4">
            <div class="flex-shrink-0 bg-gradient-to-br from-orange-500 to-orange-600 text-white p-3 rounded-xl shadow-lg animate-pulse">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                </svg>
            </div>
            <div class="flex-1 overflow-hidden">
                <p class="text-xs font-bold text-orange-800 mb-1 uppercase tracking-wide">Pengumuman Penting</p>
                <div class="relative">
                    <div class="overflow-hidden">
                        <div class="animate-marquee whitespace-nowrap text-blue-900 font-semibold text-lg">
                            @foreach($announcements as $index => $announcement)
                                {{ $announcement->title }}
                                @if(!$loop->last)
                                    <span class="mx-6 text-orange-500">•</span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Featured Posts dengan Card Modern -->
@if($featuredPosts->count() > 0)
<section class="container mx-auto px-4 py-20">
    <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-4">
            Berita Unggulan
        </h2>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
            Informasi terkini dan terpenting dari kegiatan DKR Pramuka
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($featuredPosts as $post)
        <article class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border-t-4 border-orange-500">
            <div class="relative overflow-hidden">
                @if($post->featured_image)
                <img src="{{ Storage::url($post->featured_image) }}"
                     alt="{{ $post->title }}"
                     class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                @else
                <div class="w-full h-64 bg-gradient-to-br from-blue-500 via-blue-600 to-orange-500 flex items-center justify-center">
                    <span class="text-white text-6xl">📰</span>
                </div>
                @endif

                <!-- Category Badge -->
                <div class="absolute top-4 left-4">
                    <span class="inline-block px-4 py-2 bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 text-xs font-bold uppercase rounded-lg shadow-lg backdrop-blur-sm">
                        {{ $post->category->name }}
                    </span>
                </div>

                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>

            <div class="p-6">
                <h3 class="text-xl font-bold mb-3 line-clamp-2 text-blue-900 group-hover:text-orange-600 transition-colors">
                    <a href="{{ route('posts.show', $post->slug) }}" class="hover:underline">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="text-gray-600 mb-5 line-clamp-3 leading-relaxed">
                    {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}
                </p>

                <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>{{ $post->published_at->format('d M Y') }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        <span>{{ number_format($post->views) }}</span>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
    </div>

    <div class="text-center mt-12">
        <a href="{{ route('posts.index') }}"
           class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-xl font-bold hover:from-orange-500 hover:to-orange-600 transition-all shadow-lg hover:shadow-xl hover:scale-105">
            Lihat Semua Berita
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endif

<!-- Latest Posts dengan Timeline Design -->
@if($latestPosts->count() > 0)
<section class="bg-gradient-to-br from-blue-50 via-white to-orange-50 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-4">
                Berita Terbaru
            </h2>
            <p class="text-gray-600 text-lg">
                Update terkini dari aktivitas kepramukaan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($latestPosts as $post)
            <article class="group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-l-4 border-yellow-400">
                <div class="flex h-full">
                    <div class="w-32 flex-shrink-0 relative overflow-hidden">
                        @if($post->featured_image)
                        <img src="{{ Storage::url($post->featured_image) }}"
                             alt="{{ $post->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-600 via-blue-700 to-orange-500 flex items-center justify-center">
                            <span class="text-white text-3xl">📰</span>
                        </div>
                        @endif
                    </div>

                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 text-xs font-bold rounded-full mb-2">
                                {{ $post->category->name }}
                            </span>
                            <h3 class="text-base font-bold line-clamp-2 text-blue-900 group-hover:text-orange-600 transition-colors mb-2">
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-500">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ $post->published_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Upcoming Events dengan Card 3D Effect -->
@if($upcomingEvents->count() > 0)
<section class="container mx-auto px-4 py-20">
    <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-4">
            Kegiatan Mendatang
        </h2>
        <p class="text-gray-600 text-lg">
            Jangan lewatkan acara dan kegiatan seru kami
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($upcomingEvents as $event)
        <div class="group relative bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 border-t-4 border-yellow-400">
            <!-- Date Badge -->
            <div class="mb-6">
                <div class="inline-block bg-gradient-to-br from-blue-600 via-blue-700 to-orange-500 text-white rounded-2xl p-5 shadow-xl transform group-hover:scale-110 transition-transform duration-300">
                    <div class="text-center">
                        <div class="text-4xl font-black leading-none">
                            {{ $event->start_date->format('d') }}
                        </div>
                        <div class="text-sm font-semibold mt-1 uppercase tracking-wide">
                            {{ $event->start_date->format('M Y') }}
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="font-bold text-lg mb-4 line-clamp-2 text-blue-900 group-hover:text-orange-600 transition-colors">
                <a href="{{ route('events.show', $event->slug) }}">
                    {{ $event->title }}
                </a>
            </h3>

            <div class="space-y-3">
                <div class="flex items-start gap-3 text-gray-600">
                    <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-sm font-medium">{{ $event->start_date->format('H:i') }} WIB</span>
                </div>
                <div class="flex items-start gap-3 text-gray-600">
                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span class="text-sm line-clamp-2">{{ $event->location }}</span>
                </div>
            </div>

            <!-- Hover Effect Arrow -->
            <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity">
                <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-12">
        <a href="{{ route('events.index') }}"
           class="inline-flex items-center gap-2 bg-gradient-to-r from-yellow-400 via-orange-500 to-orange-600 text-white px-8 py-4 rounded-xl font-bold hover:from-orange-500 hover:to-orange-700 transition-all shadow-lg hover:shadow-xl hover:scale-105">
            Lihat Semua Kegiatan
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endif

<!-- Gallery dengan Grid Modern -->
@if($latestGalleries->count() > 0)
<section class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
                Galeri Foto
            </h2>
            <p class="text-yellow-200 text-lg">
                Dokumentasi momen berharga kegiatan kami
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($latestGalleries as $gallery)
            <div class="relative overflow-hidden rounded-2xl group cursor-pointer aspect-square border-2 border-yellow-400/20 hover:border-orange-400 transition-colors">
                <img src="{{ Storage::url($gallery->image) }}"
                     alt="{{ $gallery->title }}"
                     class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">

                <!-- Overlay dengan Blur Effect -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end p-6">
                    <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <p class="font-bold text-lg mb-1">{{ $gallery->title }}</p>
                        @if($gallery->event)
                        <p class="text-sm text-yellow-300">{{ $gallery->event->title }}</p>
                        @endif
                    </div>
                </div>

                <!-- Corner Icon -->
                <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="bg-orange-500/90 backdrop-blur-sm p-2 rounded-lg">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                        </svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('gallery.index') }}"
               class="inline-flex items-center gap-2 bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 px-8 py-4 rounded-xl font-bold hover:from-orange-500 hover:to-orange-600 hover:text-white transition-all shadow-lg hover:shadow-xl hover:scale-105">
                Lihat Semua Galeri
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endif

<!-- CTA Section dengan Interactive Elements -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-24 overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-yellow-400 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-orange-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block mb-6 px-6 py-2 bg-yellow-400/20 backdrop-blur-sm rounded-full text-sm font-bold border border-yellow-300/30">
                🚀 Mari Bergabung!
            </div>
            <h2 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                Bergabunglah dengan Kami!
            </h2>
            <p class="text-xl md:text-2xl mb-10 text-blue-50 max-w-2xl mx-auto leading-relaxed">
                Mari bersama membangun karakter, kepemimpinan, dan kemandirian melalui kegiatan kepramukaan yang inspiratif
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}"
                   class="group bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 px-10 py-5 rounded-xl font-black text-lg hover:from-orange-500 hover:to-orange-600 hover:text-white transition-all duration-300 shadow-2xl hover:shadow-3xl hover:scale-110 inline-flex items-center justify-center gap-3">
                    Hubungi Kami
                    <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS untuk Animasi -->
<style>
@keyframes marquee {
    0% { transform: translateX(0%); }
    100% { transform: translateX(-50%); }
}

.animate-marquee {
    animation: marquee 20s linear infinite;
}

.animate-marquee:hover {
    animation-play-state: paused;
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}

/* Line Clamp Support */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection
