<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="color.css"> 
    <title> PIRAMIDE </title>
</head>
<body>
<form action="piramide.php" metod="GET" >
<p>Que altura deseas? <input type="text" name="filas" size="40"></p>
<select name="elemento">
<option value="·"> Bolas</option>
<option value=" [] "> Ladrillos</option>
<option value="*"> Estrellas </option>
<option value="$"> Dolares </option>
<option value="# "> Almuadas </option>
</select>
<p><input type="submit" value="Enviar"></p>
<?php


$filas=$_GET["filas"];
$elemento=$_GET["elemento"];


for($a=0;$a<=$filas;$a++){
    for($a2=0;$a2<=$a;$a2=$a2+1){
        echo "$elemento";
    }
    echo"<br>";
}

 
?>
   
   
     
     
     


</body>
</html>