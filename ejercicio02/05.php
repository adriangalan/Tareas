<?php
function tabla($filas,$columnas,$borde,$contenido) {
    
    echo "<table cellspacing='0' border='".$borde."'>";
    for ($i = 0; $i < $filas; $i++) {
        echo"<tr>";
        for ($j = 0; $j < $columnas; $j++) {
            echo"<td >".$contenido."</td>";
        }
        echo"</tr>";
    }
    echo "</table >";
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style type="text/css">
</style>
</head>

<body>

<?php tabla(3, 2, 10, "aaaaaaaaaas") 

?>
 


</body>
</html>
