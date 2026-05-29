@extends('admin.layout')

@section('page_title', 'Blog Posts')

@section('content')
@php $post = $editingPost; @endphp

<div class="grid gap-8 xl:grid-cols-5">
    <div class="xl:col-span-2 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-xs uppercase tracking-[0.3em] text-accent">{{ $post ? 'Edit Post' : 'Add Blog Post' }}</p>
        <h2 class="mt-2 text-2xl font-bold text-dark">{{ $post ? $post->title : 'New Blog Post' }}</h2>

        <form method="POST" enctype="multipart/form-data" action="{{ $post ? route('admin.blog.update', $post) : route('admin.blog.store') }}" class="mt-6 space-y-4">
            @csrf
            @if ($post)
                @method('PUT')
            @endif

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                <input name="title" value="{{ old('title', $post->title ?? '') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Category</label>
                <select name="category" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" @selected(old('category', $post->category ?? '') === $category)>{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Featured Image</label>
                <input id="post_image" type="file" name="featured_image" accept="image/*" class="w-full rounded-lg border border-slate-300 px-4 py-3">
                <img id="post_image_preview" src="{{ $post?->featured_image_path ? asset('storage/'.$post->featured_image_path) : '' }}" class="mt-3 {{ $post?->featured_image_path ? '' : 'hidden' }} h-40 w-full rounded-lg object-cover">
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Excerpt</label>
                <textarea name="excerpt" rows="4" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Full Content</label>
                <div id="post_editor" class="min-h-56 rounded-lg border border-slate-300 bg-white"></div>
                <textarea id="content" name="content" class="hidden">{{ old('content', $post->content ?? '') }}</textarea>
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Author</label>
                <input name="author" value="{{ old('author', $post->author ?? 'Chimfumnanya Nwandu') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Publish Date</label>
                    <input type="date" name="published_at" value="{{ old('published_at', optional($post?->published_at)->format('Y-m-d')) }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                    <select name="status" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-accent focus:outline-none">
                        <option value="draft" @selected(old('status', $post->status ?? 'draft') === 'draft')>Draft</option>
                        <option value="published" @selected(old('status', $post->status ?? 'draft') === 'published')>Published</option>
                    </select>
                </div>
            </div>
            <button class="rounded-lg bg-dark px-5 py-3 font-bold text-white hover:bg-accent">
                {{ $post ? 'Update Post' : 'Save Post' }}
            </button>
        </form>
    </div>

    <div class="xl:col-span-3 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-xs uppercase tracking-[0.3em] text-accent">Posts</p>
        <h2 class="mt-2 text-2xl font-bold text-dark">Manage content</h2>
        <div class="mt-6 space-y-4">
            @foreach ($posts as $item)
                <div class="rounded-xl border border-slate-200 p-4">
                    <div class="flex items-start gap-4">
                        <img src="{{ $item->featured_image_path ? asset('storage/'.$item->featured_image_path) : 'https://via.placeholder.com/80' }}" alt="{{ $item->title }}" class="h-16 w-16 rounded-lg object-cover">
                        <div class="flex-1">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <h3 class="font-bold text-dark">{{ $item->title }}</h3>
                                    <p class="text-sm text-slate-500">{{ $item->category }} · {{ ucfirst($item->status) }}</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.blog.index', ['edit' => $item->id]) }}" class="rounded-md border border-slate-200 px-3 py-2 text-sm text-slate-600 hover:border-accent hover:text-accent">Edit</a>
                                    <form method="POST" action="{{ route('admin.blog.destroy', $item) }}" onsubmit="return confirm('Delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="rounded-md border border-slate-200 px-3 py-2 text-sm text-red-600 hover:border-red-200 hover:bg-red-50">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-slate-600 line-clamp-2">{{ $item->excerpt }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
<script>
    const postInput = document.getElementById('post_image');
    const postPreview = document.getElementById('post_image_preview');
    if (postInput && postPreview) {
        postInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (!file) return;
            postPreview.src = URL.createObjectURL(file);
            postPreview.classList.remove('hidden');
        });
    }

    const editor = new Quill('#post_editor', { theme: 'snow' });
    const contentField = document.getElementById('content');
    editor.root.innerHTML = contentField.value;
    editor.on('text-change', function () {
        contentField.value = editor.root.innerHTML;
    });
</script>
@endpush
