<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> NOMINAS </title>
</head>
<body>

<?php

    $edad=mt_rand(20,60);
    $sueldo=mt_rand(600,2000);

 if($sueldo<=1000){
     if($edad<30){
        $salariofinal=1100;
     }
     elseif($edad>=30 and $edad<45){
            $salariofinal=$sueldo*1.03;
     }
     else{
             $salariofinal=$sueldo*1.15;
     } 
     }
     elseif ($sueldo>=1000 and $sueldo<=2000){
            }
        if($edad>45){
             $salariofinal=$sueldo*1.03;
         }
         elseif($edad<=45){
                 $salariofinal=$sueldo*1.10;
         }
         else{
             $salariofinal=$sueldo;
         }
    echo " Tu edad es de : $edad años. Y tu sueldo bruto es de $sueldo y te quedan $salariofinal";
    



?>

</body>
</html>