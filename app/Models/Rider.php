<?php

namespace App\Models;

use Database\Factories\RiderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rider extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'personnel_code', 'status'];

    /**
     * @return RiderFactory
     */
    protected static function newFactory(): RiderFactory
    {
        return RiderFactory::new();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function motor(): BelongsTo
    {
        return $this->belongsTo(Motor::class, 'rider_id', 'id');
    }
}
