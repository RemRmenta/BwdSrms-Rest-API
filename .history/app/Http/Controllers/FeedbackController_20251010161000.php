<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Get all feedback
    public function index()
    {
        return response()->json(Feedback::all());
    }

    // Get single feedback
    public function show($id)
    {
        return response()->json(Feedback::findOrFail($id));
    }

    // Create feedback
    public function store(Request $request)
    {
        $request->validate([
            'resident_id' => 'required|integer',
            'service_request_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'comments' => 'sometimes|string|nullable',
        ]);

        $feedback = Feedback::create($request->only(['resident_id','service_request_id','rating','comments']));
        return response()->json($feedback, 201);
    }

    // Update feedback
    public function update(Request $request, $id)
    {
        $feedback = Feedback::findOrFail($id);

        $request->validate([
            'resident_id' => 'sometimes|integer',
            'service_request_id' => 'sometimes|integer',
            'rating' => 'sometimes|integer|min:1|max:5',
            'comments' => 'sometimes|string|nullable',
        ]);

        $feedback->update($request->only(['resident_id','service_request_id','rating','comments']));
        return response()->json($feedback);
    }

    // Delete feedback
    public function destroy($id)
    {
        Feedback::findOrFail($id)->delete();
        return response()->json(['message' => 'Feedback deleted']);
    }
}
