<?php
/*
 * . Hacer una nueva versión  del ejercicio anterior pero creando un nuevo fichero de
 *  funciones (funcionesref.php) donde cada función tenga 
 *  tres parámetros los dos primeros por valor y el último por referencia.
 *   Añadir al principio dentro del programa principal (03.php) la instrucción 
 *   include_once(“funcionesref.php”) para hacer referencia al las funciones definidas 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>

<?php
require_once("funcionesref.php");
$num1=random_int(1, 10);
$num2=random_int(1, 10);
calSuma($num1,$num2,$valor1);
echo " $num1 + $num2 = ".$valor1."<br/>";

calResta($num1, $num2,$valor2);
echo " $num1 - $num2 = ".$valor2."<br/>";

calMultipicacion($num1, $num2,$valor3);
echo " $num1 * $num2 = ".$valor3."<br/>";

calDibision($num1, $num2,$valor4);
echo " $num1 / $num2 = ".$valor4."<br/>";

calResto($num1, $num2,$valor5);
echo " $num1 % $num2 = ".$valor5."<br/>";

calElevado($num1, $num2,$valor6);
echo " $num1 ** $num2 = ".$valor6."<br/>";

?>

</body>
</html>
