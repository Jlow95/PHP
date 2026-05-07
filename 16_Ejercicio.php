<!-- El programa almacena un número en una variable y muestra si es perfecto o no. Mediante un bucle for sumaremos los divisores del número. Al final si esta suma es igual al número mostraremos el mensaje correspondiente. -->
 <!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16_Ejercicio</title>
 </head>
 <body>
    <?php 
       $numero = 28;
       $sumaDeDivisores = 0;
       for ($i = 1; $i < $numero; $i++) {
        if($numero % $i == 0) {
            $sumaDeDivisores += $i;
        }
       }
       if ($sumaDeDivisores == $numero) {
        echo "El número $numero es perfecto <br>";
        echo "La suma de sus divisores es $sumaDeDivisores <br>";
       } else {
        echo "El número $numero NO es perfecto <br>";
        echo "La suma de sus divisores es $sumaDeDivisores <br>";
       }
     ?>
 </body>
 </html>