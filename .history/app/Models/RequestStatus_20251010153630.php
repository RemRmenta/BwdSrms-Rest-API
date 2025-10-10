<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestStatus extends Model
{
    protected $table = 'request_statuses';

    protected $fillable = [
        'type',
    ];
}
