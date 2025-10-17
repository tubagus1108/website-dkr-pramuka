@extends('layouts.app')

@section('title', $post->title . ' - DKR Pramuka UIN')
@section('description', $post->excerpt ?? Str::limit(strip_tags($post->content), 155))

@section('content')
<article class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">
        <!-- Breadcrumb -->
        <nav class="mb-6 text-sm">
            <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800">Beranda</a>
            <span class="mx-2">/</span>
            <a href="{{ route('posts.index') }}" class="text-blue-600 hover:text-blue-800">Berita</a>
            <span class="mx-2">/</span>
            <span class="text-gray-600">{{ $post->title }}</span>
        </nav>

        <!-- Article Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
            <span class="inline-block bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold mb-4">
                {{ $post->category->name }}
            </span>

            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                {{ $post->title }}
            </h1>

            <div class="flex items-center gap-4 text-sm text-gray-600 border-b pb-4 mb-6">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                    <span>{{ $post->user->name }}</span>
                </div>
                <span>•</span>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                    <span>{{ $post->published_at->format('d F Y, H:i') }} WIB</span>
                </div>
                <span>•</span>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>{{ $post->views }} views</span>
                </div>
            </div>

            <!-- Featured Image -->
            @if($post->featured_image)
            <figure class="mb-8">
                <img src="{{ Storage::url($post->featured_image) }}"
                     alt="{{ $post->title }}"
                     class="w-full rounded-lg shadow-lg">
            </figure>
            @endif

            <!-- Content -->
            <div class="prose prose-lg max-w-none text-gray-700">
                {!! $post->content !!}
            </div>

            <!-- Share Buttons -->
            <div class="mt-8 pt-6 border-t">
                <p class="text-sm font-semibold text-gray-700 mb-3">Bagikan Artikel:</p>
                <div class="flex gap-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('posts.show', $post->slug)) }}"
                       target="_blank"
                       class="flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('posts.show', $post->slug)) }}&text={{ urlencode($post->title) }}"
                       target="_blank"
                       class="flex items-center gap-2 bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-600 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                        Twitter
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . route('posts.show', $post->slug)) }}"
                       target="_blank"
                       class="flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Posts -->
        @if($relatedPosts->count() > 0)
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Berita Terkait</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($relatedPosts as $related)
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition flex">
                    @if($related->featured_image)
                    <img src="{{ Storage::url($related->featured_image) }}"
                         alt="{{ $related->title }}"
                         class="w-32 h-32 object-cover">
                    @else
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <span class="text-white text-2xl">📰</span>
                    </div>
                    @endif
                    <div class="p-4 flex-1">
                        <span class="text-xs text-blue-600 font-semibold">
                            {{ $related->category->name }}
                        </span>
                        <h4 class="text-lg font-bold mt-1 mb-2 line-clamp-2">
                            <a href="{{ route('posts.show', $related->slug) }}" class="hover:text-blue-600">
                                {{ $related->title }}
                            </a>
                        </h4>
                        <p class="text-xs text-gray-500">
                            {{ $related->published_at->format('d M Y') }}
                        </p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</article>
@endsection
