<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;
    
    public $timestamps = false;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'users_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at',
    ];

    public function features(): HasOne{
        return $this->hasOne(CarFeatures::class);
    }

    public function primaryImage(): HasOne{
        return $this->hasOne(CarImage::class)
        ->oldestOfMany('position');
    }

    public function images(): HasMany{
        return $this->hasMany(CarImage::class); 
    }

    public function carType(): BelongsTo{
        return $this->belongsTo(CarType::class);
    }
}
