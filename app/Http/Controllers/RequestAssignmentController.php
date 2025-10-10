<?php

namespace App\Http\Controllers;

use App\Models\RequestAssignment;
use Illuminate\Http\Request;

class RequestAssignmentController extends Controller
{
    // Get all assignments
    public function index()
    {
        return response()->json(RequestAssignment::all());
    }

    // Create new assignment
    public function store(Request $request)
    {
        $request->validate([
            'service_request_id' => 'required|integer',
            'service_worker_id' => 'required|integer',
        ]);

        $assignment = RequestAssignment::create([
            'service_request_id' => $request->service_request_id,
            'service_worker_id' => $request->service_worker_id,
        ]);

        return response()->json($assignment, 201);
    }

    // Get single assignment
    public function show($id)
    {
        $assignment = RequestAssignment::findOrFail($id);
        return response()->json($assignment);
    }

    // Update assignment
    public function update(Request $request, $id)
    {
        $assignment = RequestAssignment::findOrFail($id);

        $request->validate([
            'service_request_id' => 'required|integer',
            'service_worker_id' => 'required|integer',
        ]);

        $assignment->update([
            'service_request_id' => $request->service_request_id,
            'service_worker_id' => $request->service_worker_id,
        ]);

        return response()->json($assignment);
    }

    // Delete assignment
    public function destroy($id)
    {
        $assignment = RequestAssignment::findOrFail($id);
        $assignment->delete();

        return response()->json(['message' => 'Request assignment deleted']);
    }
}
