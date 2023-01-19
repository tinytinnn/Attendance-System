<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'room_color',
        'occupants_gender',
        'capacity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}