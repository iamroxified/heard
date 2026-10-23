@extends('admin.layout')

@section('page_title', 'Settings')

@section('content')
<div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
    <p class="text-xs uppercase tracking-[0.3em] text-accent">General Settings</p>
    <h2 class="mt-2 text-2xl font-bold text-dark">Update the homepage and contact details</h2>

    <form method="POST" action="{{ route('admin.settings.update') }}" class="mt-6 space-y-5">
        @csrf
        @method('PATCH')

        <div>
            <label class="mb-2 block text-sm font-medium text-slate-700">Homepage Clients / Partners Logos</label>
            <textarea name="homepage_client_logos" rows="4" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none" placeholder="Logo 1, Logo 2, Logo 3">{{ is_array($settings['homepage_client_logos']) ? implode(', ', $settings['homepage_client_logos']) : $settings['homepage_client_logos'] }}</textarea>
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium text-slate-700">Homepage Video Background URL</label>
            <input name="homepage_video_url" value="{{ $settings['homepage_video_url'] }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium text-slate-700">Calendar Booking URL</label>
            <input name="calendar_booking_url" value="{{ $settings['calendar_booking_url'] }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none" placeholder="https://calendly.com/your-handle/your-event">
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Contact Phone</label>
                <input name="contact_phone" value="{{ $settings['contact_phone'] }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Contact Email</label>
                <input name="contact_email" value="{{ $settings['contact_email'] }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Newsletter Provider</label>
                <input name="newsletter_provider" value="{{ $settings['newsletter_provider'] }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Newsletter Signup</label>
                <select name="newsletter_enabled" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                    <option value="yes" @selected($settings['newsletter_enabled'] === 'yes')>Enabled</option>
                    <option value="no" @selected($settings['newsletter_enabled'] === 'no')>Disabled</option>
                </select>
            </div>
        </div>

        <button class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">Save Settings</button>
    </form>
</div>
@endsection
