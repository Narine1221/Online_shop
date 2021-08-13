<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CartstsRequest;


use App\Models\Carts;
use App\Models\Product;


class CartsController extends Controller
{
    public function index() {
        $carts = Carts::get();
        
        return view("pages.carts.index", compact("carts"));
    }
    
    public function create(){
        
        $carts = Cart::where("user_id", Auth::id()); 
        
    }
    
    public function plus($id) {
        $carts = Carts::find($id);
        $product = Product::find($carts->product_id);

        if($product->count > $carts->count){
            $carts->count++;
            $carts->save();
        }

        return redirect()->back();
    }

    public function minus($id) {
        $carts = Carts::find($id);

        $carts->count--;
        $carts->save();

        return redirect()->back();

        if($carts->count == 0){

            $carts->id->destroy($id);
        }
    }

    public function delete($id) {

        Carts::destroy($id);

        return redirect("/carts");
        
    }
}
