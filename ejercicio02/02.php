<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>

<?php 
require_once("funcionesvar.php");
$num1=random_int(1, 10);
$num2=random_int(1, 10);
echo " $num1 + $num2 = ".calSuma($num1,$num2)."<br/>";
echo " $num1 - $num2 = ".calResta($num1, $num2)."<br/>";
echo " $num1 * $num2 = ".calMultipicacion($num1, $num2)."<br/>";
echo " $num1 / $num2 = ".calDibision($num1, $num2)."<br/>";
echo " $num1 % $num2 = ".calResto($num1, $num2)."<br/>";
echo " $num1 ** $num2 = ".calElevado($num1, $num2)."<br/>";

?>

</body>
</html>