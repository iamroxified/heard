@extends('layouts.app')

@section('title', 'Services - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <h2 class="text-sm font-bold text-gold uppercase tracking-widest mb-3">Our Services</h2>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
                Speaker management and conference programming, built for serious stages.
            </h1>
            <p class="text-xl text-gray-300 font-light mb-10 leading-relaxed">
                We keep the structure familiar, but the brand, copy, and service offerings now match the new Heard In Africa positioning.
            </p>
        </div>
    </div>
</section>

<!-- Services Detail Section -->
<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-24">
        
        <!-- Service 1 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Speaker Management</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    End-to-end management of your speakers from sourcing through to the stage. We handle everything so you can focus on your event.
                </p>
                <p class="text-slate-600 mb-8">
                    Finding the right speaker is only the beginning. Heard In Africa manages every step of the speaker journey — sourcing and vetting candidates, handling contracts and negotiations, coordinating travel and logistics, delivering pre-event preparation, and providing on-site support on the day.
                </p>
                
                <div class="bg-slate-50 p-6 border-l-4 border-gold mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">CTA</h4>
                    <p class="text-sm text-slate-600">Book a Consultation</p>
                </div>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-bold text-gold uppercase tracking-wider group hover:text-dark">
                    Book a Consultation <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
            <div class="order-1 lg:order-2 bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Event Speaker" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Speaker Agency" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
            </div>
            <div>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Speaker Agency</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    We represent and manage Africa&apos;s most compelling voices — positioning them for the global stages their expertise deserves.
                </p>
                <p class="text-slate-600 mb-8">
                    Africa produces world-class thinkers, leaders, and innovators. Heard In Africa is the agency that represents them properly. We work with African speakers to develop their positioning, refine their narrative, and connect them with the right events, globally.
                </p>
                
                <div class="bg-slate-50 p-6 border-l-4 border-gold mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">CTA</h4>
                    <p class="text-sm text-slate-600">Join Our Speaker Roster</p>
                </div>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-bold text-gold uppercase tracking-wider group hover:text-dark">
                    Join Our Speaker Roster <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
        </div>
        
        <!-- Service 3 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Conference Programming &amp; Agenda Design</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    We design keynotes, panels, fireside chats, and session formats that create experiences audiences remember — and organisers are proud of.
                </p>
                <p class="text-slate-600 mb-8">
                    A great conference is not a list of speakers — it is a carefully designed argument. Heard In Africa works with event producers, institutions, and organisations to build programmes with intellectual coherence, deliberate flow, and the right balance of energy, depth, and tension.
                </p>
                
                <div class="bg-slate-50 p-6 border-l-4 border-gold mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">CTA</h4>
                    <p class="text-sm text-slate-600">Plan Your Programme</p>
                </div>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-bold text-gold uppercase tracking-wider group hover:text-dark">
                    Plan Your Programme <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
            <div class="order-1 lg:order-2 bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1475721025871-8848135cb17c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Conference Programming" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1551836022-b06985bceb24?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Speaker Visibility" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
            </div>
            <div>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Speaker Visibility &amp; Positioning</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Helping African experts build the profile, narrative, and stage presence that global audiences respond to.
                </p>
                <p class="text-slate-600 mb-8">
                    Great expertise does not always come with great visibility. Our Speaker Visibility &amp; Positioning service helps African thought leaders translate their depth of knowledge into compelling speaker profiles, clear messaging, and a consistent public presence.
                </p>
                
                <div class="bg-slate-50 p-6 border-l-4 border-gold mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">CTA</h4>
                    <p class="text-sm text-slate-600">Apply for the Programme</p>
                </div>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-bold text-gold uppercase tracking-wider group hover:text-dark">
                    Apply for the Programme <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Final CTA Section -->
<section class="py-24 bg-slate-100 relative text-center border-t border-slate-200">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-6">Ready to elevate your event?</h2>
        <p class="text-lg text-slate-600 mb-10">
            Contact us today to discuss your requirements and discover how our services can add value to your next engagement.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-dark text-white px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-gold hover:text-dark transition-colors">
            Book a Discovery Call
        </a>
    </div>
</section>
@endsection
