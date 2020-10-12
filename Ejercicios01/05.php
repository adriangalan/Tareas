<?php
/*
 * 5.- Realizar un segunda versión del primer ejercicio donde 
 * la página de resultado tiene que mostrar una tabla con el siguiente
 * formato utilizando estilo.
 */

$num1=random_int(1, 10);
$num2=random_int(1, 10);

echo'

<table border="1" cellspacing="0"  >
    <tbody>
        <tr>
            <th bgcolor="grey"><font color="blue">Operación</font></th> 
            <th bgcolor="grey"><font color="blue">Resultado</font></th>  
        </tr>
        <tr>
            <td>'.$num1.'+'.$num2.'</td>
            <td>'.($num1+$num2).'</td>
        </tr>
        <tr>
            <td bgcolor="#9b9b9b">'.$num1.'-'.$num2.'</td>
            <td bgcolor="#9b9b9b">'.($num1-$num2).'</td>
        </tr>
        <tr>
            <td>'.$num1.'*'.$num2.'</td>
            <td>'.($num1*$num2).'</td>
        </tr>
        <tr>
            <td bgcolor="#9b9b9b">'.$num1.'/'.$num2.'</td>
            <td bgcolor="#9b9b9b">'.($num1/$num2).'</td>
        </tr>
        <tr>
            <td>'.$num1.'%'.$num2.'</td>
            <td>'.($num1%$num2).'</td>
        </tr>
        <tr>
            <td bgcolor="#9b9b9b">'.$num1.'^'.$num2.'</td>
            <td bgcolor="#9b9b9b">'.($num1**$num2).'</td>
        </tr>
    </tbody>
</table>
';




?>