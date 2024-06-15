<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Downstream extends Model
{
    use HasFactory;


    protected $table = 'downstream';
    protected $primaryKey = 'downstream_no';
    public $timestamps = false;

    protected $fillable = [
        'distance_down',
        'sampling_location_no', // Foreign key
        'injection_location_no' // Foreign key
    ];

    public function samplingLocation()
    {
        return $this->belongsTo(SamplingLocation::class, 'sampling_location_no');
    }

    public function injectionLocation()
    {
        return $this->belongsTo(InjectionLocation::class, 'injection_location_no');
    }
}

