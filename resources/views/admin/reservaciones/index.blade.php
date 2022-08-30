@extends('adminlte::page')

@section('title', 'Administracion de Reservaciones')

@section('content_header')
  <h1>Reservaciones</h1>
@stop

@section('css')
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  @livewireStyles
@endsection

@section('content')
  <div class="flex flex-col text-center bg-white p-4 rounded-md">
    <livewire:admin-reservaciones/>
  </div>
  @livewireScripts
@stop

@section('js')
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
        confirmButtonText: 'Borrar',
        denyButtonText: 'Cancelar',
      }).then((resultado) => {
        if(resultado.isConfirmed) {
          window.livewire.emit('eliminar', event.detail.id)
          Swal.fire({
            title: '¡Reservación eliminada!',
            text: '',
            icon: 'success',
            confirmButtonText: 'Aceptar',
          })
        }
      })
    })
  </script>
@endsection 
