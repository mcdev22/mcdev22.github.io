<?php

namespace App\Http\Livewire\user;

use Livewire\Component;
use App\Models\Product;
use Cart;

class ProductComponent extends Component
{

    public function store($product_id,$product_name,$product_price)
    {
        $product = Product::all();
        Cart::add([
            'id' => $product_id,
            'name' => $product_name,
            'quantity' => 1,
            'price' => $product_price,
            'associatedModel' => $product
        ]);
        
        return redirect()->route('cart');
    }


    public function render()
    {
        // $products = Product::orderBy('created_at','DESC');
        $products = Product::all();
        return view('livewire.user.product-component',['products'=>$products])->layout('layouts.master');
    }
}
