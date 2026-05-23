@extends('layouts.app')

@section('title', 'Tentang Saya - Blog Pribadi')

@section('content')
    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">Halo, Saya Creator Blog Ini</h1>
            <p class="text-xl text-gray-600 leading-relaxed">
                Selamat datang di sudut kecil internet saya. Di sini, saya berbagi pemikiran, pengalaman,
                dan pembelajaran seputar teknologi, desain, produktivitas, dan hal-hal yang membuat saya
                penasaran.
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="pb-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-bold mb-6">Mengapa Blog Ini Ada?</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Saya percaya bahwa menulis adalah cara terbaik untuk belajar. Setiap artikel yang saya
                        tulis adalah hasil dari eksplorasi, eksperimen, dan refleksi pribadi. Blog ini bukan
                        hanya untuk berbagi, tapi juga untuk mendokumentasikan perjalanan saya dalam memahami
                        dunia digital.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Jika tulisan saya bisa membantu Anda menemukan perspektif baru, menyelesaikan masalah,
                        atau sekadar menemani waktu membaca Anda, saya sudah sangat senang. Mari kita belajar
                        dan bertumbuh bersama!
                    </p>
                    <div class="flex space-x-4">
                        <a href="{{ route('articles') }}"
                            class="bg-black text-white px-8 py-3 font-medium rounded-lg hover:bg-gray-800 transition">Baca
                            Artikel Saya</a>
                        <a href="#contact"
                            class="border border-gray-300 px-8 py-3 font-medium rounded-lg hover:border-black transition">Hubungi
                            Saya</a>
                    </div>
                </div>
                <div class="aspect-[4/3] bg-gray-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-20 h-20 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Yang Saya Pegang Teguh</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Prinsip yang memandu setiap tulisan dan karya saya</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Kualitas</h3>
                    <p class="text-gray-600">Setiap artikel ditulis dengan riset mendalam dan perhatian detail</p>
                </div>

                <div class="bg-white p-8 rounded-2xl text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Pembelajaran</h3>
                    <p class="text-gray-600">Berbagi pengetahuan untuk membantu pembaca tumbuh dan berkembang</p>
                </div>

                <div class="bg-white p-8 rounded-2xl text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Inovasi</h3>
                    <p class="text-gray-600">Mengeksplorasi ide-ide baru dan tren teknologi terkini</p>
                </div>

                <div class="bg-white p-8 rounded-2xl text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Komunitas</h3>
                    <p class="text-gray-600">Membangun koneksi dan berbagi dengan sesama kreator</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Perjalanan Sejauh Ini</h2>
                <p class="text-xl text-gray-600">Angka-angka yang mencerminkan dedikasi saya</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-8 bg-gray-50 rounded-2xl">
                    <div class="text-5xl font-bold mb-3">{{ $totalArticles }}+</div>
                    <p class="text-gray-600 font-medium">Artikel Ditulis</p>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-2xl">
                    <div class="text-5xl font-bold mb-3">{{ number_format($totalReaders) }}+</div>
                    <p class="text-gray-600 font-medium">Pembaca yang Berkunjung</p>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-2xl">
                    <div class="text-5xl font-bold mb-3">{{ $yearsWriting }}+</div>
                    <p class="text-gray-600 font-medium">Tahun Menulis</p>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-2xl">
                    <div class="text-5xl font-bold mb-3">{{ $totalCategories }}</div>
                    <p class="text-gray-600 font-medium">Topik Favorit</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-6 bg-gray-50">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Hubungi Saya</h2>
                <p class="text-xl text-gray-600">Punya pertanyaan atau ide kolaborasi? Saya siap mendengarkan</p>
            </div>

            <div class="bg-white rounded-2xl p-8 md:p-12">
                <form class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold mb-2">Nama Lengkap</label>
                            <input type="text" placeholder="John Doe"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-black transition" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-2">Email</label>
                            <input type="email" placeholder="john@example.com"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-black transition" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Subjek</label>
                        <input type="text" placeholder="Topik pesan Anda"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-black transition" />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Pesan</label>
                        <textarea rows="6" placeholder="Tulis pesan Anda di sini..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-black transition resize-none"></textarea>
                    </div>
                    <button
                        class="w-full bg-black text-white px-8 py-4 font-medium rounded-lg hover:bg-gray-800 transition">Kirim
                        Pesan</button>
                </form>
            </div>
        </div>
    </section>
@endsection
