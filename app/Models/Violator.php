<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violator extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_of_violations',
        'Remarks'
    ];
    public function consequences()
    {
        return $this->belongsToMany(Consequence::class)
            ->withPivot('qty', 'Remarks');
    }
}