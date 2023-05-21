<?php

namespace App\Models;

use Database\Factories\CityFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class City extends Model implements Authenticatable
{
    use AuthenticableTrait, HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'state', 'status', 'lat', 'long'];

    /**
     * @return CityFactory
     */
    protected static function newFactory(): CityFactory
    {
        return CityFactory::new();
    }
}
