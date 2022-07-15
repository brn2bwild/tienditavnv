<div>
  {{-- <div class="row mb-2">
    <button wire:click="crear()" class="bg-blue-700 hover:bg-blue-600 text-white px-8 py-2 border border-blue-700 rounded">Nueva</button>
  </div> --}}
  {{-- <form class="mb-4">
    <div class="flex justify-between">
      <div class="w-1/4">
        <label for="nombre_localizacion" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nombre</label>
        <input id="nombre_localizacion" class="mb-2 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="text" wire:model="nombre"/>
      </div>
      <div>
        <label for="capacidad" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Capacidad</label>
        <input id="capacidad" class="mb-2 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-start pl-3 text-sm border-gray-300 rounded border" type="number" wire:model="capacidad"/>
      </div>
      <div class="w-1/2">
        <label for="descripcion" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Descripción</label>
        <input id="descripcion" class="mb-2 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="text" wire:model="descripcion"/>
      </div>
    </div>
    <div class="flex items-center justify-end w-full">
      <button wire:click.prevent="guardar()" class="hover:bg-blue-600 bg-blue-700 rounded text-white px-8 py-2 text-sm">Guardar</button>
    </div>
  </form> --}}
  @if($modal)
    @include('livewire.modal-localizaciones')
  @endif
  <div class="flex justify-between w-2/3 pb-4">
    <button wire:click="crear()" class="bg-blue-700 hover:bg-blue-600 text-white px-8 py-2 border border-blue-700 rounded">Nueva</button>
    <input class="px-2 text-sm border border-gray-300 rounded" wire:model="busqueda" type="text" placeholder="Buscar">
  </div>
  <div class="flex justify-center w-full">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="text-left">Nombre</th>
          <th scope="col" class="text-left">Descripción</th>
          <th scope="col" class="text-left">Capacidad</th>
          <th scope="col" class="text-left">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($localizaciones as $localizacion)
          <tr>
            <td class="text-left">{{ $localizacion->nombre }}</td>
            <td class="text-left">{{ $localizacion->descripcion }}</td>
            <td class="text-left">{{ $localizacion->capacidad }}</td>
            <td class="flex justify-around">
              <button wire:click.prevent="editar({{$localizacion->id}})" class="bg-blue-700 hover:bg-blue-600 text-white px-3 py-2 rounded-sm"><i class="fas fa-pen"></i></button>
              <button wire:click.prevent="eliminar({{$localizacion->id}})" class="bg-red-700 hover:bg-red-600 text-white px-3 py-2 rounded-sm"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{$localizaciones->links()}}
</div>

