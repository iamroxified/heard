@extends('layouts.app')

@section('title', 'Events - Heard In Africa')

@section('content')
@php($bookingUrl = ($siteSettings['calendar_booking_url'] ?? '') ?: route('discovery-call'))

<!-- Hero Section -->
<section class="bg-dark pt-28 pb-16 sm:pt-32 lg:pt-48 lg:pb-24 border-b border-white/10 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')] bg-cover bg-center opacity-10 mix-blend-overlay"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-sm font-bold text-gold uppercase tracking-widest mb-3">Events</h2>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6 max-w-3xl">
            Events that matter deserve the right voices.
        </h1>
        <p class="text-lg text-gray-300 font-light max-w-2xl mb-10">
            Heard In Africa has been trusted to source speakers, design programmes, and deliver on-site management for events that matter — from flagship pan-African summits to intimate leadership forums.
        </p>
    </div>
</section>

<!-- Featured Event Section -->
@if($featuredEvent)
<section class="py-20 bg-slate-50 border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center md:text-left mb-12">
            <span class="text-gold text-xs font-bold uppercase tracking-wider mb-2 block">Spotlight Event</span>
            <h2 class="text-3xl font-heading font-bold text-dark">Featured Event</h2>
        </div>

        <div class="relative bg-white border border-slate-200 overflow-hidden hover:shadow-xl transition-shadow group">
            <div class="grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-7 h-72 lg:h-auto relative overflow-hidden min-h-[300px]">
                    <img src="{{ $featuredEvent->featured_image_path ? (str_starts_with($featuredEvent->featured_image_path, 'http') ? $featuredEvent->featured_image_path : asset('storage/' . $featuredEvent->featured_image_path)) : 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80' }}" alt="{{ $featuredEvent->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-[1.02] transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-gold text-dark text-xs font-bold px-3 py-1.5 uppercase tracking-wider">Featured</div>
                </div>

                <!-- Text right -->
                <div class="lg:col-span-5 p-8 md:p-12 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3 block">
                            {{ $featuredEvent->event_date ? $featuredEvent->event_date->format('F d, Y') : 'Date TBA' }}
                        </span>
                        <h3 class="text-2xl md:text-3xl font-heading font-bold text-slate-900 mb-6 group-hover:text-gold transition-colors">{{ $featuredEvent->name }}</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            {{ $featuredEvent->short_description }}
                        </p>
                        @if($featuredEvent->full_description)
                        <p class="text-slate-500 text-xs leading-relaxed mb-6">
                            {{ $featuredEvent->full_description }}
                        </p>
                        @endif

                        @if($featuredEvent->speaker_highlights)
                        <div class="mb-8">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Speaker Highlights</span>
                            <div class="flex flex-wrap gap-2">
                                @foreach(explode(',', $featuredEvent->speaker_highlights) as $speaker)
                                <span class="bg-slate-100 text-slate-700 text-[10px] font-bold px-2.5 py-1 uppercase tracking-wider border border-slate-200/60">{{ trim($speaker) }}</span>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="flex flex-wrap items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                        <div class="flex items-center gap-2 text-xs text-slate-500 mr-4">
                            <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-medium text-slate-700">{{ $featuredEvent->location ?? 'Venue TBA' }}</span>
                        </div>
                        
                        @if($featuredEvent->registration_link)
                        <a href="{{ $featuredEvent->registration_link }}" target="_blank" rel="noopener noreferrer" class="inline-flex justify-center items-center bg-gold text-dark px-6 py-3 text-xs font-bold uppercase tracking-wider hover:bg-dark hover:text-white transition-colors">
                            Register Now
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Upcoming Events Section -->
<section class="py-24 bg-white border-b border-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase" data-aos="fade-up">Calendar</span>
            <h2 data-aos="fade-up" data-aos-delay="100" class="text-3xl md:text-4xl font-heading font-bold text-dark">
                Upcoming Events
            </h2>
            <p data-aos="fade-up" data-aos-delay="200" class="text-slate-500 text-sm mt-3 max-w-md mx-auto">
                Catch our speakers, panel structures, and curators live at these upcoming platforms.
            </p>
        </div>

        @if($upcomingEvents->isEmpty())
        <div class="max-w-2xl mx-auto bg-slate-50 border border-slate-200 p-12 text-center" data-aos="fade-up">
            <svg class="w-12 h-12 text-slate-300 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"></path>
            </svg>
            <h3 class="text-lg font-heading font-bold text-slate-800 mb-2">Check Back Soon</h3>
            <p class="text-sm text-slate-500">We are currently programming agendas and preparing speaker schedules for several upcoming events. Dates will be announced soon.</p>
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($upcomingEvents as $event)
            <div data-aos="fade-up" class="bg-slate-50 border border-slate-200 group flex flex-col justify-between hover:shadow-lg transition-shadow">
                <div class="p-6 md:p-8">
                    <!-- Image -->
                    @if($event->featured_image_path)
                    <div class="aspect-video bg-slate-200 overflow-hidden mb-6 shadow-sm border border-slate-200/40">
                        <img src="{{ str_starts_with($event->featured_image_path, 'http') ? $event->featured_image_path : asset('storage/' . $event->featured_image_path) }}" alt="{{ $event->name }}" class="w-full h-full object-cover group-hover:scale-[1.02] transition-transform duration-500">
                    </div>
                    @endif
                    
                    <span class="text-gold text-xs font-bold uppercase tracking-wider mb-2 block">
                        {{ $event->event_date ? $event->event_date->format('F d, Y') : 'Date TBA' }}
                    </span>
                    
                    <h3 class="text-xl font-heading font-bold text-dark group-hover:text-accent transition-colors duration-300 mb-3">{{ $event->name }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">{{ $event->short_description }}</p>
                    
                    @if($event->speaker_highlights)
                    <div class="mb-6">
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Speakers Included</span>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach(explode(',', $event->speaker_highlights) as $speaker)
                            <span class="bg-white text-slate-700 text-[9px] font-bold px-2 py-0.5 uppercase border border-slate-200">{{ trim($speaker) }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <div class="p-6 md:p-8 bg-white border-t border-slate-200/60 flex items-center justify-between">
                    <div class="flex items-center gap-1.5 text-xs text-slate-500">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>{{ $event->location ?? 'Venue TBA' }}</span>
                    </div>

                    @if($event->registration_link)
                    <a href="{{ $event->registration_link }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-xs font-bold text-gold uppercase tracking-wider hover:text-dark transition-colors gap-1 border-b border-gold pb-0.5">
                        <span>Register Info</span>
                        <span>&rarr;</span>
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

<!-- Past Events Section -->
<section class="py-24 bg-slate-50 overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-gold text-sm font-bold tracking-wider mb-2 block uppercase" data-aos="fade-up">Archive</span>
            <h2 data-aos="fade-up" data-aos-delay="100" class="text-3xl md:text-4xl font-heading font-bold text-dark">
                Past Successes & References
            </h2>
            <p data-aos="fade-up" data-aos-delay="200" class="text-slate-500 text-sm mt-3 max-w-md mx-auto">
                Read summaries of past stages we programmed, managed, and curated.
            </p>
        </div>

        @if($pastEvents->isEmpty())
        <div class="text-center text-slate-500 text-sm" data-aos="fade-up">No past events recorded.</div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @foreach($pastEvents as $event)
            <div data-aos="fade-up" class="bg-white border border-slate-200 p-6 md:p-8 hover:shadow-md transition-shadow flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                            {{ $event->event_date ? $event->event_date->format('F Y') : 'Date TBA' }}
                        </span>
                        <span class="text-[9px] font-bold text-slate-500 bg-slate-100 border border-slate-200 px-2 py-0.5 uppercase tracking-wider">{{ $event->location }}</span>
                    </div>
                    
                    <h3 class="text-lg font-heading font-bold text-dark mb-3">{{ $event->name }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">{{ $event->short_description }}</p>
                    
                    @if($event->speaker_highlights)
                    <div class="mt-4">
                        <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block mb-1.5">Speakers Placed</span>
                        <p class="text-slate-600 text-xs leading-relaxed italic">{{ $event->speaker_highlights }}</p>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-24 bg-dark text-white relative text-center">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-gold text-sm font-bold tracking-widest mb-4 block uppercase" data-aos="fade-up">Stage Production Partner</h2>
        <h3 data-aos="fade-up" data-aos-delay="100" class="text-3xl md:text-5xl font-heading font-bold text-white mb-6">Need Strategic Speakers for Your Event?</h3>
        <p data-aos="fade-up" data-aos-delay="200" class="text-lg text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
            From speaker sourcing to detailed program agenda planning and day-of stage logistics management, we help make your stage memorable.
        </p>
        <div data-aos="fade-up" data-aos-delay="300" class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                Book a Discovery Call
            </a>
            <a href="{{ route('contact') }}" class="inline-flex justify-center items-center border border-white/30 text-white px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white hover:text-dark transition-colors">
                Contact Our Team
            </a>
        </div>
    </div>
</section>
@endsection
