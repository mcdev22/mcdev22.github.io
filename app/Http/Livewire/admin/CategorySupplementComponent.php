<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\SupplCategory;
use Livewire\WithPagination;

class CategorySupplementComponent extends Component
{
    use WithPagination;

    public function deleteCatSupplement($id)
    {
        $categorys = SupplCategory::find($id);
        $categorys->delete();
        return redirect()->route('admin.category');
        session()->flash('success_message','Category has been deleted successfuly!');
    }

    public function render()
    {
        $supplcategorys = SupplCategory::paginate(5);
        return view('livewire.admin.category-supplement-component',['supplcategorys'=>$supplcategorys])->layout('layouts.dashboard');
    }
}
