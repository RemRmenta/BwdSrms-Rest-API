<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceRequestController;

Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'API is working!']);
});

Route::apiResource('service-requests', ServiceRequestController::class);

Route::prefix('service-requests')->group(function () {
    Route::get('/', [ServiceRequestController::class, 'index']);       // GET /api/service-requests
    Route::post('/', [ServiceRequestController::class, 'store']);      // POST /api/service-requests
    Route::get('/{serviceRequest}', [ServiceRequestController::class, 'show']); // GET /api/service-requests/{id}
    Route::put('/{serviceRequest}', [ServiceRequestController::class, 'update']); // PUT /api/service-requests/{id}
    Route::delete('/{serviceRequest}', [ServiceRequestController::class, 'destroy']); // DELETE /api/service-requests/{id}
});