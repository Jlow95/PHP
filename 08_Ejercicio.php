<!-- Considera estás desarrollando una web donde trabajas con tipos de motor (suponemos que se trata del tipo de motor de una bomba para mover fluidos). 
Define una variable $tipoMotor y asígnale valor 3. Los valores posibles son 1, 2, 3, 4. A través de un condicional switch haz lo siguiente: 
a. Si el tipo de motor es 0, mostrar un mensaje indicando “No hay establecido un valor definido para el tipo de bomba”. 
b. Si el tipo de motor es 1, mostrar un mensaje indicando “La bomba es una bomba de agua”. 
c. Si el tipo de motor es 2, mostrar un mensaje indicando “La bomba es una bomba de gasolina”. 
d. Si el tipo de motor es 3, mostrar un mensaje indicando “La bomba es una bomba de hormigón”. 
e. Si el tipo de motor es 4, mostrar un mensaje indicando “La bomba es una bomba de pasta alimenticia”. 
f. 
Si no se cumple ninguno de los valores anteriores mostrar el mensaje “No existe un valor válido para tipo de bomba”. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $tipoMotor = 3;
    echo "Tipo de motor: " .  $tipoMotor . "<br> <br>";
    switch ($tipoMotor) {
        case 0:
            echo "No hay establecido un valor definido para el tipo de bomba.";
            break;
        case 1:
            echo "La bomba es una bomba de agua.";
            break;
        case 2:
            echo "La bomba es una bomba de gasolina";
            break;
        case 3:
            echo "La bomba es una bomba de hormigón";
            break;
        case 4:
            echo "La bomba es una pasta alimenticia";
            break;
        default:
            echo "No existe un valor válido para tipo de bomba";
        break;
    }
     ?>
</body>
</html>