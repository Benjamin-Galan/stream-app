<?php

namespace App\Livewire;

use App\Models\Serie;
use Livewire\Component;

class MostrarCardSeries extends Component
{
    public $series;

    public function mount()
    {
        $this->series = Serie::all();
    }


    public function render()
    {
        return view('livewire.mostrar-card-series');
    }
}
