@extends('admin.layout')

@section('page_title', 'Speakers')

@section('content')
@php
    $speaker = $editingSpeaker;
@endphp

<div class="grid gap-8 xl:grid-cols-5">
    <div class="xl:col-span-2 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-accent">{{ $speaker ? 'Edit Speaker' : 'Add Speaker' }}</p>
                <h2 class="mt-2 text-2xl font-bold text-dark">{{ $speaker ? $speaker->full_name : 'New Speaker' }}</h2>
            </div>
        </div>

        <form method="POST" enctype="multipart/form-data" action="{{ $speaker ? route('admin.speakers.update', $speaker) : route('admin.speakers.store') }}" class="mt-6 space-y-4">
            @csrf
            @if ($speaker)
                @method('PUT')
            @endif

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Full Name</label>
                <input name="full_name" value="{{ old('full_name', $speaker->full_name ?? '') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Headshot</label>
                <input id="speaker_headshot" type="file" name="headshot" accept="image/*" class="w-full rounded-lg border border-slate-300 px-4 py-3">
                <img id="speaker_headshot_preview" src="{{ $speaker?->headshot_path ? asset('storage/'.$speaker->headshot_path) : '' }}" class="mt-3 {{ $speaker?->headshot_path ? '' : 'hidden' }} h-40 w-full rounded-lg object-cover">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Short Bio</label>
                <textarea name="short_bio" rows="6" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">{{ old('short_bio', $speaker->short_bio ?? '') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Areas of Expertise</label>
                <input name="expertise_tags_input" value="{{ old('expertise_tags_input', isset($speaker) ? implode(', ', $speaker->expertise_tags ?? []) : '') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none" placeholder="Leadership, Finance, Moderation">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Speaking Topics</label>
                <textarea name="speaking_topics" rows="4" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">{{ old('speaking_topics', $speaker->speaking_topics ?? '') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Notable Past Stages / Credentials</label>
                <textarea name="notable_past_stages" rows="4" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">{{ old('notable_past_stages', $speaker->notable_past_stages ?? '') }}</textarea>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Category</label>
                    <select name="category" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                        @foreach ($categories as $category)
                            <option value="{{ $category }}" @selected(old('category', $speaker->category ?? '') === $category)>{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                    <select name="status" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                        <option value="active" @selected(old('status', $speaker->status ?? 'active') === 'active')>Active</option>
                        <option value="inactive" @selected(old('status', $speaker->status ?? 'active') === 'inactive')>Inactive</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">
                {{ $speaker ? 'Update Speaker' : 'Save Speaker' }}
            </button>
        </form>
    </div>

    <div class="xl:col-span-3 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-accent">All Speakers</p>
                <h2 class="mt-2 text-2xl font-bold text-dark">Manage the roster</h2>
            </div>
        </div>

        <div class="mt-6 space-y-4">
            @foreach ($speakers as $item)
                <div class="rounded-xl border border-slate-200 p-4">
                    <div class="flex items-start gap-4">
                        <img src="{{ $item->headshot_path ? asset('storage/'.$item->headshot_path) : 'https://via.placeholder.com/80' }}" alt="{{ $item->full_name }}" class="h-16 w-16 rounded-lg object-cover">
                        <div class="flex-1">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="font-bold text-dark">{{ $item->full_name }}</h3>
                                    <p class="text-sm text-slate-500">{{ $item->category }} · {{ ucfirst($item->status) }}</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.speakers.index', ['edit' => $item->id]) }}" class="rounded-md border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:border-accent hover:text-accent">Edit</a>
                                    <form method="POST" action="{{ route('admin.speakers.destroy', $item) }}" onsubmit="return confirm('Delete this speaker?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="rounded-md border border-slate-200 px-3 py-2 text-sm text-red-600 hover:border-red-200 hover:bg-red-50">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-slate-600 line-clamp-2">{{ $item->short_bio }}</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                @foreach (($item->expertise_tags ?? []) as $tag)
                                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs text-slate-700">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const speakerInput = document.getElementById('speaker_headshot');
    const speakerPreview = document.getElementById('speaker_headshot_preview');
    if (speakerInput && speakerPreview) {
        speakerInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (!file) return;
            speakerPreview.src = URL.createObjectURL(file);
            speakerPreview.classList.remove('hidden');
        });
    }
</script>
@endpush
