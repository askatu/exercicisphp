<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> FORMULARIOS </title>
</head>

<body>
 
<form action="prueba.php" method="post">

  <p>Nombre: <input type="text" name="nombre" size="40"></p>
  <p>Apellido: <input type="text" name="apellidos" size="40"></p>
  <p>Año de nacimiento: <input type="number" name="nacido" min="1900"></p>
  <p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
  </p>

</form>


</body>
</html>