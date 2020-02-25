<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COLOR</title>
<?php

    $rojo=mt_rand(0,255);
    $verde=mt_rand(0,255);
    $azul=mt_rand(0,255);

    echo "<style>body{background-color: rgb($rojo,$verde,$azul)</style>";
    
        <!--<style>body{background-color: rgb(<?=$rojo?>,<?=$verde?>,<?=$azul?>);}</style>-->
?>
  
</head>

<body>

</body>
</html>