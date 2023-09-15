<div class="w-full xl:w-3/4 lg:w-11/12 flex">
  <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('{{$url_img}}'); transition: 0.5s" id="muestra"></div>
  <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
		<div class="flex justify-center items-center gap-4">
			<img class="h-20 w-20" src="{{ url('img/logo.jpeg') }}" alt="tienditavnv-logo">
			<h3 class="text-2xl text-center">Reservaciones La Tiendita VNV</h3>
		</div>
    <form class="px-8 pt-6 pb-0 bg-white rounded">
      <div>
        <label class="block mb-2 text-sm font-bold text-gray-700" for="nombre_reservacion">
          Nombre completo
        </label>
        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('nombre_reservacion') mb-0 border-red-500 @enderror" wire:model="nombre_reservacion" id="nombre_reservacion" type="text" placeholder="¿A que nombre estará tu reservación?" required/>
        @error('nombre_reservacion')
          <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
        @enderror
      </div>
      <div>
        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
          Correo Electrónico
        </label>
        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('email') mb-0 border-red-500 @enderror" wire:model="email" id="email" type="email" placeholder="Ingresa tu correo electrónico para confirmación" required/>
        @error('email')
          <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
        @enderror
      </div>
      <div>
        <label class="block mb-2 text-sm font-bold text-gray-700" for="numero_telefonico">
          Número telefónico
        </label>
        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('numero_telefonico') mb-0 border-red-500 @enderror" wire:model="numero_telefonico" id="numero_telefonico" type="tel" placeholder="Introduce tu número para aclaraciones" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required/>
        @error('numero_telefonico')
          <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
        @enderror
      <div class="md:flex md:justify-between">
        <div class="mb-4 md:mr-2 md:mb-0">
          <label class="block mb-2 text-sm font-bold text-gray-700" for="fecha_reservacion">
            Fecha de la reservación
          </label>
          <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-600 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('fecha_reservacion') mb-0 border-red-500 @enderror" wire:model="fecha_reservacion" id="fecha_reservacion" type="date" min="{{$min_date}}" required/>
          @error('fecha_reservacion')
            <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
          @enderror
        </div>
        <div class="md:ml-2">
          <label class="block mb-2 text-sm font-bold text-gray-700" for="hora_reservacion">
            Hora de tu reservación
          </label>
          <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-600 border rounded shadow appearance-none focus:outline-none focus:shadow-outline timepicker @error('hora_reservacion') mb-0 border-red-500 @enderror" wire:model="hora_reservacion" id="hora_reservacion" type="text" required/>
          @error('hora_reservacion')
            <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
          @enderror
        </div>
      </div>
      <div class="md:flex md:justify-between">
        <div class="mb-4 md:mr-2 md:mb-0 w-3/4">
          <label class="block mb-2 text-sm font-bold text-gray-700" for="localizacion">
            Área de la reservación
          </label>
          <select class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-600 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('area_reservacion') mb-0 border-red-500 @enderror" wire:model="area_reservacion" id="area_reservacion">
            <option value="">¿En qué área desea su revervación?</option>  
            @foreach ($areas as $area)
              <option value="{{$area->nombre}}">{{$area->nombre}}</option>
            @endforeach
          </select>
          @error('area_reservacion')
            <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
          @enderror
        </div>
        <div class="md:ml-2">
          <label class="block mb-2 text-sm font-bold text-gray-700" for="n_personas">
            Número de personas
          </label>
          <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('n_personas') mb-0 border-red-500 @enderror" wire:model="n_personas" id="n_personas" type="number" placeholder="Indícanos por favor" min="1" required/>
          @error('n_personas')
            <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
          @enderror
        </div>
      </div>
      <div>
        <label class="block mb-2 text-sm font-bold text-gray-700" for="comentario">
          Comentario
        </label>
        <textarea class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('comentario') mb-0 border-red-500 @enderror" wire:model="comentario" id="comentario" type="text" placeholder="¿Te gustaría que tu reservación fuera en un lugar en especial? Puedes anotarlo aquí..." rows="4" required maxlength="255">
        </textarea>
        @error('comentario')
          <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-6 mt-2 text-center">
        <button class="w-full px-4 py-2 font-bold text-white bg-rose-500 rounded-full hover:bg-rose-400 focus:outline-none focus:shadow-outline" wire:click.prevent="confirmarGuardar()">
          Hacer reservación
        </button>
      </div>
      <hr class="mb-6 border-t" />
      <div class="flex justify-center mt-4">
        <a href="https://www.facebook.com/latienditavnv/" type="button" class="rounded-full border-2 border-white hover:border-rose-600 text-rose-600 hover:text-rose-600 leading-normal uppercase hover:bg-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-10 h-10 m-1">
          <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                class="w-2 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor"
                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                </path>
            </svg>
        </a>
        
        <a href="https://www.instagram.com/latiendita_vnv/" type="button" class="rounded-full border-2 border-white hover:border-rose-600 text-rose-600 hover:text-rose-600 leading-normal uppercase hover:bg-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-10 h-10 m-1">
          <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
              class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path fill="currentColor"
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
              </path>
          </svg>
        </a>
      </div>
    </form>
  </div>
</div>
