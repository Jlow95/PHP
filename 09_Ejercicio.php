<!-- Crea el código PHP donde generes: 
a. Un bucle for que cuente desde 50 hasta 40 (fíjate que en este caso es decreciente) 
b. Un bucle for que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09_Ejercicio</title>
</head>
<body>
    <?php 
    echo "a) Un bucle for que cuente desde 50 hasta 40: <br>";
    for ($i=50; $i >=40; $i--) { 
        echo $i . "<br>";
    }
    echo "<br>";

    echo "b) Un bucle for que a partir de una variable contador que toma valores de 1 a 5, muestre por pantalla el doble del valor de contador, es decir, que muestre 2, 4, 6, 8, 10. <br>";
    for ($contador=1; $contador <= 5 ; $contador++) { 
        echo ($contador * 2) . "<br>";
    }
     ?>
</body>
</html>