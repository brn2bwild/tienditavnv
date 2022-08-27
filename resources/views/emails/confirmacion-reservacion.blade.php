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
  <div style="padding: 10%; border-radius: 15px; background-color:white">
    <h3>Desde <strong>La Tiendita VNV</strong> te confirmamos que tu reservación ha sido realizada</h3>
    <div style="background-color: #F2D1C9; padding: 15px;">
      <h3 style="margin: auto; color:black;">Estos son los datos de tu reservación</h3>
    </div>
    <h3>Reservación a nombre de: {{$datos_mail['nombre']}}</h3>
    <h3>Reservaste para el día: {{$datos_mail['fecha']}}</h3>
    <h3>Hora de la reservación: {{$datos_mail['hora']}}</h3>
    <h3>Área de la reservación: {{$datos_mail['area']}}</h3>
    <h3>Para {{$datos_mail['cantidad']}} persona(s)</h3>
    <div style="text-align:center; padding: 0 10% 0 10%;">
      <h4>Para cualquier duda y/o aclaración puedes usar los números de contacto. Gracias por tu reservación.</h4>
    </div>
  </div>
</body>
</html>