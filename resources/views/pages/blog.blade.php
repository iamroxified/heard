@extends('layouts.app')

@section('title', 'Insights & Blog - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-sm font-bold text-gold uppercase tracking-widest mb-3">Blog</h2>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
            Insights from inside Africa&apos;s speaker and conference landscape.
        </h1>
        <p class="text-lg text-gray-300 font-light max-w-2xl mx-auto">
            We write for event producers who want to think more carefully about their programmes, and for African voices who are ready to own their stage.
        </p>
    </div>
</section>

<!-- Blog Categories -->
<section class="bg-white py-6 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-2">
            <a href="{{ route('blog') }}" class="px-5 py-2 {{ !request('category') ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }} text-sm font-medium rounded-full transition-colors">All Articles</a>
            @foreach($categories as $cat)
                <a href="{{ route('blog', ['category' => $cat]) }}"
                   class="px-5 py-2 {{ request('category') === $cat ? 'bg-slate-900 text-white' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }} text-sm font-medium rounded-full transition-colors">
                    {{ $cat }}
                </a>
            @endforeach
        </div>
    </div>
</section>

@if($featuredPost && !request('category'))
<!-- Featured Article -->
<section class="py-12 bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <a href="{{ route('blog.show', $featuredPost->slug) }}" class="block relative bg-white border border-slate-200 overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="h-64 lg:h-auto relative overflow-hidden">
                    @if($featuredPost->featured_image_path)
                        <img src="{{ Storage::url($featuredPost->featured_image_path) }}" alt="{{ $featuredPost->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    @else
                        <div class="absolute inset-0 bg-slate-200 flex items-center justify-center">
                            <span class="text-slate-400 text-4xl">✦</span>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4 bg-gold text-dark text-xs font-bold px-3 py-1 uppercase tracking-wider">Featured</div>
                </div>
                <div class="p-10 lg:p-16 flex flex-col justify-center">
                    <span class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-4">{{ $featuredPost->category }}</span>
                    <h2 class="text-3xl font-heading font-bold text-slate-900 mb-6 group-hover:text-gold transition-colors">{{ $featuredPost->title }}</h2>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        {{ $featuredPost->excerpt }}
                    </p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gold flex items-center justify-center text-dark font-bold text-sm">
                                {{ strtoupper(substr($featuredPost->author ?? 'A', 0, 1)) }}
                            </div>
                            <div>
                                <span class="text-sm font-bold text-slate-900 block">{{ $featuredPost->author ?? 'Heard In Africa' }}</span>
                                @if($featuredPost->published_at)
                                    <span class="text-xs text-slate-400">{{ $featuredPost->published_at->format('M d, Y') }}</span>
                                @endif
                            </div>
                        </div>
                        <span class="text-sm font-bold text-gold uppercase tracking-wider">Read Article &rarr;</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>
@endif

<!-- Article Grid -->
@php
    $gridPosts = request('category')
        ? $posts->filter(fn($p) => $p->category === request('category'))->values()
        : $posts;
@endphp

@if($gridPosts->isNotEmpty() || (request('category') && $featuredPost && $featuredPost->category === request('category')))
<section class="py-12 bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        @if(request('category'))
            {{-- When filtering by category, also include the featured post if it matches --}}
            @php
                $allFiltered = collect();
                if($featuredPost && $featuredPost->category === request('category')) {
                    $allFiltered->push($featuredPost);
                }
                $allFiltered = $allFiltered->merge($posts->filter(fn($p) => $p->category === request('category')))->values();
            @endphp
            @if($allFiltered->isEmpty())
                <p class="text-center text-slate-500 py-12">No articles in this category yet.</p>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($allFiltered as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="bg-white border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow block">
                        <div class="h-48 relative overflow-hidden">
                            @if($post->featured_image_path)
                                <img src="{{ Storage::url($post->featured_image_path) }}" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="absolute inset-0 bg-slate-100 flex items-center justify-center">
                                    <span class="text-slate-300 text-3xl">✦</span>
                                </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3 block">{{ $post->category }}</span>
                            <h3 class="text-xl font-heading font-bold text-slate-900 mb-3 group-hover:text-gold transition-colors line-clamp-2">{{ $post->title }}</h3>
                            <p class="text-slate-600 text-sm mb-6 line-clamp-3">{{ $post->excerpt }}</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-slate-400">{{ $post->published_at?->format('M d, Y') }}</span>
                                <span class="text-xs font-bold text-gold uppercase tracking-wider border-b border-gold pb-1 group-hover:text-dark">Read Article</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            @endif
        @else
            @if($gridPosts->isEmpty())
                <p class="text-center text-slate-500 py-12">More articles coming soon.</p>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($gridPosts as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="bg-white border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow block">
                        <div class="h-48 relative overflow-hidden">
                            @if($post->featured_image_path)
                                <img src="{{ Storage::url($post->featured_image_path) }}" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="absolute inset-0 bg-slate-100 flex items-center justify-center">
                                    <span class="text-slate-300 text-3xl">✦</span>
                                </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3 block">{{ $post->category }}</span>
                            <h3 class="text-xl font-heading font-bold text-slate-900 mb-3 group-hover:text-gold transition-colors line-clamp-2">{{ $post->title }}</h3>
                            <p class="text-slate-600 text-sm mb-6 line-clamp-3">{{ $post->excerpt }}</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-slate-400">{{ $post->published_at?->format('M d, Y') }}</span>
                                <span class="text-xs font-bold text-gold uppercase tracking-wider border-b border-gold pb-1 group-hover:text-dark">Read Article</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            @endif
        @endif

    </div>
</section>
@elseif(!$featuredPost)
<section class="py-24 bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-slate-500 text-lg">No articles published yet. Check back soon.</p>
    </div>
</section>
@endif

<!-- Newsletter Section -->
<section class="py-24 bg-gold text-center">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-4">Stay Ahead of Africa&apos;s Conversation</h2>
        <p class="text-lg text-dark/80 mb-8">
            Join thousands of event professionals, speakers, and organisations who receive our insights on African voices, conference trends, and speaker opportunities — directly to their inbox.
        </p>
        <form class="flex flex-col sm:flex-row gap-2 max-w-xl mx-auto">
            <input type="email" placeholder="Enter your email address" class="flex-1 bg-white border border-transparent px-4 py-3 text-slate-900 focus:outline-none focus:ring-2 focus:ring-dark">
            <button type="submit" class="bg-dark text-white px-8 py-3 font-bold uppercase tracking-wider hover:bg-white hover:text-dark transition-colors">
                Subscribe
            </button>
        </form>
    </div>
</section>
@endsection