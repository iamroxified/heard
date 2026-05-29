<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ManagesUploads;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    use ManagesUploads;

    public function index(Request $request): View
    {
        return view('admin.events.index', [
            'events' => Event::latest('event_date')->get(),
            'editingEvent' => $request->integer('edit') ? Event::find($request->integer('edit')) : null,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:upcoming,past'],
            'event_date' => ['nullable', 'date'],
            'location' => ['nullable', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:1000'],
            'full_description' => ['nullable', 'string'],
            'featured_image' => ['nullable', 'image', 'max:4096'],
            'speaker_highlights' => ['nullable', 'string'],
            'registration_link' => ['nullable', 'url'],
            'is_featured' => ['nullable', 'boolean'],
        ]);

        $path = $this->storeUpload($request->file('featured_image'), 'events');

        Event::create([
            ...$data,
            'slug' => $this->makeSlug($data['name']),
            'featured_image_path' => $path,
            'is_featured' => $request->boolean('is_featured'),
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event created.');
    }

    public function update(Request $request, Event $event): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:upcoming,past'],
            'event_date' => ['nullable', 'date'],
            'location' => ['nullable', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:1000'],
            'full_description' => ['nullable', 'string'],
            'featured_image' => ['nullable', 'image', 'max:4096'],
            'speaker_highlights' => ['nullable', 'string'],
            'registration_link' => ['nullable', 'url'],
            'is_featured' => ['nullable', 'boolean'],
        ]);

        $event->update([
            ...$data,
            'slug' => $this->makeSlug($data['name']),
            'featured_image_path' => $this->storeUpload($request->file('featured_image'), 'events', $event->featured_image_path),
            'is_featured' => $request->boolean('is_featured'),
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event updated.');
    }

    public function destroy(Event $event): RedirectResponse
    {
        $this->deleteUpload($event->featured_image_path);
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted.');
    }
}
