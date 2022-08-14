<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Extra;
use App\Models\SupplCategory;
use Cart;

class SupplcategoryComponent extends Component
{
    public $catg_slug;

    public function mount($catg_slug)
    {
        $this->catg_slug = $catg_slug;
    }

    public function store_extra($extra_id,$extra_price,$extra_name)
    {
        $extras = Extra::all();
        Cart::add([
            'id' => $extra_id,
            'name' => $extra_name,
            'quantity' => 1,
            'price' => $extra_price,
            'associatedModel' => $extras
        ]);      
        return redirect()->route('cart');
    }


    public function render()
    {
        $supplcategory = SupplCategory::where('slug',$this->catg_slug)->first();
        $supplcategory_id = $supplcategory->id; 
        $extras = Extra::where('cat_suppl_id', $supplcategory_id)->get();
        return view('livewire.user.supplcategory-component',['extras'=>$extras])->layout('layouts.master');
    }
}
