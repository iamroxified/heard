@extends('layouts.app')

@section('title', 'Contact Us - Heard In Africa')

@section('content')
@php
$contactEmail = $siteSettings['contact_email'] ?? 'Info@heardinafrica.com';
$contactPhone = $siteSettings['contact_phone'] ?? '+234-815-851-2911';
$bookingUrl = ($siteSettings['calendar_booking_url'] ?? '') ?: route('discovery-call');
@endphp
<section class="bg-dark pt-28 pb-20 sm:pt-32 lg:pt-48 lg:pb-32 border-b border-white/10 relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-sm font-bold text-gold uppercase tracking-widest mb-3">Contact</h2>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white tracking-tight mb-6">
            Ready to build something the room will remember?
        </h1>
        <p class="text-lg text-gray-300 font-light max-w-2xl mx-auto mb-10">
            Whether you need a speaker, a programme, or both — start here. We respond to all enquiries within two business days. For urgent requests, call us directly on {{ $contactPhone }} or email {{ $contactEmail }}.
        </p>
        <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center bg-gold text-dark px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
            Book a Discovery Call
        </a>
        <a href="https://wa.me/2347048445360" class="inline-flex justify-center items-center gap-2 bg-green text-dark px-8 py-4 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 shrink-0" fill="currentColor" aria-hidden="true">
                <path d="M16 0C7.163 0 0 7.163 0 16c0 2.822.736 5.471 2.027 7.774L0 32l8.467-2.001A15.934 15.934 0 0 0 16 32c8.837 0 16-7.163 16-16S24.837 0 16 0zm0 29.333a13.28 13.28 0 0 1-6.773-1.853l-.486-.289-5.027 1.188 1.234-4.892-.317-.502A13.249 13.249 0 0 1 2.667 16C2.667 8.636 8.636 2.667 16 2.667S29.333 8.636 29.333 16 23.364 29.333 16 29.333zm7.273-9.874c-.398-.199-2.355-1.162-2.72-1.294-.365-.133-.631-.199-.897.199-.266.398-1.03 1.294-1.263 1.56-.232.266-.465.299-.863.1-.398-.199-1.682-.62-3.203-1.977-1.184-1.056-1.983-2.361-2.215-2.759-.232-.398-.025-.613.175-.811.179-.178.398-.465.597-.698.199-.232.266-.398.398-.664.133-.266.066-.498-.033-.697-.1-.199-.897-2.162-1.229-2.96-.324-.776-.653-.671-.897-.683l-.764-.013c-.266 0-.698.1-1.063.498-.365.398-1.396 1.363-1.396 3.326s1.43 3.859 1.629 4.125c.199.266 2.814 4.297 6.82 6.027.953.412 1.696.658 2.275.842.956.305 1.827.262 2.515.159.767-.114 2.355-.963 2.687-1.893.332-.93.332-1.728.232-1.893-.1-.166-.365-.266-.763-.465z" />
            </svg>
            Message us on WhatsApp
        </a>
    </div>
</section>

<section class="py-24 bg-white relative">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            <div class="lg:col-span-7">
                @if(session('success'))
                <div id="contact-success-alert" x-data="{ show: true }" x-show="show" x-transition class="mb-8 p-5 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-900 flex items-start gap-4 relative shadow-sm" role="alert" aria-live="polite">
                    <div class="shrink-0 text-emerald-500 mt-0.5">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="pr-8 flex-1">
                        <h4 class="font-heading font-bold text-base mb-1 text-emerald-900">Enquiry received — thank you!</h4>
                        <p class="text-sm text-emerald-800/80 leading-relaxed">We've saved your enquiry and will get back to you within two business days. Keep an eye on your inbox.</p>
                    </div>
                    <button @click="show = false" class="absolute top-4 right-4 text-emerald-400 hover:text-emerald-700 transition-colors" aria-label="Close alert">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var el = document.getElementById('contact-success-alert');
                        if (el) { el.scrollIntoView({ behavior: 'smooth', block: 'center' }); }
                    });
                </script>
                @endif

                <div x-data="{ tab: '{{ session('submitted_tab', 'agenda') }}' }">
                    <div class="flex border-b border-slate-200 mb-8">
                        <button @click="tab = 'agenda'" :class="{ 'border-gold text-gold': tab === 'agenda', 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300': tab !== 'agenda' }" class="pb-4 px-1 border-b-2 font-medium text-sm mr-8 uppercase tracking-wider transition-colors">
                            Request Agenda / Programme Enquiry
                        </button>
                        <button @click="tab = 'general'" :class="{ 'border-gold text-gold': tab === 'general', 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300': tab !== 'general' }" class="pb-4 px-1 border-b-2 font-medium text-sm uppercase tracking-wider transition-colors">
                            General Inquiry
                        </button>
                    </div>

                    <div x-show="tab === 'agenda'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                        <h3 class="text-2xl font-heading font-bold text-slate-900 mb-2">Tell us about your event</h3>
                        <p class="text-slate-600 mb-8">Share the key details below so we can respond with the right speaker or programme support.</p>

                        <form method="POST" action="{{ route('enquiries.store') }}" class="space-y-6">
                            @csrf
                            <input type="hidden" name="form_type" value="programme">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Name of contact person *</label>
                                    <input type="text" name="name" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Organisation / company name *</label>
                                    <input type="text" name="organisation" required class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Email address *</label>
                                    <input type="email" name="email" required class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Phone number (optional)</label>
                                    <input type="tel" name="phone" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Event name *</label>
                                    <input type="text" name="event_name" required class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Event date or expected date *</label>
                                    <input type="date" name="event_date" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold text-slate-500" required>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Type of event *</label>
                                    <select name="event_type" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold text-slate-700" required>
                                        <option>Conference</option>
                                        <option>Corporate Event</option>
                                        <option>Summit</option>
                                        <option>Forum</option>
                                        <option>University</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Expected audience size *</label>
                                    <select name="audience_size" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold text-slate-700" required>
                                        <option>Under 50</option>
                                        <option>50–200</option>
                                        <option>200–500</option>
                                        <option>500+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Location / city *</label>
                                    <input type="text" name="location" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Event Timing (duration) *</label>
                                    <input type="text" name="event_duration" placeholder="e.g. 2 hours, Half day, 3 days" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold" required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">What kind of speaker are you looking for? *</label>
                                <textarea rows="4" name="speaker_request" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold" required></textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Do you need programme / agenda design support?</label>
                                    <select name="programme_support" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold text-slate-700">
                                        <option>Yes</option>
                                        <option>No</option>
                                        <option>Not sure</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">How did you hear about us? (optional)</label>
                                    <input type="text" name="message" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Additional notes (optional)</label>
                                <textarea rows="4" name="additional_notes" placeholder="Any other details or specific requests you would like to share..." class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold"></textarea>
                            </div>
                            <button type="submit" class="bg-dark text-white px-8 py-4 font-bold uppercase tracking-wider hover:bg-gold hover:text-dark transition-colors">
                                Submit Enquiry
                            </button>
                        </form>
                    </div>

                    <div x-cloak x-show="tab === 'general'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                        <h3 class="text-2xl font-heading font-bold text-slate-900 mb-2">How can we help?</h3>
                        <p class="text-slate-600 mb-8">Have a question about our services or speaker readiness programme? Drop us a line.</p>

                        <form method="POST" action="{{ route('enquiries.store') }}" class="space-y-6">
                            @csrf
                            <input type="hidden" name="form_type" value="contact">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Name *</label>
                                    <input type="text" name="name" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Email *</label>
                                    <input type="email" name="email" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold" required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Organisation</label>
                                <input type="text" name="organisation" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Message *</label>
                                <textarea rows="6" name="message" class="w-full bg-slate-50 border border-slate-300 px-4 py-3 focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold" required></textarea>
                            </div>
                            <button type="submit" class="bg-dark text-white px-8 py-4 font-bold uppercase tracking-wider hover:bg-gold hover:text-dark transition-colors">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 space-y-12 lg:pl-10">
                <div class="bg-slate-50 p-8 border border-slate-200">
                    <h3 class="text-xs font-bold text-gold uppercase tracking-widest mb-6">Contact Information</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <div class="bg-white p-3 border border-slate-200 text-gold">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-900 mb-1">Email</p>
                                <p class="text-slate-600">{{ $contactEmail }}</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="bg-white p-3 border border-slate-200 text-gold">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-900 mb-1">Phone</p>
                                <p class="text-slate-600">{{ $contactPhone }}</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="bg-white p-3 border border-slate-200 text-gold">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-900 mb-1">Office</p>
                                <p class="text-slate-600">Lagos, Nigeria</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="clarifying-call" class="bg-dark p-8 text-white">
                    <h3 class="text-xl font-heading font-bold mb-4">Book a Discovery Call</h3>
                    <p class="text-gray-400 text-sm mb-6">Use the calendar link to schedule a 15-minute Discovery Call and tell us what you need.</p>
                    <a href="{{ $bookingUrl }}" class="inline-flex justify-center items-center w-full bg-gold text-dark px-6 py-4 font-bold uppercase tracking-wider hover:bg-white transition-colors">
                        Book a Discovery Call
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection