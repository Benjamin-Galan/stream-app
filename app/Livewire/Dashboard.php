<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $activeTab = 'dashboard';

    public function changeTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
