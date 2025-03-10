<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentMode;;

class Model extends EloquentMode
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "maker_id", 'name'
    ];
}
