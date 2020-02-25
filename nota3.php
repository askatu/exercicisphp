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
    $nota1=mt_rand(0,10);
    $nota2=mt_rand(0,10);
    $nota3=mt_rand(0,10);
    $notasuma=$nota1+$nota2+$nota3;
    $notatotal=intval($notasuma/3);
    
    echo "<p> TU NOTA ES : $nota1,$nota2,$nota3 = $notatotal </p>";
        
    switch($notatotal){
        case 0:
        $notastxt="jumilieishon";
        break;
        case 1:
        case 2:
        case 3:
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
    echo $notastxt
    ?>





</body>
</html>