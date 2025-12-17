@extends('layouts.main')

@section('content')
<style>
    /* === ANIMASI === */
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    /* === HERO SECTION (NEW THEME) === */
    .hero-section {
        background: linear-gradient(135deg, #0f172a 0%, #0e7490 100%);
        padding: 4rem 2rem;
        border-radius: 1.5rem;
        box-shadow: 0 20px 60px rgba(14, 116, 144, 0.35);
        animation: fadeInDown 1s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.07) 0%, transparent 70%);
        animation: float 6s ease-in-out infinite;
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .hero-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 6px rgba(0,0,0,0.3);
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: rgba(255,255,255,0.85);
        margin-bottom: 2rem;
    }

    .hero-btn {
        background: #06b6d4;
        color: white;
        padding: 0.875rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(0,0,0,0.25);
        transition: all 0.3s ease;
        display: inline-block;
        text-decoration: none;
    }

    .hero-btn:hover {
        background: #38bdf8;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(56, 189, 248, 0.4);
    }

    /* === CARD FEATURES === */
    .feature-card {
        background: white;
        border-radius: 1rem;
        padding: 2rem;
        border: 1px solid #cbd5e1;
        transition: all 0.4s ease;
        animation: fadeInUp 1s ease-in-out;
        box-shadow: 0 4px 6px rgba(0,0,0,0.07);
    }

    .feature-card:hover {
        transform: translateY(-10px);
        border-color: #0ea5e9;
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
    }

    .feature-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        transition: transform 0.4s ease;
    }

    .feature-card:hover .feature-icon {
        transform: scale(1.15) rotate(5deg);
    }

    .feature-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.75rem;
    }

    .feature-text {
        color: #475569;
        line-height: 1.6;
    }

    /* === EXTRA FEATURE BOX === */
    .extra-section {
        background: linear-gradient(to right, #f0f9ff, #e0f2fe);
        border: 1px solid #bae6fd;
    }

    .check-icon {
        color: #06b6d4 !important;
    }

    /* === RESPONSIVE === */
    @media (max-width: 768px) {
        .hero-title { font-size: 1.875rem; }
        .hero-subtitle { font-size: 1rem; }
    }
</style>

<!-- HERO SECTION -->
<div class="hero-section mb-8">
    <div class="hero-content text-center">
        <h1 class="hero-title">
            Selamat Datang di <span style="color:#38bdf8;">Aplikasi Laravel</span>
        </h1>
        <p class="hero-subtitle">
            Belajar Framework Laravel dengan Blade Template dan Konsep MVC
        </p>

        <a href="{{ route('posts.index') }}" class="hero-btn">
            <svg class="inline w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Lihat Semua Posts
        </a>
    </div>
</div>

<!-- FEATURE CARDS -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">

    <div class="feature-card">
        <img src="https://yt3.googleusercontent.com/ytc/AIdro_l3fM72ct9WwBlZjSdPvdeiresSyH53rhc_6tqVFHrj8Q=s900-c-k-c0x00ffffff-no-rj" class="feature-icon">
        <h3 class="feature-title text-center">FTIK</h3>
        <p class="feature-text text-center">
            Fakultas Terbaik Di USM.
        </p>
    </div>

    <div class="feature-card">
        <img src="https://lppm.usm.ac.id/wp-content/uploads/2025/10/logo-usm.png" class="feature-icon">
        <h3 class="feature-title text-center">Universitas Semarang</h3>
        <p class="feature-text text-center">
            Jembatan <strong> Masa Depan</strong> Anda.
        </p>
    </div>

    <div class="feature-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoq1emXC2p0hZUXBHlmytD3Ea_zAbcYuKiSg&s.png" class="feature-icon">
        <h3 class="feature-title text-center">Teknik Informatika</h3>
        <p class="feature-text text-center">
            Jurusan Terbaik Di USM.
        </p>
    </div>

</div>

<!-- EXTRA FEATURES -->
<div class="mt-12 extra-section rounded-xl p-8">
    <h2 class="text-2xl font-bold text-center text-gray-900 mb-6">Fitur Aplikasi</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-3xl mx-auto">

        <div class="flex items-start space-x-3">
            <svg class="w-6 h-6 check-icon flex-shrink-0 mt-1" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <h4 class="font-semibold text-gray-900">Authentication</h4>
                <p class="text-sm text-gray-600">Login & Register dengan Laravel Breeze</p>
            </div>
        </div>

        <div class="flex items-start space-x-3">
            <svg class="w-6 h-6 check-icon flex-shrink-0 mt-1" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <h4 class="font-semibold text-gray-900">Authorization</h4>
                <p class="text-sm text-gray-600">Role-based access (Guest, User, Admin)</p>
            </div>
        </div>

        <div class="flex items-start space-x-3">
            <svg class="w-6 h-6 check-icon flex-shrink-0 mt-1" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <h4 class="font-semibold text-gray-900">Database Relations</h4>
                <p class="text-sm text-gray-600">One-to-Many (Users, Categories, Posts)</p>
            </div>
        </div>

        <div class="flex items-start space-x-3">
            <svg class="w-6 h-6 check-icon flex-shrink-0 mt-1" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <h4 class="font-semibold text-gray-900">Responsive Design</h4>
                <p class="text-sm text-gray-600">Mobile-first dengan Tailwind CSS</p>
            </div>
        </div>

    </div>
</div>

<!-- CTA -->
<div class="text-center mt-12">
    <h3 class="text-xl font-semibold text-gray-900 mb-4">Siap untuk memulai?</h3>

    <div class="flex justify-center space-x-4">

        <a href="{{ route('posts.index') }}"
           class="inline-flex items-center px-6 py-3 bg-cyan-600 hover:bg-cyan-700 text-white
                  font-medium rounded-lg shadow-sm transition">
            Jelajahi Posts
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
        </a>

        @guest
            <a href="{{ route('register') }}"
               class="inline-flex items-center px-6 py-3 bg-white hover:bg-gray-50 text-cyan-700 
                      font-medium rounded-lg shadow-sm border border-cyan-200 transition">
                Daftar Sekarang
            </a>
        @endguest

    </div>
</div>

@endsection
