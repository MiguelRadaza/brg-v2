<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile()
    {
        $user = auth()->user();
        return view('profile.index', compact('user'));
    }

    public function sendEmailVerification(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    }

    public function fulfillEmailVerification(EmailVerificationRequest $request)
    {
        $request->fulfill();
        if (auth()->user()->hasRole('COVENANT CEO')) {
            auth()->user()->assignRole('COVENANT CEO');
        }

        return redirect('/profile');
    }
}
