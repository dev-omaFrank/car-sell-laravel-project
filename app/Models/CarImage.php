<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'car_id',
        'image_path',
        'position'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class); // Replace Car with your actual car model class
    }
}
