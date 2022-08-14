<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\WithfileUploads;

class AddProductComponent extends Component
{
    use WithfileUploads;

    public $name;
    public $price;
    public $image;
    public $category_id;

    public function addProduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->price = $this->price;
        $imageName = Carbon::now()->timestamp. '-' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('success_message','Product has been created successfuly!');
        return redirect()->route('admin.product');

    }

    public function render()
    {
        $categories = Category::All();
        return view('livewire.admin.add-product-component',['categories'=>$categories])->layout('layouts.dashboard');
    }
}
