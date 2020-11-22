<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Profile\ProfileController;
use App\Http\Controllers\API\Admin\UserController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('instagram-verification-sucess/{id}', [ProfileController::class, 'verify_instagram_account']);
Route::get('get-instagram-username/{id}', [ProfileController::class, 'get_instagram_username']);
Route::post('change-user-status', [UserController::class, 'change_user_sttaus']);
Route::post('generate-email-verification-otp', [ProfileController::class, 'generate_email_verification_code']);
Route::post('verify-email-address', [ProfileController::class, 'verify_email_now']);
