<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkStatus extends Model
{
    protected $table = 'work_statuses';

    protected $fillable = [
        'status',
    ];
}
