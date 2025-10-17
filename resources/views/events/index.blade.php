@extends('layouts.app')

@section('title', 'Kegiatan - DKR Pramuka UIN')

@section('content')
<!-- Hero Section dengan Gradient Modern -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-orange-500 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block bg-yellow-400/20 backdrop-blur-sm px-5 py-2 rounded-full text-sm font-bold mb-6 border border-yellow-300/30">
                📅 Event & Activities
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                Kegiatan <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-400">Pramuka</span>
            </h1>
            <p class="text-xl text-blue-50 leading-relaxed">
                Ikuti berbagai kegiatan seru dan inspiratif bersama DKR Pramuka UIN Sultanah Nahrasiyah
            </p>
        </div>
    </div>

    <!-- Wave Separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-12 fill-current text-white" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</section>

<!-- Stats Section dengan Design Modern -->
<section class="bg-white py-12 shadow-lg -mt-8 relative z-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="group text-center bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-blue-600">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 text-white rounded-xl mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="text-4xl font-black text-blue-900 mb-2">{{ $upcomingEvents->total() }}</div>
                <div class="text-sm font-bold text-blue-700">Kegiatan Mendatang</div>
            </div>

            <div class="group text-center bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-orange-500">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 text-white rounded-xl mb-4 group-hover:scale-110 transition-transform animate-pulse">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div class="text-4xl font-black text-orange-900 mb-2">{{ $ongoingEvents->count() }}</div>
                <div class="text-sm font-bold text-orange-700">Sedang Berlangsung</div>
            </div>

            <div class="group text-center bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-yellow-400">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 text-blue-900 rounded-xl mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-black text-yellow-900 mb-2">{{ $completedEvents->total() }}</div>
                <div class="text-sm font-bold text-yellow-700">Selesai</div>
            </div>

            <div class="group text-center bg-gradient-to-br from-blue-50 via-orange-50 to-yellow-50 rounded-2xl p-6 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-gradient">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-600 via-orange-500 to-yellow-500 text-white rounded-xl mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <div class="text-4xl font-black text-blue-900 mb-2">{{ $upcomingEvents->total() + $completedEvents->total() }}</div>
                <div class="text-sm font-bold text-gray-700">Total Kegiatan</div>
            </div>
        </div>
    </div>
</section>

<!-- Ongoing Events dengan Design Alert -->
@if($ongoingEvents->count() > 0)
<section class="bg-gradient-to-br from-orange-50 via-yellow-50 to-orange-50 py-16 border-b-4 border-orange-500">
    <div class="container mx-auto px-4">
        <div class="flex items-center gap-4 mb-10">
            <div class="relative">
                <div class="absolute inset-0 bg-orange-500 rounded-2xl blur-lg opacity-50 animate-pulse"></div>
                <div class="relative bg-gradient-to-br from-orange-500 to-orange-600 text-white p-4 rounded-2xl">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
            </div>
            <div>
                <h2 class="text-4xl font-extrabold text-blue-900 mb-1">Sedang Berlangsung</h2>
                <p class="text-gray-700 font-medium">Kegiatan yang sedang berjalan saat ini</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($ongoingEvents as $event)
            <a href="{{ route('events.show', $event->slug) }}"
               class="group bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-3 transition-all duration-500 border-4 border-orange-400 hover:border-orange-600">
                <div class="relative">
                    @if($event->image)
                    <img src="{{ Storage::url($event->image) }}"
                         alt="{{ $event->title }}"
                         class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
                    @else
                    <div class="w-full h-64 bg-gradient-to-br from-orange-500 via-orange-600 to-yellow-500 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    @endif

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="absolute top-4 right-4">
                        <span class="flex items-center gap-2 bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-black shadow-2xl animate-pulse">
                            <span class="w-3 h-3 bg-white rounded-full animate-ping"></span>
                            LIVE
                        </span>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-4 text-blue-900 group-hover:text-orange-600 transition line-clamp-2 min-h-[3.5rem]">
                        {{ $event->title }}
                    </h3>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-blue-100 rounded-lg">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700 font-medium">{{ $event->start_date->format('d M Y') }} - {{ $event->end_date->format('d M Y') }}</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-orange-100 rounded-lg">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700 font-medium line-clamp-1">{{ $event->location }}</span>
                        </div>
                    </div>

                    <div class="pt-4 border-t-2 border-gray-100">
                        <span class="text-orange-600 font-bold group-hover:gap-3 flex items-center gap-2 transition-all">
                            Lihat Detail
                            <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Upcoming Events dengan Card Premium -->
<section class="container mx-auto px-4 py-20">
    <div class="flex items-center justify-between mb-12">
        <div class="flex items-center gap-4">
            <div class="p-4 bg-gradient-to-br from-blue-600 to-blue-700 text-white rounded-2xl shadow-xl">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-4xl font-extrabold text-blue-900 mb-1">Kegiatan Mendatang</h2>
                <p class="text-gray-600 font-medium">Jangan lewatkan kegiatan seru kami</p>
            </div>
        </div>
    </div>

    @if($upcomingEvents->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($upcomingEvents as $event)
        <a href="{{ route('events.show', $event->slug) }}"
           class="group bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transform hover:-translate-y-3 transition-all duration-500 border-t-4 border-yellow-400">

            <div class="relative">
                @if($event->image)
                <img src="{{ Storage::url($event->image) }}"
                     alt="{{ $event->title }}"
                     class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
                @else
                <div class="w-full h-64 bg-gradient-to-br from-blue-600 via-blue-700 to-orange-500 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                @endif

                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <!-- Date Badge dengan Design Floating -->
                <div class="absolute top-4 left-4">
                    <div class="bg-white rounded-2xl shadow-2xl p-4 text-center transform group-hover:scale-110 transition-transform">
                        <div class="text-4xl font-black text-blue-900">{{ $event->start_date->format('d') }}</div>
                        <div class="text-xs font-bold text-orange-600 uppercase mt-1">{{ $event->start_date->format('M') }}</div>
                    </div>
                </div>

                <!-- Status Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-full text-xs font-bold shadow-xl">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Akan Datang
                    </span>
                </div>
            </div>

            <div class="p-6">
                <h3 class="text-xl font-bold mb-3 text-blue-900 group-hover:text-orange-600 transition line-clamp-2 min-h-[3.5rem]">
                    {{ $event->title }}
                </h3>

                <p class="text-gray-600 text-sm mb-5 line-clamp-2 leading-relaxed">
                    {{ Str::limit($event->description, 80) }}
                </p>

                <div class="space-y-3 mb-6">
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-orange-100 rounded-lg">
                            <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700 font-medium">{{ $event->start_date->format('H:i') }} - {{ $event->end_date->format('H:i') }} WIB</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="p-2 bg-blue-100 rounded-lg">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-700 font-medium line-clamp-1">{{ $event->location }}</span>
                    </div>
                </div>

                <div class="pt-4 border-t-2 border-gray-100 flex items-center justify-between">
                    <span class="text-blue-600 font-bold group-hover:gap-3 flex items-center gap-2 transition-all">
                        Lihat Detail
                        <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </span>

                    @php
                        $daysUntil = now()->diffInDays($event->start_date, false);
                    @endphp
                    @if($daysUntil >= 0 && $daysUntil <= 7)
                    <span class="inline-flex items-center gap-1 text-xs bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 px-3 py-1 rounded-full font-bold shadow-lg">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ $daysUntil }} hari lagi
                    </span>
                    @endif
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <div class="mt-12">
        {{ $upcomingEvents->links() }}
    </div>
    @else
    <div class="bg-white rounded-2xl shadow-xl p-16 text-center border-t-4 border-blue-400">
        <div class="inline-flex items-center justify-center w-32 h-32 bg-gradient-to-br from-blue-100 to-orange-100 rounded-full mb-6">
            <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </div>
        <h3 class="text-2xl font-extrabold text-blue-900 mb-3">Belum Ada Kegiatan</h3>
        <p class="text-gray-600 text-lg">Tidak ada kegiatan yang dijadwalkan saat ini.</p>
    </div>
    @endif
</section>

<!-- Completed Events dengan Design Archive -->
@if($completedEvents->count() > 0)
<section class="bg-gradient-to-br from-blue-50 via-white to-orange-50 py-20">
    <div class="container mx-auto px-4">
        <div class="flex items-center gap-4 mb-12">
            <div class="p-4 bg-gradient-to-br from-yellow-400 to-orange-500 text-blue-900 rounded-2xl shadow-xl">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-4xl font-extrabold text-blue-900 mb-1">Kegiatan Selesai</h2>
                <p class="text-gray-600 font-medium">Dokumentasi kegiatan yang telah terlaksana</p>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($completedEvents as $event)
            <a href="{{ route('events.show', $event->slug) }}"
               class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border-l-4 border-yellow-400">

                <div class="relative overflow-hidden">
                    @if($event->image)
                    <img src="{{ Storage::url($event->image) }}"
                         alt="{{ $event->title }}"
                         class="w-full h-48 object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                    @else
                    <div class="w-full h-48 bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center group-hover:from-blue-600 group-hover:to-orange-500 transition-all duration-500">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    @endif

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>

                <div class="p-5">
                    <div class="flex items-center gap-2 mb-2">
                        <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-xs text-gray-500 font-semibold">{{ $event->start_date->format('d M Y') }}</span>
                    </div>
                    <h3 class="font-bold text-sm text-blue-900 line-clamp-2 group-hover:text-orange-600 transition-colors">
                        {{ $event->title }}
                    </h3>
                </div>
            </a>
            @endforeach
        </div>

        <div class="mt-12">
            {{ $completedEvents->links() }}
        </div>
    </div>
</section>
@endif

<!-- Custom CSS -->
<style>
.line-clamp-1 {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

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

/* Animate Pulse for Live Badge */
@keyframes ping {
    75%, 100% {
        transform: scale(2);
        opacity: 0;
    }
}

.animate-ping {
    animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
}
</style>
@endsection
