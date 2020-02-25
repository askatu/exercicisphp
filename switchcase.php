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
    
switch($dia){
    case 1:
        $diatxt="lunes";
    break;
    case 2:
        $diatxt="martes";
    break;
    case 3:
        $diatxt="miercoles";
    break;
    case 4:
        $diatxt="jueves";
    break;
    case 5:
        $diatxt="viernes";
    break;
    case 6:
        $diatxt="sabado";
    break;
    case 7:
        $diatxt="domingo";
    break;
}
echo " HOY ES $diatxt"
?>





</body>
</html>