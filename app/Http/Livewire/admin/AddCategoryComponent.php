<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeCategory()
    {
     $category = new Category();
     $category->name = $this->name;
     $category->slug = $this->slug;
     $category->save();
     return redirect()->route('admin.category');
     session()->flash('success_message','Category has been created successfuly!');
    }

    public function render()
    {
        return view('livewire.admin.add-category-component')->layout('layouts.dashboard');
    }
}
