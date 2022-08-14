<?php

namespace App\Http\Livewire\admin;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard-component')->layout('layouts.dashboard');
    }
}
