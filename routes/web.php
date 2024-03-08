<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/


Route::get('/', function(){return view('home');});
Route::get('/about', function(){return view('about');});

Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'store']);
Route::get('/product/create', [ProductsController::class, 'create']);

Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart/{product}', [CartController::class, 'show']);

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers', [CustomerController::class, 'search']);
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get('/customers/{customer}', [CustomerController::class, 'show']);
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::patch('/customers/{customer}', [CustomerController::class, 'update']);
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);