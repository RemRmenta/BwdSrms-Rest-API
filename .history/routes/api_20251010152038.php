<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProofOfServiceController;

// Test route
Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'API is working!']);
});

// ===============================
// Service Request API Routes
// ===============================
Route::get('/service-requests', [ServiceRequestController::class, 'index']);
Route::get('/service-requests/{id}', [ServiceRequestController::class, 'show']);
Route::post('/service-requests', [ServiceRequestController::class, 'store']);
Route::put('/service-requests/{id}', [ServiceRequestController::class, 'update']);
Route::delete('/service-requests/{id}', [ServiceRequestController::class, 'destroy']);
// ===============================
// Users API Routes
// ===============================
Route::apiResource('users', UserController::class);
// ===============================
// ProofOfService API Routes
// ===============================
Route::apiResource('proofs', ProofOfServiceController::class);