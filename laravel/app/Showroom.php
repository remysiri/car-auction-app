<?php

namespace GTImports;

use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'miles', 'kilometres', 'model', 'chassis', 'manufacture', 'color', 'fueltype', 'transmission', 'exteriorfeature', 'interiorfeature', 'safetyfeature', 'audiofeature',
    ];
}
