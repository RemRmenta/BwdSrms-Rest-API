<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProofOfService extends Model
{
    use HasFactory;

    protected $table = 'proof_of_service';

    protected $fillable = [
        'service_request_id',
        'service_worker_id',
        'image_proof',
    ];
}
