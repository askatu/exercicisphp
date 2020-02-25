<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAJA FUERTE</title>
</head>
<body>

<form action="cajafuerte.php" method="get">

<?php
    
    $pass="93878";
    $verForm=true;
    
    if(isset($_GET["contador"])){
        $contador=$_GET["contador"];
        $num=$_GET["number"];
        
        if($num==$pass){
            echo "La caja fuerte se ha abierto satisfactoriamente";
            $contador=0;
            $verForm=true;
        } 
        else if($contador<4){
            echo "Lo siento, esa no es la combinación";
            $contador=$contador+1;

        }
        else{
            header("Location:cajafuerte2.php");
        
        $verForm=false;
        }
    
    }else{
        $contador=0;
    }
?>
  
<p> CONTRASEÑA:<input type="text" name="number"></p>

    <input type="hidden" name="contador" value="<?=$contador?>">
    <input type="submit" value="Enviar">

</form>
</body>
</html>