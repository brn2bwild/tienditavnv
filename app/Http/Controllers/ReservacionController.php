<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmacionMail;
use App\Models\Area;
use App\Models\Localizacion;
use App\Models\Reservacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservacionController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $Reservacion = Reservacion::all();
            return view('Reservacion.index', compact('Reservacion'));
        }
        return redirect()->route('Reservacion.create');
    }

    public function create() {
      $areas = Area::all();
      return view('reservaciones.crear', compact('areas'));
    }

    public function store(Request $request) {
      $this->validate($request, [
        'nombre_reservacion' => ['required', 'max:150'],
        'email' => ['required', 'email'],
        'numero_telefonico' => ['required', 'digits:10'],
        'fecha_reservacion' => ['required', 'date'],
        'hora_reservacion' => ['required'],
        'area_reservacion' => ['required'],
        'n_personas' => ['required'],  
      ]);

      Reservacion::create($request->all());

      $datos_mail = [
        'nombre' => $request->nombre_reservacion,
        'fecha' => $request->fecha_reservacion,
        'hora' => $request->hora_reservacion,
        'area' => $request->area_reservacion,
        'cantidad' => $request->n_personas,
      ];

      Mail::to($request->email)->send(new ConfirmacionMail($datos_mail));

      return back()->with('mensaje','Su reservación está lista.');
    }

    public function show(Reservacion $reservacion) {
        //
    }

    public function edit(Reservacion $reservacion) {
        //
    }

    public function update(Request $request, Reservacion $reservacion) {
        //
    }

    public function destroy($id) {
        $Reservacion = Reservacion::find($id);

        $Reservacion->delete();

        return redirect()->route('Reservacion.index');
    }
}
