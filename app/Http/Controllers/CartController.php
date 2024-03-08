<?php

namespace App\Http\Controllers;
use App\Models\Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $products = Cart::all();
        return view('cart.index', compact('products'));
    }

    public function create(){
        return view('cart.create');
    }

    public function store(){
        $Cart = Cart::create($this->validatedData());
        return redirect('/cart');
    }

    public function show(Cart $product){
        #$Cart = Cart::findOrFail($CartId); #use route model bidding instead
        return view('cart.show', compact('product'));
    }

    public function edit(Cart $product){
        return view('Cart.edit', compact('product'));
    }

    public function update(Cart $product){
        $product->update($this->validatedData());
        return redirect('/cart');
    }

    public function destroy(Cart $product){
        $product->delete();
        return redirect('/cart');
    }

    protected function validatedData(){
        return request()->validate([
            'name' => 'required',
            'price' => 'required',
            'details'=> 'required'
        ]); 
    }

    public function search(Cart $product){
        $products = Cart::where('name', $product)->get();
        return view('Cart.index', compact('product'));
    }
}
