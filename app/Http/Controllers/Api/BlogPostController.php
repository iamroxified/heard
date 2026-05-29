<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => BlogPost::where('status', 'published')->latest('published_at')->get(),
        ]);
    }
}
