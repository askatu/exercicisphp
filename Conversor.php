<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="color.css"> 
    <title> Conversor </title>
</head>
<body>
<form action="conversor.php" metod="GET" >
<p> Cantidad? <input type="text" name="number" size="40"></p>
<select name="moneda">
<option value="euros"> Euros</option>
<option value="dolars"> Dolares </option>
</select>
<p><input type="submit" value="Enviar"></p>
<?php
   
   $dolars=0.92;
   $euros=1.08;
   $num=($_GET["number"]);
   $op=($_GET["moneda"]);
   

if($op=="euros"){
    $resultado=$num*$euros;
    echo $resultado;
}

if($op=="dolars"){
    $resultado=$num*$dolars;
    echo $resultado;
}



?>
   
   
     
     
     


</body>
</html>