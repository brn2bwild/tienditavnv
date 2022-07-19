<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Reservacion;
use Livewire\Component;

class Reservaciones extends Component
{
  public $areas;
  public $url_img = 'img/rio.jpg';
  public $id_reservacion, $nombre_reservacion, $email, $numero_telefonico, $fecha_reservacion, $hora_reservacion, $area_reservacion, $n_personas;

  protected $rules = [
    'nombre_reservacion' => 'required|max:150',
    'email' => 'required|email',
    'numero_telefonico' => 'required|digits:10',
    'fecha_reservacion' => 'required|date',
    'hora_reservacion' => 'required',
    'area_reservacion' => 'required',
    'n_personas' => 'required|numeric',
  ];

  protected $listeners = ['guardar', 'cambiarImg'];

  public function render() {
    $this->areas = Area::all();
    return view('livewire.reservaciones');
  }

  public function cambiarImg($nombre) {
    $area = Area::where('nombre', $nombre)->first();
    ($area != null) ? $this->url_img = 'storage/'.$area->url_img : $this->url_img = 'img/rio.jpg';
  }

  public function confirmarGuardar() {
    $this->validate();
    $this->dispatchBrowserEvent('swal:confirmar', [
      'title' => '¿Deseas confirmar la reservación?',
      'text' => '',
      'icon' => 'success',
      'type' => 'question',
    ]);
  }

  public function guardar() {
    $data_validada = $this->validate();

    Reservacion::create($data_validada);

    $this->limpiarDatos();
  }

  public function limpiarDatos() {
    $this->nombre_reservacion = '';
    $this->email = '';
    $this->numero_telefonico = '';
    $this->fecha_reservacion = '';
    $this->hora_reservacion = '';
    $this->area_reservacion = '';
    $this->n_personas = '';
  }
}
