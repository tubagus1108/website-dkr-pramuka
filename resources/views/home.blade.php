@extends('layouts.app')

@section('title', 'Beranda - DKR Pramuka UIN Sultanah Nahrasiyah')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Selamat Datang di DKR Pramuka
        </h1>
        <p class="text-xl md:text-2xl mb-8">
            UIN Sultanah Nahrasiyah
        </p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('posts.index') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Lihat Berita
            </a>
            <a href="{{ route('events.index') }}" class="bg-transparent border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                Kegiatan Kami
            </a>
        </div>
    </div>
</section>

<!-- Announcements -->
@if($announcements->count() > 0)
<section class="bg-yellow-50 border-b border-yellow-200">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center gap-2 text-yellow-800">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"/>
            </svg>
            <marquee class="font-semibold">
                @foreach($announcements as $announcement)
                    {{ $announcement->title }} &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                @endforeach
            </marquee>
        </div>
    </div>
</section>
@endif

<!-- Featured Posts -->
@if($featuredPosts->count() > 0)
<section class="container mx-auto px-4 py-16">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800">Berita Unggulan</h2>
        <a href="{{ route('posts.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
            Lihat Semua →
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($featuredPosts as $post)
        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
            @if($post->featured_image)
            <img src="{{ Storage::url($post->featured_image) }}"
                 alt="{{ $post->title }}"
                 class="w-full h-48 object-cover">
            @else
            <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                <span class="text-white text-4xl">📰</span>
            </div>
            @endif

            <div class="p-6">
                <span class="text-xs text-blue-600 font-semibold uppercase">
                    {{ $post->category->name }}
                </span>
                <h3 class="text-xl font-bold mt-2 mb-3 line-clamp-2">
                    <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-600">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="text-gray-600 mb-4 line-clamp-3">
                    {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}
                </p>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span>{{ $post->published_at->format('d M Y') }}</span>
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        {{ $post->views }}
                    </span>
                </div>
            </div>
        </article>
        @endforeach
    </div>
</section>
@endif

<!-- Latest Posts -->
@if($latestPosts->count() > 0)
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Berita Terbaru</h2>
            <a href="{{ route('posts.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                Lihat Semua →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($latestPosts as $post)
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                <div class="flex">
                    @if($post->featured_image)
                    <img src="{{ Storage::url($post->featured_image) }}"
                         alt="{{ $post->title }}"
                         class="w-32 h-32 object-cover">
                    @else
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <span class="text-white text-2xl">📰</span>
                    </div>
                    @endif

                    <div class="p-4 flex-1">
                        <span class="text-xs text-blue-600 font-semibold">
                            {{ $post->category->name }}
                        </span>
                        <h3 class="text-lg font-bold mt-1 mb-2 line-clamp-2">
                            <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-600">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="text-xs text-gray-500">
                            {{ $post->published_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Upcoming Events -->
@if($upcomingEvents->count() > 0)
<section class="container mx-auto px-4 py-16">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800">Kegiatan Mendatang</h2>
        <a href="{{ route('events.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
            Lihat Semua →
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($upcomingEvents as $event)
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
            <div class="text-center mb-4">
                <div class="inline-block bg-blue-600 text-white rounded-lg p-4">
                    <div class="text-4xl font-bold">
                        {{ $event->start_date->format('d') }}
                    </div>
                    <div class="text-sm">
                        {{ $event->start_date->format('M Y') }}
                    </div>
                </div>
            </div>
            <h3 class="font-bold text-lg mb-2 text-center">
                <a href="{{ route('events.show', $event->slug) }}" class="hover:text-blue-600">
                    {{ $event->title }}
                </a>
            </h3>
            <p class="text-sm text-gray-600 text-center mb-2">
                🕐 {{ $event->start_date->format('H:i') }} WIB
            </p>
            <p class="text-sm text-gray-600 text-center">
                📍 {{ Str::limit($event->location, 30) }}
            </p>
        </div>
        @endforeach
    </div>
</section>
@endif

<!-- Gallery Preview -->
@if($latestGalleries->count() > 0)
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Galeri Foto</h2>
            <a href="{{ route('gallery.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                Lihat Semua →
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($latestGalleries as $gallery)
            <div class="relative overflow-hidden rounded-lg group cursor-pointer">
                <img src="{{ Storage::url($gallery->image) }}"
                     alt="{{ $gallery->title }}"
                     class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center p-4">
                    <div class="text-white text-center">
                        <p class="font-semibold">{{ $gallery->title }}</p>
                        @if($gallery->event)
                        <p class="text-xs mt-1">{{ $gallery->event->title }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Bergabunglah dengan Kami!
        </h2>
        <p class="text-lg mb-8">
            Mari bersama membangun karakter dan kepemimpinan melalui kegiatan kepramukaan
        </p>
        <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition inline-block">
            Hubungi Kami
        </a>
    </div>
</section>
@endsection
