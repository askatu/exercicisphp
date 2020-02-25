<?php
   
   if(isset($_GET["number"])){

        $nume=($_GET["number"]);

      function desc($nume){

        if($nume<=100){
            $desc=0;
        }
        elseif($nume>100 and $nume<=499.99){
            $desc=$nume*0.10;
        }
        else{
            $desc=$nume*0.15;
        }
        return $nume-$desc;
        }
            echo desc($nume);
  
   }

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

<form action="funciones2.php" metod="GET" >

<p> Valor de la compra <input type="text" name="number" size="40"></p>

<p><input type="submit" value="Enviar"></p>

   
   
     
     
     


</body>
</html>