<?php

namespace App\Models;

use Database\Factories\MotorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Motor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['plate', 'status', 'rider_id'];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): MotorFactory
    {
        return MotorFactory::new();
    }

    public function rider(): BelongsTo
    {
        return $this->belongsTo(Rider::class);
    }
}
