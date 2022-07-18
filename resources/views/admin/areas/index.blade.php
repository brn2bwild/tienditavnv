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
    $(document).ready(function() {
      $('#areas').DataTable({
        "language": {
          "lengthMenu": "Mostrar _MENU_ registros por página",
          "zeroRecords": "No se encontró ningún registro",
          "info": "Página _PAGE_ de _PAGES_",
          "infoEmpty": "No hay registros disponibles",
          "infoFiltered": "(filtrados de _MAX_ registros totales)",
          "search": "Buscar",
          "paginate":{
            "previous": "Anterior",
            "next": "Siguiente"
          }
        },
        "paging": true,
        "ordering": false,
        "info": true,
      });
    });
  </script>
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
            title: '¡Área eliminada!',
            text: '',
            icon: 'success',
            confirmButtonText: 'Aceptar',
          })
        }
      })
    })
  </script>
@endsection 