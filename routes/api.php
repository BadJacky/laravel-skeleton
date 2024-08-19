<?php

use App\Http\Controllers\VerificationCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['change-locale'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    // 登录相关接口
    Route::middleware(['throttle:'.config('api.rate_limits.sign')])->group(function () {
        Route::apiResource('verification_codes', VerificationCodeController::class)->only(['store']);
    });

    Route::middleware('throttle:'.config('api.rate_limits.access'))->group(function () {
        //
    });
});
