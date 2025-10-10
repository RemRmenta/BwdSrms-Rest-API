<?php

namespace App\Http\Controllers;

use App\Models\RequestStatus;
use Illuminate\Http\Request;

class RequestStatusController extends Controller
{
    // Get all request statuses
    public function index()
    {
        return response()->json(RequestStatus::all());
    }

    // Create new request status
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
        ]);

        $status = RequestStatus::create([
            'type' => $request->type,
        ]);

        return response()->json($status, 201);
    }

    // Get single request status
    public function show($id)
    {
        $status = RequestStatus::findOrFail($id);
        return response()->json($status);
    }

    // Update request status
    public function update(Request $request, $id)
    {
        $status = RequestStatus::findOrFail($id);

        $request->validate([
            'type' => 'required|string|max:255',
        ]);

        $status->update([
            'type' => $request->type,
        ]);

        return response()->json($status);
    }

    // Delete request status
    public function destroy($id)
    {
        $status = RequestStatus::findOrFail($id);
        $status->delete();

        return response()->json(['message' => 'Request status deleted']);
    }
}
