<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use Illuminate\Http\JsonResponse;

class ServiceRequestController extends Controller
{
    /**
     * Display a listing of all service requests.
     */
    public function index(): JsonResponse
    {
        // You can also use ->with() to include relationships later (e.g., user or request type)
        $requests = ServiceRequest::all();

        return response()->json([
            'message' => 'Service requests retrieved successfully.',
            'data' => $requests
        ]);
    }

    /**
     * Store a newly created service request in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'resident_id' => 'required|exists:users,id',
            'request_type_id' => 'required|exists:request_types,id',
            'request_status_id' => 'required|exists:request_statuses,id',
            'description' => 'nullable|string',
            'status' => 'nullable|string|in:pending,in_progress,completed',
            'service_worker_id' => 'nullable|exists:users,id',
            'service_proof' => 'nullable|string',
        ]);

        $serviceRequest = ServiceRequest::create($validated);

        return response()->json([
            'message' => 'Service request created successfully.',
            'data' => $serviceRequest
        ], 201);
    }

    /**
     * Display the specified service request.
     */
    public function show(ServiceRequest $serviceRequest): JsonResponse
    {
        return response()->json([
            'message' => 'Service request retrieved successfully.',
            'data' => $serviceRequest
        ]);
    }

    /**
     * Update the specified service request in storage.
     */
    public function update(Request $request, ServiceRequest $serviceRequest): JsonResponse
    {
        $validated = $request->validate([
            'resident_id' => 'sometimes|exists:users,id',
            'request_type_id' => 'sometimes|exists:request_types,id',
            'request_status_id' => 'sometimes|exists:request_statuses,id',
            'description' => 'nullable|string',
            'status' => 'sometimes|string|in:pending,in_progress,completed',
            'service_worker_id' => 'nullable|exists:users,id',
            'service_proof' => 'nullable|string',
        ]);

        $serviceRequest->update($validated);

        return response()->json([
            'message' => 'Service request updated successfully.',
            'data' => $serviceRequest
        ]);
    }

    /**
     * Remove the specified service request from storage.
     */
    public function destroy(ServiceRequest $serviceRequest): JsonResponse
    {
        $serviceRequest->delete();

        return response()->json([
            'message' => 'Service request deleted successfully.'
        ]);
    }
}
