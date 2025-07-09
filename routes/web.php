<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingController;

Route::get('/', [WeddingController::class, 'index'])->name('wedding.invitation');
Route::get('/rsvp', [WeddingController::class, 'showRsvp'])->name('wedding.rsvp');
Route::post('/rsvp', [WeddingController::class, 'storeRsvp'])->name('wedding.rsvp.store');
Route::get('/admin', [WeddingController::class, 'admin'])->name('wedding.admin');
