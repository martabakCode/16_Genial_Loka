<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'food',
        'reproduction',
        'feeding_time',
        'date_of_birth',
        'weight',
        'is_feedable',
    ]
}
