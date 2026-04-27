@extends('layouts.app')

@section('title', 'Contact Us - Heard In Africa')

@section('content')
<!-- Hero Section -->
<section class="bg-[#0a0f1d] pt-32 pb-20 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-sm font-bold text-primary uppercase tracking-widest mb-3">Let's Connect</h2>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
            Start the Conversation.
        </h1>
        <p class="text-lg text-gray-300 font-light max-w-2xl mx-auto mb-10">
            Whether you need to book a speaker, design an entire event agenda, or apply to join our roster, we are ready to listen.
        </p>
        <a href="#clarifying-call" class="inline-flex justify-center items-center bg-primary text-[#0a0f1d] px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
            Book a 15-Min Clarifying Call
        </a>
    </div>
</section>

<!-- Contact Layout -->
<section class="py-24 bg-white relative">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            
            <!-- Forms Column -->
            <div class="lg:col-span-7">
                
                <div x-data="{ tab: 'agenda' }">
                    <!-- Tab Navigation -->
                    <div class="flex border-b border-slate-200 mb-8">
                        <button @click="tab = 'agenda'" :class="{ 'border-primary text-primary': tab === 'agenda', 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300': tab !== 'agenda' }" class="pb-4 px-1 border-b-2 font-medium text-sm mr-8 uppercase tracking-wider transition-colors">
                            Request Agenda Support
                        </button>
                        <button @click="tab = 'general'" :class="{ 'border-primary text-primary': tab === 'general', 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300': tab !== 'general' }" class="pb-4 px-1 border-b-2 font-medium text-sm uppercase tracking-wider transition-colors">
                            General Inquiry
                        </button>
                    </div>

                    <!-- Agenda Form -->
                    <div x-show="tab === 'agenda'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                        <h3 class="text-2xl font-heading font-bold text-slate-900 mb-2">Tell us about your event</h3>
                        <p class="text-slate-600 mb-8">Provide some preliminary details so we can arrive at our discovery call prepared.</p>
                        
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">First Name *</label>
                                    <input type="text" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Last Name *</label>
                                    <input type="text" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Work Email *</label>
                                    <input type="email" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Company *</label>
                                    <input type="text" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Event Name / Theme</label>
                                <input type="text" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Estimated Event Date</label>
                                    <input type="date" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-slate-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Estimated Audience Size</label>
                                    <select class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-slate-700">
                                        <option>Less than 50</option>
                                        <option>50 - 200</option>
                                        <option>200 - 500</option>
                                        <option>500+</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">What is the primary outcome you need to achieve? *</label>
                                <textarea rows="4" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required></textarea>
                            </div>
                            <button type="submit" class="bg-[#0a0f1d] text-white px-8 py-4 font-bold uppercase tracking-wider hover:bg-slate-800 transition-colors">
                                Submit Request
                            </button>
                        </form>
                    </div>

                    <!-- General Form -->
                    <div x-cloak x-show="tab === 'general'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                        <h3 class="text-2xl font-heading font-bold text-slate-900 mb-2">How can we help?</h3>
                        <p class="text-slate-600 mb-8">Have a question about our services or speaker readiness programme? Drop us a line.</p>
                        
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Name *</label>
                                    <input type="text" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Email *</label>
                                    <input type="email" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Subject</label>
                                <input type="text" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Message *</label>
                                <textarea rows="6" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" required></textarea>
                            </div>
                            <button type="submit" class="bg-[#0a0f1d] text-white px-8 py-4 font-bold uppercase tracking-wider hover:bg-slate-800 transition-colors">
                                Send Message
                            </button>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-5 space-y-12 lg:pl-10">
                <!-- Contact Details -->
                <div class="bg-slate-50 p-8 border border-slate-200">
                    <h3 class="text-xs font-bold text-primary uppercase tracking-widest mb-6">Contact Information</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <div class="bg-white p-3 border border-slate-200 text-primary">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-900 mb-1">Email</p>
                                <p class="text-slate-600">info@heardinafrica.com</p>
                                <p class="text-slate-600">bookings@heardinafrica.com</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="bg-white p-3 border border-slate-200 text-primary">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-900 mb-1">Phone</p>
                                <p class="text-slate-600">+27 (0) 11 123 4567</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="bg-white p-3 border border-slate-200 text-primary">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-900 mb-1">Office</p>
                                <p class="text-slate-600">123 Africa Hub, Sandton<br>Johannesburg, 2196<br>South Africa</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Call booking block -->
                <div id="clarifying-call" class="bg-[#0a0f1d] p-8 text-white">
                    <h3 class="text-xl font-heading font-bold mb-4">Book a Clarifying Call</h3>
                    <p class="text-gray-400 text-sm mb-6">Skip the forms and schedule a direct 15-minute consultation with our lead program designer to discuss your needs.</p>
                    <a href="#" class="inline-flex justify-center items-center w-full bg-primary text-[#0a0f1d] px-6 py-4 font-bold uppercase tracking-wider hover:bg-white transition-colors">
                        View Calendar
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
