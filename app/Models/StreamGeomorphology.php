<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreamGeomorphology extends Model
{
    use HasFactory;

    protected $table = 'stream_geomorphologies';
    public $timestamps = false;

    protected $fillable = [
        'bed_slope',
        'channel_width',
        'channel_Depth',
        'cross_sectional_area',
        'bed_material',
        'bed_mat_thickness',
        'mannings_n'
    ];
}

