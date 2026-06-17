@extends('admin.layout')

@section('page_title', 'Testimonials')

@section('content')
@php
    $testimonial = $editingTestimonial;
@endphp

<div class="grid gap-8 xl:grid-cols-5">
    <!-- Form (Add/Edit) -->
    <div class="xl:col-span-2 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-accent">{{ $testimonial ? 'Edit Testimonial' : 'Add Testimonial' }}</p>
                <h2 class="mt-2 text-2xl font-bold text-dark">{{ $testimonial ? 'Update Testimonial' : 'New Testimonial' }}</h2>
            </div>
        </div>

        <form method="POST" action="{{ $testimonial ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store') }}" class="mt-6 space-y-4">
            @csrf
            @if ($testimonial)
                @method('PUT')
            @endif

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Quote / Content</label>
                <textarea name="quote" rows="6" required class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">{{ old('quote', $testimonial->quote ?? '') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Author Name</label>
                <input name="author_name" value="{{ old('author_name', $testimonial->author_name ?? '') }}" required class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Author Title / Organisation</label>
                <input name="author_title" value="{{ old('author_title', $testimonial->author_title ?? '') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none" placeholder="e.g. Director of Partnerships, Omniverse Africa Summit">
            </div>

            <div class="grid gap-4 sm:grid-cols-3">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Rating (1-5)</label>
                    <select name="rating" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                        @for ($i = 5; $i >= 1; $i--)
                            <option value="{{ $i }}" @selected(old('rating', $testimonial->rating ?? 5) == $i)>{{ $i }} Stars</option>
                        @endfor
                    </select>
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $testimonial->sort_order ?? 0) }}" required class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                    <select name="status" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                        <option value="active" @selected(old('status', $testimonial->status ?? 'active') === 'active')>Active</option>
                        <option value="inactive" @selected(old('status', $testimonial->status ?? 'active') === 'inactive')>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button type="submit" class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">
                    {{ $testimonial ? 'Update Testimonial' : 'Save Testimonial' }}
                </button>
                @if ($testimonial)
                    <a href="{{ route('admin.testimonials.index') }}" class="rounded-lg border border-slate-300 px-5 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50">
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
                <p class="text-xs uppercase tracking-[0.3em] text-accent">All Testimonials</p>
                <h2 class="mt-2 text-2xl font-bold text-dark">Manage homepage testimonials</h2>
            </div>
        </div>

        <div class="mt-6 space-y-4">
            @forelse ($testimonials as $item)
                <div class="rounded-xl border border-slate-200 p-4">
                    <div class="flex items-start gap-4">
                        <div class="flex-1">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="font-bold text-dark">{{ $item->author_name }}</h3>
                                    <p class="text-xs text-slate-500">{{ $item->author_title }}</p>
                                    <p class="text-xs text-slate-400 mt-1">Rating: {{ $item->rating }} Stars · Order: {{ $item->sort_order }} · {{ ucfirst($item->status) }}</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.testimonials.index', ['edit' => $item->id]) }}" class="rounded-md border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:border-accent hover:text-accent">Edit</a>
                                    <form method="POST" action="{{ route('admin.testimonials.destroy', $item) }}" onsubmit="return confirm('Delete this testimonial?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="rounded-md border border-slate-200 px-3 py-2 text-sm text-red-600 hover:border-red-200 hover:bg-red-50">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-slate-600 italic">“{{ $item->quote }}”</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-slate-500 text-sm">No testimonials found. Create one using the form on the left.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
