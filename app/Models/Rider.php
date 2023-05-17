<?php

namespace App\Models;

use Database\Factories\RiderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'lastname', 'personnel_code', 'status'];

    protected static function newFactory(): RiderFactory
    {
        return RiderFactory::new();
    }

    public function motor(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Motor::class);
    }
}
