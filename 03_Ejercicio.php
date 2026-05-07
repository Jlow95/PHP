<!-- Escribe un programa que declare una variable A de tipo entero y asígnale un valor. A continuación muestra un mensaje indicando si A es par o impar.  
Si por ejemplo A = 14 la salida será 
14 es par 
Si fuese por ejemplo A = 15 la salida será: 
15 es impar -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_Ejercicio</title>
</head>

<body>
    <?php
    // Par:
    $A = 14;
    if ($A % 2 == 0) {
        echo $A . " es par <br>";
    } else {
        echo $A . " es impar <br>";
    }
    

    // Impar:
    $A = 15;
    if ($A % 2 == 0) {
        echo $A . " es par <br>";
    } else {
        echo $A . " es impar <br>";
    }
    
    ?>
</body>

</html>