<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {

        $productCount=count($request->id);
        // return $productCount;
        $subtotal=array_sum($request->pricequantity);
        $vat=$subtotal * 0.14;
        $product_weight=$request->Productwight;
        // $productCounrty=Product::whereIn('id',[3,5])->get();
        $productCounrty=Product::whereIn('id',$request->id)->get();
        // return $productCounr ty;
        // $country =Country::whereIn('product_id',json_decode($request->id, true))->get();
        // foreach($productCounrty as $row){
        //     dd($row);

        // }
        $weighttot=0;
        $shoesdiscount=0;
        $jacketdiscount=0;

        foreach($productCounrty as $row){
            $weighttot+=$row->weight;
            if($row->name == 'shoes'){
                $discount=Offer::where('name','shoes')->first();
                 $shoesdiscount=$row->price * $discount->value;
                // return $shoesdiscount;
            }
            if($row->name == 'Jacket'){
                $discount=Offer::where('name','jacket')->first();
                 $jacketdiscount=$row->price * $discount->value;
                // return $jacketdiscount;
            }
        }
        $country =Country::where('product_id',5)->get();
        $shipping=[];
        foreach($country as $item) {
            $rate=$item->rate;
            $weight=$weighttot *1000;
            $shipping=($rate*$weight)/100;
        }
    return view('invoice',compact('subtotal','shipping','vat','shoesdiscount','jacketdiscount','productCount'));
    }
}
