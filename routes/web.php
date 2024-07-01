<?php

use App\Http\Controllers\VerseController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return redirect('/grid');
});


Route::get('/auth/redirect', function () {
    // Auth::login(User::where('id', 9)->first());
    // return redirect()->route('home');
    return Socialite::driver('discord')->redirect();
})->name('login');

Route::get('/auth/callback', function () {
    $discordUser = Socialite::driver('discord')->stateless()->user();
    $user = User::updateOrCreate([
        'email' => $discordUser->email,
        'discord_id' => $discordUser->id,
    ], [
        'name' => $discordUser->name,
        'avatar' => $discordUser->avatar,
        'email' => $discordUser->email,
        'discord_token' => $discordUser->token,
        'discord_refresh_token' => $discordUser->refreshToken,
    ]);
    Auth::login($user);
    return redirect('/grid')->with('coming-soon');
});


Route::post("logout", function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');

Route::get('{pageType}/{month?}', [VerseController::class, 'versePage'])->name('home');

Route::get('/offline', function () {
    return view('modules/laravelpwa/offline');
});
