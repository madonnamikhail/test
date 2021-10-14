<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {
        

        $subtotal=array_sum($request->pricequantity);
        $vat=$subtotal * 0.14;
        $product_weight=$request->Productwight;
        $productCounrty=Product::whereIn('id',[3,5])->get();
        return $productCounrty;
        // $country =Country::whereIn('product_id',json_decode($request->id, true))->get();
        foreach($productCounrty as $row){
            dd($row);

        }
        $country =Country::where('product_id',5)->get();
        $shipping=[];
        foreach($country as $item) {
            $rate=$item->rate;
            $weight=$productCounrty->weight *1000;
            $shipping=($rate*$weight)/100;
            // return $request->subtotal;
        }



    return view('invoice',compact('subtotal','shipping','vat'));
    }
}
