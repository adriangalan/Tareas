<?php
/*
 * 1. Realizar y probar una función en PHP  llamada 
 * elMayor  que reciba tres números: A,B y C. 
 * La función almacenará en C el valor 
 * que sea mayor A o B. En el caso sean iguales 
 * almacenará el valor 0 en C 
 * ¿Qué parámetros se deberían pasar por valor 
 * o copia y cuales por referencia?
 */
function elMayor($A,$B,$C) {
    if ($A>$B) {
        $C=$A;
    }elseif ($A<$B){
    $C=$B;
    }else{
        $C=0;
    }
    return $C;
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>


</body>
</html>