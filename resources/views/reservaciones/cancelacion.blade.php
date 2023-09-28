<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>La Tiendita VNV - Reservación Cancelada</title>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>

<body class="w-full min-h-screen flex justify-center items-center" style="background-color: #F2D1C9">
	<div class="flex flex-col text-center bg-white rounded-lg p-6">
		<h1 class="text-xl text-gray-800 font-bold">{{ $mensaje }}</h1>
		<h1 class="text-xl text-white bg-red-400 py-2 px-4 rounded-lg mt-4"><a href="{{ route('reservaciones.create') }}">Realizar una nueva reservación</a></h1>
	</div>
</body>

</html>