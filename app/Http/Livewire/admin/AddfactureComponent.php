<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use App\Models\Facture;
use App\Models\Supplier;

class AddfactureComponent extends Component
{ 
    public $num_facture;
    public $total;
    public $radiopaye;
    public $id_fourni;

    public function storeFacture()
    {
      $facture = new Facture();
      $facture->num_facture = $this->num_facture;
      $facture->total_tcc = $this->total;
      $facture->id_fourni = $this->id_fourni;
      $facture->status = $this->radiopaye == 'true' ? 1 : 0;
      $facture->save();
      session()->flash('sussess_message','Facture est bien enregistreé!!');
      return redirect()->route('admin.facture');
    }

    public function render()
    {    
      $fournisseur = Supplier::all();
      return view('livewire.admin.addfacture-component',['fournissuers'=>$fournisseur])->layout('layouts.dashboard');
    }
}
