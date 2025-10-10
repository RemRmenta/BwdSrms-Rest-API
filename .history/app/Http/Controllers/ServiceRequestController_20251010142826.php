<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ServiceRequestController extends Controller
{
    // 🧾 Get all service requests
    public function index()
    {
        return response()->json(ServiceRequest::all());
    }

    // 🔍 Get one service request by ID
    public function show($id)
    {
        $serviceRequest = ServiceRequest::find($id);

        if (!$serviceRequest) {
            return response()->json(['message' => 'Service request not found'], 404);
        }

        return response()->json($serviceRequest);
    }

    // ➕ Create a new service request
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

        $serviceRequest = ServiceRequest::create($validated);

        return response()->json($serviceRequest, 201);
    }

    // ✏️ Update an existing service request
    public function update(Request $request, $id)
    {
        $serviceRequest = ServiceRequest::find($id);

        if (!$serviceRequest) {
            return response()->json(['message' => 'Service request not found'], 404);
        }

        $serviceRequest->update($request->all());

        return response()->json($serviceRequest);
    }

    // 🗑️ Delete a service request
    public function destroy($id)
    {
        $serviceRequest = ServiceRequest::find($id);

        if (!$serviceRequest) {
            return response()->json(['message' => 'Service request not found'], 404);
        }

        $serviceRequest->delete();

        return response()->json(['message' => 'Service request deleted successfully']);
    }
}
