<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EbookDownload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\View\View;

class EbookDownloadController extends Controller
{
    public function index(Request $request): View
    {
        return view('admin.ebook-downloads.index', [
            'downloads'       => EbookDownload::latest()->get(),
            'editingDownload' => $request->integer('edit') ? EbookDownload::find($request->integer('edit')) : null,
        ]);
    }

    public function update(Request $request, EbookDownload $ebookDownload): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:new,contacted,archived'],
        ]);

        $ebookDownload->update($data);

        return redirect()
            ->route('admin.ebook-downloads.index', ['edit' => $ebookDownload->id])
            ->with('success', 'Download record updated.');
    }

    public function destroy(EbookDownload $ebookDownload): RedirectResponse
    {
        $ebookDownload->delete();

        return redirect()
            ->route('admin.ebook-downloads.index')
            ->with('success', 'Record deleted.');
    }

    public function export(): StreamedResponse
    {
        $fileName  = 'ebook-downloads-' . now()->format('Y-m-d-His') . '.csv';
        $downloads = EbookDownload::latest()->get();

        return response()->streamDownload(function () use ($downloads): void {
            $handle = fopen('php://output', 'w');

            fputcsv($handle, ['Name', 'Email', 'Organisation', 'Ebook Title', 'Downloaded At', 'Status']);

            foreach ($downloads as $dl) {
                fputcsv($handle, [
                    $dl->name,
                    $dl->email,
                    $dl->organisation,
                    $dl->ebook_title,
                    $dl->downloaded_at?->format('Y-m-d H:i:s'),
                    ucfirst($dl->status),
                ]);
            }

            fclose($handle);
        }, $fileName, ['Content-Type' => 'text/csv']);
    }
}
