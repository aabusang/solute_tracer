<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreamCharacteristics extends Model
{
    use HasFactory;
    
    protected $table = 'stream_characteristics';
    public $timestamps = false;

    protected $fillable = [
        'ph',
        'dissolved_solute',
        'vegetation',
        'temperature'
    ];
}
