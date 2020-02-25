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
    <table>
    <?php
        
        $i= mt_rand(0,100);
        
        while($i<1000){
           if($i%2!=0){
               echo "<tr>";
           }
           echo "<td>";
           echo $i;
           echo "</td>";
           if($i%2==0){
            echo"</tr>";

           }
           $i=$i+1;
        }
    ?>
    </table>


</body>
</html>