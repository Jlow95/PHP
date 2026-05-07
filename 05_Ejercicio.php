<!-- Almacenar en tres variables tres números enteros calcular el mayor de los tres números enteros.  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05_Ejercicio</title>
</head>
<body>
    <?php 
    // Declarar variables de los 3 números que hemos elegido.
    $num1 = 45;
    $num2 = 30;
    $num3 = 12;

    //Mostrar números en la pantalla.
    echo "Número 1 = " . $num1 . "<br>";
    echo "Número 2 = " . $num2 . "<br>";
    echo "Número 3 = " . $num3 . "<br>";
    
    // Usamos if-else
    if ($num1 >= $num2 && $num1 >= $num3) {
        $mayor = $num1;
    } 
        else if($num2>=$num1 && $num2>=$num3){
                $mayor = $num2;
}
else{
    $mayor = $num3;
}

echo "<br> El mayor de los tres números es: " . $mayor . "<br>";
     ?>
</body>
</html>