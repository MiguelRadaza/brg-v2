<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\CovenantCompany;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile()
    {
        $churches = Church::all();
        $user = auth()->user();
        $user->covenantCompany = CovenantCompany::where('user_id', $user->id)->first();
        return view('profile.index', compact('user', 'churches'));
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

    public function profileUpdate(Request $request)
    {
        $covenantCompany = CovenantCompany::where('user_id', auth()->user()->id)->where('church_id', $request->church_id)->first();
        if (!$covenantCompany) {
            return back()->with('message', "Please Create your company First!");
        }

        $covenantCompany->webhook_url = $request->webhook_url;
        $covenantCompany->save();

        return back()->with('success', "Updated webhook successfully.");
    }
}
