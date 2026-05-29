<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Speaker;

class SpeakerController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Speaker::where('status', 'active')->latest()->get(),
        ]);
    }
}
