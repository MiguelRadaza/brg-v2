<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Verse;
use App\Http\Controllers\Api\AuthenticationController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware(['auth:sanctum'])->group(function () {
});
Route::post('auth/register', [AuthenticationController::class, 'register']);

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::get('verses/{token}', action: function ($token): bool|string {
    $tokenValue = "brg-app-cho:copyright@kingstech2024";
    $hashedToken = "YnJnLWFwcC1jaG86Y29weXJpZ2h0QGtpbmdzdGVjaDIwMjQ=";

    if (empty($token) || ($token !== $hashedToken)) {
        return json_encode([
            "status" => false,
            "message" => "Invalid token!. Please try again."
        ], 400);
    }

    $month = request()->query('month');
    $validMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    if (!$month || !in_array(ucfirst($month), $validMonths)) {
        return json_encode([
            "status" => false,
            "message" => "Invalid or missing month parameter! Please provide a valid month."
        ], 400); // Returning with a 400 Bad Request status code
    }

    $data = Verse::where('month', ucfirst($month))->get();

    return json_encode([
        "status" => true,
        "data" => $data
    ], 200);
});