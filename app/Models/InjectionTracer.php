<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InjectionTracer extends Model
{
    use HasFactory;

    protected $table = 'injection_tracer';
    public $timestamps = false;

    protected $fillable = [
        'mass_ex_co',
        'tracer_mass',
        'concentration',
        'bg_concentration',
        'inj_duration',
        'type',
        'start_time',
        'end_time',
        'date',
        'note',
        'monitor_method'
    ];
}
