<?php

namespace App\Models;

use Database\Factories\ConsignmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consignment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'code', 'delivery_start', 'delivery_end', 'status', 'rider_id'];

    protected static function newFactory(): ConsignmentFactory
    {
        return ConsignmentFactory::new();
    }

    public function rider(): BelongsTo
    {
        return $this->belongsTo(Rider::class, 'rider_id');
    }
}
