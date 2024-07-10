<?php

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

// Discord authentication redirect
Route::get('/auth/redirect', function () {
    Log::info('Redirecting to Discord for authentication');
    return Socialite::driver('discord')->redirect();
})->name('auth-redirect');

// Discord authentication callback
Route::get('/auth/callback', function () {
    Log::info('Discord authentication callback');
    $discordUser = Socialite::driver('discord')->stateless()->user();

    Log::info('Discord user retrieved: ' . $discordUser->email);

    $password = Hash::make($discordUser->email . 'MjRhYjFkODQ5NjIyN2QwMmZkM2M3YTU3ZDYyMmUwMzUyNGFiMWQ4NDk2MjI3ZDAyZmQzYzdhNTdkNjIyZTAzNQ==');
    $user = User::updateOrCreate([
        'email' => $discordUser->email,
        'discord_id' => $discordUser->id,
    ], [
        'name' => $discordUser->name,
        'avatar' => $discordUser->avatar,
        'email' => $discordUser->email,
        'password' => $password,
        'discord_token' => $discordUser->token,
        'discord_refresh_token' => $discordUser->refreshToken,
    ]);

    if ($user) {
        Log::info('User created/updated: ' . $user->email);
    } else {
        Log::error('Failed to create/update user.');
    }

    Auth::login($user);

    if (Auth::check()) {
        Log::info('User logged in: ' . auth()->user()->name);
        Log::info('Redirecting to notebook.index');
        return redirect()->route('notebook.index');
    } else {
        Log::error('Authentication failed.');
        return redirect()->route('login');
    }
});

// Logout route
Route::post('logout', function (Request $request) {
    Log::info('User logging out');
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Offline route
Route::get('/offline', function () {
    return view('modules/laravelpwa/offline');
});

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('notebook', function () {
        Log::info('Redirecting to notebook.index from home');
        return redirect()->route('notebook.index');
    })->name('home');
    Route::resource('notebook', NotebookController::class);
});
