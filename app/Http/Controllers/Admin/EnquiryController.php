<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\View\View;

class EnquiryController extends Controller
{
    public function index(Request $request): View
    {
        return view('admin.enquiries.index', [
            'enquiries' => Enquiry::latest()->get(),
            'editingEnquiry' => $request->integer('edit') ? Enquiry::find($request->integer('edit')) : null,
        ]);
    }

    public function update(Request $request, Enquiry $enquiry): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:unread,read,replied,archived'],
        ]);

        $updates = ['status' => $data['status']];

        if ($data['status'] === 'read' && ! $enquiry->read_at) {
            $updates['read_at'] = now();
        }

        if ($data['status'] === 'replied') {
            $updates['replied_at'] = now();
        }

        $enquiry->update($updates);

        return redirect()->route('admin.enquiries.index', ['edit' => $enquiry->id])->with('success', 'Enquiry updated.');
    }

    public function destroy(Enquiry $enquiry): RedirectResponse
    {
        $enquiry->delete();

        return redirect()->route('admin.enquiries.index')->with('success', 'Enquiry deleted.');
    }

    public function export(): StreamedResponse
    {
        $fileName = 'enquiries-'.now()->format('Y-m-d-His').'.csv';
        $enquiries = Enquiry::latest()->get();

        return response()->streamDownload(function () use ($enquiries): void {
            $handle = fopen('php://output', 'w');

            fputcsv($handle, [
                'Name', 'Organisation', 'Email', 'Phone', 'Event Name', 'Event Date', 'Event Type',
                'Audience Size', 'Location', 'Speaker Request', 'Programme Support', 'Budget', 'Message', 'Status',
            ]);

            foreach ($enquiries as $enquiry) {
                fputcsv($handle, [
                    $enquiry->name,
                    $enquiry->organisation,
                    $enquiry->email,
                    $enquiry->phone,
                    $enquiry->event_name,
                    optional($enquiry->event_date)->format('Y-m-d'),
                    $enquiry->event_type,
                    $enquiry->audience_size,
                    $enquiry->location,
                    $enquiry->speaker_request,
                    $enquiry->programme_support,
                    $enquiry->budget,
                    $enquiry->message,
                    $enquiry->status,
                ]);
            }

            fclose($handle);
        }, $fileName, ['Content-Type' => 'text/csv']);
    }
}
