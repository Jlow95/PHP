<!-- Crea el código PHP donde generes: 
Un bucle  do... while que cuente desde 50 hasta 40 (fíjate que en este caso es decreciente)  
b. Un bucle do... while que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.  -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>010_Ejercicio</title>
</head>

<body>
    <?php
    echo "Un bucle do... while que cuente desde 50 hasta 40:<br>";

    $i = 50;
    do {
        echo $i . "<br>";
        $i--;
    } while ($i >=40);

    echo "<br>";

    echo "Un bucle con do... while que a partir de una variable contador que toma valores de 1 a 5, muestre el doble del valor:<br>";

    $contador = 1;
    do {
        echo ($contador * 2) . "<br>";
            $contador++;
    } while ($contador <=5);
    ?>
</body>

</html>