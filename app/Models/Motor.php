<?php

namespace App\Models;

use Database\Factories\MotorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
