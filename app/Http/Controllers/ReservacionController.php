<?php

namespace App\Http\Controllers;

use App\Models\Reservacion;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        if (auth()->check()) {
            $Reservacion = Reservacion::all();
            return view('Reservacion.index', compact('Reservacion'));
        }
        return redirect()->route('Reservacion.create');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Reservacion.BlogReservacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required',
            'LugarReservar' => 'required',
            'NoPersonas' => 'required',
            'HoraInicioReserv' => 'required',
            'HoraFinReserv' => 'required',
            'FechaReservacion' => 'required'    
        ]);

        Reservacion::create([
            'Nombre' => $request->get('Nombre'),
            'Telefono' => $request->get('Telefono'),
            'Correo' => $request->get('Correo'),
            'LugarReservar' => $request->get('LugarReservar'),
            'NoPersonas' => $request->get('NoPersonas'),
            'HoraInicioReserv' => $request->get('HoraInicioReserv'),
            'HoraFinReserv' => $request->get('HoraFinReserv'),
            'FechaReservacion' => $request->get('FechaReservacion')
        ]);

        return back()->with('mensaje','Su Reservacion ha sido Registrada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function show(Reservacion $reservacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservacion $reservacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservacion $reservacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Reservacion = Reservacion::find($id);

        $Reservacion->delete();

        return redirect()->route('Reservacion.index');
    }
}
