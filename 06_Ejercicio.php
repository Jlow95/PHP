<!-- Programa que almacene en tres variables las horas, minutos y segundos respectivamente, y comprueba si la hora que indican es una hora válida. 
Supondremos que se lee una hora en modo 24 Horas, es decir, el valor de la hora será mayor 0 igual que cero y menor que 24.  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06_Ejercicio</title>
</head>
<body>
     <?php
    $horas = 14;
    $minutos = 20;
    $segundos = 25;
    if ($horas >= 0 && $horas < 24 && $minutos >= 0 && $minutos < 60 && $segundos >= 0 && $segundos < 60) {
        echo "La hora es válida.";
    } else {
        echo "La hora NO es válida.";
    }
    ?>
</body>
</html>