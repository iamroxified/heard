@extends('admin.layout')

@section('page_title', 'FAQs')

@section('content')
@php
    $faq = $editingFaq;
@endphp

<div class="grid gap-8 xl:grid-cols-5">
    <!-- Form (Add/Edit) -->
    <div class="xl:col-span-2 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-accent">{{ $faq ? 'Edit FAQ' : 'Add FAQ' }}</p>
                <h2 class="mt-2 text-2xl font-bold text-dark">{{ $faq ? 'Update FAQ' : 'New FAQ' }}</h2>
            </div>
        </div>

        <form method="POST" action="{{ $faq ? route('admin.faqs.update', $faq) : route('admin.faqs.store') }}" class="mt-6 space-y-4">
            @csrf
            @if ($faq)
                @method('PUT')
            @endif

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Question</label>
                <input name="question" value="{{ old('question', $faq->question ?? '') }}" required class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Answer</label>
                <textarea name="answer" rows="6" required class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">{{ old('answer', $faq->answer ?? '') }}</textarea>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $faq->sort_order ?? 0) }}" required class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                    <select name="status" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                        <option value="active" @selected(old('status', $faq->status ?? 'active') === 'active')>Active</option>
                        <option value="inactive" @selected(old('status', $faq->status ?? 'active') === 'inactive')>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button type="submit" class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">
                    {{ $faq ? 'Update FAQ' : 'Save FAQ' }}
                </button>
                @if ($faq)
                    <a href="{{ route('admin.faqs.index') }}" class="rounded-lg border border-slate-300 px-5 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50">
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
                <p class="text-xs uppercase tracking-[0.3em] text-accent">All FAQs</p>
                <h2 class="mt-2 text-2xl font-bold text-dark">Manage FAQ items</h2>
            </div>
        </div>

        <div class="mt-6 space-y-4">
            @forelse ($faqs as $item)
                <div class="rounded-xl border border-slate-200 p-4">
                    <div class="flex items-start gap-4">
                        <div class="flex-1">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="font-bold text-dark">{{ $item->question }}</h3>
                                    <p class="text-xs text-slate-500">Order: {{ $item->sort_order }} · {{ ucfirst($item->status) }}</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.faqs.index', ['edit' => $item->id]) }}" class="rounded-md border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:border-accent hover:text-accent">Edit</a>
                                    <form method="POST" action="{{ route('admin.faqs.destroy', $item) }}" onsubmit="return confirm('Delete this FAQ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="rounded-md border border-slate-200 px-3 py-2 text-sm text-red-600 hover:border-red-200 hover:bg-red-50">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-slate-600 leading-relaxed">{{ $item->answer }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-slate-500 text-sm">No FAQs found. Create one using the form on the left.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
