<?php

namespace App\Models;

use Database\Factories\MotorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = ['plate','status', 'rider'];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): MotorFactory
    {
        return MotorFactory::new();
    }

    /**
     * @return HasOne
     */
    public function rider(): HasOne
    {
        return $this->hasOne(Rider::class);
    }
}
