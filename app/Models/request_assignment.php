<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class request_assignment extends Model
{
    protected $fillable = [
        'service_request_id',
        'service_worker_id',
    ];
}
