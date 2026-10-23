@extends('admin.layout')

@section('page_title', 'Team Members')

@section('content')
<div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
    <div class="flex flex-wrap items-end justify-between gap-4">
        <div>
            <p class="text-xs uppercase tracking-[0.3em] text-accent">About Page</p>
            <h2 class="mt-2 text-2xl font-bold text-dark">Manage team members</h2>
            <p class="mt-2 max-w-2xl text-sm text-slate-500">Add, edit, remove, and reorder the people displayed in the About Team section. Upload a photo or use an image URL/public path.</p>
        </div>
        <button type="button" id="add-team-member" class="rounded-lg bg-dark px-4 py-3 text-sm font-bold text-white hover:bg-accent">Add team member</button>
    </div>

    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.team.update') }}" class="mt-6 space-y-5">
        @csrf
        @method('PUT')

        @php($members = old('team_members', $teamMembers))
        <div id="team-members" class="space-y-4">
            @foreach ($members as $index => $member)
                <div class="team-member rounded-xl border border-slate-200 bg-slate-50 p-4" data-index="{{ $index }}">
                    <div class="mb-4 flex items-center justify-between">
                        <h3 class="font-semibold text-dark">Team member {{ $loop->iteration }}</h3>
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

        <button class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">Save team members</button>
    </form>
</div>
@endsection

@push('scripts')
<template id="team-member-template">
    <div class="team-member rounded-xl border border-slate-200 bg-slate-50 p-4" data-index="__INDEX__">
        <div class="mb-4 flex items-center justify-between">
            <h3 class="font-semibold text-dark">New team member</h3>
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
        if (teamMembers.querySelectorAll('.team-member').length >= 12) {
            return;
        }

        const member = teamMemberTemplate.content.cloneNode(true);
        member.querySelectorAll('[name]').forEach(function (input) {
            input.name = input.name.replaceAll('__INDEX__', nextTeamMemberIndex);
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
