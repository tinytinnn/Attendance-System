<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consequence extends Model
{
    use HasFactory;

    protected $fillable = [
        'Consequence_name',
        'Days_to_complete',
        'Remarks'
    ];

    public function violators()
    {
        return $this->belongsToMany(Violator::class);
    }
}