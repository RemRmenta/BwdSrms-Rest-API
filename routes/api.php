<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceRequestController;

Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'API is working!']);
});

Route::apiResource('service-requests', ServiceRequestController::class);
