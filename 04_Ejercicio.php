<!-- Escribe un programa java que declare una variable C de tipo entero y asígnale un valor. A continuación muestra un mensaje indicando si el valor de C es positivo o negativo, si es par o impar, si es múltiplo de 5, si es múltiplo de 10 y si es mayor o menor que 100. Consideraremos el 0 como positivo. Utiliza el operador condicional ( ? : ) dentro del println para resolverlo. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04_Ejercicio</title>
</head>

<body>
    <?php
    // Declarar e inicializar la variable C
    $C = 55;

    // Mostrar si es positivo o negativo
    echo $C . ($C >= 0 ? " es positivo" : " es negativo") . "<br>";

    // Mostrar si es par o impar
    echo $C . ($C % 2 == 0 ? " es par" : " es impar") . "<br>";

    // Mostrar si es múltiplo de 5
    echo $C . ($C % 5 == 0 ? " es múltiplo de 5" : " no es múltiplo de 5") . "<br>";

    // Mostrar si es múltiplo de 10
    echo $C . ($C % 10 == 0 ? " es múltiplo de 10" : " no es múltiplo de 10") . "<br>";

    // Mostrar si es mayor o menor que 100
    echo $C . ($C > 100 ? " es mayor que 100" : ($C < 100 ? " es menor que 100" : " es igual a 100")) . "<br>";
    ?>
</body>

</html>