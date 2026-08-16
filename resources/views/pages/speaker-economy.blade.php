@extends('layouts.app')

@section('title', 'Speaker Economy & Resources - Heard In Africa')

@section('content')
@php($bookingUrl = ($siteSettings['calendar_booking_url'] ?? '') ?: route('discovery-call'))

<div x-data="{ 
    newsletterModalOpen: false, 
    ebookModalOpen: false, 
    videoModalOpen: false,
    selectedEbook: '',
    ebookPdfUrl: '',
    ebookTitle: '',
    ebookCoverUrl: '',
    emailSubmitted: false, 
    ebookSubmitted: false,
    ebookLoading: false,
    newsletterEmail: '',
    ebookName: '',
    ebookEmail: '',
    ebookOrg: '',
    selectedVideoUrl: '',
    
    openEbookModal(title, cover, pdfUrl = '') {
        this.selectedEbook = title;
        this.ebookTitle = title;
        this.ebookCoverUrl = cover;
        this.ebookPdfUrl = pdfUrl;
        this.ebookSubmitted = false;
        this.ebookName = '';
        this.ebookEmail = '';
        this.ebookOrg = '';
        this.ebookModalOpen = true;
    },
    
    submitNewsletter() {
        if (!this.newsletterEmail) return;
        this.emailSubmitted = true;
    },
    
    async submitEbook() {
        if (!this.ebookName || !this.ebookEmail || this.ebookLoading) return;
        this.ebookLoading = true;

        try {
            await fetch('{{ route('ebook-downloads.store') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                },
                body: JSON.stringify({
                    name: this.ebookName,
                    email: this.ebookEmail,
                    organisation: this.ebookOrg,
                    ebook_title: this.ebookTitle,
                }),
            });
        } catch (e) {
            // fail silently — still give user the download
        }

        // Trigger the PDF download first, then redirect to confirmation page
        this.downloadEbook();

        const params = new URLSearchParams({
            ebook: this.ebookTitle,
            cover: this.ebookCoverUrl,
            pdf:   this.ebookPdfUrl,
        });
        window.location.href = '{{ route('ebook-download.thank-you') }}?' + params.toString();
    },

    downloadEbook() {
        if (!this.ebookPdfUrl) return;
        const a = document.createElement('a');
        a.href = this.ebookPdfUrl;
        a.download = this.ebookTitle + '.pdf';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    },

    openVideo(url) {
        this.selectedVideoUrl = url;
        this.videoModalOpen = true;
    }
}"
    x-init="
    // Auto-popup newsletter modal after 10 seconds (if not popped before)
    setTimeout(() => {
        if (!localStorage.getItem('newsletter_popped')) {
            newsletterModalOpen = true;
            localStorage.setItem('newsletter_popped', 'true');
        }
    }, 10000);
">

    <!-- Hero Section -->
    <section class="relative bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 overflow-hidden flex items-center min-h-[50vh]">
        <!-- Background Overlay -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-darker/90 via-dark/80 to-darker/90"></div>
        </div>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center w-full">
            <span class="text-gold text-sm font-bold tracking-wider mb-3 block uppercase" data-aos="fade-up">Speaker Economy</span>
            <h1 data-aos="fade-up" data-aos-duration="1000" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6 max-w-4xl mx-auto">
                Free Resource & Insights Library
            </h1>
            <p data-aos="fade-up" data-aos-delay="200" class="text-lg text-gray-300 font-light max-w-2xl mx-auto leading-relaxed">
                Explore our curated library of research, playbooks, masterclasses, and insights designed to help you build, program, and master the African stage.
            </p>
        </div>
    </section>

    <!-- Free Resources Grid Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase" data-aos="fade-up">Instant Access</span>
                <h2 data-aos="fade-up" data-aos-delay="100" class="text-3xl md:text-4xl font-heading font-bold text-dark">
                    Featured Ebooks & Reports
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" class="text-slate-500 text-sm mt-3 max-w-md mx-auto">
                    Download our premium industry guides to elevate your staging and speaker management.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Resource 1 -->
                <div data-aos="fade-up" data-aos-delay="100" class="group bg-slate-50 border border-slate-200 overflow-hidden hover:shadow-xl hover:border-gold/30 transition-all duration-300 flex flex-col justify-between">
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="aspect-[4/5] bg-slate-200 mb-6 overflow-hidden shadow-md relative group-hover:scale-[1.02] transition-transform duration-500">
                            <img src="{{ asset('img/10 things.png') }}" alt="10 Things I wish I knew" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-dark/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="bg-gold text-dark px-4 py-2 text-xs font-bold uppercase tracking-wider">Preview Ebook</span>
                            </div>
                        </div>
                        <span class="text-gold text-xs font-bold uppercase tracking-wider mb-2">Free Ebook</span>
                        <h3 class="text-lg font-heading font-bold text-dark mb-3 group-hover:text-accent transition-colors duration-300">10 Things I Wish I Knew About Landing Speaking Gigs</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                            This ebook is designed to help you understand why an event organizer like myself would want to work with you as a speaker at an event.
                        </p>
                    </div>
                    <div class="p-6 border-t border-slate-200/60 bg-white">
                        <button @click="openEbookModal('10 Things I Wish I Knew About Landing Speaking Gigs', '{{ asset('img/10 things.png') }}', '{{ asset('img/10 Things I Wish I Knew About Landing Speaking Gigs .pdf') }}')" class="w-full inline-flex justify-center items-center bg-dark text-white hover:bg-gold hover:text-dark px-4 py-3 text-xs font-bold uppercase tracking-wider transition-colors">
                            Download Free Ebook
                        </button>
                    </div>
                </div>

                <!-- Resource 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="group bg-slate-50 border border-slate-200 overflow-hidden hover:shadow-xl hover:border-gold/30 transition-all duration-300 flex flex-col justify-between">
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="aspect-[4/5] bg-slate-200 mb-6 overflow-hidden shadow-md relative group-hover:scale-[1.02] transition-transform duration-500">
                            <img src="{{ asset('img/report_cover.png') }}" alt="African Speaker Economy Impact Report" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-dark/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="bg-gold text-dark px-4 py-2 text-xs font-bold uppercase tracking-wider">Coming Soon</span>
                            </div>
                        </div>
                        <span class="text-gold text-xs font-bold uppercase tracking-wider mb-2">Impact Report</span>
                        <h3 class="text-lg font-heading font-bold text-dark mb-3 group-hover:text-accent transition-colors duration-300">Speaker Economy Impact Report</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                            Our comprehensive annual analysis of trends, speaker compensation benchmarks, gender representation, and event logistics on the continent.
                        </p>
                    </div>
                    <div class="p-6 border-t border-slate-200/60 bg-white">
                        <button @click="openEbookModal('Speaker Economy Impact Report', '{{ asset('img/report_cover.png') }}')" class="w-full inline-flex justify-center items-center bg-slate-300 text-slate-500 px-4 py-3 text-xs font-bold uppercase tracking-wider cursor-not-allowed" disabled title="PDF coming soon">
                            Coming Soon
                        </button>
                    </div>
                </div>

                <!-- Resource 3 -->
                <div data-aos="fade-up" data-aos-delay="300" class="group bg-slate-50 border border-slate-200 overflow-hidden hover:shadow-xl hover:border-gold/30 transition-all duration-300 flex flex-col justify-between">
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="aspect-[4/5] bg-slate-200 mb-6 overflow-hidden shadow-md relative group-hover:scale-[1.02] transition-transform duration-500">
                            <img src="{{ asset('img/brief_guide_cover.png') }}" alt="Mastering the Brief: The Event Producer's Guide" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-dark/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="bg-gold text-dark px-4 py-2 text-xs font-bold uppercase tracking-wider">Preview Guide</span>
                            </div>
                        </div>
                        <span class="text-gold text-xs font-bold uppercase tracking-wider mb-2">Free Ebook</span>
                        <h3 class="text-lg font-heading font-bold text-dark mb-3 group-hover:text-accent transition-colors duration-300">Mastering the Brief</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                            A step-by-step framework for event curators and organizers to design agendas, draft briefs, and align keynotes with business objectives.
                        </p>
                    </div>
                    <div class="p-6 border-t border-slate-200/60 bg-white">
                        <button @click="openEbookModal('Mastering the Brief', '{{ asset('img/brief_guide_cover.png') }}')" class="w-full inline-flex justify-center items-center bg-slate-300 text-slate-500 px-4 py-3 text-xs font-bold uppercase tracking-wider cursor-not-allowed" disabled title="PDF coming soon">
                            Coming Soon
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- YouTube & Video Masterclass Section -->
    <section class="py-24 bg-slate-50 overflow-hidden border-t border-slate-200">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase" data-aos="fade-up">Video Resources</span>
                <h2 data-aos="fade-up" data-aos-delay="100" class="text-3xl md:text-4xl font-heading font-bold text-dark">
                    Heard In Africa Masterclasses
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" class="text-slate-500 text-sm mt-3 max-w-md mx-auto">
                    Watch our latest video discussions, staging guides, and expert interviews on our YouTube channel.
                </p>
            </div>

            <!-- Featured Video Player Card -->
            <!-- <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white border border-slate-200 shadow-sm p-6 md:p-8 mb-12" data-aos="fade-up">
             
                <a href="https://www.youtube.com/watch?v=kR8QG_CEUCQ" target="_blank" rel="noopener noreferrer" class="lg:col-span-7 relative group block aspect-video bg-slate-900 border border-slate-200 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('img/DSC_5074.jpg') }}" alt="YouTube Masterclass" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-80">
                    <div class="absolute inset-0 bg-dark/20 group-hover:bg-dark/40 transition-colors duration-300"></div>

                   
                    <div class="relative z-10 w-20 h-20 rounded-full bg-gold/90 flex items-center justify-center text-dark shadow-xl hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 fill-current ml-1" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                        <div class="absolute inset-0 rounded-full bg-gold/30 animate-ping"></div>
                    </div>
                </a>

           
                <div class="lg:col-span-5 flex flex-col justify-center lg:pl-6">
                    <span class="text-gold text-xs font-bold uppercase tracking-wider mb-2">Featured Video</span>
                    <h3 class="text-2xl font-heading font-bold text-dark mb-4">How to Pitch and Build a World-Class African Speaker Roster</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">
                        In this masterclass, Chimfumnanya "Nana" Nwandu breaks down the key vetting metrics, contract considerations, and speaker development programs required to connect African talent with world-class stages.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://www.youtube.com/watch?v=kR8QG_CEUCQ" target="_blank" rel="noopener noreferrer" class="inline-flex justify-center items-center bg-gold text-dark px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-dark hover:text-white transition-colors">
                            Play Video
                        </a>
                        <a href="https://www.youtube.com/@Heardinafrica" target="_blank" rel="noopener noreferrer" class="inline-flex justify-center items-center border border-slate-300 text-slate-700 px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-slate-100 transition-colors">
                            Subscribe on YouTube
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- YouTube Video Grid -->
            @if (!empty($featuredVideos) && $featuredVideos->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($featuredVideos as $fv)
                <a href="{{ $fv->watch_url }}" target="_blank" rel="noopener noreferrer" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}"
                    class="block bg-white border border-slate-200 group hover:shadow-md transition-shadow">
                    <div class="h-44 relative bg-slate-900 overflow-hidden flex items-center justify-center">
                        @if ($fv->youtube_id)
                        <img src="https://img.youtube.com/vi/{{ $fv->youtube_id }}/mqdefault.jpg"
                            alt="{{ $fv->title }}"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90"
                            onerror="this.src='https://img.youtube.com/vi/{{ $fv->youtube_id }}/hqdefault.jpg'">
                        @endif
                        <div class="absolute inset-0 bg-dark/20 group-hover:bg-dark/40 transition-colors duration-300"></div>
                        <div class="relative z-10 w-12 h-12 rounded-full bg-white/95 flex items-center justify-center text-dark shadow-md group-hover:bg-gold group-hover:text-dark transition-colors">
                            <svg class="w-5 h-5 fill-current ml-0.5" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-5">
                        <h4 class="font-heading font-bold text-dark text-sm group-hover:text-accent transition-colors duration-300 line-clamp-2">{{ $fv->title }}</h4>
                        @if ($fv->description)
                        <p class="text-slate-500 text-xs leading-relaxed mt-1.5 line-clamp-2">{{ $fv->description }}</p>
                        @endif
                    </div>
                </a>
                @endforeach
            </div>
            @else
            <p class="text-center text-slate-400 text-sm py-8">No featured videos yet — check back soon.</p>
            @endif
        </div>
    </section>

    <!-- Newsletter Subscription Callout Card Section -->
    <section class="py-24 bg-dark text-white relative overflow-hidden text-center">
        <!-- Abstract wavy background -->
        <div class="absolute inset-0 z-0 opacity-15">
            <svg viewBox="0 0 1440 320" class="absolute bottom-0 w-full" preserveAspectRatio="none">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,165.3C384,149,480,107,576,106.7C672,107,768,149,864,170.7C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>

        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 relative z-10">
            <span class="text-gold text-sm font-bold tracking-widest mb-4 block uppercase" data-aos="fade-up">Get Monthly Insights</span>
            <h2 data-aos="fade-up" data-aos-delay="100" class="text-3xl md:text-5xl font-heading font-bold text-white mb-6">
                Stay Ahead of Africa&apos;s Conversation
            </h2>
            <p data-aos="fade-up" data-aos-delay="200" class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                Join thousands of event professionals, curators, and speakers receiving our monthly insights on African speaking economies, conference programming strategies, and speaker roster updates.
            </p>
            <div data-aos="fade-up" data-aos-delay="300" class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button @click="newsletterModalOpen = true" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                    Subscribe to Newsletter
                </button>
                <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center border border-white/30 text-white px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white hover:text-dark transition-colors">
                    Book a Discovery Call
                </a>
            </div>
        </div>
    </section>

    <!-- Latest Insights / Blog Section -->
    <section class="py-24 bg-white overflow-hidden border-t border-slate-100">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-16">
                <div class="text-center md:text-left mb-6 md:mb-0">
                    <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase" data-aos="fade-up">Our Thoughts</span>
                    <h2 data-aos="fade-up" data-aos-delay="100" class="text-3xl md:text-4xl font-heading font-bold text-dark">
                        From the Blog
                    </h2>
                </div>
                <div data-aos="fade-left">
                    <a href="{{ route('blog') }}" class="inline-flex justify-center items-center border border-slate-300 text-slate-900 px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-slate-50 transition-colors">
                        View All Articles &rarr;
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog Card 1 -->
                <div data-aos="fade-up" data-aos-delay="100" class="bg-slate-50 border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow flex flex-col justify-between" @click="window.location.href='{{ route('blog') }}'">
                    <div>
                        <div class="h-48 relative overflow-hidden bg-slate-200">
                            <img src="{{ asset('img/DSC_0279.jpg') }}" alt="Blog 1" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 block">Thought Leadership</span>
                            <h3 class="text-lg font-heading font-bold text-slate-900 mb-3 group-hover:text-gold transition-colors line-clamp-2">Why Africa's Speaker Economy Is the Most Underserved Opportunity</h3>
                            <p class="text-slate-600 text-sm mb-4 line-clamp-3">A foundational piece establishing Heard In Africa's point of view on why speaker management infrastructure matters for the continent.</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <span class="text-xs font-bold text-gold uppercase tracking-wider border-b border-gold pb-0.5 group-hover:text-dark">Read Article</span>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="bg-slate-50 border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow flex flex-col justify-between" @click="window.location.href='{{ route('blog') }}'">
                    <div>
                        <div class="h-48 relative overflow-hidden bg-slate-200">
                            <img src="{{ asset('img/DSC_5167.jpg') }}" alt="Blog 2" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 block">Event Production</span>
                            <h3 class="text-lg font-heading font-bold text-slate-900 mb-3 group-hover:text-gold transition-colors line-clamp-2">How to Brief a Speaker Properly: The 7 Things Most Producers Forget</h3>
                            <p class="text-slate-600 text-sm mb-4 line-clamp-3">A practical, shareable guide for event producers and programme designers who want smoother, stronger speaker sessions.</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <span class="text-xs font-bold text-gold uppercase tracking-wider border-b border-gold pb-0.5 group-hover:text-dark">Read Article</span>
                    </div>
                </div>

                <!-- Blog Card 3 -->
                <div data-aos="fade-up" data-aos-delay="300" class="bg-slate-50 border border-slate-200 group cursor-pointer hover:shadow-lg transition-shadow flex flex-col justify-between" @click="window.location.href='{{ route('blog') }}'">
                    <div>
                        <div class="h-48 relative overflow-hidden bg-slate-200">
                            <img src="{{ asset('img/DSC_4666.jpg') }}" alt="Blog 3" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 block">Speaker Spotlight</span>
                            <h3 class="text-lg font-heading font-bold text-slate-900 mb-3 group-hover:text-gold transition-colors line-clamp-2">What Makes a Conference Programme Great? The Real Agenda</h3>
                            <p class="text-slate-600 text-sm mb-4 line-clamp-3">A programme design piece for organisers who want every session to move the room toward a clear, lasting business outcome.</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <span class="text-xs font-bold text-gold uppercase tracking-wider border-b border-gold pb-0.5 group-hover:text-dark">Read Article</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODALS -->

    <!-- Ebook Download Modal -->
    <div x-cloak x-show="ebookModalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-dark/85 backdrop-blur-sm" x-transition>
        <div @click.away="ebookModalOpen = false" class="bg-white border border-slate-200 p-8 md:p-10 max-w-2xl w-full relative shadow-2xl flex flex-col md:flex-row gap-8 text-left">
            <button @click="ebookModalOpen = false" class="absolute top-4 right-4 text-slate-400 hover:text-dark transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Book Cover Left -->
            <div class="w-full md:w-1/3 shrink-0 flex items-center justify-center bg-slate-50 p-4 border border-slate-100 shadow-sm">
                <img :src="ebookCoverUrl" :alt="ebookTitle" class="max-w-[120px] md:max-w-full h-auto shadow-md">
            </div>

            <!-- Form Content Right -->
            <div class="flex-grow flex flex-col justify-center">
                <div x-show="!ebookSubmitted">
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-dark mb-2">Get Free Access</h3>
                    <p class="text-sm text-slate-500 mb-6">Enter your details below to instantly download <span class="font-bold text-dark" x-text="ebookTitle"></span>.</p>

                    <form @submit.prevent="submitEbook()">
                        <div class="mb-4">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">Full Name</label>
                            <input type="text" x-model="ebookName" required placeholder="Nana Nwandu" class="w-full bg-slate-50 border border-slate-200 px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-gold transition-colors">
                        </div>
                        <div class="mb-4">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">Email Address</label>
                            <input type="email" x-model="ebookEmail" required placeholder="nana@heardinafrica.com" class="w-full bg-slate-50 border border-slate-200 px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-gold transition-colors">
                        </div>
                        <div class="mb-6">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">Organization (Optional)</label>
                            <input type="text" x-model="ebookOrg" placeholder="Heard In Africa" class="w-full bg-slate-50 border border-slate-200 px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-gold transition-colors">
                        </div>

                        <button type="submit" :disabled="ebookLoading" class="w-full bg-dark text-white hover:bg-gold hover:text-dark px-6 py-3.5 text-sm font-bold uppercase tracking-wider transition-all duration-300 flex items-center justify-center gap-2 disabled:opacity-60 disabled:cursor-not-allowed">
                            <span x-text="ebookLoading ? 'Saving...' : 'Get Download Link'"></span>
                            <svg x-show="!ebookLoading" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                            <svg x-show="ebookLoading" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Success Screen -->
                <div x-show="ebookSubmitted" class="text-center md:text-left">
                    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mb-4 mx-auto md:mx-0">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-heading font-bold text-dark mb-2">Thank you!</h3>
                    <p class="text-sm text-slate-600 mb-6">
                        Your request for <span class="font-bold text-dark" x-text="ebookTitle"></span> has been received. Your download should start automatically in a few seconds. If not, click the button below.
                    </p>
                    <button x-show="ebookPdfUrl" @click="downloadEbook(); ebookModalOpen = false;" class="inline-flex justify-center items-center bg-gold text-dark px-6 py-3 text-sm font-bold uppercase tracking-wider hover:bg-dark hover:text-white transition-colors gap-2">
                        <span>Download PDF Now</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                    </button>
                    <button x-show="!ebookPdfUrl" @click="ebookModalOpen = false;" class="inline-flex justify-center items-center border border-slate-300 text-slate-600 px-6 py-3 text-sm font-bold uppercase tracking-wider hover:bg-slate-50 transition-colors">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Pop-up Modal -->
    <div x-cloak x-show="newsletterModalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-dark/85 backdrop-blur-sm" x-transition>
        <div @click.away="newsletterModalOpen = false" class="bg-white border border-slate-200 p-8 md:p-10 max-w-lg w-full relative shadow-2xl text-left">
            <button @click="newsletterModalOpen = false" class="absolute top-4 right-4 text-slate-400 hover:text-dark transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div x-show="!emailSubmitted" class="text-center">
                <span class="text-gold text-xs font-bold uppercase tracking-widest mb-2 block">Monthly Insights</span>
                <h3 class="text-2xl font-heading font-bold text-dark mb-4">Stay Ahead of Africa's Conversation</h3>
                <p class="text-sm text-slate-500 mb-8 max-w-md mx-auto">
                    Join 5,000+ planners and speakers who receive our monthly digest on speaker benchmarks, curation strategies, and staging opportunities.
                </p>

                <form @submit.prevent="submitNewsletter()">
                    <div class="mb-4">
                        <input type="email" x-model="newsletterEmail" required placeholder="Enter your email address" class="w-full bg-slate-50 border border-slate-200 px-4 py-3.5 text-sm text-slate-900 focus:outline-none focus:border-gold transition-colors text-center">
                    </div>
                    <button type="submit" class="w-full bg-dark text-white hover:bg-gold hover:text-dark px-6 py-3.5 text-sm font-bold uppercase tracking-wider transition-all duration-300">
                        Subscribe Now
                    </button>
                </form>
                <p class="text-[10px] text-slate-400 mt-4">No spam. Unsubscribe at any time.</p>
            </div>

            <!-- Success Screen -->
            <div x-show="emailSubmitted" class="text-center py-6">
                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mb-4 mx-auto">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-bold text-dark mb-2">Welcome to the Conversation!</h3>
                <p class="text-sm text-slate-600 mb-8 max-w-xs mx-auto">
                    You have successfully subscribed to the Heard In Africa newsletter. We'll send our latest resources straight to your inbox.
                </p>
                <button @click="newsletterModalOpen = false" class="bg-dark text-white hover:bg-gold hover:text-dark px-6 py-2.5 text-xs font-bold uppercase tracking-wider transition-all duration-300">
                    Close Window
                </button>
            </div>
        </div>
    </div>

    <x-assessment-popup />

    @endsection