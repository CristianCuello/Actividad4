<?php
$num1 =1;
$num2 =20;
$cont=0;


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio #3</title>
  </head>
  <body>
    <h3>Ejercicios con bucle For</h3>
    <h3>Algoritmo que pida 2 numeros y sume todos los numeros que van desde el primero hasta el segundo.</h3>
    <h4>el valor de numero 1 es: <?php echo $num1; ?></h4>
    <h4>el valor de numero 2 es: <?php echo $num2; ?></h4>

    <?php



    for ($num1;$num1<=$num2;$num1++){
      $cont=$cont+$num1;
        echo "$cont <br>";
   }




   ?>


  </body>
</html>
