@extends('admin.layout')

@section('page_title', 'Dashboard')
@section('content')
<div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        @foreach ([
            ['label' => 'Speakers', 'value' => $speakerCount],
            ['label' => 'Events', 'value' => $eventCount],
            ['label' => 'Blog Posts', 'value' => $blogPostCount],
            ['label' => 'Enquiries', 'value' => $enquiryCount],
        ] as $card)
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <p class="text-sm uppercase tracking-[0.25em] text-accent">{{ $card['label'] }}</p>
                <p class="mt-4 text-4xl font-bold text-dark">{{ $card['value'] }}</p>
            </div>
    @endforeach
</div>

<div class="mt-8 grid gap-6 lg:grid-cols-3">
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm lg:col-span-2">
        <p class="text-sm uppercase tracking-[0.25em] text-accent">Featured Event</p>
        <h2 class="mt-3 text-2xl font-bold text-dark">{{ $featuredEvent?->name ?? 'No featured event yet' }}</h2>
        <p class="mt-3 text-sm text-slate-600">{{ $featuredEvent?->short_description ?? 'Mark an event as featured to highlight it here.' }}</p>
    </div>
        <div class="rounded-2xl border border-slate-200 bg-dark p-6 text-white shadow-sm">
            <p class="text-sm uppercase tracking-[0.25em] text-gold">Action Needed</p>
            <p class="mt-3 text-4xl font-bold">{{ $unreadEnquiries }}</p>
        <p class="mt-2 text-sm text-slate-200">Unread enquiries waiting for review.</p>
    </div>
</div>

<div class="mt-8 grid gap-6 xl:grid-cols-3">
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-sm uppercase tracking-[0.25em] text-accent">Calendar URL</p>
        <p class="mt-3 break-words text-sm text-slate-600">{{ $siteSettings['calendar_booking_url'] ?? 'Not set yet' }}</p>
        <a href="{{ route('admin.settings.edit') }}" class="mt-4 inline-flex text-sm font-bold text-gold hover:text-dark">Update Settings</a>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-sm uppercase tracking-[0.25em] text-accent">Contact</p>
        <p class="mt-3 text-sm text-slate-600">{{ $siteSettings['contact_email'] ?? '' }}</p>
        <p class="mt-1 text-sm text-slate-600">{{ $siteSettings['contact_phone'] ?? '' }}</p>
    </div>
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-sm uppercase tracking-[0.25em] text-accent">Homepage Video</p>
        <p class="mt-3 break-words text-sm text-slate-600">{{ $siteSettings['homepage_video_url'] ?? 'Not set yet' }}</p>
    </div>
</div>
@endsection
