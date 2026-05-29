@extends('layouts.app')

@section('title', 'Heard In Africa | Africa\'s Finest Voices. Your Most Powerful Stage.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 overflow-hidden flex items-center min-h-[78vh] md:min-h-[85vh]">
    <!-- Video Background -->
    <div class="absolute inset-0 z-0">
        <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-40 mix-blend-overlay">
            <source src="https://cdn.pixabay.com/video/2020/05/21/40003-424177579_large.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-darker/90 via-dark/80 to-darker/90"></div>
    </div>
    
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center w-full">
        <div class="max-w-4xl mx-auto">
            <span data-aos="fade-down" data-aos-duration="1000" class="inline-block text-gold text-sm font-bold tracking-wider mb-4">Heard In Africa</span>
            <h1 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" class="text-4xl md:text-5xl lg:text-7xl font-heading font-bold text-white tracking-tight leading-tight mb-6">
                Africa&apos;s Finest Voices.<br>Your Most Powerful Stage.
            </h1>
            <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400" class="text-base md:text-lg text-gray-300 font-light max-w-3xl mx-auto mb-10 leading-relaxed">
                We connect global organisations with Africa&apos;s leading speakers and design conference programmes that move audiences and shape conversations.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                <a href="{{ route('contact') }}" class="inline-flex justify-center items-center rounded-none bg-gold text-dark px-8 py-3 text-sm font-bold tracking-wider hover:bg-white hover:text-dark transition-all duration-300">
                    Book a Discovery Call
                </a>
                <a href="{{ route('about') }}" class="inline-flex justify-center items-center rounded-none border border-white text-white px-8 py-3 text-sm font-medium tracking-wider hover:bg-white hover:text-dark transition-all duration-300">
                    Learn More
                </a>
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
                <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Speakers on stage" class="w-full h-auto object-cover shadow-lg border border-slate-100">
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
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80" alt="Event Panel" class="w-full h-full object-cover opacity-40 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-r from-dark/90 to-dark/40"></div>
    </div>
    
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-4" data-aos="fade-right">
                <h2 class="text-gold text-xl font-bold font-heading mb-4">Services</h2>
                <p class="text-white text-sm leading-relaxed opacity-80">
                    End-to-end support for speakers, organisers, and programmes.
                </p>
            </div>
            
            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Service Card 1 -->
                    <div data-aos="zoom-in" data-aos-delay="100" class="bg-white/20 backdrop-blur-md border border-white/10 p-6 sm:p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[220px] sm:min-h-[240px]">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-sm">Speaker Management</h3>
                        <p class="text-gray-300 text-xs leading-relaxed mt-3">End-to-end management of your speakers from sourcing through to the stage.</p>
                        <a href="{{ route('contact') }}" class="mt-4 text-gold text-xs font-bold uppercase tracking-wider">Book a Consultation</a>
                    </div>
                    
                    <!-- Service Card 2 -->
                    <div data-aos="zoom-in" data-aos-delay="200" class="bg-white/20 backdrop-blur-md border border-white/10 p-6 sm:p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[220px] sm:min-h-[240px]">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-sm">Speaker Agency</h3>
                        <p class="text-gray-300 text-xs leading-relaxed mt-3">We represent and manage Africa&apos;s most compelling voices.</p>
                        <a href="{{ route('contact') }}" class="mt-4 text-gold text-xs font-bold uppercase tracking-wider">Join Our Speaker Roster</a>
                    </div>
                    
                    <!-- Service Card 3 -->
                    <div data-aos="zoom-in" data-aos-delay="300" class="bg-white/20 backdrop-blur-md border border-white/10 p-6 sm:p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[220px] sm:min-h-[240px]">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-sm">Conference Programming &amp;<br>Agenda Design</h3>
                        <p class="text-gray-300 text-xs leading-relaxed mt-3">We design keynotes, panels, fireside chats, and session formats that audiences remember.</p>
                        <a href="{{ route('contact') }}" class="mt-4 text-gold text-xs font-bold uppercase tracking-wider">Plan Your Programme</a>
                    </div>
                    
                    <!-- Service Card 4 -->
                    <div data-aos="zoom-in" data-aos-delay="400" class="bg-white/20 backdrop-blur-md border border-white/10 p-6 sm:p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[220px] sm:min-h-[240px]">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-sm">Speaker Visibility &amp;<br>Positioning</h3>
                        <p class="text-gray-300 text-xs leading-relaxed mt-3">Helping African experts build the profile, narrative, and stage presence global audiences respond to.</p>
                        <a href="{{ route('contact') }}" class="mt-4 text-gold text-xs font-bold uppercase tracking-wider">Apply for the Programme</a>
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
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=800&q=80" alt="Speaker Category" class="w-full h-[420px] sm:h-[520px] md:h-[600px] object-cover shadow-sm">
            </div>
            <!-- Right Text -->
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200" class="pl-0 md:pl-4">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-6 leading-tight">
                    Curious About What We Do
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Heard In Africa is where African excellence meets global stages. We are a speaker management and conference programming agency built on a simple belief: Africa&apos;s finest voices deserve to be heard, and the world&apos;s best conferences deserve Africa&apos;s finest voices.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Whether you are looking for a speaker, building a programme, or ready to take your expertise to a global audience — we are your partner from first conversation to final applause.
                </p>
            </div>
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
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Networking Event" class="w-full h-56 sm:h-64 md:h-80 object-cover shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- Take Your Event to the Next Level CTA -->
<section class="py-24 bg-slate-200">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center relative">
        <div data-aos="flip-up" class="bg-white p-12 md:p-16 shadow-xl relative z-10 max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-4">
                Africa&apos;s Finest Voices. Your Most Powerful Stage.
            </h2>
            <p class="text-slate-600 mb-8 text-sm">We connect speakers, shape programmes, and support the stages that matter.</p>
            <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3 text-sm font-bold tracking-wider hover:bg-dark hover:text-white transition-colors">
                Book a Discovery Call
            </a>
        </div>
    </div>
</section>

<!-- Testimonials / Stories of Satisfied Clients -->
<section class="py-24 bg-white overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-4" data-aos="fade-right">
                <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase">Reviews</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark">
                    Trusted by Organisations<br>That Take Their Stages Seriously
                </h2>
            </div>
            
            <div class="md:col-span-8" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-white border border-slate-100 p-10 shadow-sm text-center hover:shadow-md transition-shadow">
                    <div class="flex justify-center text-gold mb-6">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 italic">
                        "Heard In Africa has fundamentally changed how we program our annual summit. Their speakers don't just motivate; they deliver actionable insights that align perfectly with our corporate strategy. The entire process from sourcing to on-the-day execution was flawless."
                    </p>
                    <p class="text-xs font-bold text-slate-900 uppercase tracking-wider">Event Planner, Global Tech Conference</p>
                    
                    <!-- Slider Dots -->
                    <div class="flex justify-center gap-2 mt-8">
                        <div class="w-2 h-2 rounded-full bg-slate-900 cursor-pointer"></div>
                        <div class="w-2 h-2 rounded-full bg-slate-300 cursor-pointer"></div>
                        <div class="w-2 h-2 rounded-full bg-slate-300 cursor-pointer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
