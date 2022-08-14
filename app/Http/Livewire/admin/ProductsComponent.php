<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductsComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product');
        session()->flash('success_message','Product has been deleted successfuly!');
    }

    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.products-component',['products'=>$products])->layout('layouts.dashboard');
    }
}
