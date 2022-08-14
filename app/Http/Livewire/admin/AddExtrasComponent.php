<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\Extra;
use App\Models\SupplCategory;


class AddExtrasComponent extends Component
{
    public $name;
    public $price;
    public $cat_suppl_id;

    public function addExtra()
    {
        $extra = new Extra();
        $extra->name = $this->name;
        $extra->price = $this->price;
        $extra->cat_suppl_id = $this->cat_suppl_id;
        $extra->save();
        session()->flash('success_message','Supplement has been created successfuly!');
        return redirect()->route('admin.product');

    }

    public function render()
    {
        $suppcategories = SupplCategory::all();
        return view('livewire.admin.add-extras-component',['suppcategories'=>$suppcategories])->layout('layouts.dashboard');
    }
}
