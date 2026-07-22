@extends('layouts.app')

@section('title', 'Heard In Africa | Building the Infrastructure of the African Speaker Economy.')

@section('content')
@php($clientLogos = $siteSettings['homepage_client_logos'] ?? [])
@php($homepageVideoUrl = $siteSettings['homepage_video_url'] ?? 'https://cdn.pixabay.com/video/2020/05/21/40003-424177579_large.mp4')
@php($bookingUrl = ($siteSettings['calendar_booking_url'] ?? '') ?: route('discovery-call'))
<!-- Hero Section -->
<section class="relative bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 overflow-hidden flex items-center min-h-[78vh] md:min-h-[85vh]">
  <!-- Video Background -->
  <div class="absolute inset-0 z-0">

    <img src="{{ asset('img/homepage.jpg') }}" class="absolute inset-0 w-full  object-contain opacity-90">
    <div class="absolute inset-0 bg-gradient-to-b from-darker/90 via-dark/80 to-darker/90"></div>
  </div>

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center w-full">
    <div class="max-w-7xl mx-auto">
      <span data-aos="fade-down" data-aos-duration="1000" class="inline-block text-gold text-sm font-bold tracking-wider mb-4">Heard In Africa</span>
      <h1 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" class="text-4xl md:text-5xl lg:text-7xl font-heading font-bold text-white tracking-tight leading-tight mb-6">
        Building the Infrastructure of the African Speaker Economy<br>Your Most Powerful Stage.
      </h1>
      <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400" class="text-base md:text-lg text-gray-300 font-light max-w-7xl mx-auto mb-10 leading-relaxed">
        Heard In Africa connects conference producers with the African speakers their programmes need — and connects African speakers with the global stages their expertise deserves. We manage everything in between.
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
        <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center rounded-none bg-gold text-dark px-8 py-3 text-sm font-bold tracking-wider hover:bg-white hover:text-dark transition-all duration-300">
          Book a Discovery Call
        </a>
        <a href="{{ route('services') }}" class="inline-flex justify-center items-center rounded-none border border-white text-white px-8 py-3 text-sm font-medium tracking-wider hover:bg-white hover:text-dark transition-all duration-300">
          Learn More
        </a>
      </div>
      @if(!empty($clientLogos))
      <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800" class="mt-10 flex flex-wrap justify-center gap-3">
        @foreach($clientLogos as $clientLogo)
        <span class="rounded-full border border-white/15 bg-white/5 px-4 py-2 text-xs font-medium tracking-wide text-gray-200 backdrop-blur-sm">
          {{ $clientLogo }}
        </span>
        @endforeach
      </div>
      @endif
    </div>
  </div>
</section>
<!-- Events We Provide Speakers For -->
<section class="py-24 bg-white overflow-hidden">
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 text-center">
    <div class="flex flex-col md:flex-row gap-6 justify-center items-center" data-aos="zoom-in" data-aos-delay="200">
      <!-- Image 1 -->
      <div class="w-full md:w-1/2 relative overflow-hidden group">
        <img src="{{ asset('img/gTEDx-Logo.jpg') }}" alt="Large Conference" class="w-full  object-cover group-hover:scale-105 transition-transform duration-500">

      </div>
      <!-- Image 2 -->
      <div class="w-full md:w-1/2 relative overflow-hidden group">
        <img src="{{ asset('img/gominiverse logo.png') }}" alt="Boardroom Meeting" class="w-full  object-cover group-hover:scale-105 transition-transform duration-500">

      </div>
      <!-- Image 2 -->
      <div class="w-full md:w-1/2 relative overflow-hidden group">
        <img src="{{ asset('img/gFinTribe-Logo-2.png') }}" alt="Boardroom Meeting" class="w-full  object-cover group-hover:scale-105 transition-transform duration-500">

      </div>
      <!-- Image 2 -->
      <div class="w-full md:w-1/2 relative overflow-hidden group">
        <img src="{{ asset('img/gNOTAP-logo.png') }}" alt="Boardroom Meeting" class="w-full  object-cover group-hover:scale-105 transition-transform duration-500">

      </div>
    </div>

  </div>
</section>

<!-- Behind Powerful Conversations Section -->
<section class="py-24 bg-white overflow-hidden">
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <!-- Left Image -->
      <div data-aos="fade-right">
        <img src="{{ asset('img/DSC_4661.jpg') }}" alt="Speakers on stage" class="w-full h-auto object-cover shadow-lg border border-slate-100">
      </div>
      <!-- Right Text -->
      <div class="pl-0 md:pl-8" data-aos="fade-left" data-aos-delay="200">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-6 leading-tight">
          Behind Powerful<br>Conversations on<br>Global Stages
        </h2>
        <p class="text-slate-600 text-sm leading-relaxed mb-4">
          From flagship pan-African summits to corporate leadership forums, we&apos;ve helped organisations find the right voice for the right moment.
        </p>
        <p class="text-slate-600 text-sm leading-relaxed">
          We manage speakers end-to-end, design conference programmes from the ground up, and position African experts to be heard at the level their expertise deserves.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- What Heard in Africa Does Section -->
<section class="py-24 relative overflow-hidden bg-dark">
  <div class="absolute inset-0 z-0">
    <img src="{{ asset('img/DSC_5074.jpg') }}" alt="Event Panel" class="w-full h-full object-cover opacity-40 mix-blend-overlay">
    <div class="absolute inset-0 bg-gradient-to-r from-dark/90 to-dark/40"></div>
  </div>

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-4" data-aos="fade-right">
        <h2 class="text-gold text-xl font-bold font-heading mb-4">How we Work</h2>
        <p class="text-white text-sm leading-relaxed opacity-80">
          End-to-end support for speakers, organisers, and programmes.
        </p>
      </div>

      <div class="lg:col-span-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <!-- Service Card 1 -->
          <div data-aos="zoom-in" data-aos-delay="100" class="bg-white/20 backdrop-blur-md border border-white/10 p-6 sm:p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[220px] sm:min-h-[240px]">
            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="text-white font-bold text-sm"> Event Speaker Management
            </h3>
            <p class="text-gray-300 text-xs leading-relaxed mt-3">End-to-end management of your speaker programme — from sourcing and vetting through briefing, logistics, on-site handling, and post-event close-out.
              .</p>
            <a href="{{ route('contact') }}" class="mt-4 text-gold text-xs font-bold uppercase tracking-wider">Book a Consultation</a>
          </div>

          <!-- Service Card 2 -->
          <div data-aos="zoom-in" data-aos-delay="200" class="bg-white/20 backdrop-blur-md border border-white/10 p-6 sm:p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[220px] sm:min-h-[240px]">
            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
            </div>
            <h3 class="text-white font-bold text-sm">Speaker Matching</h3>
            <p class="text-gray-300 text-xs leading-relaxed mt-3">Share your brief. We return a curated shortlist of verified African speakers matched to your event streams and audience within 48 hours.</p>
            <a href="mailto:info@heardinafrica.com" class="mt-4 text-gold text-xs font-bold uppercase tracking-wider">Submit a brief</a>
          </div>

          <!-- Service Card 3 -->
          <div data-aos="zoom-in" data-aos-delay="300" class="bg-white/20 backdrop-blur-md border border-white/10 p-6 sm:p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[220px] sm:min-h-[240px]">
            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
              </svg>
            </div>
            <h3 class="text-white font-bold text-sm">Conference Programme Design</h3>
            <p class="text-gray-300 text-xs leading-relaxed mt-3">A great conference is not a list of speakers. It is a carefully designed argument. We build the intellectual architecture of your programme.</p>
            <a href="{{ route('contact') }}" class="mt-4 text-gold text-xs font-bold uppercase tracking-wider">Plan Your Programme</a>
          </div>

          <!-- Service Card 4 -->
          <div data-aos="zoom-in" data-aos-delay="400" class="bg-white/20 backdrop-blur-md border border-white/10 p-6 sm:p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[220px] sm:min-h-[240px]">
            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <h3 class="text-white font-bold text-sm">Speaker Visibility and Positioning</h3>
            <p class="text-gray-300 text-xs leading-relaxed mt-3">Your expertise deserves to be found. We manage your LinkedIn and Instagram as active speaker platforms — building the visibility that gets you in front of the right stages.</p>
            <a href="{{ $bookingUrl }}" class="mt-4 text-gold text-xs font-bold uppercase tracking-wider"> Book a discovery call</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Curious About What We Do -->
<section class="py-24 bg-white overflow-hidden">
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
      <!-- Left Image -->
      <div data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('img/notap-2375.jpg') }}" alt="Speaker Category" class="w-full h-[420px] sm:h-[520px] md:h-[600px] object-cover shadow-sm">
      </div>
      <!-- Right Text -->
      <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200" class="pl-0 md:pl-4">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-6 leading-tight">
          Curious About What We Do
        </h2>
        <p class="text-slate-600 text-sm leading-relaxed mb-4">
          Heard In Africa is where African excellence meets global stages. We are a speaker management company building the infrastructure of the African Speaker Economy built on a simple belief: Africa&apos;s finest voices deserve to be heard, and the world&apos;s best conferences deserve Africa&apos;s finest voices.
        </p>
        <p class="text-slate-600 text-sm leading-relaxed">
          Whether you are looking for a speaker, building a programme, or ready to take your expertise to a global audience — we are your partner from first conversation to final applause.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- What We Do Section -->
<section class="py-24 bg-slate-50 overflow-hidden">
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-6">
        What we do
      </h2>
      <p class="text-lg text-slate-600 font-light leading-relaxed">
        We sit at the centre of the African Speaker Economy — between the world's conference producers who need African voices, and Africa's most credible experts who deserve global stages.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div data-aos="fade-up" data-aos-delay="100" class="bg-white border border-slate-100 p-8 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 bg-gold/10 text-gold flex items-center justify-center mb-6 font-bold text-lg">01</div>
          <h3 class="text-dark font-heading font-bold text-lg mb-4">For conference producers</h3>
          <p class="text-slate-600 text-sm leading-relaxed">
            You need African speakers who are credible, prepared, and right for your audience. We find them, vet them, brief them, and manage them end-to-end so you can focus on running a great event.
          </p>
        </div>
        <a href="{{ route('contact') }}" class="mt-6 inline-flex items-center text-gold text-xs font-bold uppercase tracking-wider hover:text-dark transition-colors">
          Partner with us &rarr;
        </a>
      </div>

      <!-- Card 2 -->
      <div data-aos="fade-up" data-aos-delay="200" class="bg-white border border-slate-100 p-8 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 bg-gold/10 text-gold flex items-center justify-center mb-6 font-bold text-lg">02</div>
          <h3 class="text-dark font-heading font-bold text-lg mb-4">For African speakers</h3>
          <p class="text-slate-600 text-sm leading-relaxed">
            You have the expertise. We have the relationships and the infrastructure to get you on the stages that matter. We actively represent our verified speakers and pitch them to global conference producers.
          </p>
        </div>
        <a href="{{ $bookingUrl }}" class="mt-6 inline-flex items-center text-gold text-xs font-bold uppercase tracking-wider hover:text-dark transition-colors">
          Get Represented &rarr;
        </a>
      </div>

      <!-- Card 3 -->
      <div data-aos="fade-up" data-aos-delay="300" class="bg-white border border-slate-100 p-8 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 bg-gold/10 text-gold flex items-center justify-center mb-6 font-bold text-lg">03</div>
          <h3 class="text-dark font-heading font-bold text-lg mb-4">For events</h3>
          <p class="text-slate-600 text-sm leading-relaxed">
            A conference is only as good as the conversations it creates. We design conference programmes from the ground up — the agenda, the session formats, the speaker sequence, and the intellectual thread that ties it all together.
          </p>
        </div>
        <a href="{{ route('services') }}" class="mt-6 inline-flex items-center text-gold text-xs font-bold uppercase tracking-wider hover:text-dark transition-colors">
          View Program Design &rarr;
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Why HIA Exists Section -->
<section class="py-24 bg-dark text-white relative overflow-hidden">
  <div class="absolute inset-0 z-0 opacity-20">
    <img src="{{ asset('img/DSC_5074.jpg') }}" alt="Event Panel Background" class="w-full h-full object-cover mix-blend-overlay">
  </div>
  <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-5" data-aos="fade-right">
        <span class="text-gold text-xs font-bold tracking-wider mb-3 block uppercase">Our Mission</span>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold tracking-tight leading-tight">
          African expertise is everywhere. We make it impossible to ignore.
        </h2>
      </div>
      <div class="lg:col-span-7 space-y-6 text-gray-300 text-base font-light leading-relaxed" data-aos="fade-left" data-aos-delay="200">
        <p>
          Africa produces world-class thinkers, leaders, innovators, and experts in every field. The conversations happening in Lagos, Nairobi, Accra, and Johannesburg are shaping the future of technology, governance, finance, health, and climate — and the world's most important stages are starting to notice.
        </p>
        <p>
          Heard In Africa sits at the centre of that conversation. We curate and represent Africa's most credible voices, match them to the global stages their expertise deserves, and manage every detail of the speaker experience so that when an African voice takes the stage, it lands with the weight it deserves.
        </p>
        <p class="text-white font-medium border-l-2 border-gold pl-4">
          We are not filling a gap. We are building infrastructure for an economy that already exists and is ready to scale.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Proof Point Section -->
<section class="py-24 bg-white overflow-hidden">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
    <span class="text-gold text-xs font-bold tracking-wider mb-3 block uppercase" data-aos="fade-up">Proof of Execution</span>
    <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-10" data-aos="fade-up" data-aos-delay="100">
      What this looks like in practice
    </h2>
    <div class="bg-slate-50 border border-slate-100 p-8 md:p-12 shadow-sm rounded-none max-w-3xl mx-auto" data-aos="zoom-in" data-aos-delay="200">
      <!-- Large pull quote icon -->
      <span class="text-6xl text-gold/20 font-serif leading-none block -mt-4 mb-2">“</span>
      <p class="text-lg md:text-xl text-slate-800 font-light leading-relaxed italic mb-8">
        At the Omniverse Africa Summit — a four-day, multi-stage convening with over 100 speakers — Heard In Africa delivered 95% on-time session delivery, 90% speaker material submission before deadline, and zero major stage disruptions.
      </p>
      <div class="h-px bg-slate-200 w-16 mx-auto mb-6"></div>
      <p class="text-sm font-bold tracking-wider uppercase text-slate-900">
        That is what professional speaker management looks like. Not coordination. Infrastructure.
      </p>
    </div>
  </div>
</section>

<!-- Let's Connect Section -->
<section class="py-24 bg-white border-t border-slate-100 overflow-hidden">
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <!-- Left Stats -->
      <div>
        <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-heading font-bold text-dark mb-10">Let&apos;s Connect</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-8 sm:gap-y-12">
          <div data-aos="fade-up" data-aos-delay="100">
            <p class="text-4xl font-bold font-heading text-dark mb-1">4</p>
            <p class="text-sm text-slate-500">Core Services</p>
          </div>
          <div data-aos="fade-up" data-aos-delay="200">
            <p class="text-4xl font-bold font-heading text-dark mb-1">7</p>
            <p class="text-sm text-slate-500">Speaker Steps</p>
          </div>
          <div data-aos="fade-up" data-aos-delay="300">
            <p class="text-4xl font-bold font-heading text-dark mb-1">3</p>
            <p class="text-sm text-slate-500">Programme Steps</p>
          </div>
        </div>
      </div>
      <!-- Right Image -->
      <div data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('img/DSC_4433.jpg') }}" alt="Networking Event" class="w-full h-56 sm:h-64 md:h-80 object-cover shadow-sm">
      </div>
    </div>
  </div>
</section>



<?php
if (!isset($testimonials) || $testimonials->isEmpty()) {
  $testimonials = collect([
    (object)[
      'quote' => "What truly stood out was their unwavering commitment to aligning speaker satisfaction with Omniverse Africa's broader goals. Their ability to anticipate speaker needs, address concerns promptly, and create a seamless engagement process has not only strengthened our relationships with partners but also inspired confidence and enthusiasm for future collaborations with Omniverse Africa. We look forward to continued opportunities to work with Heard in Africa, confident that their expertise will consistently enhance our events and elevate our partnerships.",
      'author_name' => "Duduyemi Obia",
      'author_title' => "Director of Partnerships, Omniverse Africa Summit",
      'rating' => 5
    ]
  ]);
}
?>

<?php
if (!isset($faqs) || $faqs->isEmpty()) {
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

<!-- Testimonials / Stories of Satisfied Clients -->
<section class="py-24 bg-white overflow-hidden border-t border-slate-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
      <div class="md:col-span-4" data-aos="fade-right">
        <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase">Reviews</span>
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark">
          Trusted by Organisations<br>That Take Their Stages Seriously
        </h2>
      </div>

      <div x-data="{ 
          activeSlide: 0, 
          slides: {{ $testimonials->values()->toJson() }},
          autoPlayInterval: null,
          startAutoPlay() {
              this.autoPlayInterval = setInterval(() => {
                  this.activeSlide = (this.activeSlide + 1) % this.slides.length;
              }, 6000);
          },
          stopAutoPlay() {
              if (this.autoPlayInterval) clearInterval(this.autoPlayInterval);
          }
      }"
        x-init="startAutoPlay()"
        @mouseenter="stopAutoPlay()"
        @mouseleave="startAutoPlay()"
        class="md:col-span-8" data-aos="fade-left" data-aos-delay="200">
        <div class="bg-white border border-slate-100 p-10 shadow-sm text-center hover:shadow-md transition-shadow relative min-h-[350px] flex flex-col justify-between">

          <!-- Testimonial Content -->
          <div class="relative overflow-hidden flex-1 flex flex-col justify-center">
            <template x-for="(slide, index) in slides" :key="index">
              <div x-show="activeSlide === index"
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-x-8"
                x-transition:enter-end="opacity-100 transform translate-x-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-x-0"
                x-transition:leave-end="opacity-0 transform -translate-x-8"
                class="space-y-6">
                <!-- Stars -->
                <div class="flex justify-center text-gold gap-1">
                  <template x-for="star in Array.from({ length: slide.rating || 5 })">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                  </template>
                </div>
                <!-- Quote -->
                <p class="text-slate-600 text-sm leading-relaxed italic" x-text="'“' + slide.quote + '”'"></p>
                <!-- Author -->
                <div>
                  <p class="text-xs font-bold text-slate-900 uppercase tracking-wider" x-text="slide.author_name"></p>
                  <p class="text-xs text-slate-500 mt-1" x-text="slide.author_title"></p>
                </div>
              </div>
            </template>
          </div>

          <!-- Navigation Arrow Controls -->
          <div class="absolute inset-y-0 left-2 right-2 flex items-center justify-between pointer-events-none">
            <button @click="activeSlide = (activeSlide - 1 + slides.length) % slides.length" class="pointer-events-auto w-10 h-10 rounded-full bg-slate-50 hover:bg-slate-100 flex items-center justify-center text-slate-400 hover:text-slate-700 transition-colors shadow-sm focus:outline-none">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
            </button>
            <button @click="activeSlide = (activeSlide + 1) % slides.length" class="pointer-events-auto w-10 h-10 rounded-full bg-slate-50 hover:bg-slate-100 flex items-center justify-center text-slate-400 hover:text-slate-700 transition-colors shadow-sm focus:outline-none">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </button>
          </div>

          <!-- Slider Dots -->
          <div class="flex justify-center gap-2 mt-8">
            <template x-for="(slide, index) in slides" :key="index">
              <div @click="activeSlide = index"
                :class="activeSlide === index ? 'bg-slate-900 w-4' : 'bg-slate-300 w-2'"
                class="h-2 rounded-full cursor-pointer transition-all duration-300"></div>
            </template>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

<!-- Take Your Event to the Next Level CTA -->
<section class="py-24 bg-dark text-white relative text-center">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 relative z-10">
    <!-- <div data-aos="flip-up" class="bg-white p-12 md:p-16 shadow-xl relative z-10 max-w-5xl mx-auto"> -->
    <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-4">
      Ready to find the right African voice for your stage?
    </h2>
    <p class="text-slate-600 mb-8 text-sm text-white">Or ready to take your expertise to the world's most important stages?</p>
    <div data-aos="fade-up" data-aos-delay="300" class="flex flex-col sm:flex-row justify-center items-center gap-4">
      <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
        Book a Discovery Call
      </a>
      <a href="https://speaker-readiness-assessment.lovable.app" class="inline-flex justify-center items-center border border-white/30 text-white px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white hover:text-dark transition-colors">
        Take the speaker self-assessment
      </a>
    </div>
    <!-- </div> -->
  </div>
</section>

<x-assessment-popup />

@endsection