<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile()
    {
        $user = auth()->user();
        return view('profile.index', compact('user'));
    }

    public function verifyEmailAccount(Request $request)
    {
        dd($request->all());
    }
}