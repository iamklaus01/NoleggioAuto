<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\CodeCleaner\ValidConstructorPass;

class Car extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'brand',
        'model',
        'price',
        'mode',
        'description',
        'image_path',
        'available',
    ];

    public function registerOfRentals(){
        return $this->hasMany(RegisterOfRental::class);
    }
}
