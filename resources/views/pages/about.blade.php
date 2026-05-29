@extends('layouts.app')

@section('title', 'About Heard In Africa')

@section('content')
@php($bookingUrl = ($siteSettings['calendar_booking_url'] ?? '') ?: route('discovery-call'))
<!-- Hero Section -->
<section class="bg-dark pt-28 pb-20 sm:pt-32 lg:pt-40 lg:pb-32 relative overflow-hidden flex items-center justify-center min-h-[36vh] sm:min-h-[40vh]">
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
                <img src="{{ asset('img/1.png') }}" alt="Speaker on stage" class="w-full h-auto object-cover shadow-lg border border-slate-100">
            </div>
            <!-- Right Text -->
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200" class="pl-0 md:pl-4">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-6 leading-tight">
                    About the Company
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Africa has always produced world-class thinkers, leaders, innovators, and storytellers. The gap was never the talent. The gap was the infrastructure to connect that talent with the audiences that needed to hear it.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Heard In Africa was founded to close that gap.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Growing up witnessing the remarkable achievements of Africans across the globe — founding companies, pioneering ideas, setting records — our founder Chimfumnanya Nwandu saw something missing: a dedicated, professional home for African speakers on the world stage. After five years managing corporate events and watching organisations struggle to find, vet, and prepare the right voices, she built the platform she wished had existed.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Heard In Africa is now Africa&apos;s speaker management and conference programming partner of choice — working with pan-African summits, global institutions, and forward-looking organisations who understand that the right voice at the right moment can change what a room believes is possible.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">
                    We manage speakers end-to-end. We design conference programmes from the ground up. We position African experts to be heard at the level their expertise deserves. And we do all of it with the rigour, relationships, and care that Africa&apos;s excellence warrants.
                </p>
                <div class="text-right">
                    <p class="text-xs font-bold text-slate-900 uppercase tracking-wider">Chimfumnanya Nwandu</p>
                    <p class="text-xs text-slate-500">Founder &amp; Executive Director</p>
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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-24 items-center">
            <!-- Our Mission -->
            <div data-aos="fade-up" data-aos-duration="1000">
                <h3 class="text-3xl font-heading font-bold text-accent mb-4 flex items-center gap-3">
                    Vision
                </h3>
                <p class="text-gray-300 text-sm leading-relaxed pl-1 max-w-md">
                    To be the foremost globally recognised platform connecting African voices with world-class stages — making Africa&apos;s expertise impossible to ignore.
                </p>
            </div>

            <!-- Our Vision -->
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="border border-gold p-8 md:p-10 relative">
                <div class="absolute -top-3 -left-3 w-6 h-6 border-t-2 border-l-2 border-accent"></div>
                <div class="absolute -bottom-3 -right-3 w-6 h-6 border-b-2 border-r-2 border-accent"></div>

                <h3 class="text-3xl font-heading font-bold text-accent mb-4">
                    Mission
                </h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    To connect and showcase Africa&apos;s leading speakers and thinkers to the world by providing end-to-end speaker management, strategic positioning, and conference programming that creates meaningful, lasting impact for events and audiences everywhere.
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

                <div class="space-y-6 text-sm leading-8 text-slate-600">
                    <p>African expertise is consistently underrepresented on global stages — not because of a shortage of knowledge, but because of a shortage of professional infrastructure.</p>
                    <p>There has been no dedicated agency doing for African speakers what the world&apos;s best speaker management firms do for their rosters.</p>
                    <p>Heard In Africa exists to change that. We are not a marketplace. We are a management company, and there is a meaningful difference.</p>
                </div>
            </div>

            <!-- Right Image -->
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('img/2.jpeg') }}" alt="Core Values" class="w-full h-auto object-cover shadow-lg border border-slate-100">
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
                <h3 class="text-lg font-heading font-bold text-dark mb-3">Chimfumnanya Nwandu — Executive Director</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Chimfumnanya Nwandu is the founder and Executive Director of Heard In Africa. With over five years of experience managing corporate events across Nigeria and beyond, she has sat on both sides of the stage — as the person responsible for finding the right speaker, and as the person who understands what it takes to prepare them. She founded Heard In Africa from a conviction that Africa&apos;s most compelling voices deserved a professional home that matched their calibre. She holds the relationships, the programme design expertise, and the speaker management infrastructure that makes Heard In Africa the agency it is.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24 bg-white overflow-hidden">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left Images Grid -->
            <div class="relative h-[500px]" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Speaker" class="absolute top-0 left-0 w-2/3 h-64 object-cover shadow-xl border-4 border-white z-10">
                <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Professional" class="absolute bottom-0 right-0 w-2/3 h-80 object-cover shadow-xl border-4 border-white z-20">
            </div>

            <!-- Right Content -->
            <div data-aos="fade-left" data-aos-delay="200">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-10">
                    Our Approach
                </h2>

                <div class="space-y-8">
                    <!-- Feature 1 -->
                    <div class="flex gap-4">
                        <div class="shrink-0 w-12 h-12 bg-accent flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-dark mb-1">Speaker Management</h4>
                            <p class="text-sm text-slate-500">Finding, vetting, briefing, and supporting speakers from first conversation to final applause.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex gap-4">
                        <div class="shrink-0 w-12 h-12 bg-accent flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-dark mb-1">Speaker Agency</h4>
                            <p class="text-sm text-slate-500">Positioning African speakers for the global stages their expertise deserves.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex gap-4">
                        <div class="shrink-0 w-12 h-12 bg-accent flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-dark mb-1">Conference Programming</h4>
                            <p class="text-sm text-slate-500">Designing agendas with intellectual coherence, deliberate flow, and purposeful session design.</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="flex gap-4">
                        <div class="shrink-0 w-12 h-12 bg-accent flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-dark mb-1">Speaker Visibility</h4>
                            <p class="text-sm text-slate-500">Helping experts build a stronger profile, clearer narrative, and stronger stage presence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Block -->
<section class="py-20 bg-dark overflow-hidden">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2">Africa&apos;s Finest Voices.</h2>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-8">Your Most Powerful Stage.</h2>

                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                        Book a Discovery Call
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex justify-center items-center border border-white/30 text-white px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white hover:text-dark transition-colors">
                        Learn More
                    </a>
                </div>
            </div>

            <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1551836022-b06985bceb24?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Speaker interacting" class="w-full h-64 object-cover shadow-lg border border-white/10">
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
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Large Conference" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white font-bold text-xl tracking-wider uppercase">Pan-African Summits</span>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="w-full md:w-1/2 relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Boardroom Meeting" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white font-bold text-xl tracking-wider uppercase">Leadership Forums</span>
                </div>
            </div>
        </div>

        <!-- Slider Dots -->
        <div class="flex justify-center gap-2 mt-8">
            <div class="w-2 h-2 rounded-full bg-slate-900 cursor-pointer"></div>
            <div class="w-2 h-2 rounded-full bg-slate-300 cursor-pointer"></div>
            <div class="w-2 h-2 rounded-full bg-slate-300 cursor-pointer"></div>
        </div>
    </div>
</section>

@endsection

