@extends('adminlte::page')

@section('title', 'Administracion de Reservacion')

@section('content_header')
    <h1>Administrador</h1>

@stop

@section('content')
    <h2 class="text-center text-2xl">Reservaciones</h2>
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>

    <div class="flex flex-col text-center">
        <div class="overflow-x-auto sm:-mx-8 lg:-mx-2">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">

                    <table class="">
                        <thead>
                            <tr class="bg-blue-500 text-white">
                                <!--<th scope="col" class="text-sm font-medium border border-gray-300">ID</th>-->
                                <th scope="col" class="text-sm font-medium border border-gray-300">Nombre</th>
                                <th scope="col" class="text-sm font-medium border border-gray-300">Telefono</th>
                                <th scope="col" class="text-sm font-medium border border-gray-300r">Correo</th>
                                <th scope="col" class="text-sm font-medium border border-gray-300">Lugar a Reservar</th>
                                <th scope="col" class="text-sm font-medium border border-gray-300">No. de Personas</th>
                                <th scope="col" class="text-sm font-medium border border-gray-300">Hora Inicio Reservacion
                                </th>
                                <th scope="col" class="text-sm font-medium border border-gray-300">Hora Fin Reservacion</th>
                                <th scope="col" class="text-sm font-medium border border-gray-300">Fecha de Reservacion</th>
                                <th scope="col" class="text-sm font-medium border border-gray-300">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Reservacion as $row)
                                <tr class="lg:hover:bg-gray-400 border-b">
                                    <!--<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-b">
                                            {{ $row->id }}</td>-->
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border border-b">
                                        {{ $row->Nombre }}</td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border border-b">
                                        {{ $row->Telefono }}</td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border border-b">
                                        {{ $row->Correo }}</td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border border-b">
                                        {{ $row->LugarReservar }}</td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border border-b">
                                        {{ $row->NoPersonas }}</td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border border-b">
                                        {{ $row->HoraInicioReserv }}</td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border border-b">
                                        {{ $row->HoraFinReserv }}</td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border border-b">
                                        {{ $row->FechaReservacion }}</td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border border-b">
                                        <form action="{{ route('Reservacion.destroy', $row->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="bg-blue-500 hover:bg-red-500 text-white px-2 py-2 rounded-sm">
                                                <i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hola!');
    </script>
@stop
