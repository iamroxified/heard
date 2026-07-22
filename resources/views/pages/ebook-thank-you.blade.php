@extends('layouts.app')

@section('title', 'Download Confirmed – Heard In Africa')

@section('content')

{{-- Derive display values from query string --}}
@php
    $ebookTitle  = e(request('ebook', 'Your Ebook'));
    $ebookCover  = e(request('cover', ''));
    $downloadUrl = e(request('pdf', ''));
@endphp

<div class="min-h-screen bg-gradient-to-br from-dark via-darker to-dark flex items-center justify-center px-4 py-24 relative overflow-hidden">

    {{-- Decorative radial glow --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] rounded-full bg-gold/5 blur-3xl"></div>
        <div class="absolute top-0 right-0 w-72 h-72 rounded-full bg-accent/5 blur-2xl"></div>
        <div class="absolute bottom-0 left-0 w-56 h-56 rounded-full bg-gold/5 blur-2xl"></div>
    </div>

    <div class="relative z-10 max-w-2xl w-full mx-auto text-center">

        {{-- Success badge --}}
        <div data-aos="zoom-in" class="inline-flex items-center gap-2 bg-green-500/10 border border-green-500/30 text-green-400 text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-8">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
            Download Confirmed
        </div>

        {{-- Cover + heading block --}}
        <div data-aos="fade-up" data-aos-delay="100" class="flex flex-col sm:flex-row items-center gap-8 mb-10 text-left">
            @if($ebookCover)
            <div class="shrink-0 w-36 shadow-2xl shadow-black/50 border border-white/10">
                <img src="{{ $ebookCover }}" alt="{{ $ebookTitle }}" class="w-full h-auto">
            </div>
            @endif
            <div>
                <p class="text-gold text-xs font-bold uppercase tracking-widest mb-2">Free Resource</p>
                <h1 class="text-2xl sm:text-3xl font-heading font-bold text-white leading-tight mb-3">{{ $ebookTitle }}</h1>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Thank you! Your download has started. If it didn't begin automatically, use the button below. We've also recorded your details so we can share future resources with you.
                </p>
            </div>
        </div>

        {{-- Action buttons --}}
        <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col sm:flex-row gap-4 justify-center mb-14">
            @if($downloadUrl)
            <a href="{{ $downloadUrl }}" download="{{ $ebookTitle }}.pdf"
               class="inline-flex items-center justify-center gap-2 bg-gold text-dark px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                Download PDF Again
            </a>
            @endif
            <a href="{{ route('speaker-economy') }}"
               class="inline-flex items-center justify-center gap-2 border border-white/20 text-white px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white/10 transition-colors">
                ← Back to Resources
            </a>
        </div>

        {{-- Divider --}}
        <div data-aos="fade-up" data-aos-delay="300" class="border-t border-white/10 pt-12">
            <p class="text-gold text-xs font-bold uppercase tracking-widest mb-6">While You're Here</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-left">
                {{-- CTA 1: Discovery Call --}}
                <a href="{{ route('discovery-call') }}"
                   class="group block bg-white/5 border border-white/10 hover:border-gold/40 hover:bg-white/10 p-6 transition-all duration-300">
                    <div class="w-10 h-10 rounded-full bg-gold/10 flex items-center justify-center mb-4 group-hover:bg-gold/20 transition-colors">
                        <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-heading font-bold text-sm mb-1 group-hover:text-gold transition-colors">Book a Discovery Call</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Speak with our team about speaker management, event curation, or programme design.</p>
                </a>

                {{-- CTA 2: Blog --}}
                <a href="{{ route('blog') }}"
                   class="group block bg-white/5 border border-white/10 hover:border-gold/40 hover:bg-white/10 p-6 transition-all duration-300">
                    <div class="w-10 h-10 rounded-full bg-gold/10 flex items-center justify-center mb-4 group-hover:bg-gold/20 transition-colors">
                        <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-heading font-bold text-sm mb-1 group-hover:text-gold transition-colors">Read Our Blog</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Explore articles on African speaker economies, conference programming, and staging strategy.</p>
                </a>
            </div>
        </div>

    </div>
</div>

@endsection
