<?php
// comentario de una sola línea
/*
Esto es
un comentario
multilínea
*/

echo 'Hola mundo';
echo '<br>Hola cruel mundo <br> estoy <h1>aprendiendo PHP</h1>';

// variables
$nombre = 'Andrés';
$Nombre = 'Alfaro';

// concatenación de cadenas y variables
echo $nombre.'&nbsp;'.$Nombre;
echo '<br><br>';

$num1 = 5;
$num2 = 8;

$sum = $num1 + $num2;

echo $sum;

// escapar caracteres especiales con contrabarra
echo "La variable \$sum tiene el valor $sum";
echo '<br><br>';

// if
$modulo = $num1 % 2;
if ($modulo == 0) {
  echo "$num1 número es par";
} else {
  echo "$num1 es impar";
}

echo '<br><br>';

// for
for ($i = 0; $i <= 10; $i++) {
  echo "$i <br>";
}
?>