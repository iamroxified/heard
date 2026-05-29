<?php

use App\Http\Controllers\Api\BlogPostController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\SpeakerController;
use Illuminate\Support\Facades\Route;

Route::get('/speakers', [SpeakerController::class, 'index']);
Route::get('/events', [EventController::class, 'index']);
Route::get('/blog-posts', [BlogPostController::class, 'index']);
