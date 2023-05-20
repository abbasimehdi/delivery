<?php

namespace App\Models;

use Database\Factories\RiderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rider extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'lastname', 'personnel_code', 'status'];

    /**
     * @return RiderFactory
     */
    protected static function newFactory(): RiderFactory
    {
        return RiderFactory::new();
    }

    /**
     * @return HasOne
     */
    public function motor(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Motor::class);
    }

    /**
     * @return HasOne
     */
    public function consignment(): HasOne
    {
        return $this->hasOne(Consignment::class);
    }
}
