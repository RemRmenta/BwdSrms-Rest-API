<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProof extends Model
{
     protected $fillable = [
        'service_request_id',
        'service_worker_id',
        'image_proof',
    ];
}
