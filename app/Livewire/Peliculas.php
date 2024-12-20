<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Pelicula;
use Livewire\Component;

class Peliculas extends Component
{
    public $titulo, $descripcion, $imagen_url, $categoria_id, $pelicula_id;
    public $isFormVisible = false;

    protected $rules = [
        'titulo' => 'required|string',
        'descripcion' => 'required|string',
        'imagen_url' => 'required|url',
        'categoria_id' => 'required|exists:categorias,id',
    ];

    public function render()
    {
        $categorias = Categoria::all();
        $peliculas = Pelicula::all();
        return view('livewire.peliculas', [
            'categorias' => $categorias,
            'peliculas' => $peliculas,
        ]);
    }

    public function toggleForm()
    {
        $this->isFormVisible = !$this->isFormVisible;

        if (!$this->isFormVisible) {
            $this->resetForm(); // Resetear el formulario cuando se cierra
        }
    }

    public function resetForm()
    {
        $this->reset(['titulo', 'descripcion', 'imagen_url', 'categoria_id', 'pelicula_id']);
    }

    public function savePelicula()
    {
        $this->validate();

        if ($this->pelicula_id) {
            // Actualizamos la película existente
            $pelicula = Pelicula::find($this->pelicula_id);
            $pelicula->update([
                'titulo' => $this->titulo,
                'descripcion' => $this->descripcion,
                'imagen_url' => $this->imagen_url,
                'categoria_id' => $this->categoria_id,
            ]);
        } else {
            // Creamos una nueva película
            Pelicula::create([
                'titulo' => $this->titulo,
                'descripcion' => $this->descripcion,
                'imagen_url' => $this->imagen_url,
                'categoria_id' => $this->categoria_id,
            ]);
        }

        // Restablecer el formulario y cerrar el modal/formulario
        $this->resetForm();
        $this->isFormVisible = false;
    }

    public function deletePelicula($id)
    {
        Pelicula::find($id)->delete();
    }

    public function editPelicula($id)
    {
        $pelicula = Pelicula::find($id);
        $this->pelicula_id = $pelicula->id; // Asignar el ID de la película que estamos editando
        $this->titulo = $pelicula->titulo;
        $this->descripcion = $pelicula->descripcion;
        $this->imagen_url = $pelicula->imagen_url;
        $this->categoria_id = $pelicula->categoria_id;
        $this->isFormVisible = true; // Mostrar el formulario para edición
    }
}
