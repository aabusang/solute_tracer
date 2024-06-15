<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InjectionLocation extends Model
{
    use HasFactory;


    protected $table = 'injection_location';
    public $timestamps = false;

    protected $fillable = [
        'latitude',
        'longitude',
        'name',
        'injection_order',
        'stream_hydrology_id', // Foreign key
        'stream_characteristic_id', // Foreign key
        'stream_geomorphology_id', // Foreign key
        'injection_tracer_id', // Foreign key
        'watershed_characteristic_id', // Foreign key
    ];

    public function hydro()
    {
        return $this->belongsTo(StreamHydrology::class, 'stream_hydrology_id');
    }

    public function characteristic()
    {
        return $this->belongsTo(StreamCharacteristics::class, 'stream_characteristic_id');
    }

    public function geomorphology()
    {
        return $this->belongsTo(StreamGeomorphology::class, 'stream_geomorphology_id');
    }

    public function tracer()
    {
        return $this->belongsTo(InjectionTracer::class, 'injection_tracer_id');
    }

    public function wsCharacteristic()
    {
        return $this->belongsTo(WatershedCharacteristic::class, 'watershed_characteristic_id');
    }
}
