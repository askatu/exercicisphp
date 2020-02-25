<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> RESULTADO </title>
    
</head>

<body>

    <?php
    
        $num=($_GET["number"]);
        $iva=$num*21/100;
        $irpf=$num*15/100;


        $result=$num+$iva-$irpf;

        echo "El IVA es de: $iva.";

        echo " El IRPF es de: $irpf.";

        echo " Tu nomina es de: $result €";
	

        
    ?>


   


</body>
</html>