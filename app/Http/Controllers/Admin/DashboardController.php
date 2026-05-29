<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Enquiry;
use App\Models\Event;
use App\Models\Speaker;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'speakerCount' => Speaker::count(),
            'eventCount' => Event::count(),
            'blogPostCount' => BlogPost::count(),
            'enquiryCount' => Enquiry::count(),
            'unreadEnquiries' => Enquiry::where('status', 'unread')->count(),
            'featuredEvent' => Event::where('is_featured', true)->first(),
        ]);
    }
}
