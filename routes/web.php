<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\NotebookController;
use App\Http\Controllers\VerseController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

// Redirect root to /verses/ only if the user is not authenticated
Route::get('/', function () {
    if (Auth::check()) {
        Log::info('User is authenticated, redirecting to notebook.index');
        return redirect()->route('notebook.index');
    }
    Log::info('Redirecting to /verses/');
    return redirect('/verses/');
})->name('login');

// Redirect /verses to /verses/grid
Route::get('/verses', function () {
    Log::info('Redirecting to /verses/grid');
    return redirect('/verses/grid');
});

// Verse route
Route::get('verses/{pageType}/{month?}', [VerseController::class, 'versePage']);

// Discord authentication
Route::get('/auth/redirect', [AuthenticationController::class, 'discordRedirect'])->name('auth-redirect');
Route::get('/auth/callback', [AuthenticationController::class, 'discordCallback']);

// Logout route
Route::post('logout',  [AuthenticationController::class, 'logout'])->name('logout');

// Offline route
Route::get('/offline', function () {
    return view('vendor.laravelpwa.offline');
});

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('notebook', function () {
        Log::info('Redirecting to notebook.index from home');
        return redirect()->route('notebook.index');
    })->name('home');
    Route::resource('notebook', NotebookController::class);
    Route::post('/get-verse-by-day-and-month/{month?}/{day?}', [NotebookController::class, 'getVerseByDayAndMonth'])->name('get-verse-by-day-and-month');
});


Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('terms-and-condition', function () {
    return view('terms-and-condition');
})->name('terms-and-condition');