<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback'; // matches your table name

    protected $fillable = [
        'resident_id',
        'service_request_id',
        'rating',
        'comments',
    ];
}
