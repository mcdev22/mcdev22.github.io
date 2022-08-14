<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Category;
use App\models\Product;
use Cart;

class CategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

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
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $products = Product::where('category_id', $category_id)->get();
        return view('livewire.user.category-component',['products'=>$products])->layout('layouts.master');
    }
}
