<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\Extra;
use Livewire\WithPagination;

class ExtrasComponent extends Component
{
   use WithPagination;

    public function deleteExtra($id)
    {
        $category = Extra::find($id);
        $category->delete();
        return redirect()->route('admin.category');
        session()->flash('success_message','Supplement has been deleted successfuly!');
    }
    public function render()
    {
        $extras = Extra::paginate(5);
        return view('livewire.admin.extras-component',['extras'=>$extras])->layout('layouts.dashboard');
    }
}
