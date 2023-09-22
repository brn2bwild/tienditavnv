<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Confirmamos tu reservación en La Tiendita VNV</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Roboto', sans-serif;
		}
	</style>
</head>

<body style="text-align: center; margin: auto; background-color: whitesmoke;">
	<div style="padding: 5%; border-radius: 15px; background-color:white">
		<img src="https://www.latienditavnv.com/img/logo.jpeg" alt="tienditavnv-logo" height="94px" width="94px">
		<h2>Desde <strong>La Tiendita VNV</strong> te confirmamos que tu reservación ha sido realizada</h2>
		<div style="background-color: #F2D1C9; padding: 15px;">
			<h2 style="margin: auto; color:black;">Estos son los datos de tu reservación</h2>
		</div>
		<h3>Reservación a nombre de: {{$datos_mail['nombre_reservacion']}}</h3>
		<h3>Reservaste para el día: {{$datos_mail['fecha_reservacion']}}</h3>
		<h3>Hora de la reservación: {{$datos_mail['hora_reservacion']}}</h3>
		<h3>Área de la reservación: {{$datos_mail['area_reservacion']}}</h3>
		<h3>Para {{$datos_mail['n_personas']}} persona(s)</h3>
		<h3>Comentarios: {{ $datos_mail['comentario'] }}</h3>
		<div style="text-align:center">
			<h4>Para cualquier duda y/o aclaración puedes usar los números de contacto. Gracias por tu reservación.</h4>
		</div>
	</div>
</body>

</html>