@extends('layouts.app')

@section('title', 'Kontak - DKR Pramuka UIN')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-28 overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-96 h-96 bg-yellow-400 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <div class="inline-block mb-6 px-5 py-2 bg-yellow-400/20 backdrop-blur-sm rounded-full text-sm font-bold border border-yellow-300/30">
                📞 Contact Us
            </div>
            <h1 class="text-5xl md:text-6xl font-black mb-6 leading-tight">
                Hubungi <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-400">Kami</span>
            </h1>
            <p class="text-xl text-blue-50 leading-relaxed">
                Ada pertanyaan atau ingin berkolaborasi? Kami siap membantu Anda!
            </p>
        </div>
    </div>

    <!-- Wave Separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 fill-current text-gray-50" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>
</section>

<!-- Main Contact Section -->
<section class="py-20 bg-gradient-to-b from-gray-50 via-blue-50 to-orange-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Contact Information Card -->
                <div class="space-y-6">
                    <!-- Main Info Card -->
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-t-4 border-blue-600 transform hover:scale-[1.02] transition-all duration-300">
                        <div class="p-8">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-4 rounded-2xl shadow-xl">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-extrabold text-blue-900">Informasi Kontak</h3>
                                    <p class="text-gray-600 font-semibold">Hubungi kami melalui</p>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <!-- Email -->
                                <a href="mailto:dkr@uinsultanah.ac.id" class="group flex items-start gap-4 p-5 rounded-2xl bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 transition-all border-l-4 border-blue-600">
                                    <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-3 rounded-xl shadow-lg group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-gray-500 uppercase mb-1">Email</div>
                                        <div class="font-bold text-blue-900 text-lg">dkr@uinsultanah.ac.id</div>
                                    </div>
                                </a>

                                <!-- Phone -->
                                <a href="tel:+62xxxxxxxxxx" class="group flex items-start gap-4 p-5 rounded-2xl bg-gradient-to-r from-orange-50 to-orange-100 hover:from-orange-100 hover:to-orange-200 transition-all border-l-4 border-orange-500">
                                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-3 rounded-xl shadow-lg group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-gray-500 uppercase mb-1">Telepon</div>
                                        <div class="font-bold text-orange-900 text-lg">+62 xxx-xxxx-xxxx</div>
                                    </div>
                                </a>

                                <!-- WhatsApp -->
                                <a href="https://wa.me/62xxxxxxxxxx" target="_blank" class="group flex items-start gap-4 p-5 rounded-2xl bg-gradient-to-r from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 transition-all border-l-4 border-green-600">
                                    <div class="bg-gradient-to-br from-green-600 to-green-700 p-3 rounded-xl shadow-lg group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-gray-500 uppercase mb-1">WhatsApp</div>
                                        <div class="font-bold text-green-900 text-lg">+62 xxx-xxxx-xxxx</div>
                                    </div>
                                </a>

                                <!-- Address -->
                                <div class="flex items-start gap-4 p-5 rounded-2xl bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-400">
                                    <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 p-3 rounded-xl shadow-lg">
                                        <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-gray-500 uppercase mb-1">Alamat</div>
                                        <div class="font-bold text-yellow-900 text-lg">Kampus UIN Sultanah Nahrasiyah<br>Banda Aceh, Indonesia</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Card -->
                    <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 rounded-3xl shadow-2xl p-8 text-white border-t-4 border-yellow-400">
                        <h3 class="text-2xl font-extrabold mb-6 flex items-center gap-3">
                            <div class="bg-yellow-400 p-2 rounded-xl">
                                <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                </svg>
                            </div>
                            Ikuti Kami
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="#" class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all border border-white/20">
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                <span class="font-bold">Facebook</span>
                            </a>
                            <a href="#" class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all border border-white/20">
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                                <span class="font-bold">Instagram</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Card -->
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-t-4 border-orange-500">
                    <div class="p-8">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-4 rounded-2xl shadow-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-extrabold text-blue-900">Kirim Pesan</h3>
                                <p class="text-gray-600 font-semibold">Isi formulir di bawah</p>
                            </div>
                        </div>

                        <form id="contactForm" class="space-y-6">
                            <!-- Name Input -->
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                                <div class="relative">
                                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    <input type="text"
                                           name="name"
                                           placeholder="Masukkan nama Anda"
                                           required
                                           class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all font-medium">
                                </div>
                            </div>

                            <!-- Email Input -->
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                                <div class="relative">
                                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <input type="email"
                                           name="email"
                                           placeholder="email@example.com"
                                           required
                                           class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all font-medium">
                                </div>
                            </div>

                            <!-- Subject Input -->
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Subjek</label>
                                <div class="relative">
                                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                        </svg>
                                    </div>
                                    <input type="text"
                                           name="subject"
                                           placeholder="Subjek pesan"
                                           required
                                           class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all font-medium">
                                </div>
                            </div>

                            <!-- Message Textarea -->
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Pesan</label>
                                <textarea name="message"
                                          placeholder="Tulis pesan Anda di sini..."
                                          rows="5"
                                          required
                                          class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all font-medium resize-none"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                    class="group w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-5 rounded-xl font-black text-lg hover:from-orange-500 hover:to-orange-600 transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105 flex items-center justify-center gap-3">
                                Kirim Pesan
                                <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Optional) -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-blue-900 mb-4">Lokasi Kami</h2>
                <p class="text-gray-600 text-lg font-semibold">Kunjungi sekretariat kami</p>
            </div>
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-4 border-yellow-400">
                <div class="aspect-video bg-gradient-to-br from-blue-100 to-orange-100 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-20 h-20 text-blue-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <p class="text-gray-600 font-bold text-lg">Peta Google Maps akan ditampilkan di sini</p>
                        <p class="text-gray-500 text-sm mt-2">Kampus UIN Sultanah Nahrasiyah, Banda Aceh</p>
                    </div>
                </div>
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

<!-- Form Handling Script -->
<script>
document.getElementById('contactForm')?.addEventListener('submit', function(e) {
    e.preventDefault();

    // Get form data
    const formData = new FormData(this);

    // Here you would typically send the data to your backend
    // For now, we'll just show an alert
    alert('Terima kasih! Pesan Anda akan segera kami proses.');

    // Reset form
    this.reset();
});
</script>
@endsection
