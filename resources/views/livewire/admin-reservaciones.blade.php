<div>
  @if($modal)
    @include('livewire.modal-reservaciones')
  @endif
  <div class="flex justify-between w-full pb-4">
    <button class="bg-blue-600 hover:bg-blue-500 text-white py-2 px-4 border border-blue-700 rounded" wire:click="crear()">Nueva</button>
    <input class="px-2 text-sm border border-gray-300 rounded" wire:model="busqueda" type="text" placeholder="Buscar">
  </div>
  <div class="flex justify-center w-full">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="text-left">Nombre</th>
          <th scope="col" class="text-left">Correo</th>
          <th scope="col" class="text-left">Telefono</th>
          <th scope="col" class="text-left">Fecha de Reservacion</th>
          <th scope="col" class="text-left">Hora Reservacion</th>
          <th scope="col" class="text-left">Lugar a Reservar</th>
          <th scope="col" class="text-left">No. de Personas</th>
          <th scope="col" class="text-left">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($reservaciones as $reservacion)
          <tr>
            <td class="text-left">{{ $reservacion->nombre_reservacion }}</td>
            <td class="text-left">{{ $reservacion->numero_telefonico }}</td>
            <td class="text-left">{{ $reservacion->email }}</td>
            <td class="text-left">{{ $reservacion->fecha_reservacion }}</td>
            <td class="text-left">{{ $reservacion->hora_reservacion }}</td>
            <td class="text-left">{{ $reservacion->area_reservacion }}</td>
            <td class="text-left">{{ $reservacion->n_personas }}</td>
            <td>
              <div class="flex justify-between gap-2">
                <button class="bg-blue-600 hover:bg-blue-500 text-white px-3 py-2 rounded-sm" wire:click.prevent="editar({{$reservacion->id}})"><i class="fas fa-pen"></i></button>
                <button class="bg-red-600 hover:bg-red-500 text-white px-3 py-2 rounded-sm" wire:click="eliminar({{$reservacion->id}})"><i class="fas fa-trash"></i></button>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{$reservaciones->links()}}
</div>
