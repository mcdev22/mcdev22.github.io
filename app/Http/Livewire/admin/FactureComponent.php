<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\Facture;
use Livewire\WithPagination;

class FactureComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $factures = Facture::paginate(12);
        // dd($factures);
        return view('livewire.admin.facture-component',['factures'=>$factures])->layout('layouts.dashboard');
    }
}
