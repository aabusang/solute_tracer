<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SamplingLocation extends Model
{
    use HasFactory;

    protected $table = 'sampling_locations';
    public $timestamps = false;

    protected $fillable = [
        'sampling_latitude',
        'sampling_longitude',
        'sampling_order',
        'stream_hydrology_id', // Foreign key
        'stream_characteristic_id', // Foreign key
        'stream_geomorphology_id', // Foreign key
        'sheet_name'
    ];

    public function hydro()
    {
        return $this->belongsTo(StreamHydrology::class, 'stream_hydrology_id');
    }

    public function characteristic()
    {
        return $this->belongsTo(StreamCharacteristic::class, 'stream_characteristic_id');
    }

    public function geomorphology()
    {
        return $this->belongsTo(StreamGeomorphology::class, 'stream_geomorphology_id');
    }
}

