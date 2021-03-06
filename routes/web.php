<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\HistoriessController;
use App\Http\Controllers\ProfileController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix("/products")->name("products.")->group( function () {

    Route::get('', [ProductsController::class, "index"]);
    
    Route::get('/create', [ProductsController::class, "create"]);
    Route::post('/create', [ProductsController::class, "store"]);
    
    Route::get('/edit/{id}', [ProductsController::class, "edit"]); 
    Route::post('/edit/{id}', [ProductsController::class, "update"]);
    
    Route::get('/show/{id}', [ProductsController::class, "show"]);

    Route::get('/buy/{id}', [ProductsController::class, "buy"]);

    
    Route::post('/delete/{id}', [ProductsController::class, "delete"]);

});

    

 Route::get('/carts', [CartsController::class, "index"]);
 Route::post('/carts/create', [CartsController::class, "create"]);

 Route::post('/carts/{id}/plus', [CartsController::class, "plus"]);
 Route::post('/carts/{id}/minus', [CartsController::class, "minus"]);


 Route::post('/carts/delete/{id}', [CartsController::class, "delete"]);
 



 Route::get('/histories', [HistoriessController::class, "index"]);


 Route::get('/profile', [ProfileController::class, "index"]);
 Route::post('/profile', [ProfileController::class, "update"]);
