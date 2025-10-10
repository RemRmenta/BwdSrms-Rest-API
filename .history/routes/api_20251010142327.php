<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceRequestController;

// Test route
Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'API is working!']);
});

// ===============================
// Service Request API Routes
// ===============================

// Get all service requests
Route::get('/service-requests', [ServiceRequestController::class, 'index']);

// Get a single service request
Route::get('/service-requests/{serviceRequest}', [ServiceRequestController::class, 'show']);

// Create a new service request
Route::post('/service-requests', [ServiceRequestController::class, 'store']);

// Update an existing service request
Route::put('/service-requests/{serviceRequest}', [ServiceRequestController::class, 'update']);

// Delete a service request
Route::delete('/service-requests/{serviceRequest}', [ServiceRequestController::class, 'destroy']);
