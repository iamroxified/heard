@extends('admin.layout')

@section('page_title', 'Settings')

@section('content')
<div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
    <p class="text-xs uppercase tracking-[0.3em] text-accent">General Settings</p>
    <h2 class="mt-2 text-2xl font-bold text-dark">Update the homepage and contact details</h2>

    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.settings.update') }}" class="mt-6 space-y-5">
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

        <section class="border-t border-slate-200 pt-6">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <h3 class="text-lg font-bold text-dark">About page team</h3>
                    <p class="mt-1 text-sm text-slate-500">Update, add, or remove the people shown in the About Team section. Upload a photo or provide an image URL or path inside the public folder.</p>
                </div>
                <button type="button" id="add-team-member" class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-semibold text-dark hover:border-accent hover:text-accent">Add team member</button>
            </div>

            @php($teamMembers = old('team_members', $settings['team_members']))
            <div id="team-members" class="mt-5 space-y-4">
                @foreach ($teamMembers as $index => $member)
                    <div class="team-member rounded-xl border border-slate-200 bg-slate-50 p-4" data-index="{{ $index }}">
                        <div class="mb-4 flex items-center justify-between">
                            <h4 class="font-semibold text-dark">Team member</h4>
                            <button type="button" class="remove-team-member text-sm font-semibold text-red-600 hover:text-red-800">Remove</button>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">Name</label>
                                <input name="team_members[{{ $index }}][name]" value="{{ $member['name'] ?? '' }}" required class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">Role</label>
                                <input name="team_members[{{ $index }}][role]" value="{{ $member['role'] ?? '' }}" required class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">Image URL or public path</label>
                                <input name="team_members[{{ $index }}][image]" value="{{ $member['image'] ?? '' }}" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">Upload a new photo (optional)</label>
                                <input type="file" name="team_members[{{ $index }}][photo]" accept="image/*" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3">
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">LinkedIn URL (optional)</label>
                                <input type="url" name="team_members[{{ $index }}][linkedin]" value="{{ $member['linkedin'] ?? '' }}" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">Email (optional)</label>
                                <input type="email" name="team_members[{{ $index }}][email]" value="{{ $member['email'] ?? '' }}" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

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

@push('scripts')
<template id="team-member-template">
    <div class="team-member rounded-xl border border-slate-200 bg-slate-50 p-4">
        <div class="mb-4 flex items-center justify-between">
            <h4 class="font-semibold text-dark">Team member</h4>
            <button type="button" class="remove-team-member text-sm font-semibold text-red-600 hover:text-red-800">Remove</button>
        </div>
        <div class="grid gap-4 sm:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Name</label>
                <input name="team_members[__INDEX__][name]" required class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Role</label>
                <input name="team_members[__INDEX__][role]" required class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Image URL or public path</label>
                <input name="team_members[__INDEX__][image]" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Upload a new photo (optional)</label>
                <input type="file" name="team_members[__INDEX__][photo]" accept="image/*" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">LinkedIn URL (optional)</label>
                <input type="url" name="team_members[__INDEX__][linkedin]" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Email (optional)</label>
                <input type="email" name="team_members[__INDEX__][email]" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-accent focus:outline-none">
            </div>
        </div>
    </div>
</template>
<script>
    const teamMembers = document.getElementById('team-members');
    const teamMemberTemplate = document.getElementById('team-member-template');
    let nextTeamMemberIndex = Math.max(-1, ...Array.from(teamMembers.querySelectorAll('.team-member')).map(function (member) {
        return Number(member.dataset.index);
    })) + 1;

    document.getElementById('add-team-member').addEventListener('click', function () {
        const member = teamMemberTemplate.content.cloneNode(true);
        member.querySelectorAll('[name]').forEach(function (input) {
            input.name = input.name.replace('__INDEX__', nextTeamMemberIndex);
        });
        member.querySelector('.team-member').dataset.index = nextTeamMemberIndex;
        nextTeamMemberIndex += 1;
        teamMembers.appendChild(member);
    });

    teamMembers.addEventListener('click', function (event) {
        if (event.target.closest('.remove-team-member')) {
            event.target.closest('.team-member').remove();
        }
    });
</script>
@endpush
