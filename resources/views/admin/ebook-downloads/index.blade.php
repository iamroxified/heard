@extends('admin.layout')

@section('page_title', 'Ebook Downloads')

@section('content')
@php $dl = $editingDownload; @endphp

<div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <p class="text-xs uppercase tracking-[0.3em] text-accent">Resource Downloads</p>
            <h2 class="mt-2 text-2xl font-bold text-dark">Ebook & Report Download Records</h2>
        </div>
        <a href="{{ route('admin.ebook-downloads.export') }}" class="rounded-lg bg-gold px-5 py-3 text-sm font-bold text-dark hover:bg-accent hover:text-white">
            Export CSV
        </a>
    </div>

    <div class="mt-6 grid gap-6 xl:grid-cols-5">
        {{-- List --}}
        <div class="xl:col-span-3 space-y-4">
            @forelse ($downloads as $item)
                <a href="{{ route('admin.ebook-downloads.index', ['edit' => $item->id]) }}"
                   class="block rounded-xl border {{ $dl?->id === $item->id ? 'border-accent bg-slate-50' : 'border-slate-200' }} p-4 hover:border-accent">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <h3 class="font-bold text-dark">{{ $item->name }}</h3>
                            <p class="text-sm text-slate-500">{{ $item->email }}</p>
                            <p class="mt-1 text-xs text-slate-400 italic">{{ $item->ebook_title }}</p>
                        </div>
                        <span class="shrink-0 rounded-full px-3 py-1 text-xs font-bold
                            {{ $item->status === 'new' ? 'bg-blue-100 text-blue-700' : ($item->status === 'contacted' ? 'bg-green-100 text-green-700' : 'bg-slate-100 text-slate-500') }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </div>
                    <p class="mt-2 text-xs text-slate-400">Downloaded {{ $item->downloaded_at?->diffForHumans() ?? $item->created_at->diffForHumans() }}</p>
                </a>
            @empty
                <p class="text-sm text-slate-500">No ebook downloads recorded yet.</p>
            @endforelse
        </div>

        {{-- Detail Panel --}}
        <div class="xl:col-span-2 rounded-2xl border border-slate-200 bg-light p-6">
            @if ($dl)
                <p class="text-xs uppercase tracking-[0.3em] text-accent">Details</p>
                <h3 class="mt-2 text-2xl font-bold text-dark">{{ $dl->name }}</h3>
                <div class="mt-4 space-y-3 text-sm text-slate-700">
                    <p><strong>Email:</strong>
                        <a href="mailto:{{ $dl->email }}" class="text-accent hover:underline">{{ $dl->email }}</a>
                    </p>
                    <p><strong>Organisation:</strong> {{ $dl->organisation ?? '—' }}</p>
                    <p><strong>Ebook:</strong> {{ $dl->ebook_title }}</p>
                    <p><strong>Downloaded:</strong> {{ $dl->downloaded_at?->format('M d, Y H:i') ?? '—' }}</p>
                </div>

                <form method="POST" action="{{ route('admin.ebook-downloads.update', $dl) }}" class="mt-6 space-y-4">
                    @csrf
                    @method('PATCH')
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                        <select name="status" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                            @foreach (['new', 'contacted', 'archived'] as $s)
                                <option value="{{ $s }}" @selected($dl->status === $s)>{{ ucfirst($s) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">Update Status</button>
                </form>

                <form method="POST" action="{{ route('admin.ebook-downloads.destroy', $dl) }}" class="mt-4"
                      onsubmit="return confirm('Delete this record?');">
                    @csrf
                    @method('DELETE')
                    <button class="rounded-lg border border-red-200 px-5 py-3 text-sm font-bold text-red-600 hover:bg-red-50">Delete Record</button>
                </form>
            @else
                <p class="text-sm text-slate-600">Select a record to review the details.</p>
            @endif
        </div>
    </div>
</div>
@endsection
