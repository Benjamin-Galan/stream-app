<?php

namespace App\Livewire;

use App\Models\Pelicula;
use Livewire\Component;

class MostrarCardPelicula extends Component
{
    public $peliculas;

    public function mount()
    {
        $this->peliculas = Pelicula::all();
    }

    public function render()
    {
        return view('livewire.mostrar-card-pelicula');
    }
}
