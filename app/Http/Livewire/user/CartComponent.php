<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{

    public function increaseQuantity($id)
    {
        Cart::update($id,[
            'quantity' => + 1
        ]);
        return redirect()->back();
    }

    public function descreaseQuantity($id)
    {
        Cart::update($id,[
            'quantity' => - 1
        ]);
        return redirect()->back();
    } 

    public function destroy($id)
    {
        Cart::remove($id);      
    }

    public function destroyAll()
    {
        Cart::destroy();
    }

    public function render()
    {
        $cartItems = Cart::getContent();
        return view('livewire.user.cart-component',['cartitems'=>$cartItems])->layout('layouts.master');
    }
}
