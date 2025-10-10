<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProofOfServiceController;
use App\Http\Controllers\WorkStatusController;
use App\Http\Controllers\RequestStatusController;
use App\Http\Controllers\RequestAssignmentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FeedbackController;

// Test route
Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'API is working!']);
});

// Service Request API Routes
Route::get('/service-requests', [ServiceRequestController::class, 'index']);
Route::get('/service-requests/{id}', [ServiceRequestController::class, 'show']);
Route::post('/service-requests', [ServiceRequestController::class, 'store']);
Route::put('/service-requests/{id}', [ServiceRequestController::class, 'update']);
Route::delete('/service-requests/{id}', [ServiceRequestController::class, 'destroy']);

// Users API Routes
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::patch('/users/{id}', [UserController::class, 'update']); // optional for partial updates
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// ProofOfService API Routes
Route::get('/proofs', [ProofOfServiceController::class, 'index']);
Route::post('/proofs', [ProofOfServiceController::class, 'store']);
Route::get('/proofs/{id}', [ProofOfServiceController::class, 'show']);
Route::put('/proofs/{id}', [ProofOfServiceController::class, 'update']);
Route::patch('/proofs/{id}', [ProofOfServiceController::class, 'update']); // optional for partial updates
Route::delete('/proofs/{id}', [ProofOfServiceController::class, 'destroy']);

// WorkStatues API Routes
Route::get('/work-statuses', [WorkStatusController::class, 'index']);
Route::post('/work-statuses', [WorkStatusController::class, 'store']);
Route::get('/work-statuses/{id}', [WorkStatusController::class, 'show']);
Route::put('/work-statuses/{id}', [WorkStatusController::class, 'update']);
Route::patch('/work-statuses/{id}', [WorkStatusController::class, 'update']);
Route::delete('/work-statuses/{id}', [WorkStatusController::class, 'destroy']);

// RequestStatuses routes
Route::get('/request-statuses', [RequestStatusController::class, 'index']);
Route::post('/request-statuses', [RequestStatusController::class, 'store']);
Route::get('/request-statuses/{id}', [RequestStatusController::class, 'show']);
Route::put('/request-statuses/{id}', [RequestStatusController::class, 'update']);
Route::patch('/request-statuses/{id}', [RequestStatusController::class, 'update']);
Route::delete('/request-statuses/{id}', [RequestStatusController::class, 'destroy']);

// Request assignment routes
Route::get('/request-assignments', [RequestAssignmentController::class, 'index']);
Route::post('/request-assignments', [RequestAssignmentController::class, 'store']);
Route::get('/request-assignments/{id}', [RequestAssignmentController::class, 'show']);
Route::put('/request-assignments/{id}', [RequestAssignmentController::class, 'update']);
Route::patch('/request-assignments/{id}', [RequestAssignmentController::class, 'update']);
Route::delete('/request-assignments/{id}', [RequestAssignmentController::class, 'destroy']);

// Notification routes
Route::get('/notifications', [NotificationController::class, 'index']);
Route::post('/notifications', [NotificationController::class, 'store']);
Route::get('/notifications/{id}', [NotificationController::class, 'show']);
Route::put('/notifications/{id}', [NotificationController::class, 'update']);
Route::patch('/notifications/{id}', [NotificationController::class, 'update']);
Route::delete('/notifications/{id}', [NotificationController::class, 'destroy']);

//Feedback routes
Route::get('/feedback', [FeedbackController::class,'index']);
Route::post('/feedback', [FeedbackController::class,'store']);
Route::get('/feedback/{id}', [FeedbackController::class,'show']);
Route::put('/feedback/{id}', [FeedbackController::class,'update']);
Route::patch('/feedback/{id}', [FeedbackController::class,'update']);
Route::delete('/feedback/{id}', [FeedbackController::class,'destroy']);
