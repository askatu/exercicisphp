<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOTAS</title>
</head>
<body>
    
    <?php
    $nota1=mt_rand(0,10);
    $nota2=mt_rand(0,10);
    $nota3=mt_rand(0,10);
    $notasuma=$nota1+$nota2+$nota3;
    $notafinal=intval($notasuma/3);
    
        
    if($notafinal<5){
        $notatext="suspendido";
    }
    elseif($notafinal>=5 and $notafinal<6){
        $notatext="aprobado";
    }
    elseif($notafinal>=6 and $notafinal<7){
            $notatext="bien";
    }
    elseif($notafinal>=7 and $notafinal<8){
            $notatext="notable";
    }
    elseif($notafinal>=8 and $notafinal<9){
            $notatext="sobresaliente";
    }
    else{
        $notatxt="matricula";
    }
    echo "has sacado un $nota1, un $nota2 y un $nota3 por lo tanto tu nota es de: $notafinal $notatext "
   
   ?>





</body>
</html>