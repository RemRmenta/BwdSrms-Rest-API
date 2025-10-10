<?php

namespace App\Http\Controllers;

use App\Models\ProofOfService;
use Illuminate\Http\Request;

class ProofOfServiceController extends Controller
{
    // Get all proofs
    public function index()
    {
        return response()->json(ProofOfService::all());
    }

    // Create new proof
    public function store(Request $request)
    {
        $request->validate([
            'service_request_id' => 'required|integer',
            'service_worker_id' => 'required|integer',
            'image_proof' => 'required|file|mimes:jpg,png,jpeg|max:2048',
        ]);

        $path = $request->file('image_proof')->store('proofs', 'public');

        $proof = ProofOfService::create([
            'service_request_id' => $request->service_request_id,
            'service_worker_id' => $request->service_worker_id,
            'image_proof' => $path,
        ]);

        return response()->json($proof, 201);
    }

    // Get single proof
    public function show($id)
    {
        return ProofOfService::findOrFail($id);
    }

    // Update proof
    public function update(Request $request, $id)
    {
        $proof = ProofOfService::findOrFail($id);

        $proof->update($request->only(['service_request_id', 'service_worker_id']));

        return response()->json($proof);
    }

    // Delete proof
    public function destroy($id)
    {
        $proof = ProofOfService::findOrFail($id);
        $proof->delete();

        return response()->json(['message' => 'Proof deleted']);
    }
}
