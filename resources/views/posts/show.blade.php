@extends('layouts.app')

@section('title', $post->title . ' - DKR Pramuka UIN')
@section('description', $post->excerpt ?? Str::limit(strip_tags($post->content), 155))

@section('content')
<article class="bg-gradient-to-b from-blue-50 via-white to-orange-50">
    <!-- Breadcrumb dengan Background Modern -->
    <div class="bg-gradient-to-r from-blue-600 via-blue-700 to-blue-900 text-white py-6">
        <div class="container mx-auto px-4">
            <nav class="flex items-center gap-2 text-sm max-w-4xl mx-auto">
                <a href="{{ route('home') }}" class="hover:text-yellow-300 transition-colors flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Beranda
                </a>
                <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('posts.index') }}" class="hover:text-yellow-300 transition-colors">
                    Berita
                </a>
                <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-blue-100 truncate">{{ Str::limit($post->title, 50) }}</span>
            </nav>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <!-- Article Header Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-t-4 border-yellow-400 mb-8">
                <div class="p-8 md:p-12">
                    <!-- Category Badge -->
                    <div class="mb-6">
                        <span class="inline-flex items-center gap-2 px-5 py-2 bg-gradient-to-r from-yellow-400 via-orange-500 to-orange-600 text-white rounded-full text-sm font-bold shadow-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            {{ $post->category->name }}
                        </span>
                    </div>

                    <!-- Article Title -->
                    <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-6 leading-tight">
                        {{ $post->title }}
                    </h1>

                    <!-- Meta Information dengan Icon Colorful -->
                    <div class="flex flex-wrap items-center gap-6 text-sm text-gray-600 pb-6 mb-6 border-b-2 border-gradient">
                        <div class="flex items-center gap-2 group">
                            <div class="p-2 bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="font-medium">{{ $post->user->name }}</span>
                        </div>

                        <div class="flex items-center gap-2 group">
                            <div class="p-2 bg-orange-100 rounded-lg group-hover:bg-orange-200 transition-colors">
                                <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="font-medium">{{ $post->published_at->format('d F Y, H:i') }} WIB</span>
                        </div>

                        <div class="flex items-center gap-2 group">
                            <div class="p-2 bg-yellow-100 rounded-lg group-hover:bg-yellow-200 transition-colors">
                                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="font-medium">{{ number_format($post->views) }} views</span>
                        </div>
                    </div>

                    <!-- Featured Image dengan Border -->
                    @if($post->featured_image)
                    <figure class="mb-8 -mx-8 md:-mx-12">
                        <div class="relative overflow-hidden rounded-xl shadow-2xl group">
                            <img src="{{ Storage::url($post->featured_image) }}"
                                 alt="{{ $post->title }}"
                                 class="w-full h-auto group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </figure>
                    @endif

                    <!-- Content dengan Typography Modern -->
                    <div class="prose prose-lg max-w-none text-gray-700">
                        <!-- Custom Prose Styling -->
                        <style>
                            .prose h2 {
                                color: #1e3a8a;
                                font-weight: 800;
                                margin-top: 2rem;
                                margin-bottom: 1rem;
                                border-left: 4px solid #f59e0b;
                                padding-left: 1rem;
                            }
                            .prose h3 {
                                color: #1e40af;
                                font-weight: 700;
                            }
                            .prose a {
                                color: #ea580c;
                                text-decoration: underline;
                                transition: color 0.3s;
                            }
                            .prose a:hover {
                                color: #f59e0b;
                            }
                            .prose strong {
                                color: #1e3a8a;
                                font-weight: 700;
                            }
                            .prose blockquote {
                                border-left: 4px solid #f59e0b;
                                background: linear-gradient(to right, #fef3c7, #fff);
                                padding: 1rem 1.5rem;
                                border-radius: 0.5rem;
                                font-style: italic;
                                color: #1e40af;
                            }
                            .prose ul li::marker {
                                color: #ea580c;
                            }
                            .prose ol li::marker {
                                color: #2563eb;
                                font-weight: bold;
                            }
                        </style>
                        {!! $post->content !!}
                    </div>

                    <!-- Share Buttons dengan Design Modern -->
                    <div class="mt-12 pt-8 border-t-2 border-gray-100">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-2 bg-gradient-to-br from-blue-600 to-orange-500 rounded-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                </svg>
                            </div>
                            <p class="text-lg font-bold text-blue-900">Bagikan Artikel Ini</p>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('posts.show', $post->slug)) }}"
                               target="_blank"
                               class="group flex flex-col items-center gap-3 bg-gradient-to-br from-blue-600 to-blue-700 text-white p-6 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all shadow-lg hover:shadow-xl hover:scale-105">
                                <svg class="w-8 h-8 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                <span class="font-bold text-sm">Facebook</span>
                            </a>

                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('posts.show', $post->slug)) }}&text={{ urlencode($post->title) }}"
                               target="_blank"
                               class="group flex flex-col items-center gap-3 bg-gradient-to-br from-sky-500 to-sky-600 text-white p-6 rounded-xl hover:from-sky-600 hover:to-sky-700 transition-all shadow-lg hover:shadow-xl hover:scale-105">
                                <svg class="w-8 h-8 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                                <span class="font-bold text-sm">Twitter</span>
                            </a>

                            <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . route('posts.show', $post->slug)) }}"
                               target="_blank"
                               class="group flex flex-col items-center gap-3 bg-gradient-to-br from-green-600 to-green-700 text-white p-6 rounded-xl hover:from-green-700 hover:to-green-800 transition-all shadow-lg hover:shadow-xl hover:scale-105">
                                <svg class="w-8 h-8 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                                <span class="font-bold text-sm">WhatsApp</span>
                            </a>

                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('posts.show', $post->slug)) }}"
                               target="_blank"
                               class="group flex flex-col items-center gap-3 bg-gradient-to-br from-orange-500 to-orange-600 text-white p-6 rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all shadow-lg hover:shadow-xl hover:scale-105">
                                <svg class="w-8 h-8 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                <span class="font-bold text-sm">LinkedIn</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Posts dengan Design Modern -->
            @if($relatedPosts->count() > 0)
            <div class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-orange-500">
                <div class="flex items-center gap-3 mb-8">
                    <div class="p-2 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-extrabold text-blue-900">Berita Terkait</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($relatedPosts as $related)
                    <article class="group bg-gradient-to-br from-white to-blue-50 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-500 hover:-translate-y-1 border-l-4 border-yellow-400">
                        <div class="flex">
                            <div class="w-32 flex-shrink-0 relative overflow-hidden">
                                @if($related->featured_image)
                                <img src="{{ Storage::url($related->featured_image) }}"
                                     alt="{{ $related->title }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                @else
                                <div class="w-full h-full bg-gradient-to-br from-blue-600 via-blue-700 to-orange-500 flex items-center justify-center">
                                    <span class="text-white text-3xl">📰</span>
                                </div>
                                @endif
                            </div>

                            <div class="p-5 flex-1">
                                <span class="inline-block px-3 py-1 bg-gradient-to-r from-orange-100 to-yellow-100 text-orange-700 text-xs font-bold rounded-full mb-2">
                                    {{ $related->category->name }}
                                </span>
                                <h4 class="text-base font-bold line-clamp-2 text-blue-900 group-hover:text-orange-600 transition-colors mb-3">
                                    <a href="{{ route('posts.show', $related->slug) }}">
                                        {{ $related->title }}
                                    </a>
                                </h4>
                                <div class="flex items-center gap-2 text-xs text-gray-500">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="font-medium">{{ $related->published_at->format('d M Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</article>

<!-- Custom CSS -->
<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}
</style>
@endsection
