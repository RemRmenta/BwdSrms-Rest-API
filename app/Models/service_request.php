<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service_request extends Model
{
    protected $fillable = [
        'resident_id',
        'request_type_id',
        'request_status_id',
        'description',
        'status',
        'service_worker_id',
        'service_proof',
    ];
}
