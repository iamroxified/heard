<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EbookDownloadController as AdminEbookDownloadController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpeakerController as AdminSpeakerController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\FeaturedVideoController as AdminFeaturedVideoController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\EbookDownloadController as PublicEbookDownloadController;
use App\Http\Controllers\EnquiryController as PublicEnquiryController;
use App\Models\BlogPost;
use App\Models\Faq;
use App\Models\FeaturedVideo;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $testimonials = Testimonial::where('status', 'active')->orderBy('sort_order', 'asc')->get();
    $faqs = Faq::where('status', 'active')->orderBy('sort_order', 'asc')->get();
    return view('pages.home', compact('testimonials', 'faqs'));
})->name('home');

Route::get('/about', function () {
    $faqs = Faq::where('status', 'active')->orderBy('sort_order', 'asc')->get();
    return view('pages.about', compact('faqs'));
})->name('about');

Route::get('/speaker-economy', function () {
    $featuredVideos = FeaturedVideo::where('status', 'active')->orderBy('sort_order', 'asc')->get();
    return view('pages.speaker-economy', compact('featuredVideos'));
})->name('speaker-economy');

Route::get('/ebook-download/thank-you', function () {
    return view('pages.ebook-thank-you');
})->name('ebook-download.thank-you');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/events', function () {
    $featuredEvent = \App\Models\Event::where('is_featured', true)->first();
    $upcomingEvents = \App\Models\Event::where('type', 'upcoming')->orderBy('event_date', 'asc')->get();
    $pastEvents = \App\Models\Event::where('type', 'past')->orderBy('event_date', 'desc')->get();
    return view('pages.events', compact('featuredEvent', 'upcomingEvents', 'pastEvents'));
})->name('events');

Route::get('/blog', function () {
    $published = BlogPost::where('status', 'published')
        ->orderByDesc('published_at')
        ->get();

    $featuredPost = $published->first();
    $posts = $published->skip(1)->values();

    $categories = $published->pluck('category')->unique()->sort()->values();

    return view('pages.blog', compact('featuredPost', 'posts', 'categories'));
})->name('blog');

Route::get('/blog/{slug}', function (string $slug) {
    $post = BlogPost::where('slug', $slug)->where('status', 'published')->firstOrFail();
    return view('pages.blog-single', compact('post'));
})->name('blog.show');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/discovery-call', function () {
    return view('pages.discovery-call');
})->name('discovery-call');

Route::post('/enquiries', [PublicEnquiryController::class, 'store'])->name('enquiries.store');
Route::post('/ebook-downloads', [PublicEbookDownloadController::class, 'store'])->name('ebook-downloads.store');

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'create'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'store'])->name('login.store');
    });

    Route::post('/logout', [AdminAuthController::class, 'destroy'])->middleware('auth')->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/speakers', [AdminSpeakerController::class, 'index'])->name('speakers.index');
        Route::post('/speakers', [AdminSpeakerController::class, 'store'])->name('speakers.store');
        Route::put('/speakers/{speaker}', [AdminSpeakerController::class, 'update'])->name('speakers.update');
        Route::delete('/speakers/{speaker}', [AdminSpeakerController::class, 'destroy'])->name('speakers.destroy');

        Route::get('/events', [AdminEventController::class, 'index'])->name('events.index');
        Route::post('/events', [AdminEventController::class, 'store'])->name('events.store');
        Route::put('/events/{event}', [AdminEventController::class, 'update'])->name('events.update');
        Route::delete('/events/{event}', [AdminEventController::class, 'destroy'])->name('events.destroy');

        Route::get('/blog', [AdminBlogPostController::class, 'index'])->name('blog.index');
        Route::post('/blog', [AdminBlogPostController::class, 'store'])->name('blog.store');
        Route::put('/blog/{post}', [AdminBlogPostController::class, 'update'])->name('blog.update');
        Route::delete('/blog/{post}', [AdminBlogPostController::class, 'destroy'])->name('blog.destroy');

        Route::get('/faqs', [AdminFaqController::class, 'index'])->name('faqs.index');
        Route::post('/faqs', [AdminFaqController::class, 'store'])->name('faqs.store');
        Route::put('/faqs/{faq}', [AdminFaqController::class, 'update'])->name('faqs.update');
        Route::delete('/faqs/{faq}', [AdminFaqController::class, 'destroy'])->name('faqs.destroy');

        Route::get('/testimonials', [AdminTestimonialController::class, 'index'])->name('testimonials.index');
        Route::post('/testimonials', [AdminTestimonialController::class, 'store'])->name('testimonials.store');
        Route::put('/testimonials/{testimonial}', [AdminTestimonialController::class, 'update'])->name('testimonials.update');
        Route::delete('/testimonials/{testimonial}', [AdminTestimonialController::class, 'destroy'])->name('testimonials.destroy');

        Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
        Route::patch('/enquiries/{enquiry}', [EnquiryController::class, 'update'])->name('enquiries.update');
        Route::delete('/enquiries/{enquiry}', [EnquiryController::class, 'destroy'])->name('enquiries.destroy');
        Route::get('/enquiries/export', [EnquiryController::class, 'export'])->name('enquiries.export');

        Route::get('/ebook-downloads', [AdminEbookDownloadController::class, 'index'])->name('ebook-downloads.index');
        Route::get('/ebook-downloads/export', [AdminEbookDownloadController::class, 'export'])->name('ebook-downloads.export');
        Route::patch('/ebook-downloads/{ebookDownload}', [AdminEbookDownloadController::class, 'update'])->name('ebook-downloads.update');
        Route::delete('/ebook-downloads/{ebookDownload}', [AdminEbookDownloadController::class, 'destroy'])->name('ebook-downloads.destroy');

        Route::get('/featured-videos', [AdminFeaturedVideoController::class, 'index'])->name('featured-videos.index');
        Route::post('/featured-videos', [AdminFeaturedVideoController::class, 'store'])->name('featured-videos.store');
        Route::put('/featured-videos/{featuredVideo}', [AdminFeaturedVideoController::class, 'update'])->name('featured-videos.update');
        Route::delete('/featured-videos/{featuredVideo}', [AdminFeaturedVideoController::class, 'destroy'])->name('featured-videos.destroy');

        Route::get('/settings', [SettingController::class, 'edit'])->name('settings.edit');
        Route::patch('/settings', [SettingController::class, 'update'])->name('settings.update');
    });
});
