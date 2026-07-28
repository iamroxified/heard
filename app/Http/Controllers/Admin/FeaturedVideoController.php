<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeaturedVideo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FeaturedVideoController extends Controller
{
    public function index(Request $request): View
    {
        return view('admin.featured-videos.index', [
            'videos'       => FeaturedVideo::orderBy('sort_order', 'asc')->get(),
            'editingVideo' => $request->integer('edit') ? FeaturedVideo::find($request->integer('edit')) : null,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'youtube_url' => ['required', 'url'],
            'description' => ['nullable', 'string'],
            'status'      => ['required', 'in:active,inactive'],
            'sort_order'  => ['required', 'integer'],
        ]);

        FeaturedVideo::create($data);

        return redirect()->route('admin.featured-videos.index')->with('success', 'Video added successfully.');
    }

    public function update(Request $request, FeaturedVideo $featuredVideo): RedirectResponse
    {
        $data = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'youtube_url' => ['required', 'url'],
            'description' => ['nullable', 'string'],
            'status'      => ['required', 'in:active,inactive'],
            'sort_order'  => ['required', 'integer'],
        ]);

        $featuredVideo->update($data);

        return redirect()->route('admin.featured-videos.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(FeaturedVideo $featuredVideo): RedirectResponse
    {
        $featuredVideo->delete();

        return redirect()->route('admin.featured-videos.index')->with('success', 'Video deleted successfully.');
    }
}
