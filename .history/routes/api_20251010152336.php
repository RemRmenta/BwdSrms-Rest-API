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
// Get all proofs
Route::get('/proofs', [ProofOfServiceController::class, 'index']);

// Create new proof
Route::post('/proofs', [ProofOfServiceController::class, 'store']);

// Get single proof
Route::get('/proofs/{id}', [ProofOfServiceController::class, 'show']);

// Update proof
Route::put('/proofs/{id}', [ProofOfServiceController::class, 'update']);
Route::patch('/proofs/{id}', [ProofOfServiceController::class, 'update']); // optional for partial updates

// Delete proof
Route::delete('/proofs/{id}', [ProofOfServiceController::class, 'destroy']);
