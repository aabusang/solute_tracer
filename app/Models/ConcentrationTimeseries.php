<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcentrationTimeseries extends Model
{
    use HasFactory;

    protected $table = 'concentration_timeseries';
    protected $primaryKey = 'timeseries_no';
    public $timestamps = false;

    protected $fillable = [
        'sheet_name',
        'date',
        'time',
        'observed_concentration',
        'conserved_concentration',
        'discharged_adjusted_concentration',
        'injection_tracer_no' // foreign key
    ];

    public function tracer()
    {
        return $this->belongsTo(InjectionTracer::class, 'injection_tracer_no');
    }
}
