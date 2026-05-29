@extends('layouts.app')

@section('title', 'Discovery Call - Heard In Africa')

@section('content')
@php
    $bookingUrl = ($siteSettings['calendar_booking_url'] ?? '') ?: route('contact');
    $contactEmail = $siteSettings['contact_email'] ?? 'Info@heardinafrica.com';
    $contactPhone = $siteSettings['contact_phone'] ?? '+234-815-851-2911';
@endphp

<section class="bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-sm font-bold text-gold uppercase tracking-widest mb-3">Discovery Call</h2>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
            Let’s talk about your stage, your speakers, and your programme.
        </h1>
        <p class="text-lg text-gray-300 font-light max-w-2xl mx-auto mb-10">
            Use this page to start a discovery call request. If your calendar link is set in the admin dashboard, the button below will send you straight there. Otherwise, reach us directly by phone or email.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                Book the Call
            </a>
            <a href="mailto:{{ $contactEmail }}" class="inline-flex justify-center items-center border border-white/30 text-white px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white hover:text-dark transition-colors">
                Email Us
            </a>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 grid gap-8 lg:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-8">
            <p class="text-xs font-bold uppercase tracking-[0.3em] text-accent mb-3">What We Cover</p>
            <p class="text-sm text-slate-600 leading-relaxed">
                Speaker sourcing, programme design, event positioning, timelines, budgets, and the best next step for your brief.
            </p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-8">
            <p class="text-xs font-bold uppercase tracking-[0.3em] text-accent mb-3">Best For</p>
            <p class="text-sm text-slate-600 leading-relaxed">
                Summits, corporate conferences, leadership forums, brand events, and organisations looking for African voices.
            </p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-dark p-8 text-white">
            <p class="text-xs font-bold uppercase tracking-[0.3em] text-gold mb-3">Need Help Fast?</p>
            <p class="text-sm text-slate-200 leading-relaxed mb-4">
                Call {{ $contactPhone }} or email {{ $contactEmail }} and we’ll point you in the right direction.
            </p>
            <a href="{{ route('contact') }}" class="inline-flex text-sm font-bold uppercase tracking-wider text-gold hover:text-white transition-colors">
                Contact Form
            </a>
        </div>
    </div>
</section>
@endsection
