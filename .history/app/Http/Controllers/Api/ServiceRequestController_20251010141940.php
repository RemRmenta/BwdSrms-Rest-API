<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    // Get all service requests
    public function index()
    {
        return response()->json(ServiceRequest::all(), 200);
    }

    // Get a specific service request by ID
    public function show($id)
    {
        $request = ServiceRequest::find($id);

        if (!$request) {
            return response()->json(['message' => 'Service request not found'], 404);
        }

        return response()->json($request, 200);
    }

    // Create a new service request
    public function store(Request $request)
    {
        $validated = $request->validate([
            'resident_id' => 'required|integer',
            'request_type_id' => 'required|integer',
            'request_status_id' => 'required|integer',
            'description' => 'nullable|string',
            'status' => 'required|string',
            'service_worker_id' => 'nullable|integer',
            'service_proof' => 'nullable|string',
        ]);

        $newRequest = ServiceRequest::create($validated);

        return response()->json($newRequest, 201);
    }

    // Update an existing service request
    public function update(Request $request, $id)
    {
        $serviceRequest = ServiceRequest::find($id);

        if (!$serviceRequest) {
            return response()->json(['message' => 'Service request not found'], 404);
        }

        $serviceRequest->update($request->all());

        return response()->json($serviceRequest, 200);
    }

    // Delete a service request
    public function destroy($id)
    {
        $serviceRequest = ServiceRequest::find($id);

        if (!$serviceRequest) {
            return response()->json(['message' => 'Service request not found'], 404);
        }

        $serviceRequest->delete();

        return response()->json(['message' => 'Service request deleted'], 200);
    }
}
