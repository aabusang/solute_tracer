<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadedData extends Model
{
    use HasFactory;

    protected $table = 'uploaded_data';
    public $timestamps = false;

    protected $fillable = [
        'units',
        'river_order',
        'tracer_type',
        'note',
        'file',
        'status'
    ];

    const STATUS_PENDING = 'PENDING';
    const STATUS_UNDER_REVIEW = 'UNDER_REVIEW';
    const STATUS_APPROVED = 'APPROVED';

    public static $statusOptions = [
        self::STATUS_PENDING,
        self::STATUS_UNDER_REVIEW,
        self::STATUS_APPROVED
    ];
}
