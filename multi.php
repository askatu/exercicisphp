<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MULTIPLICACIONES </title>
    <style>
        table,tr,td{
            border:1px solid black;
        }
    </style>
</head>

<body>
    <table>
    <?php
        
        $num=($_GET["number"]);
        
        for($i=0;$i<=10;$i=$i+1){

            echo "<tr>";
            echo "<td>";
            echo "$num x $i";
            echo "</td>";
            echo "<td>";
            $result=$num*$i;
            echo $result;
            echo "</td>";
            echo "</tr>";
        }
        
    ?>
    </table>


</body>
</html>