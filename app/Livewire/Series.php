<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Serie;
use Livewire\Component;

class Series extends Component
{
    public $titulo, $descripcion, $imagen_url, $categoria_id, $serie_id;
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
        $series = Serie::all();
        return view('livewire.series', [
            'categorias' => $categorias,
            'series' => $series,
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
        $this->reset(['titulo', 'descripcion', 'imagen_url', 'categoria_id', 'serie_id']);
    }

    public function saveSerie()
    {
        $this->validate();

        if ($this->serie_id) {
            // Actualizamos la película existente
            $serie = Serie::find($this->serie_id);
            $serie->update([
                'titulo' => $this->titulo,
                'descripcion' => $this->descripcion,
                'imagen_url' => $this->imagen_url,
                'categoria_id' => $this->categoria_id,
            ]);
        } else {
            // Creamos una nueva película
            Serie::create([
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

    public function deleteSerie($id)
    {
        Serie::find($id)->delete();
    }

    public function editSerie($id)
    {
        $serie = Serie::find($id);
        $this->serie_id = $serie->id; // Asignar el ID de la película que estamos editando
        $this->titulo = $serie->titulo;
        $this->descripcion = $serie->descripcion;
        $this->imagen_url = $serie->imagen_url;
        $this->categoria_id = $serie->categoria_id;
        $this->isFormVisible = true; // Mostrar el formulario para edición
    }
}
