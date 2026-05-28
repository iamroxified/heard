@extends('layouts.app')

@section('title', 'About Us - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-[#0a0f1d] pt-32 pb-20 lg:pt-40 lg:pb-32 relative overflow-hidden flex items-center justify-center min-h-[40vh]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center w-full">
        <h1 data-aos="fade-up" data-aos-duration="1000" class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight">
            Heard in Africa
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
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-6 leading-tight">
                    Empowering African<br>Voices on Global<br>Stages
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Growing up in Nigeria, I witnessed the remarkable achievements of Africans across the globe. From founding companies and pioneering ideas to setting records and achieving firsts, Africans have consistently demonstrated excellence. However, there was a glaring absence of a dedicated platform to showcase these exceptional speakers and brilliant minds to the world.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">
                    This gap inspired the creation of Heard in Africa, an all-in-one platform that connects phenomenal African speakers with global stages. With over five years of experience in managing corporate events, I understand the challenges event organizers face in selecting, vetting, and preparing speakers.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed italic border-l-4 border-primary pl-4 mb-6">
                    "Heard in Africa was born to simplify this process, ensuring that the right voices are heard at the right events."
                </p>
                <div class="text-right">
                    <p class="text-xs font-bold text-slate-900 uppercase tracking-wider">-<i> Chimfumnaya Nwandu </i></p>
                    <p class="text-xs text-slate-500">Executive Director</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-24 relative overflow-hidden bg-[#0a0f1d]">
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
                <h3 class="text-3xl font-heading font-bold text-white mb-4 flex items-center gap-3">
                    Our Mission
                </h3>
                <p class="text-gray-300 text-sm leading-relaxed pl-1 max-w-md">
                    To amplify Africa's narrative by connecting its most influential voices and thought leaders with global stages, driving meaningful conversations that shape the future.
                </p>
            </div>

            <!-- Our Vision -->
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="border border-primary p-8 md:p-10 relative">
                <div class="absolute -top-3 -left-3 w-6 h-6 border-t-2 border-l-2 border-primary"></div>
                <div class="absolute -bottom-3 -right-3 w-6 h-6 border-b-2 border-r-2 border-primary"></div>

                <h3 class="text-3xl font-heading font-bold text-white mb-4">
                    Our Vision
                </h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    To be the premier platform that elevates African voices, empowering organizations globally through authentic, world-class programming and unparalleled thought leadership.
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
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-10">
                    Our Core Values
                </h2>

                <div class="space-y-8">
                    <!-- Value 1 -->
                    <div>
                        <div class="flex justify-between text-sm font-bold text-slate-900 mb-2">
                            <span>Excellence</span>
                            <span>100%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-1">
                            <div class="bg-primary h-1" style="width: 100%" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1500"></div>
                        </div>
                    </div>

                    <!-- Value 2 -->
                    <div>
                        <div class="flex justify-between text-sm font-bold text-slate-900 mb-2">
                            <span>Integrity</span>
                            <span>100%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-1">
                            <div class="bg-primary h-1" style="width: 100%" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1500"></div>
                        </div>
                    </div>

                    <!-- Value 3 -->
                    <div>
                        <div class="flex justify-between text-sm font-bold text-slate-900 mb-2">
                            <span>Impact</span>
                            <span>100%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-1">
                            <div class="bg-primary h-1" style="width: 100%" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1500"></div>
                        </div>
                    </div>
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
        <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-16">
            What We Do
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Box 1 -->
            <div data-aos="zoom-in" data-aos-delay="100" class="bg-white border border-slate-200 p-8 shadow-sm hover:shadow-md transition-shadow">
                <h3 class="text-lg font-heading font-bold text-[#0a0f1d] mb-3">Speaker Agency</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Providing exclusive access to a premium roster of African thought leaders for global stages.</p>
            </div>

            <!-- Box 2 -->
            <div data-aos="zoom-in" data-aos-delay="200" class="bg-white border border-slate-200 p-8 shadow-sm hover:shadow-md transition-shadow">
                <h3 class="text-lg font-heading font-bold text-[#0a0f1d] mb-3">Content Curation</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Aligning the narrative of your event with the strategic outcomes of your organization.</p>
            </div>

            <!-- Box 3 -->
            <div data-aos="zoom-in" data-aos-delay="300" class="bg-white border border-slate-200 p-8 shadow-sm hover:shadow-md transition-shadow">
                <h3 class="text-lg font-heading font-bold text-[#0a0f1d] mb-3">Event Management</h3>
                <p class="text-xs text-slate-500 leading-relaxed">End-to-end management from concept to execution for high-stakes corporate summits.</p>
            </div>

            <!-- Box 4 -->
            <div data-aos="zoom-in" data-aos-delay="400" class="bg-white border border-slate-200 p-8 shadow-sm hover:shadow-md transition-shadow">
                <h3 class="text-lg font-heading font-bold text-[#0a0f1d] mb-3">Strategic Consulting</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Advising organizations on how to build impactful programs and design transformational agendas.</p>
            </div>

            <!-- Box 5 -->
            <div data-aos="zoom-in" data-aos-delay="500" class="bg-white border border-slate-200 p-8 shadow-sm hover:shadow-md transition-shadow">
                <h3 class="text-lg font-heading font-bold text-[#0a0f1d] mb-3">Speaker Development</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Working with emerging experts to refine their core message and position them globally.</p>
            </div>

            <!-- Box 6 -->
            <div data-aos="zoom-in" data-aos-delay="600" class="bg-white border border-slate-200 p-8 shadow-sm hover:shadow-md transition-shadow">
                <h3 class="text-lg font-heading font-bold text-[#0a0f1d] mb-3">Event Programming</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Designing the flow of experience and formatting sessions to keep audiences engaged.</p>
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
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-10">
                    Why Choose Us
                </h2>

                <div class="space-y-8">
                    <!-- Feature 1 -->
                    <div class="flex gap-4">
                        <div class="shrink-0 w-12 h-12 bg-primary flex items-center justify-center text-[#0a0f1d]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-[#0a0f1d] mb-1">Proven Expertise</h4>
                            <p class="text-sm text-slate-500">We have consistently managed and programmed high-level global events with excellent outcomes.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex gap-4">
                        <div class="shrink-0 w-12 h-12 bg-primary flex items-center justify-center text-[#0a0f1d]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-[#0a0f1d] mb-1">Diverse Speaker Pool</h4>
                            <p class="text-sm text-slate-500">Access an exclusive bench of the continent's most profound and diverse intellectual property.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex gap-4">
                        <div class="shrink-0 w-12 h-12 bg-primary flex items-center justify-center text-[#0a0f1d]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-[#0a0f1d] mb-1">Tailored Solutions</h4>
                            <p class="text-sm text-slate-500">We don't offer off-the-shelf packages. Every event and agenda is customized to your exact objectives.</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="flex gap-4">
                        <div class="shrink-0 w-12 h-12 bg-primary flex items-center justify-center text-[#0a0f1d]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-[#0a0f1d] mb-1">Global Reach</h4>
                            <p class="text-sm text-slate-500">While our roots are in Africa, our speakers and our impact are consistently global.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Block -->
<section class="py-20 bg-[#0a0f1d] overflow-hidden">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2">Looking for Speaker?</h2>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-8">or <span class="text-primary">Do You Want to Speak?</span></h2>

                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="{{ route('events') }}" class="inline-flex justify-center items-center bg-primary text-[#0a0f1d] px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                        Find Speaker
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex justify-center items-center bg-primary text-[#0a0f1d] px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
                        Apply to Speak
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
        <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-heading font-bold text-[#0a0f1d] mb-12">
            Events We Provide Speakers For
        </h2>

        <div class="flex flex-col md:flex-row gap-6 justify-center items-center" data-aos="zoom-in" data-aos-delay="200">
            <!-- Image 1 -->
            <div class="w-full md:w-1/2 relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Large Conference" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white font-bold text-xl tracking-wider uppercase">Global Summits</span>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="w-full md:w-1/2 relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Boardroom Meeting" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white font-bold text-xl tracking-wider uppercase">Executive Sessions</span>
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