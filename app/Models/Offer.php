<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable = [
        'product_id', 'value',
    ];
    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
