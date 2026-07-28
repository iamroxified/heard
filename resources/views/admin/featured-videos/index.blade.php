@extends('admin.layout')

@section('page_title', 'Featured Videos')

@section('content')
@php
    $video = $editingVideo;
@endphp

<div class="grid gap-8 xl:grid-cols-5">
    <!-- Form (Add/Edit) -->
    <div class="xl:col-span-2 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-accent">{{ $video ? 'Edit Video' : 'Add Video' }}</p>
                <h2 class="mt-2 text-2xl font-bold text-dark">{{ $video ? 'Update Video' : 'New Featured Video' }}</h2>
            </div>
        </div>

        <form method="POST" action="{{ $video ? route('admin.featured-videos.update', $video) : route('admin.featured-videos.store') }}" class="mt-6 space-y-4">
            @csrf
            @if ($video)
                @method('PUT')
            @endif

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Video Title</label>
                <input name="title" value="{{ old('title', $video->title ?? '') }}" required
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none"
                    placeholder="e.g. Keynote: The African Speaker Economy">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">YouTube URL</label>
                <input name="youtube_url" type="url" value="{{ old('youtube_url', $video->youtube_url ?? '') }}" required
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none"
                    placeholder="https://www.youtube.com/watch?v=...">
                <p class="mt-1 text-xs text-slate-400">Supports youtube.com, youtu.be, and Shorts URLs. The thumbnail will be generated automatically.</p>
            </div>

            <!-- Live thumbnail preview -->
            <div x-data="{
                url: '{{ old('youtube_url', $video->youtube_url ?? '') }}',
                get thumbUrl() {
                    const m = this.url.match(/(?:youtu\.be\/|v=|\/embed\/|\/shorts\/)([a-zA-Z0-9_-]{11})/);
                    return m ? 'https://img.youtube.com/vi/' + m[1] + '/mqdefault.jpg' : '';
                }
            }">
                <input type="hidden" name="_preview_sync" x-model="url" @input.debounce.300ms="url = $event.target.value">
                <template x-if="thumbUrl">
                    <div class="mt-1">
                        <p class="text-xs text-slate-400 mb-1">Thumbnail preview:</p>
                        <img :src="thumbUrl" class="w-full rounded-lg border border-slate-200 object-cover" alt="YouTube thumbnail preview">
                    </div>
                </template>
                <!-- Hidden input that updates on youtube_url change -->
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const urlInput = document.querySelector('input[name="youtube_url"]');
                        if (urlInput) {
                            urlInput.addEventListener('input', function () {
                                const comp = urlInput.closest('form').querySelector('[x-data]');
                                if (comp && comp._x_dataStack) {
                                    comp._x_dataStack[0].url = this.value;
                                }
                            });
                        }
                    });
                </script>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Short Description <span class="text-slate-400">(optional)</span></label>
                <textarea name="description" rows="3"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none"
                    placeholder="A brief description shown beneath the video card...">{{ old('description', $video->description ?? '') }}</textarea>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $video->sort_order ?? 0) }}" required
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                    <select name="status" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                        <option value="active" @selected(old('status', $video->status ?? 'active') === 'active')>Active</option>
                        <option value="inactive" @selected(old('status', $video->status ?? 'active') === 'inactive')>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button type="submit" class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">
                    {{ $video ? 'Update Video' : 'Save Video' }}
                </button>
                @if ($video)
                    <a href="{{ route('admin.featured-videos.index') }}" class="rounded-lg border border-slate-300 px-5 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50">
                        Cancel
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- List -->
    <div class="xl:col-span-3 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-accent">All Featured Videos</p>
                <h2 class="mt-2 text-2xl font-bold text-dark">Manage homepage videos</h2>
            </div>
        </div>

        <div class="mt-6 space-y-4">
            @forelse ($videos as $item)
                <div class="rounded-xl border border-slate-200 p-4">
                    <div class="flex items-start gap-4">
                        <!-- Thumbnail -->
                        <div class="w-28 shrink-0 overflow-hidden rounded-lg border border-slate-100">
                            @if ($item->youtube_id)
                                <img src="https://img.youtube.com/vi/{{ $item->youtube_id }}/mqdefault.jpg"
                                    alt="{{ $item->title }}" class="w-full object-cover aspect-video">
                            @else
                                <div class="aspect-video bg-slate-100 flex items-center justify-center text-slate-400 text-xs">No preview</div>
                            @endif
                        </div>

                        <div class="flex-1 min-w-0">
                            <div class="flex items-start justify-between gap-4">
                                <div class="min-w-0">
                                    <h3 class="font-bold text-dark truncate">{{ $item->title }}</h3>
                                    <p class="text-xs text-slate-500 mt-0.5">Order: {{ $item->sort_order }} · {{ ucfirst($item->status) }}</p>
                                    @if ($item->description)
                                        <p class="text-xs text-slate-400 mt-1 line-clamp-2">{{ $item->description }}</p>
                                    @endif
                                    <a href="{{ $item->watch_url }}" target="_blank" class="text-xs text-accent hover:underline mt-1 inline-block truncate max-w-xs">
                                        {{ $item->youtube_url }}
                                    </a>
                                </div>
                                <div class="flex items-center gap-2 shrink-0">
                                    <a href="{{ route('admin.featured-videos.index', ['edit' => $item->id]) }}"
                                        class="rounded-md border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:border-accent hover:text-accent">Edit</a>
                                    <form method="POST" action="{{ route('admin.featured-videos.destroy', $item) }}" onsubmit="return confirm('Delete this video?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="rounded-md border border-slate-200 px-3 py-2 text-sm text-red-600 hover:border-red-200 hover:bg-red-50">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-slate-500 text-sm">No featured videos yet. Add one using the form on the left.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
