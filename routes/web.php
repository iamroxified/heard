<?php

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
