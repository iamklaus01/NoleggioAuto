<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterOfRental extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'locationDate',
        'returnDate',
        'card_id',
        'nHours',
        'car_id',
        'user_id',
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
