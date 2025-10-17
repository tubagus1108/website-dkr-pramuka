@extends('layouts.app')

@section('title', $event->title . ' - DKR Pramuka UIN')

@section('content')
<!-- Hero Section with Parallax Effect -->
<section class="relative h-[70vh] overflow-hidden">
    @if($event->image)
    <div class="absolute inset-0">
        <img src="{{ Storage::url($event->image) }}"
             alt="{{ $event->title }}"
             class="w-full h-full object-cover transform scale-105">
    </div>
    @else
    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 left-10 w-72 h-72 bg-yellow-400 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>
    </div>
    @endif

    <!-- Overlay Gradient -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>

    <!-- Content -->
    <div class="absolute inset-0 flex items-end">
        <div class="container mx-auto px-4 pb-16">
            <div class="max-w-4xl">
                <!-- Breadcrumb -->
                <nav class="mb-6 flex items-center gap-2 text-sm text-white/80">
                    <a href="{{ route('home') }}" class="hover:text-yellow-300 transition flex items-center gap-1">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        Beranda
                    </a>
                    <svg class="w-4 h-4 text-blue-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <a href="{{ route('events.index') }}" class="hover:text-yellow-300 transition">Kegiatan</a>
                    <svg class="w-4 h-4 text-blue-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-white font-semibold">Detail</span>
                </nav>

                <!-- Status Badge with Animation -->
                <div class="mb-6">
                    @if($event->status == 'upcoming')
                    <span class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-full text-sm font-bold shadow-2xl shadow-blue-500/50 animate-bounce">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Segera Hadir
                    </span>
                    @elseif($event->status == 'ongoing')
                    <span class="inline-flex items-center gap-2 bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-3 rounded-full text-sm font-bold shadow-2xl shadow-orange-500/50 animate-pulse">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
                        </span>
                        Sedang Berlangsung
                    </span>
                    @else
                    <span class="inline-flex items-center gap-2 bg-gradient-to-r from-yellow-500 to-yellow-600 text-blue-900 px-6 py-3 rounded-full text-sm font-bold shadow-2xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Telah Selesai
                    </span>
                    @endif
                </div>

                <!-- Title -->
                <h1 class="text-5xl md:text-6xl font-black text-white mb-6 leading-tight drop-shadow-2xl">
                    {{ $event->title }}
                </h1>

                <!-- Meta Info -->
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center gap-3 bg-white/10 backdrop-blur-md rounded-xl px-5 py-3 border border-white/20">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-2 rounded-lg shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-yellow-300 text-xs font-bold uppercase">Tanggal</div>
                            <div class="text-white font-bold">{{ $event->start_date->format('d M Y') }}</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 bg-white/10 backdrop-blur-md rounded-xl px-5 py-3 border border-white/20">
                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-2 rounded-lg shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-yellow-300 text-xs font-bold uppercase">Waktu</div>
                            <div class="text-white font-bold">{{ $event->start_date->format('H:i') }} WIB</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 bg-white/10 backdrop-blur-md rounded-xl px-5 py-3 border border-white/20">
                        <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 p-2 rounded-lg shadow-lg">
                            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-yellow-300 text-xs font-bold uppercase">Lokasi</div>
                            <div class="text-white font-bold">{{ Str::limit($event->location, 20) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="bg-yellow-400 p-2 rounded-full">
            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-gradient-to-b from-blue-50 via-white to-orange-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- About Event Card -->
                <div class="bg-white rounded-3xl shadow-xl p-8 border-t-4 border-blue-600 transform hover:scale-[1.01] transition-all">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-4 rounded-2xl shadow-xl">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-extrabold text-blue-900">Tentang Kegiatan</h2>
                            <p class="text-gray-600 font-medium">Deskripsi lengkap event</p>
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <style>
                            .prose p {
                                margin-bottom: 1rem;
                            }
                            .prose strong {
                                color: #1e3a8a;
                                font-weight: 700;
                            }
                        </style>
                        {!! nl2br(e($event->description)) !!}
                    </div>
                </div>

                <!-- Event Timeline -->
                <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-orange-600 rounded-3xl shadow-2xl p-8 text-white border-t-4 border-yellow-400">
                    <h3 class="text-3xl font-extrabold mb-8 flex items-center gap-3">
                        <div class="bg-white/20 p-2 rounded-xl">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        Timeline Event
                    </h3>

                    <div class="space-y-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border-2 border-white/30 hover:bg-white/20 transition-all">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="text-yellow-300 text-sm mb-2 font-bold uppercase">Mulai</div>
                                    <div class="font-extrabold text-2xl mb-1">{{ $event->start_date->format('d F Y') }}</div>
                                    <div class="text-blue-100 font-semibold">Pukul {{ $event->start_date->format('H:i') }} WIB</div>
                                </div>
                                <div class="bg-gradient-to-br from-yellow-400 to-orange-500 p-4 rounded-2xl shadow-xl">
                                    <svg class="w-10 h-10 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 rounded-full px-6 py-3 text-sm font-black shadow-xl">
                                Durasi: {{ $event->start_date->diffInDays($event->end_date) + 1 }} Hari
                            </div>
                        </div>

                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border-2 border-white/30 hover:bg-white/20 transition-all">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="text-yellow-300 text-sm mb-2 font-bold uppercase">Selesai</div>
                                    <div class="font-extrabold text-2xl mb-1">{{ $event->end_date->format('d F Y') }}</div>
                                    <div class="text-blue-100 font-semibold">Pukul {{ $event->end_date->format('H:i') }} WIB</div>
                                </div>
                                <div class="bg-gradient-to-br from-yellow-400 to-orange-500 p-4 rounded-2xl shadow-xl">
                                    <svg class="w-10 h-10 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Section -->
                @if($event->galleries && $event->galleries->count() > 0)
                <div class="bg-white rounded-3xl shadow-xl p-8 border-t-4 border-orange-500">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-4 rounded-2xl shadow-xl">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-extrabold text-blue-900">Dokumentasi</h2>
                            <p class="text-gray-600 font-semibold">{{ $event->galleries->count() }} Foto</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach($event->galleries as $gallery)
                        <div class="group relative overflow-hidden rounded-2xl aspect-square border-4 border-yellow-400 hover:border-orange-500 transition-all">
                            <img src="{{ Storage::url($gallery->image) }}"
                                 alt="{{ $gallery->title }}"
                                 class="w-full h-full object-cover group-hover:scale-125 transition duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-all flex items-end p-5">
                                <p class="text-white text-sm font-bold">{{ $gallery->title }}</p>
                            </div>

                            <!-- Zoom Icon -->
                            <div class="absolute top-3 right-3 bg-gradient-to-br from-yellow-400 to-orange-500 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-all shadow-xl">
                                <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                </svg>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Right Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Info Detail Card - Sticky -->
                <div class="sticky top-24 space-y-6">
                    <!-- Main Info Card -->
                    <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 rounded-3xl shadow-2xl p-8 text-white border-t-4 border-yellow-400">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="bg-yellow-400 p-3 rounded-xl shadow-xl">
                                <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="font-extrabold text-2xl">Informasi Detail</h3>
                        </div>

                        <div class="space-y-4">
                            <!-- Date -->
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5 border-2 border-white/20 hover:bg-white/20 transition-all">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-2 rounded-lg shadow-lg">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div class="text-yellow-300 text-sm font-bold uppercase">Tanggal Mulai</div>
                                </div>
                                <div class="pl-11">
                                    <div class="font-extrabold text-xl">{{ $event->start_date->format('d F Y') }}</div>
                                    <div class="text-sm text-blue-200 font-semibold">{{ $event->start_date->format('H:i') }} WIB</div>
                                </div>
                            </div>

                            <!-- End Date -->
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5 border-2 border-white/20 hover:bg-white/20 transition-all">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-2 rounded-lg shadow-lg">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div class="text-yellow-300 text-sm font-bold uppercase">Tanggal Selesai</div>
                                </div>
                                <div class="pl-11">
                                    <div class="font-extrabold text-xl">{{ $event->end_date->format('d F Y') }}</div>
                                    <div class="text-sm text-blue-200 font-semibold">{{ $event->end_date->format('H:i') }} WIB</div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5 border-2 border-white/20 hover:bg-white/20 transition-all">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 p-2 rounded-lg shadow-lg">
                                        <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div class="text-yellow-300 text-sm font-bold uppercase">Lokasi</div>
                                </div>
                                <div class="pl-11">
                                    <div class="font-bold text-lg">{{ $event->location }}</div>
                                </div>
                            </div>

                            <!-- Duration -->
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5 border-2 border-white/20 hover:bg-white/20 transition-all">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-2 rounded-lg shadow-lg">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div class="text-yellow-300 text-sm font-bold uppercase">Durasi</div>
                                </div>
                                <div class="pl-11">
                                    <div class="font-extrabold text-2xl">
                                        {{ $event->start_date->diffInDays($event->end_date) + 1 }} Hari
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="mt-8">
                            <button onclick="shareEvent()" class="w-full bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 font-black py-4 rounded-2xl hover:from-orange-500 hover:to-orange-600 hover:text-white transition-all shadow-2xl transform hover:scale-105 flex items-center justify-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                </svg>
                                Bagikan Event
                            </button>
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="bg-white rounded-3xl shadow-xl p-6 border-t-4 border-orange-500">
                        <h3 class="font-extrabold text-xl mb-6 flex items-center gap-2 text-blue-900">
                            <div class="bg-orange-100 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </div>
                            Kontak Informasi
                        </h3>

                        <div class="space-y-3">
                            <a href="mailto:dkr@uinsultanah.ac.id" class="flex items-center gap-3 p-4 rounded-xl hover:bg-blue-50 transition-all group border-2 border-transparent hover:border-blue-200">
                                <div class="bg-blue-100 group-hover:bg-blue-200 p-3 rounded-xl transition-all">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-xs text-gray-500 font-bold uppercase">Email</div>
                                    <div class="font-bold text-sm text-gray-800">dkr@uinsultanah.ac.id</div>
                                </div>
                            </a>

                            <a href="https://wa.me/62xxxxxxxxxx" class="flex items-center gap-3 p-4 rounded-xl hover:bg-orange-50 transition-all group border-2 border-transparent hover:border-orange-200">
                                <div class="bg-orange-100 group-hover:bg-orange-200 p-3 rounded-xl transition-all">
                                    <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-xs text-gray-500 font-bold uppercase">WhatsApp</div>
                                    <div class="font-bold text-sm text-gray-800">+62 xxx-xxxx-xxxx</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Stats Card -->
                    <div class="bg-gradient-to-br from-yellow-400 via-orange-500 to-orange-600 rounded-3xl shadow-2xl p-6 text-white border-t-4 border-blue-600">
                        <h3 class="font-extrabold text-xl mb-6 flex items-center gap-2">
                            <div class="bg-white/20 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            Quick Stats
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-5 text-center border-2 border-white/30 hover:bg-white/30 transition-all">
                                <div class="text-4xl font-black mb-2">
                                    {{ $event->start_date->diffInDays($event->end_date) + 1 }}
                                </div>
                                <div class="text-xs text-blue-100 font-bold uppercase">Hari</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-5 text-center border-2 border-white/30 hover:bg-white/30 transition-all">
                                <div class="text-4xl font-black mb-2">
                                    {{ $event->galleries ? $event->galleries->count() : 0 }}
                                </div>
                                <div class="text-xs text-blue-100 font-bold uppercase">Foto</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Share Script -->
<script>
function shareEvent() {
    if (navigator.share) {
        navigator.share({
            title: '{{ $event->title }}',
            text: 'Ikuti kegiatan: {{ $event->title }} - {{ $event->start_date->format("d M Y") }}',
            url: window.location.href
        }).catch(err => console.log('Error sharing:', err));
    } else {
        // Fallback copy to clipboard
        navigator.clipboard.writeText(window.location.href);
        alert('Link berhasil disalin!');
    }
}
</script>

<!-- Custom CSS -->
<style>
@keyframes ping {
    75%, 100% {
        transform: scale(2);
        opacity: 0;
    }
}

.animate-ping {
    animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}
</style>
@endsection
