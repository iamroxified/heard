@extends('admin.layout')

@section('page_title', 'Events')

@section('content')
@php $event = $editingEvent; @endphp

<div class="grid gap-8 xl:grid-cols-5">
    <div class="xl:col-span-2 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-xs uppercase tracking-[0.3em] text-accent">{{ $event ? 'Edit Event' : 'Add Event' }}</p>
        <h2 class="mt-2 text-2xl font-bold text-dark">{{ $event ? $event->name : 'New Event' }}</h2>

        <form method="POST" enctype="multipart/form-data" action="{{ $event ? route('admin.events.update', $event) : route('admin.events.store') }}" class="mt-6 space-y-4">
            @csrf
            @if ($event)
                @method('PUT')
            @endif

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Event Name</label>
                <input name="name" value="{{ old('name', $event->name ?? '') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Type</label>
                    <select name="type" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                        <option value="upcoming" @selected(old('type', $event->type ?? 'upcoming') === 'upcoming')>Upcoming</option>
                        <option value="past" @selected(old('type', $event->type ?? 'upcoming') === 'past')>Past</option>
                    </select>
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Date</label>
                    <input type="date" name="event_date" value="{{ old('event_date', optional($event?->event_date)->format('Y-m-d')) }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                </div>
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Location</label>
                <input name="location" value="{{ old('location', $event->location ?? '') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Short Description</label>
                <textarea name="short_description" rows="4" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">{{ old('short_description', $event->short_description ?? '') }}</textarea>
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Full Description</label>
                <textarea name="full_description" rows="8" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">{{ old('full_description', $event->full_description ?? '') }}</textarea>
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Featured Image</label>
                <input id="event_image" type="file" name="featured_image" accept="image/*" class="w-full rounded-lg border border-slate-300 px-4 py-3">
                <img id="event_image_preview" src="{{ $event?->featured_image_path ? asset('storage/'.$event->featured_image_path) : '' }}" class="mt-3 {{ $event?->featured_image_path ? '' : 'hidden' }} h-40 w-full rounded-lg object-cover">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Speaker Highlights</label>
                <textarea name="speaker_highlights" rows="4" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">{{ old('speaker_highlights', $event->speaker_highlights ?? '') }}</textarea>
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Registration Link</label>
                <input name="registration_link" value="{{ old('registration_link', $event->registration_link ?? '') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <label class="flex items-center gap-3 text-sm text-slate-700">
                <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $event->is_featured ?? false))>
                Mark as featured event
            </label>
            <button class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">
                {{ $event ? 'Update Event' : 'Save Event' }}
            </button>
        </form>
    </div>

    <div class="xl:col-span-3 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-xs uppercase tracking-[0.3em] text-accent">Events List</p>
        <h2 class="mt-2 text-2xl font-bold text-dark">Manage upcoming and past events</h2>
        <div class="mt-6 space-y-4">
            @foreach ($events as $item)
                <div class="rounded-xl border border-slate-200 p-4">
                    <div class="flex items-start gap-4">
                        <img src="{{ $item->featured_image_path ? asset('storage/'.$item->featured_image_path) : 'https://via.placeholder.com/80' }}" alt="{{ $item->name }}" class="h-16 w-16 rounded-lg object-cover">
                        <div class="flex-1">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <h3 class="font-bold text-dark">{{ $item->name }}</h3>
                                    <p class="text-sm text-slate-500">{{ ucfirst($item->type) }} · {{ optional($item->event_date)->format('M d, Y') ?? 'No date' }}</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.events.index', ['edit' => $item->id]) }}" class="rounded-md border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:border-accent hover:text-accent">Edit</a>
                                    <form method="POST" action="{{ route('admin.events.destroy', $item) }}" onsubmit="return confirm('Delete this event?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="rounded-md border border-slate-200 px-3 py-2 text-sm text-red-600 hover:border-red-200 hover:bg-red-50">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-slate-600 line-clamp-2">{{ $item->short_description }}</p>
                            @if ($item->is_featured)
                                <span class="mt-3 inline-flex rounded-full bg-gold px-3 py-1 text-xs font-bold text-dark">Featured</span>
                            @endif
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
    const eventInput = document.getElementById('event_image');
    const eventPreview = document.getElementById('event_image_preview');
    if (eventInput && eventPreview) {
        eventInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (!file) return;
            eventPreview.src = URL.createObjectURL(file);
            eventPreview.classList.remove('hidden');
        });
    }
</script>
@endpush
