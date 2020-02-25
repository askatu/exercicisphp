<?php
  echo "estoy estudiando <strong>programacion</strong>";
  
  // este es un comentario de una linea //

  /* este es un comentario
  de varias lineas */
  
  echo "<p>primer texto</p>","<p>segundo texto</p>";

  print " es parecido al echo ";

  $var_edad=15; // doy un valor 
  $sum_edad=$var_edad+20;
  echo $sum_edad; //escribo el valor

  $var_edad=15; // doy un valor 
  echo "<p> paquito tiene $var_edad </p>"; //escribo el valor

  $var_edad=15; // doy un valor 
  echo '<p> paquito tiene '.$var_edad.' años. </p>'; //escribo el valor

  $var_edad=15; // doy un valor 
  echo '<p> paquito tiene "15" años </p>';

  $precio=15; // le pongo un precio
  echo '<p> el cargador vale:'.$precio.'</p>';
  
  $precio=15; // valor incognita
  echo '<p> el cargador vale:'.isset ($sumPrecio).'</p>';

  $precio='-15.50'; // valor negativo o con decimales( usar siempre el . )
  echo '<p> el cargador vale:'.$precio.'</p>';

?>

  <?="<p>esto tambien es valido</p>" ?>