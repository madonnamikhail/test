<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    use HasFactory;

    protected $fillable = [
        'name', 'price', 'description', 'image',
    ];
    public function country()
    {
        return $this->belongsTo(Country::class , 'product_id');
    }
    protected $casts = [
        'id' => 'array',
    ];

}
