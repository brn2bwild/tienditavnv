<?php

namespace App\Http\Livewire;

use App\Models\Area;
use Livewire\Component;

class AdminAreas extends Component
{
  public $id_area, $nombre, $capacidad, $descripcion;
  public $modal;
  public $busqueda;

  protected $rules = [
    'nombre' => 'sometimes|required|unique:areas',
    'capacidad' => 'required|numeric',
    'descripcion' => 'nullable|max:200'
  ];

  protected $listeners = ['eliminar'];

  public function render()
  { 
    $areas = ($this->busqueda == '') ? Area::paginate(5) : Area::where('nombre', 'like', '%'.$this->busqueda.'%')->paginate(5);
    return view('livewire.admin-areas', compact('areas'));
  }

  public function guardar() {
    $this->validate();
    
    Area::updateOrCreate([
      'id' => $this->id_area, 
    ],[
      'nombre' => $this->nombre,
      'capacidad' => $this->capacidad,
      'descripcion' => $this->descripcion,
    ]);

    $this->cerrarModal();
    $this->limpiarDatos();

    $this->dispatchBrowserEvent('swal:modal', [
      'type' => 'success',
      'title' => 'Área guardada exitosamente.',
      'text' => '',
      'icon' => 'success',
    ]);
  }

  public function crear() {
    $this->limpiarDatos();
    $this->mostrarModal();
  }

  public function editar($id) {
    $localizacion = Area::findOrFail($id);
    $this->id_area = $id;
    $this->nombre = $localizacion->nombre;
    $this->capacidad = $localizacion->capacidad;
    $this->descripcion = $localizacion->descripcion;

    $this->mostrarModal();
  }

  public function confirmarEliminar($id) {
    $this->dispatchBrowserEvent('swal:confirmar', [
      'type' => 'warning',
      'title' => '¿Estás seguro de borrar el área?',
      'text' => '',
      'icon' => 'warning',
      'id' => $id,
    ]);
  }

  public function eliminar($id) {
    Area::destroy($id);
  }

  public function limpiarDatos() {
    $this->nombre = '';
    $this->capacidad = '';
    $this->descripcion = '';
    $this->busqueda = '';
  }

  public function mostrarModal() {
    $this->modal = true;
  }

  public function cerrarModal() {
    $this->modal = false;
  }
}
