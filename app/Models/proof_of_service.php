<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proof_of_service extends Model
{
     protected $fillable = [
        'service_request_id',
        'service_worker_id',
        'image_proof',
    ];
}
