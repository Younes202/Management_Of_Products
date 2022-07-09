<?php

use Illuminate\Support\Facades\Route;

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
route::resource("Client","App\http\Controllers\client\ClientController",["only"=>["index","show"]]);

route::resource("Products","App\http\Controllers\Products\ProductController",["only"=>["index","show"]]);

route::resource("Sellers","App\http\Controllers\Sellers\SellerController",["only"=>["index","show"]]);

route::resource("Users","App\http\Controllers\Users\UserController",["except"=>["create","edit"]]);

route::resource("Categories","App\http\Controllers\Categories\CategoriesController",["except"=>["create","index"]]);

route::resource("Transactions","App\http\Controllers\Transactions\TransactionController",["only"=>["index","show"]]);
