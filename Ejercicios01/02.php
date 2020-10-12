<?php
/*2.-  Obtener un número al azar entre 1 y 9 y generar una la escalera 
 * numérica del tamaño indicado alternando colores entre rojo y azul.

Número generado 5
1
22
333
4444
55555
*/
$num1=random_int(1, 9);
//crea la piramide la parte vertical
for ($i = 1; $i <= $num1; $i++) {
    //creo la piramide la parte horizontal 
    if ($i%2==0) {
        for ($j = 1; $j <= $i; $j++) {                 
            echo'<font color="blue">'.$i.'</font>';            
        }        
    }else{
        for ($j = 1; $j <= $i; $j++) {
            echo'<font color="red">'.$i.'</font>';           
        }       
    }
    echo'<br/>';
        
}
