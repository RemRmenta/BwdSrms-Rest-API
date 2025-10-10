<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // Get all notifications
    public function index()
    {
        return response()->json(Notification::all());
    }

    // Create new notification
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'message' => 'required|string',
            'status' => 'sometimes|string|in:unread,read',
        ]);

        $notification = Notification::create([
            'user_id' => $request->user_id,
            'message' => $request->message,
            'status' => $request->status ?? 'unread',
        ]);

        return response()->json($notification, 201);
    }

    // Get single notification
    public function show($id)
    {
        $notification = Notification::findOrFail($id);
        return response()->json($notification);
    }

    // Update notification
    public function update(Request $request, $id)
    {
        $notification = Notification::findOrFail($id);

        $request->validate([
            'user_id' => 'sometimes|integer',
            'message' => 'sometimes|string',
            'status' => 'sometimes|string|in:unread,read',
        ]);

        $notification->update($request->only(['user_id', 'message', 'status']));

        return response()->json($notification);
    }

    // Delete notification
    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return response()->json(['message' => 'Notification deleted']);
    }
}
