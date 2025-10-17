@extends('layouts.app')

@section('title', 'Berita - DKR Pramuka UIN')

@section('content')
<div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-2">Berita & Artikel</h1>
        <p class="text-lg">Informasi terkini seputar kegiatan DKR Pramuka</p>
    </div>
</div>

<section class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Sidebar Filter -->
        <aside class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                <h3 class="font-bold text-lg mb-4">Filter Berita</h3>

                <form method="GET" action="{{ route('posts.index') }}">
                    <!-- Search -->
                    <div class="mb-4">
                        <label class="text-sm font-semibold text-gray-700 mb-2 block">Cari Berita</label>
                        <input type="text"
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="Kata kunci..."
                               class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Categories -->
                    <div class="mb-4">
                        <label class="text-sm font-semibold text-gray-700 mb-2 block">Kategori</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="category" value="" {{ !request('category') ? 'checked' : '' }} class="mr-2">
                                <span class="text-sm">Semua Kategori</span>
                            </label>
                            @foreach($categories as $category)
                            <label class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input type="radio"
                                           name="category"
                                           value="{{ $category->slug }}"
                                           {{ request('category') == $category->slug ? 'checked' : '' }}
                                           class="mr-2">
                                    <span class="text-sm">{{ $category->name }}</span>
                                </div>
                                <span class="text-xs bg-gray-200 px-2 py-1 rounded">{{ $category->posts_count }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                        Terapkan Filter
                    </button>

                    @if(request('search') || request('category'))
                    <a href="{{ route('posts.index') }}" class="block text-center text-sm text-gray-600 hover:text-gray-800 mt-2">
                        Reset Filter
                    </a>
                    @endif
                </form>
            </div>
        </aside>

        <!-- Posts Grid -->
        <div class="lg:col-span-3">
            @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                    @if($post->featured_image)
                    <img src="{{ Storage::url($post->featured_image) }}"
                         alt="{{ $post->title }}"
                         class="w-full h-48 object-cover">
                    @else
                    <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <span class="text-white text-4xl">📰</span>
                    </div>
                    @endif

                    <div class="p-5">
                        <span class="text-xs text-blue-600 font-semibold">
                            {{ $post->category->name }}
                        </span>
                        <h2 class="text-lg font-bold mt-2 mb-3 line-clamp-2">
                            <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-600">
                                {{ $post->title }}
                            </a>
                        </h2>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}
                        </p>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <span>{{ $post->published_at->format('d M Y') }}</span>
                            <span>{{ $post->views }} views</span>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $posts->withQueryString()->links() }}
            </div>
            @else
            <div class="bg-white rounded-lg shadow-md p-12 text-center">
                <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h3 class="text-xl font-bold text-gray-700 mb-2">Tidak Ada Berita</h3>
                <p class="text-gray-500">Maaf, tidak ada berita yang sesuai dengan filter Anda.</p>
                <a href="{{ route('posts.index') }}" class="inline-block mt-4 text-blue-600 hover:text-blue-800">
                    Lihat Semua Berita
                </a>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
