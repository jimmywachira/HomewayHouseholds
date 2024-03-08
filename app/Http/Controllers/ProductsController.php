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

    public function create(){
        return view('products.create');
    }

    public function store(){
        $product = Product::create($this->validatedData());
        return redirect('/products');
    }

    public function show(Product $product){
        #$product = Product::findOrFail($ProductId); #use route model bidding instead
        return view('products.show', compact('product'));
    }

    public function showCart(Product $product){
        #$products = Product::findOrFail($product); #use route model bidding instead
        return view('products.cart', compact('product'));
    }

    public function edit(Product $Product){
        return view('product.edit', compact('product'));
    }

    public function update(Product $product){
        $product->update($this->validatedData());
        return redirect('/Products');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/Products');
    }

    protected function validatedData(){
        return request()->validate([
            'name' => 'required',
            'price' => 'required',
            'details'=> 'required'
        ]); 
    }

    public function search(Product $product){
        $Products = Product::where('name', $product)->get();
        return view('product.index', compact('products'));
    }
}
