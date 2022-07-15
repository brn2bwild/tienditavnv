<div class="fixed inset-0 w-full h-full z-10 bg-black bg-opacity-50 duration-300 overflow-y-auto ease-out">
  <div class="flex justify-center items-center min-h-screen text-center">
    <div class="sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
      <div class="bg-white shadow-lg rounded-md text-gray-900 z-20">
        <header class="flex items-center justify-end pt-4 px-4">
          {{-- <h2 class="font-semibold">Crear/editar localización</h2> --}}
          <button class="focus:outline-none p-2" wire:click.prevent="cerrarModal()">
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path
                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
              ></path>
            </svg>
          </button>
        </header>
        <main class="py-2 px-4 text-center">
          <form>
            <div class="mb-2">
              <label for="nombre_area" class="text-gray-800 text-sm font-bold block text-left">Nombre</label>
              <input id="nombre_area" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="text" wire:model="nombre"/>
            </div>
            <div class="mb-2">
              <label for="capacidad_area" class="text-gray-800 text-sm font-bold block text-left">Capacidad</label>
              <input id="capacidad_area" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="number" wire:model="capacidad"/>
            </div>
            <div class="mb-4">
              <label for="descripcion_area" class="text-gray-800 text-sm font-bold block text-left ">Descripción</label>
              <input id="descripcion_area" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="text" wire:model="descripcion"/>
            </div>
            
            <div class="flex items-center justify-between w-full">
              <button wire:click.prevent="guardar()" class="hover:bg-blue-600 bg-blue-700 rounded text-white px-8 py-2 text-sm">Guardar</button>
              <button class="hover:bg-red-600 bg-red-700 border rounded text-white px-8 py-2 text-sm" wire:click="cerrarModal()">Cancelar</button>
            </div>
            <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" wire:click="cerrarModal()" aria-label="close modal" role="button">
              <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </svg>
            </button>
          </form>
        </main>
        {{-- <footer class="flex justify-center p-2">
          <button class="bg-red-700 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300" wire:click.prevent="cerrarModal()">
            Cancelar
          </button>
        </footer> --}}
      </div>
    </div>
  </div>
</div>