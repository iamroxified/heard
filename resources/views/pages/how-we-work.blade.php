@extends('layouts.app')

@section('title', 'How We Work - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-sm font-bold text-gold uppercase tracking-widest mb-3">How We Work</h2>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6 max-w-4xl mx-auto">
            A clear process for speaker management and conference programme design.
        </h1>
    </div>
</section>

<!-- How It Works Steps -->
<section class="py-24 bg-white relative">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl font-heading font-bold text-dark mb-4">Framework for Managing Speakers</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
            <!-- Connecting Line (Desktop) -->
            <div class="hidden md:block absolute top-6 left-1/6 right-1/6 h-0.5 bg-slate-200 z-0"></div>

            <!-- Step 1 -->
            <div class="relative z-10 text-center" data-aos="fade-up">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    01
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Discovery &amp; Brief</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We begin with a detailed conversation about your event, your audience, your objectives, and the kind of speaker experience you want to create. We ask the questions most clients don&apos;t think to ask, so the brief is complete before we begin sourcing.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    02
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Sourcing &amp; Shortlist</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Drawing on our curated roster and wider network, we present a shortlisted selection of speakers matched to your brief. Each recommendation comes with a rationale — not just a bio and a fee.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    03
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Vetting &amp; Confirmation</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We handle reference checks, availability confirmation, and initial fee negotiations, ensuring you only move forward with speakers who are the right fit in every dimension.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative mt-12">
            <div class="relative z-10 text-center" data-aos="fade-up">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    04
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Contract &amp; Logistics</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We manage all contracting, travel arrangements, accommodation coordination, and logistics — so your team is free to focus on the event itself.
                </p>
            </div>
            <div class="relative z-10 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    05
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Speaker Preparation</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Every speaker receives a bespoke pre-event brief from our team, covering audience profile, session objectives, programme context, and any specific requirements. Where needed, we provide coaching and rehearsal support.
                </p>
            </div>
            <div class="relative z-10 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    06
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">On-Site Management</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    On the day, our team provides on-site speaker coordination — from arrival to green room to stage — ensuring timing, technical, and AV requirements are all managed without the event team carrying the load.
                </p>
            </div>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="relative z-10 text-center md:col-span-2 max-w-3xl mx-auto" data-aos="fade-up">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    07
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Post-Event Follow-Through</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We collect speaker and audience feedback, manage any outstanding contractual requirements, and provide a post-event debrief to inform future programming.
                </p>
            </div>
        </div>

        <!-- Programs Tags Preview -->
        <div class="mt-24 pt-16 border-t border-slate-200">
            <p class="text-sm text-slate-500 mb-6 font-medium">Conference Programme Design is built in 3 steps:</p>
            <div class="grid gap-6 md:grid-cols-3 mb-10">
                <div class="border border-slate-200 bg-slate-50 p-6">
                    <h4 class="font-bold text-dark mb-2">Step 1: Programme Strategy</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">We work backwards from the audience outcome to design the programme architecture, themes, sequence, and session formats.</p>
                </div>
                <div class="border border-slate-200 bg-slate-50 p-6">
                    <h4 class="font-bold text-dark mb-2">Step 2: Session Design &amp; Speaker Matching</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">We design each session individually and match the right speakers to the right moment in the programme.</p>
                </div>
                <div class="border border-slate-200 bg-slate-50 p-6">
                    <h4 class="font-bold text-dark mb-2">Step 3: Execution &amp; On-Site Delivery</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">We manage briefs, rehearsals, AV coordination, and on-site delivery so the event runs with precision.</p>
                </div>
            </div>
            
            <div class="flex gap-4">
                <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-dark hover:text-white transition-colors">
                    Book a Discovery Call
                </a>
                <a href="{{ route('about') }}" class="inline-flex justify-center items-center border border-slate-300 bg-white text-slate-900 px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-slate-50 transition-colors">
                    About the Company
                </a>
            </div>
            <p class="text-xs text-slate-400 mt-4 italic">Speaker categories include business leadership, technology, finance, sustainability, governance, culture, health, and global affairs.</p>
        </div>
    </div>
</section>

<!-- Consult CTA Section -->
<section class="py-24 bg-slate-50 relative text-center">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-xs font-bold text-gold uppercase tracking-widest mb-4">Ready To Get Started</h2>
        <h3 class="text-3xl md:text-5xl font-heading font-bold text-slate-900 mb-6">Let&apos;s Talk About Your Event</h3>
        <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto">
            Share your goals and we&apos;ll schedule a consultation call to explore how we can design the right experience for your team.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-dark hover:text-white transition-colors">
                Book a Discovery Call <span class="ml-2">&rarr;</span>
            </a>
            <a href="{{ route('about') }}" class="inline-flex justify-center items-center border border-slate-300 text-slate-900 px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                Learn More
            </a>
        </div>
    </div>
</section>
@endsection
