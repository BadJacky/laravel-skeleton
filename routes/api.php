<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['change-locale'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    Route::middleware(['throttle:'.config('api.rate_limits.sign')])->group(function () {
        //
    });

    Route::middleware('throttle:'.config('api.rate_limits.access'))->group(function () {
        //
    });
});
