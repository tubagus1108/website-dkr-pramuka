@extends('layouts.app')

@section('title', 'Galeri - DKR Pramuka UIN')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-24 overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-10 w-72 h-72 bg-yellow-400 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-orange-500 rounded-full blur-3xl animate-pulse delay-75"></div>
        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-yellow-300 rounded-full blur-3xl animate-pulse delay-100"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block bg-yellow-400/20 backdrop-blur-sm px-5 py-2 rounded-full text-sm font-bold mb-6 animate-bounce border border-yellow-300/30">
                📸 Photo Gallery
            </div>
            <h1 class="text-5xl md:text-6xl font-black mb-6 leading-tight drop-shadow-2xl">
                Galeri <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-400">Dokumentasi</span>
            </h1>
            <p class="text-xl text-blue-50 mb-8 leading-relaxed">
                Momen berharga dan kenangan indah dari setiap kegiatan DKR Pramuka UIN Sultanah Nahrasiyah
            </p>

            <!-- Stats -->
            <div class="flex flex-wrap gap-6">
                <div class="bg-white/10 backdrop-blur-md rounded-2xl px-8 py-5 border-2 border-white/20 hover:bg-white/20 transition-all">
                    <div class="text-4xl font-black text-yellow-400">{{ $galleries->total() }}</div>
                    <div class="text-sm text-blue-100 font-semibold">Total Foto</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-2xl px-8 py-5 border-2 border-white/20 hover:bg-white/20 transition-all">
                    <div class="text-4xl font-black text-orange-400">{{ $events->count() }}</div>
                    <div class="text-sm text-blue-100 font-semibold">Event</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- Filter Section -->
@if($events->count() > 0)
<section class="bg-white py-8 sticky top-0 z-40 shadow-lg border-b-2 border-orange-200">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between flex-wrap gap-4">
            <div class="flex items-center gap-3">
                <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-3 rounded-xl shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-extrabold text-blue-900 text-lg">Filter Galeri</h3>
                    <p class="text-sm text-gray-600 font-medium">Pilih berdasarkan event</p>
                </div>
            </div>

            <div class="flex gap-2 overflow-x-auto pb-2">
                <a href="{{ route('gallery.index') }}"
                   class="px-6 py-3 rounded-xl font-bold transition-all whitespace-nowrap shadow-lg {{ !request('event') ? 'bg-gradient-to-r from-blue-600 to-blue-700 text-white scale-105' : 'bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 hover:from-blue-50 hover:to-blue-100 hover:text-blue-900' }}">
                    🎯 Semua Foto
                </a>
                @foreach($events as $event)
                <a href="{{ route('gallery.index', ['event' => $event->slug]) }}"
                   class="px-6 py-3 rounded-xl font-bold transition-all whitespace-nowrap shadow-lg {{ request('event') == $event->slug ? 'bg-gradient-to-r from-orange-500 to-orange-600 text-white scale-105' : 'bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 hover:from-orange-50 hover:to-orange-100 hover:text-orange-900' }}">
                    📅 {{ $event->title }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

<!-- Gallery Grid Section -->
<section class="py-16 bg-gradient-to-b from-blue-50 via-white to-orange-50">
    <div class="container mx-auto px-4">
        @if($galleries->count() > 0)
        <!-- Masonry Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($galleries as $index => $gallery)
            <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 cursor-pointer bg-white border-4 border-transparent hover:border-yellow-400"
                 onclick="openLightbox({{ $index }})"
                 style="animation: fadeInUp 0.6s ease-out {{ $index * 0.1 }}s both;">

                <!-- Image -->
                <div class="relative overflow-hidden {{ $index % 5 == 0 ? 'row-span-2' : '' }}">
                    <img src="{{ Storage::url($gallery->image) }}"
                         alt="{{ $gallery->title }}"
                         class="w-full {{ $index % 5 == 0 ? 'h-96' : 'h-64' }} object-cover group-hover:scale-125 transition-transform duration-700"
                         loading="lazy">

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <!-- Content Overlay -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                        <h3 class="font-extrabold text-xl mb-3 text-yellow-300">{{ $gallery->title }}</h3>

                        @if($gallery->event)
                        <div class="flex items-center gap-2 text-sm mb-3 bg-white/10 backdrop-blur-sm rounded-lg px-3 py-2 inline-flex w-fit border border-white/20">
                            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-blue-100 font-semibold">{{ $gallery->event->title }}</span>
                        </div>
                        @endif

                        @if($gallery->description)
                        <p class="text-sm text-blue-100 line-clamp-2 mb-4 leading-relaxed">{{ $gallery->description }}</p>
                        @endif

                        <!-- View Button -->
                        <div class="flex items-center gap-2 text-sm font-bold bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 px-4 py-2 rounded-lg w-fit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            Lihat Foto
                        </div>
                    </div>

                    <!-- Corner Badge -->
                    <div class="absolute top-4 right-4">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 p-3 rounded-xl shadow-2xl opacity-0 group-hover:opacity-100 transition-all transform group-hover:rotate-12">
                            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $galleries->links() }}
        </div>
        @else
        <!-- Empty State -->
        <div class="max-w-md mx-auto text-center py-16">
            <div class="inline-flex items-center justify-center w-32 h-32 bg-gradient-to-br from-blue-100 via-orange-100 to-yellow-100 rounded-full mb-8 shadow-xl">
                <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="text-3xl font-extrabold text-blue-900 mb-4">Belum Ada Foto</h3>
            <p class="text-gray-600 text-lg mb-8">Galeri masih kosong. Foto dokumentasi akan segera ditambahkan.</p>
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-xl font-bold hover:from-orange-500 hover:to-orange-600 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Kembali ke Beranda
            </a>
        </div>
        @endif
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 bg-black/95 backdrop-blur-md z-50 hidden items-center justify-center p-4">
    <!-- Close Button -->
    <button onclick="closeLightbox()" class="absolute top-6 right-6 bg-gradient-to-br from-yellow-400 to-orange-500 text-blue-900 hover:from-orange-500 hover:to-orange-600 hover:text-white p-3 rounded-xl transition-all z-50 shadow-2xl transform hover:scale-110">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>

    <!-- Previous Button -->
    <button onclick="prevImage()" class="absolute left-6 bg-gradient-to-br from-blue-600 to-blue-700 text-white hover:from-blue-700 hover:to-blue-800 p-4 rounded-xl transition-all shadow-2xl transform hover:scale-110">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>

    <!-- Next Button -->
    <button onclick="nextImage()" class="absolute right-6 bg-gradient-to-br from-blue-600 to-blue-700 text-white hover:from-blue-700 hover:to-blue-800 p-4 rounded-xl transition-all shadow-2xl transform hover:scale-110">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>

    <!-- Image Container -->
    <div class="max-w-6xl w-full">
        <div class="relative">
            <img id="lightboxImage" src="" alt="" class="w-full h-auto rounded-2xl shadow-2xl border-4 border-yellow-400">
        </div>
        <div class="text-center mt-8 bg-white/10 backdrop-blur-md rounded-2xl p-6 border-2 border-white/20">
            <h3 id="lightboxTitle" class="text-3xl font-extrabold mb-3 text-yellow-300"></h3>
            <p id="lightboxEvent" class="text-blue-200 font-semibold text-lg"></p>
        </div>
    </div>
</div>

<!-- Styles & Scripts -->
<style>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.delay-75 {
    animation-delay: 0.75s;
}

.delay-100 {
    animation-delay: 1s;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 12px;
    height: 12px;
}

::-webkit-scrollbar-track {
    background: #f1f5f9;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, #2563eb, #ea580c);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, #1e40af, #c2410c);
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}
</style>

<script>
let currentImageIndex = 0;
const galleries = @json($galleries->items());

function openLightbox(index) {
    currentImageIndex = index;
    updateLightboxContent();
    document.getElementById('lightbox').classList.remove('hidden');
    document.getElementById('lightbox').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightbox').classList.add('hidden');
    document.getElementById('lightbox').classList.remove('flex');
    document.body.style.overflow = 'auto';
}

function updateLightboxContent() {
    const gallery = galleries[currentImageIndex];
    document.getElementById('lightboxImage').src = '/storage/' + gallery.image;
    document.getElementById('lightboxTitle').textContent = gallery.title;
    document.getElementById('lightboxEvent').textContent = gallery.event ? '📅 ' + gallery.event.title : '';
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % galleries.length;
    updateLightboxContent();
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + galleries.length) % galleries.length;
    updateLightboxContent();
}

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    if (document.getElementById('lightbox').classList.contains('flex')) {
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'ArrowLeft') prevImage();
        if (e.key === 'Escape') closeLightbox();
    }
});

// Close on click outside
document.getElementById('lightbox')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeLightbox();
    }
});
</script>
@endsection
