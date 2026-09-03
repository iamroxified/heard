@extends('layouts.app')

@section('title', $post->title . ' - Heard In Africa')

@section('content')
<!-- Post Hero -->
<section class="bg-dark pt-28 pb-16 sm:pt-32 lg:pt-40 lg:pb-20 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="mb-6">
            <a href="{{ route('blog') }}" class="text-sm text-gold hover:text-white transition-colors font-medium">&larr; Back to Blog</a>
        </div>
        <span class="text-xs font-bold text-gold uppercase tracking-widest mb-4 block">{{ $post->category }}</span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white tracking-tight mb-6 leading-tight">
            {{ $post->title }}
        </h1>
        <p class="text-lg text-gray-300 font-light mb-8 leading-relaxed">{{ $post->excerpt }}</p>
        <div class="flex items-center gap-4 border-t border-white/10 pt-6">
            <div class="w-10 h-10 rounded-full bg-gold flex items-center justify-center text-dark font-bold text-sm flex-shrink-0">
                {{ strtoupper(substr($post->author ?? 'A', 0, 1)) }}
            </div>
            <div>
                <span class="text-sm font-bold text-white block">{{ $post->author ?? 'Heard In Africa' }}</span>
                @if($post->published_at)
                    <span class="text-xs text-gray-400">{{ $post->published_at->format('F d, Y') }}</span>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
@if($post->featured_image_path)
<div class="bg-slate-900">
    <div class="mx-auto max-w-5xl">
        <img src="{{ asset('storage/' . $post->featured_image_path) }}"
             alt="{{ $post->title }}"
             class="w-full max-h-[520px] object-cover">
    </div>
</div>
@endif

<!-- Post Content -->
<section class="py-16 bg-white">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-slate max-w-none
                    prose-headings:font-heading prose-headings:font-bold
                    prose-h2:text-2xl prose-h2:mt-10 prose-h2:mb-4
                    prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
                    prose-p:leading-relaxed prose-p:text-slate-700
                    prose-a:text-gold prose-a:no-underline hover:prose-a:underline
                    prose-strong:text-slate-900
                    prose-ul:list-disc prose-ol:list-decimal
                    prose-li:text-slate-700">
            {!! nl2br(e($post->content)) !!}
        </div>

        <!-- Post Footer -->
        <div class="mt-16 pt-8 border-t border-slate-200 flex items-center justify-between flex-wrap gap-4">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-full bg-gold flex items-center justify-center text-dark font-bold">
                    {{ strtoupper(substr($post->author ?? 'A', 0, 1)) }}
                </div>
                <div>
                    <span class="text-sm font-bold text-slate-900 block">{{ $post->author ?? 'Heard In Africa' }}</span>
                    <span class="text-xs text-slate-400">{{ $post->published_at?->format('F d, Y') }}</span>
                </div>
            </div>
            <a href="{{ route('blog') }}" class="text-sm font-bold text-gold uppercase tracking-wider hover:text-slate-900 transition-colors">
                &larr; All Articles
            </a>
        </div>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-24 bg-gold text-center">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-4">Stay Ahead of Africa&apos;s Conversation</h2>
        <p class="text-lg text-dark/80 mb-8">
            Join thousands of event professionals and speakers who receive our insights directly to their inbox.
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
