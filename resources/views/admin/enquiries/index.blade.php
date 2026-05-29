@extends('admin.layout')

@section('page_title', 'Enquiries')

@section('content')
@php $enquiry = $editingEnquiry; @endphp

<div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <p class="text-xs uppercase tracking-[0.3em] text-accent">Incoming Requests</p>
            <h2 class="mt-2 text-2xl font-bold text-dark">Contact form and programme enquiries</h2>
        </div>
        <a href="{{ route('admin.enquiries.export') }}" class="rounded-lg bg-gold px-5 py-3 text-sm font-bold text-dark hover:bg-accent hover:text-white">
            Export CSV
        </a>
    </div>

    <div class="mt-6 grid gap-6 xl:grid-cols-5">
        <div class="xl:col-span-3 space-y-4">
            @foreach ($enquiries as $item)
                <a href="{{ route('admin.enquiries.index', ['edit' => $item->id]) }}" class="block rounded-xl border {{ $enquiry?->id === $item->id ? 'border-accent bg-slate-50' : 'border-slate-200' }} p-4 hover:border-accent">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <h3 class="font-bold text-dark">{{ $item->name }}</h3>
                            <p class="text-sm text-slate-500">{{ $item->organisation ?? 'No organisation provided' }} · {{ ucfirst($item->status) }}</p>
                        </div>
                        <span class="rounded-full px-3 py-1 text-xs font-bold {{ $item->status === 'unread' ? 'bg-red-100 text-red-700' : 'bg-slate-100 text-slate-700' }}">{{ ucfirst($item->status) }}</span>
                    </div>
                    <p class="mt-3 text-sm text-slate-600 line-clamp-2">{{ $item->message ?? $item->speaker_request ?? 'No message provided.' }}</p>
                </a>
            @endforeach
        </div>

        <div class="xl:col-span-2 rounded-2xl border border-slate-200 bg-light p-6">
            @if ($enquiry)
                <p class="text-xs uppercase tracking-[0.3em] text-accent">Details</p>
                <h3 class="mt-2 text-2xl font-bold text-dark">{{ $enquiry->name }}</h3>
                <div class="mt-4 space-y-3 text-sm text-slate-700">
                    <p><strong>Organisation:</strong> {{ $enquiry->organisation ?? '-' }}</p>
                    <p><strong>Email:</strong> {{ $enquiry->email }}</p>
                    <p><strong>Phone:</strong> {{ $enquiry->phone ?? '-' }}</p>
                    <p><strong>Event:</strong> {{ $enquiry->event_name ?? '-' }}</p>
                    <p><strong>Date:</strong> {{ optional($enquiry->event_date)->format('M d, Y') ?? '-' }}</p>
                    <p><strong>Type:</strong> {{ $enquiry->event_type ?? '-' }}</p>
                    <p><strong>Audience:</strong> {{ $enquiry->audience_size ?? '-' }}</p>
                    <p><strong>Location:</strong> {{ $enquiry->location ?? '-' }}</p>
                    <p><strong>Speaker Request:</strong> {{ $enquiry->speaker_request ?? '-' }}</p>
                    <p><strong>Programme Support:</strong> {{ $enquiry->programme_support ?? '-' }}</p>
                    <p><strong>Budget:</strong> {{ $enquiry->budget ?? '-' }}</p>
                    <p><strong>Message:</strong> {{ $enquiry->message ?? '-' }}</p>
                </div>

                <form method="POST" action="{{ route('admin.enquiries.update', $enquiry) }}" class="mt-6 space-y-4">
                    @csrf
                    @method('PATCH')
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                        <select name="status" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                            @foreach (['unread', 'read', 'replied', 'archived'] as $status)
                                <option value="{{ $status }}" @selected($enquiry->status === $status)>{{ ucfirst($status) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">Update Status</button>
                </form>

                <form method="POST" action="{{ route('admin.enquiries.destroy', $enquiry) }}" class="mt-4" onsubmit="return confirm('Delete this enquiry?');">
                    @csrf
                    @method('DELETE')
                    <button class="rounded-lg border border-red-200 px-5 py-3 text-sm font-bold text-red-600 hover:bg-red-50">Delete</button>
                </form>
            @else
                <p class="text-sm text-slate-600">Select an enquiry to review the details.</p>
            @endif
        </div>
    </div>
</div>
@endsection
