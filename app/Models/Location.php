<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'longitude',
        'latitude',
        'status',
        'operational_time',
    ];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
