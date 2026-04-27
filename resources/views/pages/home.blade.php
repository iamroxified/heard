@extends('layouts.app')

@section('title', 'Heard In Africa - Speaker Management & Conference Programming')

@section('content')
<!-- Hero Section -->
<section class="relative bg-[#0a0f1d] pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden flex items-center min-h-[85vh]">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Event Audience" class="w-full h-full object-cover opacity-30 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-b from-[#020617]/90 via-[#0a0f1d]/80 to-[#020617]/90"></div>
    </div>
    
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center w-full">
        <div class="max-w-4xl mx-auto">
            <span class="inline-block text-primary text-sm font-bold tracking-wider mb-4">Welcome to Heard In Africa</span>
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-heading font-bold text-white tracking-tight leading-tight mb-6">
                Africa's Speaker Management & Conference Programming Partner
            </h1>
            <p class="text-sm md:text-base text-gray-300 font-light max-w-3xl mx-auto mb-10 leading-relaxed">
                We help event organizers, businesses, and organizations source, manage, and program Africa's most prominent thought leaders for their events.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('events') }}" class="inline-flex justify-center items-center rounded-none bg-primary text-[#0a0f1d] px-8 py-3 text-sm font-bold tracking-wider hover:bg-white hover:text-[#0a0f1d] transition-all duration-300">
                    Meet Our Speakers
                </a>
                <a href="{{ route('services') }}" class="inline-flex justify-center items-center rounded-none border border-white text-white px-8 py-3 text-sm font-medium tracking-wider hover:bg-white hover:text-[#0a0f1d] transition-all duration-300">
                    Explore Global Speakers
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Behind Powerful Conversations Section -->
<section class="py-24 bg-white">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Image -->
            <div>
                <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Speakers on stage" class="w-full h-auto object-cover shadow-lg border border-slate-100">
            </div>
            <!-- Right Text -->
            <div class="pl-0 md:pl-8">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-6 leading-tight">
                    Behind Powerful<br>Conversations on<br>Global Stages
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Heard in Africa is a premier speaker management agency committed to connecting the world’s most influential African voices and thought leaders with global stages.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Our mission is to amplify Africa's narrative by curating expert speakers across fields including business, technology, global health, politics, finance, and sustainability.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- What Heard in Africa Does Section -->
<section class="py-24 relative overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80" alt="Event Panel" class="w-full h-full object-cover opacity-40 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0a0f1d]/90 to-[#0a0f1d]/40"></div>
    </div>
    
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-4">
                <h2 class="text-primary text-xl font-bold font-heading mb-4">What Heard In Africa Does</h2>
                <p class="text-white text-sm leading-relaxed opacity-80">
                    We provide end-to-end speaker management and event programming solutions to guarantee the success of your engagements.
                </p>
            </div>
            
            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Service Card 1 -->
                    <div class="bg-white/20 backdrop-blur-md border border-white/10 p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[180px]">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-sm">Speaker Management</h3>
                    </div>
                    
                    <!-- Service Card 2 -->
                    <div class="bg-white/20 backdrop-blur-md border border-white/10 p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[180px]">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-sm">Conference Programming &<br>Agenda Design</h3>
                    </div>
                    
                    <!-- Service Card 3 -->
                    <div class="bg-white/20 backdrop-blur-md border border-white/10 p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[180px]">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-sm">Speaker Agency</h3>
                    </div>
                    
                    <!-- Service Card 4 -->
                    <div class="bg-white/20 backdrop-blur-md border border-white/10 p-8 flex flex-col items-center justify-center text-center hover:bg-white/30 transition-colors cursor-pointer min-h-[180px]">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mb-4 text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h3 class="text-white font-bold text-sm">Speaker Visibility &<br>Positioning</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Speakers Categories -->
<section class="py-24 bg-white">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Left Image -->
            <div>
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=800&q=80" alt="Speaker Category" class="w-full h-[600px] object-cover shadow-sm">
            </div>
            <!-- Right List -->
            <div>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-10">
                    Our Speakers<br>Categories
                </h2>
                <ul class="space-y-6">
                    <li class="flex items-center gap-3 border-b border-slate-100 pb-4">
                        <span class="text-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </span>
                        <span class="text-slate-700 text-sm font-medium">Business Leaders</span>
                    </li>
                    <li class="flex items-center gap-3 border-b border-slate-100 pb-4">
                        <span class="text-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </span>
                        <span class="text-slate-700 text-sm font-medium">Motivational Speakers</span>
                    </li>
                    <li class="flex items-center gap-3 border-b border-slate-100 pb-4">
                        <span class="text-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </span>
                        <span class="text-slate-700 text-sm font-medium">Technology Experts</span>
                    </li>
                    <li class="flex items-center gap-3 border-b border-slate-100 pb-4">
                        <span class="text-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </span>
                        <span class="text-slate-700 text-sm font-medium">Global Thought Leaders</span>
                    </li>
                    <li class="flex items-center gap-3 border-b border-slate-100 pb-4">
                        <span class="text-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </span>
                        <span class="text-slate-700 text-sm font-medium">Political Analysts</span>
                    </li>
                    <li class="flex items-center gap-3 border-b border-slate-100 pb-4">
                        <span class="text-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </span>
                        <span class="text-slate-700 text-sm font-medium">Financial Experts</span>
                    </li>
                    <li class="flex items-center gap-3 border-b border-slate-100 pb-4">
                        <span class="text-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </span>
                        <span class="text-slate-700 text-sm font-medium">Sustainability Advocates</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Let's Connect Section -->
<section class="py-24 bg-white border-t border-slate-100">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Stats -->
            <div>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-10">Let's Connect</h2>
                <div class="grid grid-cols-2 gap-y-12">
                    <div>
                        <p class="text-4xl font-bold font-heading text-[#0a0f1d] mb-1">8+</p>
                        <p class="text-sm text-slate-500">Speakers</p>
                    </div>
                    <div>
                        <p class="text-4xl font-bold font-heading text-[#0a0f1d] mb-1">11+</p>
                        <p class="text-sm text-slate-500">Sessions Delivered</p>
                    </div>
                    <div>
                        <p class="text-4xl font-bold font-heading text-[#0a0f1d] mb-1">5+</p>
                        <p class="text-sm text-slate-500">Global Partners</p>
                    </div>
                </div>
            </div>
            <!-- Right Image -->
            <div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Networking Event" class="w-full h-64 md:h-80 object-cover shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- Take Your Event to the Next Level CTA -->
<section class="py-24 bg-slate-200">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center relative">
        <div class="bg-white p-12 md:p-16 shadow-xl relative z-10 max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-4">
                Take your Event to the Next Level
            </h2>
            <p class="text-slate-600 mb-8 text-sm">Let us help you create a great event</p>
            <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-primary text-[#0a0f1d] px-8 py-3 text-sm font-bold tracking-wider hover:bg-[#0a0f1d] hover:text-white transition-colors">
                Book a Speaker
            </a>
        </div>
    </div>
</section>

<!-- Testimonials / Stories of Satisfied Clients -->
<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-4">
                <span class="text-primary text-sm font-bold tracking-wider mb-2 block uppercase">Reviews</span>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d]">
                    Stories of Satisfied<br>Clients
                </h2>
            </div>
            
            <div class="md:col-span-8">
                <div class="bg-white border border-slate-100 p-10 shadow-sm text-center">
                    <div class="flex justify-center text-primary mb-6">
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
                        <div class="w-2 h-2 rounded-full bg-slate-900"></div>
                        <div class="w-2 h-2 rounded-full bg-slate-300"></div>
                        <div class="w-2 h-2 rounded-full bg-slate-300"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
