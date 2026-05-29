<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpeakerController as AdminSpeakerController;
use App\Http\Controllers\EnquiryController as PublicEnquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/how-we-work', function () {
    return view('pages.how-we-work');
})->name('how-we-work');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/events', function () {
    return view('pages.events');
})->name('events');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/enquiries', [PublicEnquiryController::class, 'store'])->name('enquiries.store');

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

        Route::get('/enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
        Route::patch('/enquiries/{enquiry}', [EnquiryController::class, 'update'])->name('enquiries.update');
        Route::delete('/enquiries/{enquiry}', [EnquiryController::class, 'destroy'])->name('enquiries.destroy');
        Route::get('/enquiries/export', [EnquiryController::class, 'export'])->name('enquiries.export');

        Route::get('/settings', [SettingController::class, 'edit'])->name('settings.edit');
        Route::patch('/settings', [SettingController::class, 'update'])->name('settings.update');
    });
});
