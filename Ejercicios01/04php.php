<?php
/*4.- Generar números al azar entre 1 y 10 hasta 
 * que se generen 3 veces el valor 6 de forma consecutiva 
 * en ese caso se mostrará cuantos número se han generado. 

Han salido tres 6 seguidos tras genera 1343 números en 1.002 milisegundos

Para obtener los segundos utilizamos la función microtime(true) 
 para obtener la fecha actual en segundos. 
*/

$anterior=6;
$contadorSeis=0;
$contador=0;
while ($contadorSeis<=3) {  
    $num1=random_int(1, 9);
    $contador++;
    if ($num1==6 || $anterior==6) {
        $contadorSeis++;        
    }else{
        $contadorSeis=0;
    }
    $anterior=$num1;
}
$tiempo=microtime(true);
echo'Han salido tres 6 seguidos tras genera '.$contador.' números en '.$tiempo.' milisegundos';
?>
