@extends('layouts.main')

@section('content')
<style>
    /* === ANIMASI === */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInLeft {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(30px); }
        to { opacity: 1; transform: translateX(0); }
    }

    /* === ABOUT SECTION === */
    .about-section {
        animation: fadeIn 1s ease-in-out;
        min-height: 60vh;
    }

    .about-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        animation: fadeInLeft 1s ease-in-out;
    }

    .about-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
    }

    /* === DEVELOPER IMAGE === */
    .developer-section {
        animation: fadeInRight 1s ease-in-out;
    }

    .developer-image {
        max-width: 300px;
        width: 100%;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.4s ease;
        border: 4px solid white;
    }

    .developer-image:hover {
        transform: scale(1.05) rotate(2deg);
        box-shadow: 0 12px 30px rgba(102, 126, 234, 0.3);
    }

    /* === INFO LIST === */
    .info-list {
        list-style: none;
        padding: 0;
    }

    .info-list li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #e5e7eb;
    }

    .info-list li:last-child {
        border-bottom: none;
    }

    /* === GRADIENT BACKGROUND === */
    .gradient-bg {
    background: linear-gradient(135deg, #0f172a 0%, #0e7490 100%);

        padding: 2rem;
        border-radius: 1rem;
        color: white;
        margin-bottom: 2rem;
    }
</style>

<div class="about-section py-8">
    <!-- Header Section -->
    <div class="gradient-bg text-center mb-8 shadow-xl">
        <h1 class="text-4xl font-bold mb-3">Tentang Saya</h1>
        <p class="text-lg opacity-90">Belajar. Membangun. Berkarya dengan Laravel & Tailwind CSS.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        <!-- Kolom Kiri - Info -->
        <div class="lg:col-span-2">
            <div class="about-card bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                <div class="mb-6">
                    <h2 class="text-3xl font-bold text-indigo-600 mb-4">Haiii! 👋</h2>
                    <p class="text-lg text-gray-700 leading-relaxed mb-4">
                        Saya <strong class="text-indigo-600">Yosua Christian Adi Pratama</strong>, seorang mahasiswa 
                        <strong>Teknik Informatika</strong> di <strong>Universitas Semarang</strong>. 
                        Saat ini saya sedang mempelajari dan mengembangkan aplikasi berbasis web menggunakan 
                        framework <strong class="text-indigo-600">Laravel 12</strong>.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Proyek ini merupakan bagian dari tugas <em>Praktikum Rekayasa Web</em>, dengan tujuan 
                        untuk menerapkan konsep <strong>MVC (Model–View–Controller)</strong> dan 
                        <strong>Blade Template</strong> dalam membangun aplikasi web yang dinamis, efisien, 
                        dan modern menggunakan <strong class="text-indigo-600">Tailwind CSS</strong>.
                    </p>
                </div>

                <hr class="my-6 border-gray-200">

                <!-- Informasi Pribadi -->
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Informasi Pribadi
                    </h3>
                    <ul class="info-list space-y-3">
                        <li class="flex items-start">
                            <span class="font-semibold text-gray-700 w-40">Nama:</span>
                            <span class="text-gray-600">Yosua Christian Adi Pratama</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-semibold text-gray-700 w-40">NIM:</span>
                            <span class="text-gray-600">G.211.23.0016</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-semibold text-gray-700 w-40">Program Studi:</span>
                            <span class="text-gray-600">Teknik Informatika</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-semibold text-gray-700 w-40">Fakultas:</span>
                            <span class="text-gray-600">Teknologi Informasi dan Komunikasi</span>
                        </li>
                        <li class="flex items-start">
                            <span class="font-semibold text-gray-700 w-40">Kampus:</span>
                            <span class="text-gray-600">Universitas Semarang</span>
                        </li>
                    </ul>
                </div>

                <!-- Quote -->
                <div class="bg-gradient-to-r from-indigo-50 to-purple-50 border-l-4 border-indigo-500 p-4 rounded-r-lg">
                    <p class="text-gray-700 italic">
                        <svg class="w-8 h-8 text-indigo-400 mb-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <span class="text-base">
                            "Dengan Laravel, saya belajar bagaimana logika backend, desain frontend, dan database 
                            bisa saling terhubung secara harmonis untuk menciptakan aplikasi web yang handal dan menarik."
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan - Profile Image -->
        <div class="lg:col-span-1">
            <div class="developer-section bg-white rounded-2xl shadow-lg p-6 border border-gray-100 text-center sticky top-8">
                <div class="mb-4">
                    <img src="https://shop.musepaintbar.com/cdn/shop/files/PatrickStar.jpg?v=1700128315.png"
                         alt="Developer Image"
                         class="developer-image mx-auto mb-4">
                    <h4 class="text-xl font-bold text-gray-900 mb-1">I'am YozzZ</h4>
                    <p class="text-sm text-gray-500 mb-4">Calon Orang Sukses</p>
                </div>

                <hr class="my-4 border-gray-200">

                <!-- Tips Jadi Orang Sukses -->
                <div class="text-left">
                    <h5 class="font-semibold text-gray-800 mb-3 text-center">Tips Jadi Orang Sukses</h5>
                    <div class="grid grid-cols-3 gap-3">
                        <div class="bg-gray-50 rounded-lg p-2 text-center">
                            <img src="https://i.pinimg.com/736x/8b/19/75/8b19753759131b0eaf2a3ee262ecc6ce.jpg" alt="Beribadah" class="h-30 mx-auto mb-1">
                            <p class="text-xs text-gray-600">Beribadah</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBg2JUEdYiUetL8MF2b8372EdXIT8r1zdMhg&s.png" alt="Suka Menolong" class="h-30 mx-auto mb-1">
                            <p class="text-xs text-gray-600">Suka Menolong</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhCucGBY3C3z5E1E-y7_HI8PgNQXLvhOeS7g&s.png" alt="Punya Orang Dalam Yang Menjadi CEO Di Perusahaan Besar" class="h-20 mx-auto mb-1">
                            <p class="text-xs text-gray-600">Punya Orang Dalam Yang Menjadi CEO Di Perusahaan Besar</p>
                        </div>
                    </div>
                </div>

                <hr class="my-4 border-gray-200">

                <!-- Social Links -->
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
