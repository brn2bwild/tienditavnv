<div>
  @if($modal)
    @include('livewire.modal-areas')
  @endif
  <div class="flex justify-between w-full pb-4">
    <button wire:click="crear()" class="bg-blue-700 hover:bg-blue-600 text-white px-8 py-2 border border-blue-700 rounded">Nueva</button>
    <input class="px-2 text-sm border border-gray-300 rounded" wire:model="busqueda" type="text" placeholder="Buscar">
  </div>
  <div class="flex justify-center w-full">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="text-left">Nombre</th>
          <th scope="col" class="text-left">Capacidad</th>
          <th scope="col" class="text-left">Descripción</th>
          <th scope="col" class="text-left">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($areas as $area)
          <tr>
            <td class="text-left">{{ $area->nombre }}</td>
            <td class="text-left">{{ $area->capacidad }}</td>
            <td class="text-left">{{ $area->descripcion }}</td>
            <td class="flex justify-around">
              <button wire:click.prevent="editar({{$area->id}})" class="bg-blue-700 hover:bg-blue-600 text-white px-3 py-2 rounded-sm"><i class="fas fa-pen"></i></button>
              <button wire:click.prevent="eliminar({{$area->id}})" class="bg-red-700 hover:bg-red-600 text-white px-3 py-2 rounded-sm"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{$areas->links()}}
</div>