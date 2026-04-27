@extends('layouts.app')

@section('title', 'About Us - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-[#0a0f1d] pt-32 pb-20 lg:pt-48 lg:pb-32 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col md:flex-row items-center gap-12">
        <div class="flex-1">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
                Meet the Founder
            </h1>
            <p class="text-xl text-primary font-medium mb-6">Program design first. Facilitation second. Impact always.</p>
            <p class="text-lg text-gray-300 font-light mb-8 max-w-2xl leading-relaxed">
                I started Heard In Africa from a love of storytelling and a commitment to designing the conditions where meaningful change can happen. We lead with program design, then match the right facilitators to deliver experiences that feel elevated, aligned, and truly impactful.
            </p>
            <div class="flex flex-wrap gap-3 mb-8">
                <span class="bg-white/5 border border-white/10 text-white px-4 py-2 text-sm rounded-full">Outcome-driven design</span>
                <span class="bg-white/5 border border-white/10 text-white px-4 py-2 text-sm rounded-full">Curated facilitator bench</span>
                <span class="bg-white/5 border border-white/10 text-white px-4 py-2 text-sm rounded-full">Trusted by high-performing planners</span>
            </div>
            <a href="{{ route('events') }}" class="inline-flex justify-center items-center bg-primary text-[#0a0f1d] px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                Explore Programs
            </a>
        </div>
        <div class="w-full md:w-1/3 flex justify-center">
            <div class="relative">
                <div class="absolute inset-0 rounded-full border-2 border-primary/50 scale-105"></div>
                <div class="absolute inset-0 rounded-full border border-primary/30 scale-110"></div>
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Founder" class="w-64 h-64 md:w-80 md:h-80 object-cover rounded-full relative z-10 border-4 border-[#0a0f1d]">
                <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-center w-full z-20">
                    <p class="text-white font-bold text-lg font-heading drop-shadow-md">Elayne Christine</p>
                    <p class="text-gray-400 text-xs uppercase tracking-widest">Founder, Heard In Africa</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Header -->
<section class="bg-red-700 py-4 text-center">
    <h2 class="text-white text-xs font-bold uppercase tracking-widest">Frequently Asked Questions</h2>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-slate-50" x-data="{ activeAccordion: 1 }">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-lg text-slate-600">The questions clients ask before they trust a partner with the room.</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-white border border-slate-200">
                <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="flex justify-between items-center w-full p-6 text-left focus:outline-none">
                    <div class="flex gap-4 items-center">
                        <span class="text-slate-400 text-sm font-mono">01</span>
                        <h3 class="text-lg font-medium text-slate-900">Why did you start this company, and what problem are you committed to solving?</h3>
                    </div>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-200" :class="{'rotate-180': activeAccordion === 1}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="activeAccordion === 1" x-collapse>
                    <div class="p-6 pt-0 text-slate-600 border-t border-slate-100 mt-2">
                        <p>We saw a gap between events that inspire and events that transform. Many agencies focus solely on securing big names, but we focus on aligning the narrative of the event with the strategic outcomes of the organization. We solve the problem of fragmented messaging and ensure every speaker drives the central theme forward.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white border border-slate-200">
                <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="flex justify-between items-center w-full p-6 text-left focus:outline-none">
                    <div class="flex gap-4 items-center">
                        <span class="text-slate-400 text-sm font-mono">02</span>
                        <h3 class="text-lg font-medium text-slate-900">What makes your approach meaningfully different from a traditional speaker bureau or events agency?</h3>
                    </div>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-200" :class="{'rotate-180': activeAccordion === 2}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="activeAccordion === 2" x-collapse>
                    <div class="p-6 pt-0 text-slate-600 border-t border-slate-100 mt-2">
                        <p>We do not just place speakers; we design programs. We act as strategic partners to curate an experience where each session builds upon the last. Our process starts with the "Why" of your event, rather than "Who" is available.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white border border-slate-200">
                <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="flex justify-between items-center w-full p-6 text-left focus:outline-none">
                    <div class="flex gap-4 items-center">
                        <span class="text-slate-400 text-sm font-mono">03</span>
                        <h3 class="text-lg font-medium text-slate-900">What types of clients and rooms do you do your best work in?</h3>
                    </div>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-200" :class="{'rotate-180': activeAccordion === 3}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="activeAccordion === 3" x-collapse>
                    <div class="p-6 pt-0 text-slate-600 border-t border-slate-100 mt-2">
                        <p>We excel with corporate clients, executive retreats, global summits, and leadership conferences where the stakes are high and the audience expects actionable, world-class insights.</p>
                    </div>
                </div>
            </div>
            
            <!-- Highlighted Quote Block inside FAQ context as seen in image -->
            <div class="pl-12 py-4 border-l-2 border-red-700 my-8">
                <p class="text-2xl font-heading font-medium text-slate-800 italic">"As much as Van Gogh was involved in The Starry Night."</p>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white border border-slate-200">
                <button @click="activeAccordion = activeAccordion === 4 ? null : 4" class="flex justify-between items-center w-full p-6 text-left focus:outline-none">
                    <div class="flex gap-4 items-center">
                        <span class="text-slate-400 text-sm font-mono">04</span>
                        <h3 class="text-lg font-medium text-slate-900">How personally involved will you be in shaping and delivering our program?</h3>
                    </div>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-200" :class="{'rotate-180': activeAccordion === 4}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="activeAccordion === 4" x-collapse>
                    <div class="p-6 pt-0 text-slate-600 border-t border-slate-100 mt-2">
                        <p>We are deeply involved from the initial discovery call to the post-event debrief. We manage the briefing process with speakers to ensure their content is bespoke for your audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section (from image) -->
<section class="py-24 bg-slate-100 relative text-center border-t border-slate-200">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-heading font-light text-slate-900 mb-6">Design a program your audience carries forward.</h2>
        <p class="text-lg text-slate-600 mb-10">
            Tell us what outcomes you're aiming for. We'll curate the format and facilitators to match.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-primary text-[#0a0f1d] px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-primary-dark transition-colors">
                Request a Quote
            </a>
            <a href="{{ route('events') }}" class="inline-flex justify-center items-center border-b-2 border-primary text-slate-900 px-8 py-3 text-sm font-bold uppercase tracking-wider hover:text-primary transition-colors">
                Browse Programs
            </a>
        </div>
    </div>
</section>
@endsection
