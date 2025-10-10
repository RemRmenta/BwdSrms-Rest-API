<?php

namespace App\Http\Controllers;

use App\Models\WorkStatus;
use Illuminate\Http\Request;

class WorkStatusController extends Controller
{
    // Get all statuses
    public function index()
    {
        return response()->json(WorkStatus::all());
    }

    // Create new status
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $workStatus = WorkStatus::create([
            'status' => $request->status,
        ]);

        return response()->json($workStatus, 201);
    }

    // Get single status
    public function show($id)
    {
        $workStatus = WorkStatus::findOrFail($id);
        return response()->json($workStatus);
    }

    // Update status
    public function update(Request $request, $id)
    {
        $workStatus = WorkStatus::findOrFail($id);

        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $workStatus->update([
            'status' => $request->status,
        ]);

        return response()->json($workStatus);
    }

    // Delete status
    public function destroy($id)
    {
        $workStatus = WorkStatus::findOrFail($id);
        $workStatus->delete();

        return response()->json(['message' => 'Work status deleted']);
    }
}
