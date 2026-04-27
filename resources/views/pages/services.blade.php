@extends('layouts.app')

@section('title', 'Services - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-[#0a0f1d] pt-32 pb-20 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <h2 class="text-sm font-bold text-primary uppercase tracking-widest mb-3">Our Services</h2>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
                Expertise designed for impact.
            </h1>
            <p class="text-xl text-gray-300 font-light mb-10 leading-relaxed">
                Whether you are an event organizer looking for the perfect voice to elevate your stage, or an expert looking to position yourself globally, our services are designed to maximize impact.
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
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Event Speaker Management</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Finding a speaker is easy. Finding the *right* speaker who aligns with your corporate narrative, understands your audience, and delivers an unforgettable experience is hard. 
                </p>
                <p class="text-slate-600 mb-8">
                    We manage the entire lifecycle of speaker engagement. From curating our exclusive bench of facilitators to rigorous pre-event briefings, logistics management, and on-site support, we ensure your speakers are an asset, not a risk.
                </p>
                
                <div class="bg-slate-50 p-6 border-l-4 border-primary mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">Who is this for?</h4>
                    <p class="text-sm text-slate-600">Corporate event planners, HR directors, and conference organizers looking for reliable, high-impact keynote speakers and workshop facilitators.</p>
                </div>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-bold text-primary uppercase tracking-wider group hover:text-primary-dark">
                    Book a consultation <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
            <div class="order-1 lg:order-2 bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Event Speaker" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0a0f1d]/80 to-transparent"></div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Event Programming" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0a0f1d]/80 to-transparent"></div>
            </div>
            <div>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Event Programming</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    A great event is more than a sequence of talks. It is a carefully designed narrative arc that takes the audience on a journey from problem to paradigm shift.
                </p>
                <p class="text-slate-600 mb-8">
                    We partner with your team to design the structure of your event. We determine the optimal mix of keynotes, panels, workshops, and disruptions to maintain energy, deepen understanding, and ensure the core message of the event is delivered effectively.
                </p>
                
                <div class="bg-slate-50 p-6 border-l-4 border-primary mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">Who is this for?</h4>
                    <p class="text-sm text-slate-600">Event organizers managing multi-day summits, leadership offsites, or complex events requiring a cohesive content strategy.</p>
                </div>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-bold text-primary uppercase tracking-wider group hover:text-primary-dark">
                    Request Agenda Support <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
        </div>
        
        <!-- Service 3 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Speaker Positioning</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Subject matter expertise is not enough. To be booked on global stages, you need a distinct point of view, intellectual property that solves a specific problem, and a compelling personal brand.
                </p>
                <p class="text-slate-600 mb-8">
                    We work with emerging and established experts to extract their core methodology, package their insights into bookable keynotes and workshops, and position them as the definitive authority in their niche.
                </p>
                
                <div class="bg-slate-50 p-6 border-l-4 border-primary mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">Who is this for?</h4>
                    <p class="text-sm text-slate-600">Academics, C-suite executives, and industry practitioners looking to build a speaking career and monetize their expertise.</p>
                </div>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-bold text-primary uppercase tracking-wider group hover:text-primary-dark">
                    Apply for positioning <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
            <div class="order-1 lg:order-2 bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1475721025871-8848135cb17c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Speaker Positioning" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0a0f1d]/80 to-transparent"></div>
            </div>
        </div>

    </div>
</section>

<!-- Final CTA Section -->
<section class="py-24 bg-slate-100 relative text-center border-t border-slate-200">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-heading font-light text-slate-900 mb-6">Ready to elevate your event?</h2>
        <p class="text-lg text-slate-600 mb-10">
            Contact us today to discuss your requirements and discover how our services can add value to your next engagement.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-[#0a0f1d] text-white px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-slate-800 transition-colors">
            Get In Touch
        </a>
    </div>
</section>
@endsection
