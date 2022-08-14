<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    
    use WithPagination;

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category');
        session()->flash('success_message','Category has been deleted successfuly!');
    }
    public function render()
    {
        $categories = Category::paginate(3);
        return view('livewire.admin.category-component',['categories'=>$categories])->layout('layouts.dashboard');
    }
}
