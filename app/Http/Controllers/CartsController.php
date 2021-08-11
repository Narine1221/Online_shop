<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carts;

class CartsController extends Controller
{
    public function index() {
        $carts = Carts::get();
        
        return view("pages.carts.index", compact("carts"));
    }
    public function create(){
        $carts = Cart::where("user_id", Auth::id()); 
    }

    public function delete($id) {

        Carts::destroy($id);

        return redirect("/carts");
        
    }
}
