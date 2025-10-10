<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
     protected $fillable = [
        'resident_id',
        'service_request_id',
        'rating',
        'comments',
    ];
}
