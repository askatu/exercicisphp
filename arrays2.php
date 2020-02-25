<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="#"> 
    <title> Arrays </title>
</head>

<body>
    <?php

    $item[0]=50;
    $item[1]=35;
    $item[2]=47;
    $item[3]=73;
    $item[5]=13; 
    $item[7]=93; 
    $item[9]=23; 
     
     
    for($i=0;$i<count($item);$i++){
        if(isset($item[$i])){
         echo $item[$i]."<br>";
        }
    }

    ?>

</body>
</html>