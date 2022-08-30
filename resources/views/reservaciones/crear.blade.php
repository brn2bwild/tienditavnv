<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reservaciones La Tiendita VNV</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/sweetalert2@11.js')}}"></script>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  @livewireStyles
</head>
<body class="antialiased" style="background-color: #F2D1C9">
  <div class="container mx-auto" style="background-color: #F2D1C9">
    <div class="flex justify-center px-6 my-12">
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
  <script>
    window.addEventListener('swal:confirmar', event => {
      Swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.icon,
        showDenyButton: true,
        denyButtonColor: '#5D2A42',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#f43f5e',
      }).then((resultado) => {
        if(resultado.isConfirmed) {
          window.livewire.emit('guardar', event.detail.id)
        }
      })
    })

    window.addEventListener('swal:modal', event => {
      Swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.icon,
        showConfirmButton: false,
        timer: 2500
      })
    })
  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '8',
        maxTime: '3:00pm',
        defaultTime: '11',
        startTime: '8:00',
        dynamic: false,
        dropdown: true,
        scrollbar: false,
        change: function(time) {
          hora = $(this).val()
          window.livewire.emit('asignarHora', hora)
        }
      })
    })
  </script>
</body>
</html>



