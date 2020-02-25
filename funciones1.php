<?php
   
   if(isset($_GET["number"])){

   $nume=($_GET["number"]);
   $num2=($_GET["number2"]);
   $op=($_GET["operacion"]);

    function Sumar($nume,$num2){
        return $nume+$num2;
    }
    function Restar($nume,$num2){
        return $nume-$num2;
    }
    function Multiplicar($nume,$num2){
        return $nume*$num2;
    }
    function Dividir($nume,$num2){
        return $nume/$num2;
    }
        if($op=="sumar"){
            $resultado=Sumar($nume,$num2);
        }
        if($op=="restar"){
            $resultado=Restar($nume,$num2);
        }
        if($op=="multiplicar"){
            $resultado=Multiplicar($nume,$num2);
        }
        if($op=="dividir"){
            $resultado=Dividir($nume,$num2);
        }

   }

   echo $resultado;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="color.css"> 
    <title> Calculadora </title>
</head>
<body>
<form action="funciones1.php" metod="GET" >
<p> nº A <input type="text" name="number" size="40"></p>
<p> nº B <input type="text" name="number2" size="40"></p>
<select name="operacion">
<option value="sumar"> Sumar </option>
<option value="restar"> Restar </option>
<option value="multiplicar"> Multiplicar</option>
<option value="dividir"> Dividir </option>
</select>
<p><input type="submit" value="Enviar"></p>

   
   
     
     
     


</body>
</html>