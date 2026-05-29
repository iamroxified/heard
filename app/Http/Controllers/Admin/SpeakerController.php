<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ManagesUploads;
use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SpeakerController extends Controller
{
    use ManagesUploads;

    private array $categories = [
        'Business Leadership & Strategy',
        'Technology & Digital Innovation',
        'Finance & Investment',
        'Sustainability & Climate',
        'Politics & Governance',
        'Creative Economy & Culture',
        'Health & Wellbeing',
        'Global Affairs & Geopolitics',
    ];

    public function index(Request $request): View
    {
        return view('admin.speakers.index', [
            'speakers' => Speaker::latest()->get(),
            'editingSpeaker' => $request->integer('edit') ? Speaker::find($request->integer('edit')) : null,
            'categories' => $this->categories,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'headshot' => ['nullable', 'image', 'max:4096'],
            'short_bio' => ['required', 'string', 'min:100', 'max:2500'],
            'expertise_tags_input' => ['nullable', 'string', 'max:1000'],
            'speaking_topics' => ['nullable', 'string'],
            'notable_past_stages' => ['nullable', 'string'],
            'category' => ['required', 'string'],
            'status' => ['required', 'in:active,inactive'],
        ]);

        $path = $this->storeUpload($request->file('headshot'), 'speakers');

        Speaker::create([
            ...$data,
            'slug' => $this->makeSlug($data['full_name']),
            'headshot_path' => $path,
            'expertise_tags' => $this->parseTags($data['expertise_tags_input'] ?? ''),
        ]);

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker created.');
    }

    public function update(Request $request, Speaker $speaker): RedirectResponse
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'headshot' => ['nullable', 'image', 'max:4096'],
            'short_bio' => ['required', 'string', 'min:100', 'max:2500'],
            'expertise_tags_input' => ['nullable', 'string', 'max:1000'],
            'speaking_topics' => ['nullable', 'string'],
            'notable_past_stages' => ['nullable', 'string'],
            'category' => ['required', 'string'],
            'status' => ['required', 'in:active,inactive'],
        ]);

        $speaker->update([
            ...$data,
            'slug' => $this->makeSlug($data['full_name']),
            'headshot_path' => $this->storeUpload($request->file('headshot'), 'speakers', $speaker->headshot_path),
            'expertise_tags' => $this->parseTags($data['expertise_tags_input'] ?? ''),
        ]);

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker updated.');
    }

    public function destroy(Speaker $speaker): RedirectResponse
    {
        $this->deleteUpload($speaker->headshot_path);
        $speaker->delete();

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker deleted.');
    }

    private function parseTags(string $tags): array
    {
        return array_values(array_filter(array_map('trim', preg_split('/[,;\n]+/', $tags) ?: [])));
    }
}
