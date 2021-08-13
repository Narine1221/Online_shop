<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){

        $products = Product::get();

       return view("pages.products.index", compact("products"));

    }
    
    public function create () {
        
        return view("pages.products.create");
        
    }
   
    public function store(ProductsRequest $request){

        $name = $request->name;
        $count = $request->count;
        $price = $request->price;

        
        $product = new Product();
        $product->name = $name;
        $product->count = $count;
        $product->price = $price;
        
        $product->save();

        return redirect("/products");
    }
    public function edit ($id) {

        $product = Product::find($id);


        $product->save();

        return view("pages.products.edit", compact(["product"]));


    } 
    public function update (ProductsRequest $request, $id) {
        
        $product = Product::find($id);

        $name = $request->name;
        $price = $request->price;
        $count = $request->count;

        $product->name = $name;
        $product->price = $price;
        $product->count = $count;

        $product->save();

        return redirect("/products");

    }    
    public function show($id) {

        $products = Product::where("id", "=", "$id")->get();
        
        return view("pages.products.show", compact("products"));
    }

    public function buy($id) {
        $products = Product::get();
        
        return view("pages.carts.index");
    }
    
    public function delete($id) {

        Product::destroy($id);

        return redirect("/products");
        
    }
}
