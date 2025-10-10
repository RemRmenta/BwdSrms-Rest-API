<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestAssignment extends Model
{
    protected $table = 'request_assignments';

    protected $fillable = [
        'service_request_id',
        'service_worker_id',
    ];
}
