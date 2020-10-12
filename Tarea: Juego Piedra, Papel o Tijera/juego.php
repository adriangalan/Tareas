<?php
/*
 * Hay dos jugares que eligen al azar un valor (Piedra, Papel o Tijera) 
 * y según el resultado mostrará el siguiente código HTML: 
 */
define ('PIEDRA1',  "&#x1F91C;");
define ('PIEDRA2',  "&#x1F91B;");
define ('TIJERAS',  "&#x1F596;");
define ('PAPEL',    "&#x1F91A;" );
function ganador($valor1,$valor2){
    //empate
    if ($valor1==1 && $valor2==1 || $valor1==2 && $valor2==2 || $valor1==3 && $valor2==3) {
        $resultado="¡Empate!";
    }elseif($valor1==1 && $valor2==2  || $valor1==2 && $valor2==3 || $valor1==3 && $valor2==1) {
        //gana jugador 1
        $resultado='Ha ganado el jugador 1';
    }else{
        //gana jugador 2
        $resultado='Ha ganado el jugador 2';
    }
    return $resultado;
}
//Sacas la imagen del jugador
function figura($valor,$jugador) {
    switch ($valor) {
        case 1:
            if ($jugador==1) {
                $imagen=PIEDRA1;
            }else{
                $imagen=PIEDRA2;
            }
            
        break;
        case 2:
            $imagen=TIJERAS;
        break;
        case 3:
            $imagen=PAPEL;
        break;        
    }
    return $imagen;
}

$jugador1=random_int(1, 3);
$jugador2=random_int(1, 3);
$resultado=ganador($jugador1,$jugador2);
$imagen1=figura($jugador1,1);
$imagen2=figura($jugador2,2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style type="text/css">

    span{
    font-size:50px;
    }

</style>
</head>

<body>

	<h1>¡Piedra,papel,tijera!</h1>
	<p>Actualice la pagina para mostrar otra partida</p>
	<table  >
    <tbody>
		<tr>
            <th >Jugador 1</th> 
            <th >Jugador 2</th>  
   		</tr>
    	<tr>
            <td><span ><?php echo $imagen1;?></span></td>
            <td><span ><?php echo $imagen2;?></span></td>
    	</tr>
    	<tr>
            <th colspan="2"><?php echo $resultado; ?> </th>
        </tr>
	</table>
	</tbody>

</body>
</html>