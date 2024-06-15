<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreamHydrology extends Model
{
    use HasFactory;

    protected $table = 'stream_hydrologies';
    public $timestamps = false;

    protected $fillable = [
        'flow_rate',
        'flow_velocity',
        'shear_velocity'
    ];
}

