<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    
    protected $table = 'sample';
    public $timestamps = false;

    protected $fillable = [
        'sheet_name',
        'injection_tracer_no',
        'sampling_location_no'
    ];

    public function tracer()
    {
        return $this->belongsTo(InjectionTracer::class, 'injection_tracer_no');
    }

    public function samplingLocation()
    {
        return $this->belongsTo(SamplingLocation::class, 'sampling_location_no');
    }
}

