<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


class AddcaissierComponent extends Component
{
    public $name;
    public $password;

    public function register()
    {     
      
        $validator = Validator::make($this->all(), [
            'password' => ['required', 'confirmed', Password::min(8)],
            'name' => ['required','min:6'],
        ]);

        $this->password = Hash::make($this->password); 
        User::create([
            'name' => $this->name,
            'password' =>$this->password,
        ]);
         
        session()->flash('success_message', 'compte caissier est créer avec ssuccé.');
        return redirect()->route('admin.caissier');
    }
    
    public function render()
    {
        return view('livewire.admin.addcaissier-component')->layout('layouts.dashboard');
    }
}
