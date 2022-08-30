<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Reservacion;
use Livewire\Component;

class Reservaciones extends Component
{
  public $areas;
  public $url_img = 'img/rio.jpg';
  public $id_reservacion, $nombre_reservacion, $email, $numero_telefonico, $fecha_reservacion, $hora_reservacion, $area_reservacion, $comentario, $n_personas;

  protected $rules = [
    'nombre_reservacion' => 'required|max:150',
    'email' => 'required|email',
    'numero_telefonico' => 'required|digits:10',
    'fecha_reservacion' => 'required|date',
    'hora_reservacion' => 'required',
    'area_reservacion' => 'required',
    'comentario' => 'nullable|max:255',
    'n_personas' => 'required|numeric',
  ];

  protected $messages = [
    'nombre_reservacion.required' => 'Debes introducir un nombre para tu reservación',
    'nombre_reservacion.max' => 'Sólo se puede introducir un máximo de 50 caracteres',
    'email.required' => 'Debes introducir un correo para notificarte',
    'email.email' => 'La dirección de correo debe ser válida',
    'numero_telefonico.required' => 'Debes introducir un número para aclaraciones',
    'numero_telefonico.digits' => 'El número debe ser un número de teléfono válido',
    'fecha_reservacion.required' => 'Debes seleccionar una fecha para tu reservación',
    'fecha_reservacion.date' => 'La fecha debe ser válida',
    'hora_reservacion.required' => 'Debes seleccionar una hora para tu reservación',
    'area_reservacion.required' => 'Debes seleccionar un área para tu reservación',
    'comentario.max' => 'Sólo se puede introducir un máximo de 255 caracteres',
    'n_personas.required' => 'Debes introducir el número de personas',
    'n_personas.numeric' => 'Debes introducir un número válido',
  ];

  protected $listeners = ['guardar', 'cambiarImg', 'asignarHora'];

  public function render() {
    $this->areas = Area::all();
    return view('livewire.reservaciones');
  }

  public function asignarHora($hora){
    $this->hora_reservacion = $hora;
  }

  public function confirmarGuardar() {
    $this->validate();
    $this->dispatchBrowserEvent('swal:confirmar', [
      'title' => '¿Deseas confirmar la reservación?',
      'text' => 'Pasados 15 minutos de la hora de reservacion, ésta sera eliminada',
      'icon' => 'info',
      'type' => 'info',
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
    $this->comentario = '';
    $this->n_personas = '';
  }
}
