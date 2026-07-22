@extends('layouts.app')

@section('title', 'About Heard In Africa')

@section('content')
@php($bookingUrl = ($siteSettings['calendar_booking_url'] ?? '') ?: route('discovery-call'))
<!-- Hero Section -->
<section class="relative bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 overflow-hidden flex items-center min-h-[78vh] md:min-h-[85vh]">
    <!-- Video Background -->
    <div class="absolute inset-0 z-0">

        <img src="{{ asset('img/TEDxNzaStreet.jpg') }}" class="absolute inset-0 w-full  object-contain opacity-90">
        <div class="absolute inset-0 bg-gradient-to-b from-darker/90 via-dark/80 to-darker/90"></div>
    </div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center w-full">
        <h1 data-aos="fade-up" data-aos-duration="1000" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight">
            About Heard In Africa
        </h1>
    </div>
</section>

<!-- Empowering African Voices Section -->
<section class="py-24 bg-white overflow-hidden">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Left Image -->
            <div data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('img/group.jpeg') }}" alt="Speaker on stage" class="w-full h-auto object-cover shadow-lg border border-slate-100">
            </div>
            <!-- Right Text -->
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200" class="pl-0 md:pl-4">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-6 leading-tight">
                    About the Company
                </h2>
                <p class="text-slate-600  leading-relaxed mb-4 " style="text-align: justify;">
                    Africa has always produced world-class thinkers, leaders, innovators, and storytellers. The gap was never the talent. The gap was the infrastructure to connect that talent with the audiences that needed to hear it.
                </p>
                <p class="text-slate-600  leading-relaxed mb-4" style="text-align: justify;">
                    Heard In Africa was founded to close that gap.
                </p>
                <p class="text-slate-600  leading-relaxed mb-4" style="text-align: justify;">
                    Growing up witnessing the remarkable achievements of Africans across the globe — founding companies, pioneering ideas, setting records — our founder Chimfumnanya Nwandu saw something missing: a dedicated, professional home for African speakers on the world stage. After five years managing corporate events and watching organisations struggle to find, vet, and prepare the right voices, she built the platform she wished had existed.
                </p>
                <p class="text-slate-600  leading-relaxed mb-4" style="text-align: justify;">

                    Heard In Africa is now Africa's speaker management and conference programming partner of choice — working with pan-African summits, global institutions, and forward-looking organisations who understand that the right voice at the right moment can change what a room believes is possible.
                </p>
                <p class="text-slate-600  leading-relaxed mb-6" style="text-align: justify;">
                    We manage speakers end-to-end. We design conference programmes from the ground up. We position African experts to be heard at the level their expertise deserves. And we do all of it with the rigour, relationships, and care that Africa's excellence warrants.
                </p>
                <div class="text-right">
                    <p class="text-xs font-bold text-slate-900 uppercase tracking-wider">Chimfumnanya "Nana" Nwandu</p>
                    <p class="text-xs text-slate-500">Founder, Heard In Africa</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-24 relative overflow-hidden bg-dark">
    <!-- Abstract wavy background -->
    <div class="absolute inset-0 z-0 opacity-20">
        <svg viewBox="0 0 1440 320" class="absolute bottom-0 w-full" preserveAspectRatio="none">
            <path fill="#ffffff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,165.3C384,149,480,107,576,106.7C672,107,768,149,864,170.7C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Our Mission -->
        <div data-aos="fade-up" data-aos-duration="1000">
            <h3 class="text-3xl font-heading font-bold text-accent mb-4 flex items-center gap-3">
                Vision
            </h3>
            <p class="text-gray-300  leading-relaxed pl-1 max-w-md">
                A world where African expertise shapes every global conversation that matters — and every stage that carries an African voice is worthy of it.
            </p>
        </div>

        <!-- Our Vision -->
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="border border-gold p-8 md:p-10 relative">
            <div class="text-center mb-16">
                <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase" data-aos="fade-up">Passionate Experts</span>
                <h2 data-aos="fade-up" data-aos-delay="100" class="text-3xl md:text-4xl font-heading font-bold text-dark">
                    About Team
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" class="text-slate-500 text-sm mt-3 max-w-md mx-auto">
                    The strategic curators and event operators behind Africa's premier speaker management partner.
                </p>
            </div>
            <div class="absolute -top-3 -left-3 w-6 h-6 border-t-2 border-l-2 border-accent"></div>
            <div class="absolute -bottom-3 -right-3 w-6 h-6 border-b-2 border-r-2 border-accent"></div>

            <h3 class="text-3xl font-heading font-bold text-accent mb-4">
                Mission
            </h3>
            <p class="text-gray-300  leading-relaxed">
                To connect Africa's finest voices with the stages they deserve.
            </p>
        </div>
    </div>
    </div>
</section>

<!-- Our Core Values -->
<section class="py-24 bg-white overflow-hidden">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Values List -->
            <div data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-10">
                    Why Heard In Africa Exists
                </h2>

                <div class="space-y-6  leading-8 text-slate-600">
                    <p>African expertise is consistently underrepresented on global stages — not because of a shortage of knowledge, but because of a shortage of professional infrastructure.</p>
                    <p>There has been no dedicated agency doing for African speakers what the world&apos;s best speaker management firms do for their rosters.</p>
                    <p>Heard In Africa exists to change that. We are not a marketplace. We are a management company, and there is a meaningful difference.</p>
                </div>
            </div>

            <!-- Right Image -->
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('img/replace1.jpeg') }}" alt="Core Values" class="w-full h-auto object-cover shadow-lg border border-slate-100">
            </div>
        </div>
    </div>
</section>

<!-- What We Do -->
<section class="py-24 bg-slate-50 overflow-hidden">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 text-center">
        <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-heading font-bold text-dark mb-16">
            Founder
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Box 1 -->
            <div data-aos="zoom-in" data-aos-delay="100" class="bg-white border border-slate-200 p-8 shadow-sm hover:shadow-md transition-shadow md:col-span-3">
                <h3 class="text-lg font-heading font-bold text-dark mb-3">Chimfumnanya "Nana" Nwandu — Founder, Heard In Africa</h3>
                <p class=" text-slate-600 leading-relaxed">
                    Nana Nwandu is a lawyer, TEDx licensee, and development sector programme manager who has spent over seven years at the intersection of events, speakers, and the African stage. Her path into speaker management was not accidental — it was shaped by years of watching exceptional African voices go under-resourced, under-briefed, and under-placed, across corporate events, development programming, and the live stage. As the licensee of TEDxNzaStreet since 2018, she has not only managed speakers from the outside but curated and produced the kind of platform where ideas earn their moment. She founded Heard In Africa out of a conviction that African expertise deserves the same infrastructure, rigour, and strategic investment that the global speaking industry has long extended elsewhere — and she built it with the precision of someone who knows what that gap costs
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Team Section -->
<section class="py-24 bg-white overflow-hidden border-t border-slate-100">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase" data-aos="fade-up">Passionate Experts</span>
            <h2 data-aos="fade-up" data-aos-delay="100" class="text-3xl md:text-4xl font-heading font-bold text-dark">
                About Team
            </h2>
            <p data-aos="fade-up" data-aos-delay="200" class="text-slate-500 text-sm mt-3 max-w-md mx-auto">
                The strategic curators and event operators behind Africa's premier speaker management partner.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div data-aos="fade-up" data-aos-delay="100" class="group bg-slate-50 border border-slate-200 overflow-hidden hover:shadow-xl hover:border-gold/30 transition-all duration-300 flex flex-col">
                <div class="relative aspect-[4/5] overflow-hidden bg-slate-100">
                    <img src="{{ asset('img/nana_profile.jpg') }}" alt="Chiwendu Nwan" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-darker/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-heading font-bold text-dark group-hover:text-accent transition-colors duration-300">Chimfumnanya "Nana" Nwandu</h3>
                        <p class="text-gold text-xs font-bold uppercase tracking-wider mb-3">Founder</p>
                        <!-- <p class="text-slate-600 text-sm leading-relaxed mb-6">

                        </p> -->
                    </div>
                    <div class="flex items-center gap-3 border-t border-slate-200/60 pt-4">
                        <a href="https://www.linkedin.com/in/nananwandu" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-white hover:bg-dark hover:border-dark transition-all duration-300" aria-label="LinkedIn">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="mailto:nana@heardinafrica.com" class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-white hover:bg-dark hover:border-dark transition-all duration-300" aria-label="Email">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div data-aos="fade-up" data-aos-delay="200" class="group bg-slate-50 border border-slate-200 overflow-hidden hover:shadow-xl hover:border-gold/30 transition-all duration-300 flex flex-col">
                <div class="relative aspect-[4/5] overflow-hidden bg-slate-100">
                    <img src="{{ asset('img/precious.jpeg') }}" alt="Amara Eke" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-darker/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-heading font-bold text-dark group-hover:text-accent transition-colors duration-300">Precious Octavia Esiri </h3>
                        <p class="text-gold text-xs font-bold uppercase tracking-wider mb-3">(PMP), Project Manager</p>
                        <!-- <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Amara is a veteran curator who designs high-impact conference agendas, ensuring intellectual coherence, thematic alignment, and engaging session flows.
                        </p> -->
                    </div>
                    <div class="flex items-center gap-3 border-t border-slate-200/60 pt-4">
                        <a href="https://www.linkedin.com/in/precious-esiri-pmp-919111241/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-white hover:bg-dark hover:border-dark transition-all duration-300" aria-label="LinkedIn">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="mailto:precious@heardinafrica.com" class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-white hover:bg-dark hover:border-dark transition-all duration-300" aria-label="Email">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div data-aos="fade-up" data-aos-delay="300" class="group bg-slate-50 border border-slate-200 overflow-hidden hover:shadow-xl hover:border-gold/30 transition-all duration-300 flex flex-col">
                <div class="relative aspect-[4/5] overflow-hidden bg-slate-100">
                    <img src="{{ asset('img/modupe.jpeg') }}" alt="Tunde Balogun" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-darker/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-heading font-bold text-dark group-hover:text-accent transition-colors duration-300">Rachael Adeyemi </h3>
                        <p class="text-gold text-xs font-bold uppercase tracking-wider mb-3">Operations Admin</p>
                        <!-- <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Tunde manages the complex logistics of speaker schedules, travel coordination, and on-site event execution across pan-African summits.
                        </p> -->
                    </div>
                    <div class="flex items-center gap-3 border-t border-slate-200/60 pt-4">
                        <a href="https://www.linkedin.com/in/modupe-rachael-704161287" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-white hover:bg-dark hover:border-dark transition-all duration-300" aria-label="LinkedIn">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="mailto:racheal@heardinafrica.com" class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-white hover:bg-dark hover:border-dark transition-all duration-300" aria-label="Email">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
if ($faqs->isEmpty()) {
    $faqs = collect([
        (object)[
            'question' => "What is the process for booking a speaker?",
            'answer' => "The process starts with a Discovery & Brief session to understand your event goals. We then source and curate a shortlist of suitable speakers from our roster and manage all contracts, logistics, and pre-event briefing.",
            'status' => 'active',
            'sort_order' => 1
        ],
        (object)[
            'question' => "Do you provide on-site speaker management?",
            'answer' => "Yes, we handle end-to-end speaker support on the day of the event, including arrival logistics, stage briefing, AV coordinates, and schedule compliance.",
            'status' => 'active',
            'sort_order' => 2
        ],
        (object)[
            'question' => "Can you help design our entire conference agenda?",
            'answer' => "Absolutely. Our Conference Programming & Agenda Design service is built to structure keynotes, panels, and breakout sessions with intellectual flow and thematic coherence.",
            'status' => 'active',
            'sort_order' => 3
        ]
    ]);
}
?>



<!-- FAQ Section -->
<section class="py-24 bg-slate-50 border-t border-slate-200 overflow-hidden">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase">Questions</span>
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark">
                Frequently Asked Questions
            </h2>
            <p class="text-slate-500 text-sm mt-3">Find quick answers to common questions about speaker management and agenda programming.</p>
        </div>

        <div x-data="{ activeFaq: null }" class="space-y-4" data-aos="fade-up" data-aos-delay="200">
            @foreach($faqs as $index => $faq)
            <div class="bg-white border border-slate-200 transition-all duration-300 hover:border-slate-300">
                <button @click="activeFaq = activeFaq === {{ $index }} ? null : {{ $index }}"
                    class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="font-heading font-bold text-dark text-sm md:text-base">{{ $faq->question }}</span>
                    <span class="shrink-0 ml-4 w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-dark transition-all"
                        :class="activeFaq === {{ $index }} ? 'rotate-180 border-gold text-gold bg-gold/5' : ''">
                        <svg class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="activeFaq === {{ $index }}"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="border-t border-slate-100 bg-slate-50/50">
                    <div class="px-6 py-5 text-slate-600 text-sm leading-relaxed">
                        {{ $faq->answer }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Block -->
<section class="py-20 bg-dark overflow-hidden">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2">Building the Infrastructure of the African Speaker Economy.</h2>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-8">Your Most Powerful Stage.</h2>

                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3  font-bold uppercase tracking-wider hover:bg-white transition-colors">
                        Book a Discovery Call
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex justify-center items-center border border-white/30 text-white px-8 py-3  font-bold uppercase tracking-wider hover:bg-white hover:text-dark transition-colors">
                        Learn More
                    </a>
                </div>
            </div>

            <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('img/DSC_0279.jpg') }}" alt="Speaker interacting" class="w-full h-64 object-cover shadow-lg border border-white/10">
            </div>
        </div>
    </div>
</section>

<!-- Events We Provide Speakers For -->
<section class="py-24 bg-white overflow-hidden">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 text-center">
        <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-heading font-bold text-dark mb-12">
            Trusted by Organisations That Take Their Stages Seriously
        </h2>

        <div class="flex flex-col md:flex-row gap-6 justify-center items-center" data-aos="zoom-in" data-aos-delay="200">
            <!-- Image 1 -->
            <div class="w-full md:w-1/2 relative overflow-hidden group">
                <img src="{{ asset('img/TEDx-Logo.jpg') }}" alt="Large Conference" class="w-full  object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white font-bold text-xl tracking-wider uppercase">TEDxEvergreen School</span>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="w-full md:w-1/2 relative overflow-hidden group">
                <img src="{{ asset('img/ominiverse logo.png') }}" alt="Boardroom Meeting" class="w-full  object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white font-bold text-xl tracking-wider uppercase">Omniverse African Summit</span>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="w-full md:w-1/2 relative overflow-hidden group">
                <img src="{{ asset('img/FinTribe-Logo-2.png') }}" alt="Boardroom Meeting" class="w-full  object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white font-bold text-xl tracking-wider uppercase">FinTribe Summit African</span>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="w-full md:w-1/2 relative overflow-hidden group">
                <img src="{{ asset('img/NOTAP-logo.png') }}" alt="Boardroom Meeting" class="w-full  object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white font-bold text-xl tracking-wider uppercase">NOTAP</span>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection