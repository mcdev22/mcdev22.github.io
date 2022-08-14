<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\Supplier;

class AddsupplierComponent extends Component
{
    public $name;
    public $adress;
    public $mobile;

    public function storeSupllier()
    {
        $supplier = new Supplier();
        $supplier->nom = $this->name;
        $supplier->adress = $this->adress;
        $supplier->telephone = $this->mobile;
        $supplier->save();   
        session()->flash('success_message','Fournisseur est bien enregistré'); 
        return redirect()->route('admin.addsupplier');
     
    }

    public function render()
    {
        return view('livewire.admin.addsupplier-component')->layout('layouts.dashboard');
    }
}
