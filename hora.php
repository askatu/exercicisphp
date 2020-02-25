<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> HORA </title>
</head>
<body>
    
    <?php
    
    $hora=mt_rand(0,24);
  
    echo " Son las $hora";
        
    if($hora>=7 and $hora<12){
        $notatext="buenos dias";
    }
    elseif($hora>=12 and $hora<20){
            $notatext="buenas tardes";
    }
    else{
        $notatext="buenas noches";
    }
    echo " $notatext "
   
   ?>

</body>
</html>