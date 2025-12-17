@extends('layouts.main')

@section('content')
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .profile-card {
        animation: fadeIn 0.6s ease-in-out;
    }
</style>

<div class="max-w-4xl mx-auto profile-card">
    <!-- Header -->
    <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-t-2xl p-8 text-white text-center">
        <div class="w-24 h-24 bg-white rounded-full mx-auto mb-4 flex items-center justify-center text-indigo-600 text-4xl font-bold shadow-lg">
            {{ substr(auth()->user()->name, 0, 1) }}
        </div>
        <h1 class="text-3xl font-bold mb-2">{{ auth()->user()->name }}</h1>
        <p class="text-indigo-100">{{ auth()->user()->email }}</p>
        @if(auth()->user()->isAdmin())
            <span class="inline-block mt-3 px-4 py-1 bg-red-500 text-white text-sm font-semibold rounded-full shadow-lg">
                👑 Administrator
            </span>
        @else
            <span class="inline-block mt-3 px-4 py-1 bg-white text-indigo-600 text-sm font-semibold rounded-full shadow-lg">
                👤 User
            </span>
        @endif
    </div>

    <!-- Content -->
    <div class="bg-white rounded-b-2xl shadow-xl border border-gray-200 overflow-hidden">
        <!-- Tabs -->
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px">
                <button class="tab-button active px-6 py-4 text-sm font-medium border-b-2 border-indigo-500 text-indigo-600">
                    Informasi Akun
                </button>
                <button class="tab-button px-6 py-4 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
                    Aktivitas
                </button>
                <button class="tab-button px-6 py-4 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300">
                    Statistik
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-8">
            <!-- Informasi Akun -->
            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nama -->
                    <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                        <label class="text-sm font-medium text-gray-500 mb-1 block">Nama Lengkap</label>
                        <p class="text-lg font-semibold text-gray-900">{{ auth()->user()->name }}</p>
                    </div>

                    <!-- Email -->
                    <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                        <label class="text-sm font-medium text-gray-500 mb-1 block">Email</label>
                        <p class="text-lg font-semibold text-gray-900">{{ auth()->user()->email }}</p>
                    </div>

                    <!-- Role -->
                    <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                        <label class="text-sm font-medium text-gray-500 mb-1 block">Role</label>
                        <p class="text-lg font-semibold text-gray-900 capitalize">{{ auth()->user()->role }}</p>
                    </div>

                    <!-- Tanggal Bergabung -->
                    <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                        <label class="text-sm font-medium text-gray-500 mb-1 block">Bergabung Sejak</label>
                        <p class="text-lg font-semibold text-gray-900">{{ auth()->user()->created_at->format('d F Y') }}</p>
                    </div>
                </div>

                <!-- Statistik User -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <!-- Total Posts -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Posts</p>
                                <p class="text-3xl font-bold text-indigo-600 mt-2">
                                    {{ auth()->user()->posts()->count() }}
                                </p>
                            </div>
                            <div class="w-12 h-12 bg-indigo-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Post Terbaru -->
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Post Terbaru</p>
                                <p class="text-3xl font-bold text-green-600 mt-2">
                                    {{ auth()->user()->posts()->latest()->first() ? auth()->user()->posts()->latest()->first()->created_at->diffForHumans() : '-' }}
                                </p>
                            </div>
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Akun Aktif -->
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Status Akun</p>
                                <p class="text-2xl font-bold text-purple-600 mt-2">Aktif</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 mt-8 pt-6 border-t border-gray-200">
                    <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg shadow-sm transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit Profile
                    </a>

                    <a href="{{ route('posts.index') }}" class="inline-flex items-center px-6 py-3 bg-white hover:bg-gray-50 text-gray-700 font-medium rounded-lg shadow-sm border border-gray-300 transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Lihat Semua Post
                    </a>

                    @can('create', App\Models\Post::class)
                        <a href="{{ route('posts.create') }}" class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow-sm transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Buat Post Baru
                        </a>
                    @endcan
                </div>

                <!-- Recent Posts -->
                @if(auth()->user()->posts()->count() > 0)
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Post Terbaru Saya</h3>
                        <div class="space-y-3">
                            @foreach(auth()->user()->posts()->latest()->take(5)->get() as $post)
                                <a href="{{ route('posts.show', $post) }}" class="block bg-gray-50 hover:bg-gray-100 rounded-lg p-4 border border-gray-200 transition">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-900">{{ $post->title }}</h4>
                                            <p class="text-sm text-gray-500 mt-1">{{ Str::limit($post->content, 100) }}</p>
                                        </div>
                                        <div class="ml-4 text-right">
                                            <p class="text-xs text-gray-400">{{ $post->created_at->format('d M Y') }}</p>
                                            @if($post->category)
                                                <span class="inline-block mt-1 px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">
                                                    {{ $post->category->name }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="mt-8 text-center py-12 bg-gray-50 rounded-lg border border-gray-200">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Belum ada post</h3>
                        <p class="mt-1 text-sm text-gray-500">Mulai dengan membuat post pertama Anda.</p>
                        <div class="mt-6">
                            <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg shadow-sm transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                Buat Post Baru
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection