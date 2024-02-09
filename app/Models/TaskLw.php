<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskLw extends Model
{
    protected $fillable = [
        'user_id',
        'tasks'
    ];

    use HasFactory;
}
