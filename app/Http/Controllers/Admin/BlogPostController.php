<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ManagesUploads;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    use ManagesUploads;

    private array $categories = [
        'Speaker Spotlight',
        'Event Production',
        'African Stages',
        'Speaker Readiness',
        'Industry Insight',
    ];

    public function index(Request $request): View
    {
        return view('admin.blog.index', [
            'posts' => BlogPost::latest('published_at')->get(),
            'editingPost' => $request->integer('edit') ? BlogPost::find($request->integer('edit')) : null,
            'categories' => $this->categories,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:4096'],
            'excerpt' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'author' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'status' => ['required', 'in:draft,published'],
        ]);

        $path = $this->storeUpload($request->file('featured_image'), 'blog');

        BlogPost::create([
            ...$data,
            'author' => $data['author'] ?: 'Chimfumnanya Nwandu',
            'slug' => $this->makeSlug($data['title']),
            'featured_image_path' => $path,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Post created.');
    }

    public function update(Request $request, BlogPost $post): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:4096'],
            'excerpt' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'author' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'status' => ['required', 'in:draft,published'],
        ]);

        $post->update([
            ...$data,
            'author' => $data['author'] ?: 'Chimfumnanya Nwandu',
            'slug' => $this->makeSlug($data['title']),
            'featured_image_path' => $this->storeUpload($request->file('featured_image'), 'blog', $post->featured_image_path),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Post updated.');
    }

    public function destroy(BlogPost $post): RedirectResponse
    {
        $this->deleteUpload($post->featured_image_path);
        $post->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Post deleted.');
    }
}
