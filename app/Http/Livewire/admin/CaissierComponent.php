<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CaissierComponent extends Component
{
    public function deletecaissier($id)
    {
        $caissier = User::find($id);
        $caissier->delete();
        return redirect()->route('admin.caissier');
    }

    public function render()
    {
        $caissiers = User::all();
        return view('livewire.admin.caissier-component',['caissiers'=>$caissiers])->layout('layouts.dashboard');
    }
}
