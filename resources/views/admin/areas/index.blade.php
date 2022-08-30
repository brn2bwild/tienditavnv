@extends('adminlte::page')

@section('title', 'Administracion de Reservaciones')

@section('content_header')
  <h1>Áreas</h1>
@stop

@section('css')
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  @livewireStyles
@endsection

@section('content')
  <div class="flex flex-col text-center bg-white p-4 rounded-md">
    <livewire:admin-areas/>
  </div>
@stop

@section('js')
  @livewireScripts
  <script>
    window.addEventListener('swal:modal', event => {
      Swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.icon,
        confirmButtonText: 'Aceptar',
      })
    });

    window.addEventListener('swal:confirmar', event => {
      Swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.icon,
        showDenyButton: true,
        confirmButtonText: 'Eliminar',
        denyButtonText: 'Cancelar',
      }).then((resultado) => {
        if(resultado.isConfirmed) {
          window.livewire.emit('eliminar', event.detail.id)
          Swal.fire({
            title: '¡Área eliminada!',
            text: '',
            icon: 'success',
            confirmButtonText: 'Aceptar',
          })
        }
      })
    })

    window.addEventListener('swal:confirmarImg', event => {
      Swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.icon,
        showDenyButton: true,
        confirmButtonText: 'Eliminar',
        denyButtonText: 'Cancelar',
      }).then((resultado) => {
        if(resultado.isConfirmed) {
          window.livewire.emit('eliminarImg', event.detail.id)
          Swal.fire({
            title: '¡Imágen eliminada!',
            text: '',
            icon: 'success',
            confirmButtonText: 'Aceptar',
          })
        }
      })
    })
  </script>

  {{-- <script>
    function mostrarImg(url) {
      Swal.fire({
        title: '',
        text: 'Esta imagen se mostrará a los usuarios',
        imageUrl: 'storage/'+url,
        imageWidth: 400,
        imageHeight: 400,
      })
    }
  </script> --}}
@endsection 