<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> BUCLES </title>
    <style>
        table,tr,td{
            border:1px solid black;
        }
    </style>
</head>

<body>
     
    <?php
        
        $i=1;
        
        while($i<100){
            if ($i%5==0)
           echo $i."<br>";
            $i=$i+1;
        }
   
    ?>


</body>
</html>