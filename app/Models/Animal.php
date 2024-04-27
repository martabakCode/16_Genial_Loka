<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'name',
        'description',
        'food',
        'reproduction',
        'feeding_time',
        'date_of_birth',
        'weight',
        'is_feedable',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function animal_images()
    {
        return $this->hasMany(AnimalImage::class);
    }
}
