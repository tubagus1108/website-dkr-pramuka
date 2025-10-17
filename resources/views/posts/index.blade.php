@extends('layouts.app')

@section('title', 'Berita - DKR Pramuka UIN')

@section('content')
<!-- Hero Header dengan Gradient Modern -->
<div class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-20 overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-20 w-64 h-64 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-20 w-80 h-80 bg-orange-500 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block mb-4 px-4 py-2 bg-yellow-400/20 backdrop-blur-sm rounded-full text-sm font-semibold border border-yellow-300/30">
                📰 Portal Informasi
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                Berita & Artikel
            </h1>
            <p class="text-xl text-blue-100 leading-relaxed">
                Informasi terkini seputar kegiatan dan prestasi DKR Pramuka UIN Sultanah Nahrasiyah
            </p>
        </div>
    </div>

    <!-- Wave Separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-12 fill-current text-gray-50" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</div>

<section class="container mx-auto px-4 py-12 -mt-8 relative z-20">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Sidebar Filter dengan Design Modern -->
        <aside class="lg:col-span-1">
            <div class="bg-white rounded-2xl shadow-xl p-6 sticky top-24 border-t-4 border-yellow-400">
                <div class="flex items-center gap-3 mb-6">
                    <div class="p-2 bg-gradient-to-br from-blue-600 to-orange-500 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl text-blue-900">Filter Berita</h3>
                </div>

                <form method="GET" action="{{ route('posts.index') }}" class="space-y-6">
                    <!-- Search dengan Icon -->
                    <div>
                        <label class="text-sm font-bold text-gray-700 mb-3 block flex items-center gap-2">
                            <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            Cari Berita
                        </label>
                        <div class="relative">
                            <input type="text"
                                   name="search"
                                   value="{{ request('search') }}"
                                   placeholder="Ketik kata kunci..."
                                   class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 pl-11 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition-all">
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Categories dengan Modern Radio Buttons -->
                    <div>
                        <label class="text-sm font-bold text-gray-700 mb-3 block flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            Kategori
                        </label>
                        <div class="space-y-2">
                            <label class="flex items-center justify-between p-3 rounded-lg hover:bg-blue-50 cursor-pointer transition-all group">
                                <div class="flex items-center">
                                    <input type="radio"
                                           name="category"
                                           value=""
                                           {{ !request('category') ? 'checked' : '' }}
                                           class="mr-3 w-4 h-4 text-blue-600 focus:ring-orange-400">
                                    <span class="text-sm font-medium text-gray-700 group-hover:text-blue-900">Semua Kategori</span>
                                </div>
                            </label>
                            @foreach($categories as $category)
                            <label class="flex items-center justify-between p-3 rounded-lg hover:bg-orange-50 cursor-pointer transition-all group border border-transparent hover:border-orange-200">
                                <div class="flex items-center flex-1">
                                    <input type="radio"
                                           name="category"
                                           value="{{ $category->slug }}"
                                           {{ request('category') == $category->slug ? 'checked' : '' }}
                                           class="mr-3 w-4 h-4 text-orange-500 focus:ring-orange-400">
                                    <span class="text-sm font-medium text-gray-700 group-hover:text-blue-900">{{ $category->name }}</span>
                                </div>
                                <span class="text-xs font-bold bg-gradient-to-r from-blue-100 to-orange-100 text-blue-700 px-3 py-1 rounded-full">
                                    {{ $category->posts_count }}
                                </span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-2 pt-2">
                        <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 rounded-xl font-bold hover:from-orange-500 hover:to-orange-600 transition-all shadow-lg hover:shadow-xl hover:scale-105 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Terapkan Filter
                        </button>

                        @if(request('search') || request('category'))
                        <a href="{{ route('posts.index') }}"
                           class="block text-center text-sm text-gray-600 hover:text-orange-600 py-2 font-semibold transition-colors">
                            ↻ Reset Filter
                        </a>
                        @endif
                    </div>
                </form>

                <!-- Filter Info Badge -->
                @if(request('search') || request('category'))
                <div class="mt-4 p-3 bg-gradient-to-r from-orange-50 to-yellow-50 rounded-lg border border-orange-200">
                    <p class="text-xs font-semibold text-orange-800">
                        🔍 Filter Aktif
                    </p>
                </div>
                @endif
            </div>
        </aside>

        <!-- Posts Grid dengan Card Modern -->
        <div class="lg:col-span-3">
            @if($posts->count() > 0)
            <div class="mb-6 flex items-center justify-between">
                <p class="text-gray-600">
                    Menampilkan <span class="font-bold text-blue-900">{{ $posts->count() }}</span> dari
                    <span class="font-bold text-blue-900">{{ $posts->total() }}</span> berita
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                <article class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border-t-4 border-yellow-400">
                    <!-- Featured Image -->
                    <div class="relative overflow-hidden h-48">
                        @if($post->featured_image)
                        <img src="{{ Storage::url($post->featured_image) }}"
                             alt="{{ $post->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-500 via-blue-600 to-orange-500 flex items-center justify-center">
                            <span class="text-white text-5xl">📰</span>
                        </div>
                        @endif

                        <!-- Category Badge Floating -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-block px-3 py-1 bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 text-xs font-bold uppercase rounded-lg shadow-lg backdrop-blur-sm">
                                {{ $post->category->name }}
                            </span>
                        </div>

                        <!-- Gradient Overlay on Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>

                    <!-- Card Content -->
                    <div class="p-5">
                        <h2 class="text-lg font-bold mb-3 line-clamp-2 text-blue-900 group-hover:text-orange-600 transition-colors leading-snug">
                            <a href="{{ route('posts.show', $post->slug) }}" class="hover:underline">
                                {{ $post->title }}
                            </a>
                        </h2>
                        <p class="text-gray-600 text-sm mb-5 line-clamp-3 leading-relaxed">
                            {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}
                        </p>

                        <!-- Meta Information -->
                        <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2 text-xs text-gray-500">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span class="font-medium">{{ $post->published_at->format('d M Y') }}</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-gray-500">
                                <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                <span class="font-medium">{{ number_format($post->views) }}</span>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Modern Pagination -->
            <div class="mt-12">
                {{ $posts->withQueryString()->links() }}
            </div>
            @else
            <!-- Empty State dengan Design Modern -->
            <div class="bg-white rounded-2xl shadow-xl p-16 text-center border-t-4 border-orange-400">
                <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-blue-100 to-orange-100 rounded-full mb-6">
                    <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-extrabold text-blue-900 mb-3">Tidak Ada Berita</h3>
                <p class="text-gray-600 mb-8 max-w-md mx-auto">
                    Maaf, tidak ada berita yang sesuai dengan filter Anda. Coba ubah kriteria pencarian atau lihat semua berita.
                </p>
                <a href="{{ route('posts.index') }}"
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-xl font-bold hover:from-orange-500 hover:to-orange-600 transition-all shadow-lg hover:shadow-xl hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    Lihat Semua Berita
                </a>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Custom CSS untuk Line Clamp -->
<style>
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

/* Custom Radio Button Styling */
input[type="radio"]:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}
</style>
@endsection
