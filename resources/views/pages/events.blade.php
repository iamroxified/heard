@extends('layouts.app')

@section('title', 'Events - Heard In Africa')

@section('content')
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

<!-- Featured Event -->
<section class="py-16 bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative bg-white border border-slate-200 overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="h-64 lg:h-auto relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Featured Event" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-gold text-dark text-xs font-bold px-3 py-1 uppercase tracking-wider">Featured</div>
                </div>
                <div class="p-10 lg:p-16 flex flex-col justify-center">
                    <span class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-4">Omniverse Africa Summit 3.0</span>
                    <h2 class="text-3xl font-heading font-bold text-slate-900 mb-6 group-hover:text-gold transition-colors">Omniverse Africa Summit 3.0</h2>
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                        One of Africa&apos;s most ambitious pan-continental summits, bringing together technology leaders, policy makers, investors, creative economy innovators, and global partners across four days of programming.
                    </p>
                    <p class="text-slate-600 text-sm leading-relaxed mb-8">
                        Heard In Africa contributed to conference programming, session design, and speaker management across multiple tracks including Narrative Day, Collaboration Day, and Monetisation Day.
                    </p>
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Author" class="w-10 h-10 rounded-full object-cover">
                            <span class="text-sm font-bold text-slate-900">Heard In Africa</span>
                        </div>
                        <span class="text-sm font-bold text-gold uppercase tracking-wider">Reference Event</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More Details -->
<section class="py-16 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-light border border-slate-200 p-8 shadow-sm">
                <h3 class="text-xl font-heading font-bold text-dark mb-3">Event Details</h3>
                <p class="text-sm text-slate-600 leading-relaxed mb-3"><strong class="text-dark">Date:</strong> [PLACEHOLDER — confirm dates]</p>
                <p class="text-sm text-slate-600 leading-relaxed"><strong class="text-dark">Location:</strong> [PLACEHOLDER — confirm venue and city]</p>
            </div>
            <div class="bg-light border border-slate-200 p-8 shadow-sm">
                <h3 class="text-xl font-heading font-bold text-dark mb-3">Upcoming Events</h3>
                <p class="text-sm text-slate-600 leading-relaxed">[PLACEHOLDER — supply upcoming event name, date, location, short description, speaker highlights, and registration or info link.]</p>
            </div>
        </div>
    </div>
</section>

<!-- Past Events -->
<section class="py-16 bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="space-y-6 max-w-5xl mx-auto">
            <div class="bg-white border border-slate-200 p-8 hover:shadow-lg transition-shadow">
                <h3 class="text-2xl font-heading font-bold text-slate-900 mb-2">Past Events</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    [PLACEHOLDER — add 2–3 past event highlights here to strengthen the page with more proof points.]
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
