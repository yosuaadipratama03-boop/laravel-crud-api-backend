@extends('layouts.main')

@section('content')
<div class="max-w-7xl mx-auto py-8">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Daftar Posts</h1>
                <p class="mt-2 text-gray-600">Jelajahi semua post dari komunitas</p>
            </div>
            <a href="{{ route('posts.create') }}" 
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition">
                + Buat Post Baru
            </a>
        </div>
    </div>

    <!-- Success Message -->
    @if (session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-400 p-4 rounded-r-lg">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-green-700">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Posts Grid -->
    @if($posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition">
                    <div class="p-6">
                        <!-- Post Header -->
                        <div class="mb-4">
                            <h2 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">
                                {{ $post->title }}
                            </h2>
                            
                            <!-- Category & Author -->
                            <div class="flex items-center justify-between text-sm text-gray-500 mb-3">
                                <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded-full text-xs">
                                    {{ $post->category->name ?? 'Uncategorized' }}
                                </span>
                                <span>By: {{ $post->user->name ?? 'Unknown' }}</span>
                            </div>
                        </div>

                        <!-- Content Preview -->
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            {{ Str::limit($post->content, 150) }}
                        </p>

                        <!-- Post Footer -->
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <span class="text-sm text-gray-500">
                                {{ $post->created_at->format('M d, Y') }}
                            </span>
                            <a href="{{ route('posts.show', $post) }}" 
                               class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <!-- Empty State -->
        <div class="text-center py-12">
            <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada post</h3>
            <p class="text-gray-500 mb-6">Mulai dengan membuat post pertama Anda</p>
            <a href="{{ route('posts.create') }}" 
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition">
                Buat Post Pertama
            </a>
        </div>
    @endif
</div>
@endsection