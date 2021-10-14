<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = [
        'name', 'rate'
    ];
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
