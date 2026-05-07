<!-- Crear las siguientes funciones en PHP y código para comprobar su funcionamiento: 
a. Una función que reciba cinco números enteros como parámetros y muestre por pantalla el resultado de sumar los cinco números (tipo procedimiento, no hay valor devuelto). 
b. Una función que reciba cinco números enteros como parámetros y devuelva el resultado de sumar los cinco números (tipo función, hay un valor devuelto). Asigna el resultado de una invocación a la función con los números 2, 5, 1, 8, 10 a una variable de nombre $tmp y muestra por pantalla el valor de la variable. 
c. Una función que reciba como parámetros el valor del radio de la base y la altura de un cilindro y devuelva el volumen del cilindro, teniendo en cuenta que el volumen de un cilindro se calcula como Volumen = númeroPi * radio * radio * Altura siendo númeroPi = 3.1416 aproximadamente. -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17_Ejercicio</title>
</head>

<body>
    <?php
    // a)
    function SumarYMostrar($n1, $n2, $n3, $n4, $n5)
    {
        $suma = $n1 + $n2 + $n3 + $n4 + $n5;
        echo "La suma de los 5 números es $suma.";
    }
    echo "<h3>Primer ejemplo de la función </h3>";
    SumarYMostrar(3, 7, 2, 9, 4);
    echo "<hr>";
    // b)
    function sumarNumeros($n1, $n2, $n3, $n4, $n5)
    {
        $sumar = $n1 + $n2 + $n3 + $n4 + $n5;
        return $sumar;
    }

    echo "<h3>Segundo ejemplo de la función </h3>";
    $tmp = sumarNumeros(2, 5, 1, 8, 10);
    echo "El valor de la variable tmp es: $tmp. <hr>";

    // c)
    function VolumenCilindro($radio, $altura){
        $numeroPi = 3.1416;
        $volumen = $numeroPi * $radio * $radio * $altura; // radio al cuadrado = radio ** 2;
        return $volumen;
    }
    echo "<h3>Tercer ejemplo de la función </h3>";
    $radio1 = 5;
    $altura1 = 10;
    $vol1 = VolumenCilindro($radio1, $altura1);
    echo "Cilindro con radio: $radio1 <br>";
    echo "Cilindro con altura: $altura1 <br>";
    echo "Volumen del cilindro: $vol1";
    ?>
</body>

</html>