<?php
/*3-   Obtener un número al azar entre 1 y 9 y generar una
 *  pirámide con ese número de peldaños.
Utilizar la marca <code></code> para que la visualización 
no se deforme por el tamaño de los espacio o una estilo con 
tipo de letra monospace.
Número generado 5

    *
   ***
  *****
 *******
*********

*/

$tamaño=random_int(1, 9);
$numAsteriscos = 1;


for ( $i=0;$i<= $tamaño; $i++){
    // Espacios
    for ($j=1; $j<= $tamaño -$i; $j++) echo'&nbsp';
    // Asteriscos
    for ($j=1; $j<= $numAsteriscos; $j++) echo'<span><code >*</code></span>';
    $numAsteriscos +=2;
    echo'<br/>';
}
?>