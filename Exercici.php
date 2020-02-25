<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXERCICI</title>
</head>
<body>
<p> 1 </p>
<?php
  echo "Askatu Estevez Rodriguez: Ak.sounds@hotmail.com";

?>

<p> Askatu Estevez Rodriguez: Ak.sounds@hotmail.com </p>

<?php

    $nombre='Askatu';
    $apellido='Estevez Rodriguez';
    $mail='Ak.sounds@hotmail.com';

    echo '<p> nom:'.$nombre.'</p>';
    echo '<p> cognom:'.$apellido.'</p>';
    echo '<p> correu:'.$mail.'</p>';
?>

<p> 2 </p>

<?php
    $eng1='water';
    $eng2='bed';
    $eng3='night';
    $eng4='clock';
    $eng5='pen';
    $eng6='chair';
    $eng7='table';
    $eng8='paperbasket';
    $eng9='sun';
    $eng10='car';
    $cast1='agua';
    $cast2='cama';
    $cast3='noche';
    $cast4='relog';
    $cast5='lapiz';
    $cast6='silla';
    $cast7='mesa';
    $cast8='papelera';
    $cast9='sol';
    $cast10='coche';
  


?>
<table>
            <tr>
                 <td>
                     <P> <B>Español</B> </P>
                 </td>
                 <td>
                     <p> <b>Ingles</b> </p>
                 </td>
            </tr>
            <tr>
                 <td><?=$cast1?></td>
                 <td><?=$eng1?> </td>
            </tr>
            <tr>
                 <td><?=$cast2?></td>
                 <td><?=$eng2?> </td>
            </tr>
            <tr>
                 <td><?=$cast3?></td>
                 <td><?=$eng3?> </td>
            </tr>
            <tr>
                 <td><?=$cast4?></td>
                 <td><?=$eng4?> </td>
            </tr>
            <tr>
                 <td><?=$cast5?></td>
                 <td><?=$eng5?> </td>
            </tr>
            <tr>
                 <td><?=$cast6?></td>
                 <td><?=$eng6?> </td>
            </tr>
            <tr>
                 <td><?=$cast7?></td>
                 <td><?=$eng7?> </td>
            </tr>
            <tr>
                 <td><?=$cast8?></td>
                 <td><?=$eng8?> </td>
            </tr>
            <tr>
                 <td><?=$cast9?></td>
                 <td><?=$eng9?> </td>
            </tr>
            <tr>
                 <td><?=$cast10?></td>
                 <td><?=$eng10?> </td>
            </tr>

</table>
<p> 3 </p>

<?php

$x=144; 
$y=999;
$suma=$x+$y;
$resta=$x-$y;
$multiplicacion=$x*$y;
$division=$y/$x;

echo     '<p> X ='.$x.'</p>';
echo     '<p> Y ='.$y.'</p>';
echo     '<p> suma='.$suma.'</p>';
echo     '<p> resta='.$resta.'</p>';
echo     '<p> multiplicacio='.$multiplicacion.'</p>';
echo     '<p> divisio='.$division.'</p>';

?>

</body>

</html>