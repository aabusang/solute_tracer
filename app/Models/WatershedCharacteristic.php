<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatershedCharacteristics extends Model
{
    use HasFactory;

    protected $table = 'watershed_characteristics';
    public $timestamps = false;

    protected $fillable = [
        'drainage_area'
    ];
}
