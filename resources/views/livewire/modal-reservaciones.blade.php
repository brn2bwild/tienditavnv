<div class="fixed inset-0 w-full h-full z-10 bg-black bg-opacity-50 duration-300 overflow-y-auto ease-out">
  <div class="flex justify-center items-center min-h-screen text-center">
    <div class="sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
      <div class="bg-white shadow-lg rounded-md text-gray-900 z-20">
        <header class="flex items-center justify-end pt-4 px-4">
          {{-- <h2 class="font-semibold">Crear/editar localización</h2> --}}
          <button class="focus:outline-none p-2" wire:click.prevent="cerrarModal()">
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 18 18">
                <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
            </svg>
          </button>
        </header>
        <main class="py-2 px-4 text-center">
          <form>
            <div class="mb-2">
              <label for="nombre_reservacion" class="text-gray-800 text-sm font-bold block text-left">Nombre de la reservación</label>
              <input id="nombre_reservacion" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="text" wire:model="nombre_reservacion" />
              @error('nombre_reservacion')
                <em class="text-left text-red-600">{{ $message }}</em>
              @enderror
            </div>
            <div class="mb-2">
              <label for="email" class="text-gray-800 text-sm font-bold block text-left">Correo electrónico</label>
              <input id="email" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="email" wire:model="email" />
              @error('email')
                <em class="text-left text-red-600">{{ $message }}</em>
              @enderror
            </div>
            <div class="mb-2">
              <label for="numero_telefonico" class="text-gray-800 text-sm font-bold block text-left">Número telefónico</label>
              <input id="numero_telefonico" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="tel" wire:model="numero_telefonico" />
              @error('numero_telefonico')
                <em class="text-left text-red-600">{{ $message }}</em>
              @enderror
            </div>
						<div class="mb-4 flex justify-between">
							<div class="w-1/4">
								<label for="fecha_reservacion" class="text-gray-800 text-sm font-bold text-left ">Fecha de la reservación</label>
								<input id="fecha_reservacion" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="date" wire:model="fecha_reservacion" />
								@error('fecha_reservacion')
									<em class="text-left text-red-600">{{ $message }}</em>
								@enderror
							</div>
							<div class="w-1/4">
								<label for="hora_reservacion" class="text-gray-800 text-sm font-bold text-left ">Hora de la reservación</label>
								<input id="hora_reservacion" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="time" wire:model="hora_reservacion" />
								@error('hora_reservacion')
									<em class="text-left text-red-600">{{ $message }}</em>
								@enderror
							</div>
						</div>
						<div class="mb-4 flex justify-between">
							<div>
								<label for="area_reservacion" class="text-gray-800 text-sm font-bold block text-left ">Área de la reservación</label>
								<select id="area_reservacion" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" wire:model="area_reservacion">
									<option value="">Seleccione una opción</option>
									@foreach ($areas as $area)
										<option value="{{ $area->nombre }}">{{ $area->nombre }}</option>
									@endforeach
								</select>
								@error('area_reservacion')
									<em class="text-left text-red-600">{{ $message }}</em>
								@enderror
							</div>
							<div>
								<label for="n_personas" class="text-gray-800 text-sm font-bold block text-left ">Personas por reservación</label>
								<input id="n_personas" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="text" wire:model="n_personas"/>
								@error('n_personas')
										<em class="text-left text-red-600">{{ $message }}</em>
								@enderror
							</div>
						</div>
            <div class="mb-4">
              <label class="text-gray-800 text-sm font-bold block text-left" for="comentario">Comentario</label>
              <textarea rows="10" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" wire:model="comentario" id="comentario" type="text"></textarea>
              @error('comentario')
                <em class="text-left text-red-600">{{ $message }}</em>
              @enderror
            </div>
            <div class="flex items-center justify-between w-full">
              <button wire:click.prevent="guardar()" class="hover:bg-blue-600 bg-blue-700 rounded text-white px-8 py-2 text-sm">Guardar</button>
              <button class="hover:bg-red-600 bg-red-700 border rounded text-white px-8 py-2 text-sm" wire:click="cerrarModal()">Cancelar</button>
            </div>
            <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" wire:click="cerrarModal()" aria-label="close modal" role="button">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </svg>
            </button>
          </form>
        </main>
      </div>
    </div>
  </div>
</div>
