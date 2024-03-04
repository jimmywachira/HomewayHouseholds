<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function store(){
        $product = new Product();
        $product->name = request('name');
        $product->price = request('price');
        $product->details = request('details');
        $product->save();
        return redirect('/products');
    }

    public function create(){
        return view('products.create');
    }
}
