<?php
/*1.- Definir dos variables asignándoles un valor entero aleatorio entre 1 y 10 y mostrar su suma, su resta, su división, su multiplicación, módulo y potencia (ciclo for)

1º Número : 5
2º Número : 2

5+3  = 7
5-2  = 3
5*2  = 10
5/ 2 = 2.5
5%2  = 1
5**2 = 25
*/

$num1=random_int(1, 10);
$num2=random_int(1, 10);

echo " $num1 + $num2 = ".($num1+$num2)."<br/>";
echo " $num1 - $num2 = ".($num1-$num2)."<br/>";
echo " $num1 * $num2 = ".($num1*$num2)."<br/>";
echo " $num1 / $num2 = ".($num1/$num2)."<br/>";
echo " $num1 % $num2 = ".($num1%$num2)."<br/>";
echo " $num1 ** $num2 = ".($num1**$num2)."<br/>";
?>