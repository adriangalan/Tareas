<?php
$suma=0;
$num1=random_int(1, 100);
$mas=$num1;
$min=$num1;
for ($i = 1; $i < 50; $i++) {
    $num1=random_int(1, 100);
    $suma+=$num1;
    if ($min>$num1) {
        $min=$num1;
    }
    if ($mas<$num1){
        $mas=$num1;;
    }    
}
$media=$suma/50;



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style type="text/css">
table ,th,td{
border-collapse:collapse;
border: 1px solid black;
 padding: 4px;
}

th {
    background-color: black;
    color: white;
    
}
.izq{
        text-align:left;
    }
.der{
        text-align:right;
    }

</style>
</head>

<body>

<table  cellspacing="0"  >
    <tbody>
        <tr>
            <th  colspan="2">Generación de 50 valores aleatorios</th> 
            
        </tr>
        <tr>
            <td>Mínimo</td>
            <td class="der"><?=$min;?></td>
        </tr>
        <tr>
            <td>Máximo</td>
            <td class="der"><?=$mas;?></td>
        </tr>
        <tr>
            <td>Media</td>
            <td class="der"><?= $media;?></td>
        </tr>
     </tbody>
</table>   


</body>
</html>
