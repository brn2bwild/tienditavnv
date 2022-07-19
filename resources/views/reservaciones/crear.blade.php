<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reservaciones La Tiendita VNV</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/sweetalert2@11.js')}}"></script>
  @livewireStyles
</head>
<body class="antialiased" style="background-color: #F2D1C9">
  <div class="container mx-auto" style="background-color: #F2D1C9">
    <div class="flex justify-center px-6 my-12">
      {{-- <div class="w-full xl:w-3/4 lg:w-11/12 flex">
        <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('{{asset('img/rio.jpg')}}')" id="muestra"></div>
        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
          <h3 class="pt-4 text-2xl text-center">Reservaciones La Tiendita VNV</h3>
          <form class="px-8 pt-6 pb-8 bg-white rounded" action="{{route('reservaciones.store')}}" method="POST">
            @csrf
            <div>
              <label class="block mb-2 text-sm font-bold text-gray-700" for="nombre_reservacion">
                Nombre completo
              </label>
              <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('nombre_reservacion') mb-0 border-red-500 @enderror" name="nombre_reservacion" id="nombre_reservacion" type="text" placeholder="Reservación a nombre de..." value="{{old('nombre_reservacion')}}" required/>
              @error('nombre_reservacion')
                <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
              @enderror
            </div>
            <div>
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                Correo Electrónico
              </label>
              <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('email') mb-0 border-red-500 @enderror" name="email" id="email" type="email" placeholder="Ingrese su correo electrónico para confirmación" value="{{old('email')}}" required/>
              @error('email')
                <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
              @enderror
            </div>
            <div>
              <label class="block mb-2 text-sm font-bold text-gray-700" for="numero_telefonico">
                Número telefónico
              </label>
              <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('numero_telefonico') mb-0 border-red-500 @enderror" name="numero_telefonico" id="numero_telefonico" type="tel" placeholder="Introduzca su número para aclaraciones" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value="{{old('numero_telefonico')}}" required/>
              @error('numero_telefonico')
                <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
              @enderror
            <div class="mb-1 md:flex md:justify-between">
              <div class="mb-4 md:mr-2 md:mb-0">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="fecha_reservacion">
                  ¿Qué fecha desea reservar?
                </label>
                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('fecha_reservacion') mb-0 border-red-500 @enderror" name="fecha_reservacion" id="fecha_reservacion" type="date" value="{{old('fecha_reservacion')}}" required/>
                @error('fecha_reservacion')
                  <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
                @enderror
              </div>
              <div class="md:ml-2">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="hora_reservacion">
                  ¿A qué hora gusta su reservación?
                </label>
                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('hora_reservacion') mb-0 border-red-500 @enderror" name="hora_reservacion" id="hora_reservacion" type="time" value="{{old('hora_reservacion')}}" required/>
                @error('hora_reservacion')
                  <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="mb-3 md:flex md:justify-between">
              <div class="mb-4 md:mr-2 md:mb-0">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="localizacion">
                  Localización
                </label>
                <select class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('area_reservacion') mb-0 border-red-500 @enderror" name="area_reservacion" id="area_reservacion">
                  <option value="">Seleccione una opción</option>  
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
                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('n_personas') mb-0 border-red-500 @enderror" name="n_personas" id="n_personas" type="number" placeholder="2" min="1" max="50" value="{{old('n_personas')}}" required/>
                @error('n_personas')
                  <span class="text-sm italic text-red-500 mb-2">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="mb-6 text-center">
              <button class="w-full px-4 py-2 font-bold text-white bg-rose-500 rounded-full hover:bg-rose-400 focus:outline-none focus:shadow-outline" type="submit">
                Hacer reservación
              </button>
            </div>
            <hr class="mb-6 border-t" />
            <div class="flex justify-center mt-4">
              <a href="https://www.facebook.com" type="button" class="rounded-full border-2 border-white hover:border-rose-600 text-rose-600 hover:text-rose-600 leading-normal uppercase hover:bg-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-10 h-10 m-1">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                      class="w-2 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                      <path fill="currentColor"
                          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                      </path>
                  </svg>
              </a>
              
              <a href="https://www.instagram.com" type="button" class="rounded-full border-2 border-white hover:border-rose-600 text-rose-600 hover:text-rose-600 leading-normal uppercase hover:bg-white focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-10 h-10 m-1">
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
      </div> --}}
      <livewire:reservaciones/>
    </div>
  </div>
  <footer class="text-center text-white">
    <div class="flex justify-center" style="background-color: rgba(0, 0, 0, 0.05);">
      <span class="mr-2">© 2022 Copyright:</span>
      <a class="text-white hover:text-black" href="https://github.com/Devildrack">DevilSoft</a>
    </div>
  </footer>

  @livewireScripts  
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
  <script>
    window.addEventListener('swal:confirmar', event => {
      Swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.icon,
        showDenyButton: true,
        denyButtonText: 'Cancelar',
        denyButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#f43f5e',
      }).then((resultado) => {
        if(resultado.isConfirmed) {
          window.livewire.emit('guardar', event.detail.id)
          Swal.fire({
            title: '¡Reservación realizada!',
            text: '',
            icon: 'success',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#f43f5e'
          })
        }
      })
    })
  </script>
  <script>
    function cambiarImg(){
      var nombre = document.getElementById("area_reservacion").value
      window.livewire.emit('cambiarImg', nombre)
    }
  </script>
</body>
</html>



