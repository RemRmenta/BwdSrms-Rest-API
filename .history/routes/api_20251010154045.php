<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProofOfServiceController;
use App\Http\Controllers\WorkStatusController;
use App\Http\Controllers\RequestStatusController;
use App\Http\Controllers\RequestAssignmentController;

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
// Get all users
Route::get('/users', [UserController::class, 'index']);

// Create a new user
Route::post('/users', [UserController::class, 'store']);

// Get a single user
Route::get('/users/{id}', [UserController::class, 'show']);

// Update a user
Route::put('/users/{id}', [UserController::class, 'update']);
Route::patch('/users/{id}', [UserController::class, 'update']); // optional for partial updates

// Delete a user
Route::delete('/users/{id}', [UserController::class, 'destroy']);



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


// ===============================
// ProofOfService API Routes
// ===============================
// Work status routes
Route::get('/work-statuses', [WorkStatusController::class, 'index']);
Route::post('/work-statuses', [WorkStatusController::class, 'store']);
Route::get('/work-statuses/{id}', [WorkStatusController::class, 'show']);
Route::put('/work-statuses/{id}', [WorkStatusController::class, 'update']);
Route::patch('/work-statuses/{id}', [WorkStatusController::class, 'update']);
Route::delete('/work-statuses/{id}', [WorkStatusController::class, 'destroy']);

// Request status routes
Route::get('/request-statuses', [RequestStatusController::class, 'index']);
Route::post('/request-statuses', [RequestStatusController::class, 'store']);
Route::get('/request-statuses/{id}', [RequestStatusController::class, 'show']);
Route::put('/request-statuses/{id}', [RequestStatusController::class, 'update']);
Route::patch('/request-statuses/{id}', [RequestStatusController::class, 'update']);
Route::delete('/request-statuses/{id}', [RequestStatusController::class, 'destroy']);