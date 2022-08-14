<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\SupplCategory;
use Illuminate\Support\Str;

class AddCategoryExtraComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storSupplCategory()
    {
     $categorys = new SupplCategory();
     $categorys->name = $this->name;
     $categorys->slug = $this->slug;
     $categorys->save();
     return redirect()->route('admin.category');
     session()->flash('success_message','Category Supplement has been created successfuly!');
    }

    public function render()
    {
        return view('livewire.admin.add-category-extra-component')->layout('layouts.dashboard');
    }
}
