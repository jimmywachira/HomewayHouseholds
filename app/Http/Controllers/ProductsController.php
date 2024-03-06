<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function cart(Product $productId){
        $products = Product::where('name',$productId)->get();
        return view('products.cart', compact('productId','products'));
    }

    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function storee(){
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

    public function store(){
        $product = Product::create($this->validatedData());
        return redirect('/products');
    }

    public function show(Product $Product){
        #$Product = Product::findOrFail($ProductId); #use route model bidding instead
        return view('product.show', compact('Product'));
    }

    public function edit(Product $Product){
        return view('product.edit', compact('Product'));
    }

    public function update(Product $Product){
        $Product->update($this->validatedData());
        return redirect('/Products');
    }

    public function destroy(Product $Product){
        $Product->delete();
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
        $Products = Product::where('name',$product)->get();
        return view('product.index', compact('Products'));
    }
}
