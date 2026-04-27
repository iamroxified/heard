@extends('layouts.app')

@section('title', 'How We Work - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-[#0a0f1d] pt-32 pb-20 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-sm font-bold text-primary uppercase tracking-widest mb-3">Our Methodology</h2>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6 max-w-4xl mx-auto">
            We partner with organizations to design intentional event experiences that drive specific leadership and organizational outcomes.
        </h1>
    </div>
</section>

<!-- How It Works Steps -->
<section class="py-24 bg-white relative">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl font-heading font-light text-slate-900 mb-4">How It Works</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
            <!-- Connecting Line (Desktop) -->
            <div class="hidden md:block absolute top-6 left-1/6 right-1/6 h-0.5 bg-slate-200 z-0"></div>

            <!-- Step 1 -->
            <div class="relative z-10 text-center">
                <div class="w-12 h-12 bg-primary text-[#0a0f1d] font-bold flex items-center justify-center mx-auto mb-6">
                    01
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Define the Outcome</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We start by understanding what you want the room to achieve—alignment, clarity, motivation, business acumen, or decision making.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 text-center">
                <div class="w-12 h-12 bg-primary text-[#0a0f1d] font-bold flex items-center justify-center mx-auto mb-6">
                    02
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Design the Experience</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We design the flow of experience, the arc of the agenda, session flow, and format that match your audience, context, and goals.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 text-center">
                <div class="w-12 h-12 bg-primary text-[#0a0f1d] font-bold flex items-center justify-center mx-auto mb-6">
                    03
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Source & Deliver</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We source the right expert facilitators and oversee delivery—from planning through execution to ensure a cohesive, high-quality experience.
                </p>
            </div>
        </div>
        
        <!-- Programs Tags Preview -->
        <div class="mt-24 pt-16 border-t border-slate-200">
            <p class="text-sm text-slate-500 mb-6 font-medium">Programs are designed using the best format available to drive your outcomes, which include:</p>
            <div class="flex flex-wrap gap-3 mb-10">
                <span class="border border-slate-300 text-slate-600 px-4 py-2 text-sm">Keynote</span>
                <span class="border border-slate-300 text-slate-600 px-4 py-2 text-sm">Facilitated Session</span>
                <span class="border border-slate-300 text-slate-600 px-4 py-2 text-sm">Breakout Track</span>
                <span class="border border-slate-300 text-slate-600 px-4 py-2 text-sm">Executive Workshop</span>
                <span class="border border-slate-300 text-slate-600 px-4 py-2 text-sm">Roundtable Debate</span>
                <span class="border border-slate-300 text-slate-600 px-4 py-2 text-sm">Panel Disruption</span>
                <span class="border border-slate-300 text-slate-600 px-4 py-2 text-sm">Q&A Session</span>
                <span class="border border-slate-300 text-slate-600 px-4 py-2 text-sm">Gallery Walk</span>
            </div>
            
            <div class="flex gap-4">
                <a href="{{ route('events') }}" class="inline-flex justify-center items-center bg-primary text-[#0a0f1d] px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-primary-dark transition-colors">
                    Explore Programs
                </a>
                <a href="{{ route('contact') }}" class="inline-flex justify-center items-center border border-slate-300 bg-white text-slate-900 px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-slate-50 transition-colors">
                    Request Agenda Support
                </a>
            </div>
            <p class="text-xs text-slate-400 mt-4 italic">Have an event with multiple tracks, you need full event programming support.</p>
        </div>
    </div>
</section>

<!-- Consult CTA Section -->
<section class="py-24 bg-slate-50 relative text-center">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-xs font-bold text-primary uppercase tracking-widest mb-4">Ready To Get Started</h2>
        <h3 class="text-3xl md:text-5xl font-heading font-light text-slate-900 mb-6">Let's Talk About Your Event</h3>
        <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto">
            Share your goals and we'll schedule a consultation call to explore how we can design the right experience for your team.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-primary text-[#0a0f1d] px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-primary-dark transition-colors">
                Request Agenda Support <span class="ml-2">&rarr;</span>
            </a>
            <a href="{{ route('events') }}" class="inline-flex justify-center items-center border border-slate-300 text-slate-900 px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                Explore Programs
            </a>
        </div>
        <p class="text-sm text-slate-500 mt-6 italic">Not sure you need a facilitator? Download our brochure to learn more.</p>
    </div>
</section>
@endsection
