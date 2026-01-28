<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PreferenceController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/preferences',[PreferenceController::class,'index'])->name('preferences');
Route::post('/preferences',[PreferenceController::class,'store'])->name('preferences.post');

