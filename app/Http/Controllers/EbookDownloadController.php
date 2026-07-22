<?php

namespace App\Http\Controllers;

use App\Models\EbookDownload;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EbookDownloadController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name'         => ['required', 'string', 'max:255'],
            'email'        => ['required', 'email', 'max:255'],
            'organisation' => ['nullable', 'string', 'max:255'],
            'ebook_title'  => ['required', 'string', 'max:255'],
        ]);

        EbookDownload::create(array_merge($data, [
            'downloaded_at' => now(),
        ]));

        return response()->json(['success' => true]);
    }
}
