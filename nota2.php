<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOTAS</title>
</head>
<body>
    
    <?php

    $notas=mt_rand(0,10);
    
    echo "<p> $notas </p>";
        
    switch($notas){
        case 0:
        $notastxt="suspendido";
        break;
        case 1:
            $notastxt="suspendido";
        break;
        case 2:
            $notastxt="suspendido";
        break;
        case 3:
            $notastxt="suspendido";
        break;
        case 4:
            $notastxt="suspendido";
        break;
        case 5:
            $notastxt="aprobado";
        break;
        case 6:
            $notastxt="bien";
        break;
        case 7:
            $notastxt="notable";
        break;
        case 8:
            $notastxt="sobresaliente";
        break;
        case 9:
        $notastxt="excelente";
        break;
        case 10:
        $notastxt="matricula";
        break;
    }
    echo " TU NOTA ES $notastxt"
    ?>





</body>
</html>