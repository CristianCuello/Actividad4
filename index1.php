<?php
$num1 =15;
$num2 =20;



 ?>


<!DOCTYPE html>


<html>
  <head>
    <meta charset="utf-8">
      <title>Ejercicio #1</title>
  </head>
  <body>
    <h3>Ejercicios con bucle For</h3>
    <h3>Algoritmo que pida 2 numeros y muestre todos los numero pares que van desde el primero al segundo. Sedebe controlar que los valores son crrectos.</h3>
    <h4>el valor de numero 1 es: <?php echo $num1; ?></h4>
    <h4>el valor de numero 2 es: <?php echo $num2; ?></h4>

    <?php



    for($num1;$num1<=$num2;$num1++){
   if(($num1%2)==0){
      echo "$num1 <br>";
   }

}


   ?>














  </body>
</html>
