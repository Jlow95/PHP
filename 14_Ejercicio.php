<!--  Programa con una variable entera en la que se almacenará el número de un mes y compruebe si el valor corresponde a un mes de 30 días, de 31 o de 28. 
Supondremos que febrero tiene 28 días. Se mostrará además el nombre del mes. Se debe comprobar que el valor introducido esté comprendido entre 1 y 12. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_14</title>
</head>
<body>
    <?php
        $mes = 7;
        $nombres=[" ","enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
        $dias=[31,28,31,30,31,30,31,31,30,31,30,31];
        if ($mes < 1 || $mes > 12) {
            echo "Error: El número del mes tiene que estar entre el 1 y 12. <br>";
        } else {
            $nombre = $nombres[$mes];
            $diasDelMes = $dias[$mes];
            echo "El mes de $nombre tiene $diasDelMes días. <br>";
        }
        
     ?>
</body>
</html>