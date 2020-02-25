<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONDICIONES</title>
</head>

<body>

<?php

    $aprobados=0;
    $suspendidos=0;
    $nota=6;
    $nota2=4;
    $nota3=5;

if($nota>5){
        echo "<p> el alumno esta aprobado </p>";
        // $aprobados=$aprobados+1;
        $aprobados++; // es lo mismo 
}elseif($nota==5){
    echo " <p> el alumno esta aprobado por los pelos ";
    $aprobados=$aprobados+1;
}else{ 
        echo " <p> el alumno esta suspendido ";
        $suspendidos=$suspendidos+1;
}
if($nota2>5){
            echo "<p> el alumno esta aprobado </p>";
            $aprobados++; // es lo mismo 
    }elseif($nota2==5){
        echo " <p> el alumno esta aprobado por los pelos ";
        $aprobados=$aprobados+1;
    }else{ 
            echo " <p> el alumno esta suspendido ";
            $suspendidos=$suspendidos+1;
}

if($nota3>5){
        echo "<p> el alumno esta aprobado </p>";
        $aprobados=$aprobados+1;
    }elseif($nota3==5){
        echo " <p> el alumno esta aprobado por los pelos ";
        $aprobados=$aprobados+1;
    }else{ 
        echo " <p> el alumno esta suspendido ";
        $suspendidos=$suspendidos+1;
    }
        echo "<p> el numero de aprobados es $aprobados";
        echo "<p> el numero de suspendidos es $suspendidos";
    
?>
        
</body>

</html>