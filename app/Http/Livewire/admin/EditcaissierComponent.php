<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class EditcaissierComponent extends Component
{
    public $oldpass;
    public $newpass;
    public $name;
    public $user_id;

     public function mount($user_id)
     {
        $caissier = User::where('id', $user_id)->first();
        $this->name = $caissier->name;
        $this->user_id = $caissier->id;
     }

     public function updateinfo()
     {
        $user = User::find($this->user_id);
        $user->name = $this->name;

        if(Hash::check($this->oldpass,$user->password))
        {
            $user->password = bcrypt($this->newpass);                  
            $user->save();
            session()->flash('success_message','information caissier sont modifié');
            return redirect()->route('admin.caissier');
        }
        else
        {
            return session()->flash('message','old password does not matched!!');
        }
     }
    public function render()
    {
        return view('livewire.admin.editcaissier-component')->layout('layouts.dashboard');
    }
}
