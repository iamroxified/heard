@extends('layouts.app')

@section('title', 'Services - Heard In Africa')

@section('content')
@php($bookingUrl = ($siteSettings['calendar_booking_url'] ?? '') ?: route('discovery-call'))
<!-- Hero Section -->
<section class="bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="absolute inset-0 z-0">

        <img src="{{ asset('img/notap-2313.jpg') }}" class="absolute inset-0 w-full  object-contain opacity-90">
        <div class="absolute inset-0 bg-gradient-to-b from-darker/90 via-dark/80 to-darker/90"></div>
    </div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <h2 class="text-sm font-bold text-gold uppercase tracking-widest mb-3">Our Services</h2>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
                Speaker management and conference programming, built for stages that matter
            </h1>
            <!-- <p class="text-xl text-gray-300 font-light mb-10 leading-relaxed">
                We keep the structure familiar, but the brand, copy, and service offerings now match the new Heard In Africa positioning.
            </p> -->
        </div>
    </div>
</section>

<!-- Services Detail Section -->
<section class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-24">

        <!-- Service 1 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="col-md-8 col-lg-8 ">
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Event Speaker Management</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    End-to-end management of your speaker programme, from sourcing through to post-event close-out.
                </p>
                <p class="text-slate-600 mb-8"> Finding the right speaker is only the beginning. Heard In Africa manages every step of the speaker journey — sourcing and vetting candidates, handling contracts and logistics, delivering personalised speaker briefings, and providing on-site coordination on the day.Every speaker who works with us receives a briefing document tailored to their specific session, their co-panellists, the audience profile, and the thematic objectives of that moment in your programme. Not a generic template. A document that prepares them to deliver something your audience will remember. </p>
                <div class="bg-slate-50 p-6 border-l-4 border-gold mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">WHAT THIS COVERS</h4>
                    <ul>
                        <li>- Speaker sourcing and vetting against your brief</li>
                        <li>- Contracts, fee negotiations, and logistics coordination</li>
                        <li>- Personalised pre-event speaker briefing documents</li>
                        <li>- Moderator preparation and alignment calls</li>
                        <li>- On-site speaker handling from arrival to stage</li>
                        <li>- Post-event close-out, thank-you communications, and feedback collection</li>
                    </ul>
                </div>
                <p class="text-slate-600 mb-8">At Omniverse Africa Summit — a four-day, multi-stage convening with 100+ speakers — we achieved 95% on-time session delivery and zero major stage disruptions.</p>

                <!-- <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3  font-bold uppercase tracking-wider hover:bg-white transition-colors">
                    Book a Consultation <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a> -->
            </div>
            <div class="order-1 lg:order-2 bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="{{ asset('img/DSC_5167.jpg') }}" alt="Event Speaker" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="{{ asset('img/speaker_matching.jpeg') }}" alt="Speaker Agency" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
            </div>
            <div>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Speaker Matching</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Share your brief. We return a curated shortlist of African speakers matched to your event — with topic angles ready to pitch internally.
                </p>
                <p class="text-slate-600 mb-8">
                    You tell us what you need — your event theme, audience, the specific sessions you are programming, and your budget range. We research, assess, and return a curated shortlist of African speakers matched to your brief, usually within 48 hours.Each recommendation comes with a speaker profile, a proposed session angle tailored to your event, and our reasoning for why this speaker fits your brief. We do not send you a long list and leave you to figure it out. We do the curation work so you do not have to.
                </p>
                <p>Submit a speaker brief → info@heardinafrica.com</p>

                <!-- <div class="bg-slate-50 p-6 border-l-4 border-gold mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">CTA</h4>
                    <p class="text-sm text-slate-600">Join Our Speaker Roster</p>
                </div> -->

            </div>
        </div>

        <!-- Service 3 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Conference Programme Design</h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    A great conference is not a list of speakers. It is a carefully designed argument. We build that argument.
                </p>
                <p class="text-slate-600 mb-8">
                    Heard In Africa works with event producers, institutions, and organisations to build conference programmes with intellectual coherence, deliberate flow, and the right balance of energy, depth, and tension.We design the architecture of your programme — the themes, session formats, keynote sequencing, and panel structures — so every hour earns its place and your audience leaves having experienced something genuinely worth attending.

                </p>
                <p><b>Step 1:</b> Programme Strategy — working backwards from the audience outcome to design the architecture, themes, and session formats.<br>
                    <b>Step 2:</b> Session Design and Speaker Matching — designing each session individually and matching the right speaker to the right moment.<br>
                    <b>Step 3:</b> Execution and On-Site Delivery — managing briefs, rehearsals, and on-site coordination.
                </p>

                <!-- <div class="bg-slate-50 p-6 border-l-4 border-gold mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">CTA</h4>
                    <p class="text-sm text-slate-600">Plan Your Programme</p>
                </div> -->


            </div>
            <div class="order-1 lg:order-2 bg-slate-100 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="{{ asset('img/event_programme.jpg') }}" alt="Conference Programming" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="bg-slate-50 aspect-square md:aspect-video lg:aspect-square flex items-center justify-center relative overflow-hidden">
                <img src="{{ asset('img/DSC_9994.jpg') }}" alt="Speaker Visibility" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-multiply">
                <div class="absolute inset-0 bg-gradient-to-t from-dark/80 to-transparent"></div>
            </div>
            <div>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Speaker Visibility and Positioning
                </h3>
                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    Your expertise is not the problem. Your visibility is.
                </p>
                <p class="text-slate-600 mb-8">
                    African speakers are being searched for. Conference producers are actively looking. The question is whether they can find you — and whether what they find makes them stop scrolling and say yes.Heard In Africa's Speaker Visibility and Positioning service manages your LinkedIn and Instagram as active speaker career platforms. Every post, every update, every piece of content is in service of one goal: making sure the right producers, organisations, and audiences find you, understand what you stand for, and want to hear you speak.

                </p>

                <div class="bg-slate-20 p-2 border-l-4 border-gold mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">WHAT THIS COVERS</h4>
                    <p class="text-sm text-slate-600">— LinkedIn profile optimisation: — headline, about section, featured posts, and banner updated to communicate your speaking expertise immediately <br>— Weekly LinkedIn content strategy and posting — thought leadership content that builds your authority in your specific field<br>— Instagram management — content strategy, caption writing, posting, and monthly analytics<br>— Speaker messaging and positioning session — defining your topic, your audience, your message, and your differentiator<br>— Speaker messaging document — your positioning, key messages, and bio language in one reference document</p>
                </div>
                <h4>WHO THIS IS FOR</h4>
                <p>African speakers and thought leaders who know their expertise but are not showing up online in a way that attracts the right opportunities. If conference producers cannot find you, your expertise is invisible to the market — regardless of how brilliant you are on stage.
                </p>

                <!-- <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3  font-bold uppercase tracking-wider hover:bg-white transition-colors">
                    Apply for the Programme <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a> -->
            </div>
        </div>

    </div>
</section>

<!-- Consult CTA Section -->
<section class="py-24 bg-slate-50 relative text-center">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <!-- <h2 class="text-xs font-bold text-gold uppercase tracking-widest mb-4">Ready To Get Started</h2> -->
        <h3 class="text-3xl md:text-5xl font-heading font-bold text-slate-900 mb-6">Ready to get started?</h3>
        <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto">
            Share your goals and we&apos;ll schedule a consultation call to explore how we can design the right experience for your team.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-dark hover:text-white transition-colors">
                Book a Discovery Call <span class="ml-2">&rarr;</span>
            </a>
            <a href="mailto:info@heardinafrica.com" class="inline-flex justify-center items-center border border-slate-300 text-slate-900 px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                Send us your event brief
            </a>
        </div>
    </div>
</section>

<!-- How It Works Steps -->
<section class="py-24 bg-white relative">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16">
            <h2 class="text-3xl font-heading font-bold text-dark mb-4">Framework for Managing Event Speakers</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
            <!-- Connecting Line (Desktop) -->
            <div class="hidden md:block absolute top-6 left-1/6 right-1/6 h-0.5 bg-slate-200 z-0"></div>

            <!-- Step 1 -->
            <div class="relative z-10 text-center" data-aos="fade-up">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    01
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Discovery &amp; Brief</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We begin with a detailed conversation about your event, your audience, your objectives, and the kind of speaker experience you want to create. We ask the questions most clients don&apos;t think to ask, so the brief is complete before we begin sourcing.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    02
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Sourcing &amp; Shortlist</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Drawing on our curated roster and wider network, we present a shortlisted selection of speakers matched to your brief. Each recommendation comes with a rationale — not just a bio and a fee.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    03
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Vetting &amp; Confirmation</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We handle reference checks, availability confirmation, and initial fee negotiations, ensuring you only move forward with speakers who are the right fit in every dimension.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative mt-12">
            <div class="relative z-10 text-center" data-aos="fade-up">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    04
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Contract &amp; Logistics</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We manage all contracting, travel arrangements, accommodation coordination, and logistics — so your team is free to focus on the event itself.
                </p>
            </div>
            <div class="relative z-10 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    05
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Speaker Preparation</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Every speaker receives a bespoke pre-event brief from our team, covering audience profile, session objectives, programme context, and any specific requirements. Where needed, we provide coaching and rehearsal support.
                </p>
            </div>
            <div class="relative z-10 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    06
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">On-Site Management</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    On the day, our team provides on-site speaker coordination — from arrival to green room to stage — ensuring timing, technical, and AV requirements are all managed without the event team carrying the load.
                </p>
            </div>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="relative z-10 text-center md:col-span-2 max-w-3xl mx-auto" data-aos="fade-up">
                <div class="w-12 h-12 bg-gold text-dark font-bold flex items-center justify-center mx-auto mb-6">
                    07
                </div>
                <h3 class="text-xl font-heading font-bold text-slate-900 mb-4">Post-Event Follow-Through</h3>
                <p class="text-slate-600 text-sm leading-relaxed">
                    We collect speaker and audience feedback, manage any outstanding contractual requirements, and provide a post-event debrief to inform future programming.
                </p>
            </div>
        </div>

        <!-- Consult CTA Section -->
        <section class="py-24 bg-slate-50 relative text-center">
            <div class="mx-auto max-w-6xl px-4 sm:px-8 lg:px-12">
                <h2 class="text-xs font-bold text-gold uppercase tracking-widest mb-4">Ready To Get Started</h2>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-6">Looking for an African speaker?</h3>
                <p class="text-lg text-slate-600 mb-10 max-w-5xl mx-auto">
                    We represent a curated selection of African speakers across leadership, governance, technology, and social impact. Every speaker we represent has been personally assessed by our team. Share your brief at info@heardinafrica.com and we will match you with the right voice for your stage.
                </p>

            </div>
        </section>

        <!-- Programs Tags Preview -->
        <div class="mt-24 pt-16 border-t border-slate-200  relative text-center">
            <h3 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-6">Conference Programme Design is built in 3 steps:</h3>
            <div class="grid gap-6 md:grid-cols-3 mb-10">
                <div class="border border-slate-200 bg-slate-50 p-6">
                    <h4 class="font-bold text-dark mb-2">Step 1: Programme Strategy</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">We work backwards from the audience outcome to design the programme architecture, themes, sequence, and session formats.</p>
                </div>
                <div class="border border-slate-200 bg-slate-50 p-6">
                    <h4 class="font-bold text-dark mb-2">Step 2: Session Design &amp; Speaker Matching</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">We design each session individually and match the right speakers to the right moment in the programme.</p>
                </div>
                <div class="border border-slate-200 bg-slate-50 p-6">
                    <h4 class="font-bold text-dark mb-2">Step 3: Execution &amp; On-Site Delivery</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">We manage briefs, rehearsals, AV coordination, and on-site delivery so the event runs with precision.</p>
                </div>
            </div>
            <!-- 
            <div class="flex gap-4">
                <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-dark hover:text-white transition-colors">
                    Book a Discovery Call
                </a>
                <a href="{{ route('about') }}" class="inline-flex justify-center items-center border border-slate-300 bg-white text-slate-900 px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-slate-50 transition-colors">
                    About the Company
                </a>
            </div>
            <p class="text-xs text-slate-400 mt-4 italic">Speaker categories include business leadership, technology, finance, sustainability, governance, culture, health, and global affairs.</p> -->
        </div>
    </div>
</section>

<!-- Consult CTA Section -->
<section class="py-24 bg-slate-50 relative text-center">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-xs font-bold text-gold uppercase tracking-widest mb-4">Ready To Get Started</h2>
        <h3 class="text-3xl md:text-5xl font-heading font-bold text-slate-900 mb-6">Let&apos;s Talk About Your Event</h3>
        <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto">
            Share your goals and we&apos;ll schedule a consultation call to explore how we can design the right experience for your team.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-dark hover:text-white transition-colors">
                Book a Discovery Call <span class="ml-2">&rarr;</span>
            </a>
            <a href="{{ route('about') }}" class="inline-flex justify-center items-center border border-slate-300 text-slate-900 px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                Learn More
            </a>
        </div>
    </div>
</section>
<!-- Final CTA Section -->
<!-- <section class="py-24 bg-slate-100 relative text-center border-t border-slate-200">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-6">Ready to elevate your event?</h2>
        <p class="text-lg text-slate-600 mb-10">
            Contact us today to discuss your requirements and discover how our services can add value to your next engagement.
        </p>
        <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-dark text-white px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-gold hover:text-dark transition-colors">
            Book a Discovery Call
        </a>
    </div>
</section> -->
@endsection