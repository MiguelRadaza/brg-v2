<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthenticationController extends Controller
{
    // Handle user registration
    public function register(Request $request)
    {
        // $this->validateApiKey(); // Validate api key TODO: temp remove to proceed with the integration and stuff...
        $validatedData = $request->validate([
            'uid' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'photoURL' => 'nullable|string',
        ]);

        $user = User::updateOrCreate(
            [
                'uid' => $validatedData['uid'],
                'email' => $validatedData['email'],

            ],
            [
                'uid' => $validatedData['uid'],
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'avatar' => $validatedData['photoURL'],
            ]
        );

        $tokenExpiry = now()->addYear();
        $token = $user->createToken(
            'brg-app-token',
            ['*'],
            $tokenExpiry
        )->plainTextToken;

        return response()->json(['message' => 'User registered successfully', 'token' => $token, 'expires_at' => $tokenExpiry], 200);
    }

    // Handle updating user profile
    public function profile(Request $request)
    {
        $validatedData = $request->validate([
            'uid' => 'required|string|exists:users',
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email',
            'photoURL' => 'nullable|string',
        ]);

        $user = User::where('uid', $validatedData['uid'])->first();

        $user->update($validatedData);

        return response()->json(['message' => 'Profile updated successfully'], 200);
    }
}
