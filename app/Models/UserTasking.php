<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTasking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tasking_id',
    ];
}