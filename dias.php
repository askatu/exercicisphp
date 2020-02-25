<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIAS</title>
</head>
<body>
    
<?php

$dia=mt_rand(1,7);

echo "<p> HOY ES: $dia </p>";
    

if($dia==1){
        echo "<p> hoy es lunes, toca programacion </p>";
}elseif($dia==2){
    echo "<p> hoy es martes, toca css </p>";
}elseif($dia==3){
        echo "<p> hoy es miercoles, salimos a las 18:30 </p>";
}elseif($dia==4){
        echo "<p> hoy es jueves, volvemos a progamar </p>";
}elseif($dia==5){
        echo "<p> hoy es viernes, toca hosting </p>";
}else{
        echo "<p> RELAX </p>";
}
    
?>






</body>
</html>