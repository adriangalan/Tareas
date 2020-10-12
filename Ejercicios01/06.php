<?php


/*
 * Generar la  tabla de multiplicar de un número elegido al 
 * azar entre 1 y 10 con la siguiente apariencia 

 */
$num1=random_int(1, 10);
?>


<table border="1" cellspacing="0"  >
    <tbody>
        <tr>
            <td>Tabla de 5</td>
            <td></td>
        </tr>
        <tr><?php 
 for ($i = 1; $i <=10; $i++) {
     echo'<td>'.$num1.'X'.$i.'= </td>
          <td>'.($num1*$i).'</td>
        </tr>';
 }
     ?>   
    </tbody>
</table>
                
                


            


