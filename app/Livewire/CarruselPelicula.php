<?php

namespace App\Livewire;

use App\Models\Pelicula;
use Livewire\Component;

class CarruselPelicula extends Component
{
    public $peliculas;
    public $scrollIndex = 0;  // Índice de la posición de la fila (cuántas imágenes se han desplazado)

    public function mount()
    {
        // Obtener todas las películas
        $this->peliculas = Pelicula::all();
    }

    public function deslizarSiguiente()
    {
        // Aumentamos el índice de desplazamiento
        $this->scrollIndex++;
    }

    public function deslizarAnterior()
    {
        // Disminuimos el índice de desplazamiento
        $this->scrollIndex--;
    }

    public function render()
    {
        return view('livewire.carrusel-pelicula');
    }
}
