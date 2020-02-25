<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PRIMOS </title>
</head>

<body>

    <?php
        
        $num=mt_rand(1,100);
        $primo=false;

        for($i=2;$i<$num;$i=$i+1){
        
        if($num%$i==0){
           $primo=true;
        }
        }
        if($primo==true){
            echo "el numero $num no es primo";
        }
        else{
            echo " el numero $num es primo";
        }
    
    ?>
