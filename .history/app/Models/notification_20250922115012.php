<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'message',
        'status', // e.g., unread/read
    ];
}
