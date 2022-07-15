<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Reservacion;
use Livewire\Component;

class AdminReservaciones extends Component
{
    // public $reservaciones;
    public $id_reservacion, $nombre_reservacion, $email, $numero_telefonico, $fecha_reservacion, $hora_reservacion, $area_reservacion, $n_personas;
    public $modal, $busqueda;

    protected $rules = [
      'nombre_reservacion' => 'required|max:150',
      'email' => 'required|email',
      'numero_telefonico' => 'required|digits:10',
      'fecha_reservacion' => 'required|date',
      'hora_reservacion' => 'required',
      'area_reservacion' => 'required',
      'n_personas' => 'required|numeric',
    ];

    public function render() {
      $reservaciones = ($this->busqueda == '') ? Reservacion::paginate(5) : Reservacion::where('nombre_reservacion', 'like', '%'.$this->busqueda.'%')->paginate(5);

      $areas = Area::all();

      return view('livewire.admin-reservaciones', compact('reservaciones', 'areas'));
    }

    public function guardar() {
      $this->validate();

      Reservacion::updateOrCreate([
        'id' => $this->id_reservacion,
      ],[
        'nombre_reservacion' => $this->nombre_reservacion,
        'email' => $this->email,
        'numero_telefonico' => $this->numero_telefonico,
        'fecha_reservacion' => $this->fecha_reservacion,
        'hora_reservacion' => $this->hora_reservacion,
        'area_reservacion' => $this->area_reservacion,
        'n_personas' => $this->n_personas,
      ]);

      $this->limpiarDatos();
      $this->cerrarModal();
    }

    public function crear() {
      $this->limpiarDatos();
      $this->mostrarModal();
    }

    public function mostrarModal() {
      $this->modal = true;
    }

    public function cerrarModal() {
      $this->modal = false;
    }

    public function editar($id) {
      $reservacion = Reservacion::findOrFail($id);
      $this->id_reservacion = $id;
      $this->nombre_reservacion = $reservacion->nombre_reservacion;
      $this->email = $reservacion->email;
      $this->numero_telefonico = $reservacion->numero_telefonico;
      $this->fecha_reservacion = $reservacion->fecha_reservacion;
      $this->hora_reservacion = $reservacion->hora_reservacion;
      $this->area_reservacion = $reservacion->area_reservacion;
      $this->n_personas = $reservacion->n_personas;
  
      $this->mostrarModal();
    }

    public function eliminar($id) {
      Reservacion::destroy($id);
    }

    public function limpiarDatos() {
      $this->nombre_reservacion = '';
      $this->email = '';
      $this->numero_telefonico = '';
      $this->fecha_reservacion = '';
      $this->hora_reservacion = '';
      $this->localizacion = '';
      $this->n_personas = '';
    }   
}
