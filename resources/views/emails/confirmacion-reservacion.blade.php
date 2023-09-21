<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Confirmamos tu reservación en La Tiendita VNV</title>
  <style>
    body{
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>
</head>
<body style="text-align: center; margin: auto; background-color: whitesmoke;">
  <div style="padding: 5%; border-radius: 15px; background-color:white">
		<img src="https://www.latienditavnv.com/img/logo.jpeg" alt="tienditavnv-logo" height="94px" width="94px">
    <h3>Desde <strong>La Tiendita VNV</strong> te confirmamos que tu reservación ha sido realizada</h3>
    <div style="background-color: #F2D1C9; padding: 15px;">
      <h3 style="margin: auto; color:black;">Estos son los datos de tu reservación</h3>
    </div>
    <h5>Reservación a nombre de: {{$datos_mail['nombre_reservacion']}}</h5>
    <h5>Reservaste para el día: {{$datos_mail['fecha_reservacion']}}</h5>
    <h5>Hora de la reservación: {{$datos_mail['hora_reservacion']}}</h5>
    <h5>Área de la reservación: {{$datos_mail['area_reservacion']}}</h5>
    <h5>Para {{$datos_mail['n_personas']}} persona(s)</h5>
		<h5>Comentarios: {{ $datos_mail['comentario'] }}</h5>
    <div style="text-align:center; padding: 0 10% 0 10%;">
      <h6>Para cualquier duda y/o aclaración puedes usar los números de contacto. Gracias por tu reservación.</h6>
    </div>
  </div>
</body>
</html>