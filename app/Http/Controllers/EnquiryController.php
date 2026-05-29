<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'form_type' => ['required', 'in:contact,programme'],
            'name' => ['required', 'string', 'max:255'],
            'organisation' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'event_name' => ['nullable', 'string', 'max:255'],
            'event_date' => ['nullable', 'date'],
            'event_type' => ['nullable', 'string', 'max:255'],
            'audience_size' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'speaker_request' => ['nullable', 'string'],
            'programme_support' => ['nullable', 'string', 'max:50'],
            'budget' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string'],
        ]);

        Enquiry::create($data);

        return back()->with('success', 'Thanks — your enquiry has been sent.');
    }
}
