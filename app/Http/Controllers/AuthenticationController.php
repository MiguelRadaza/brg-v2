<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller
{
    public function discordCallback()
    {
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
    }

    public function logout(Request $request)
    {
        Log::info('User logging out');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function discordRedirect()
    {
        Log::info('Redirecting to Discord for authentication');
        return Socialite::driver('discord')->redirect();
    }
}