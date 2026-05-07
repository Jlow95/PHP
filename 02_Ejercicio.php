<!-- Programa que almacene el valor del radio de una circunferencia en una variable y calcula y muestra por pantalla la longitud y el área de la circunferencia. 
Longitud de la circunferencia = 2*PI*Radio 
Área de la circunferencia = PI*Radio^2 -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02_Ejercicio</title>
</head>
<body>
    <?php
// Declarar e inicializar la variable radio
$radio = 5;

// Mostrar el valor del radio
echo "Radio de la circunferencia = " . $radio . "<br>";

// Calcular la longitud de la circunferencia
// Longitud = 2 * PI * Radio
$longitud = 2 * pi() * $radio;
echo "Longitud de la circunferencia = " . $longitud . "<br>";

// Calcular el área de la circunferencia
// Área = PI * Radio^2
$area = pi() * pow($radio, 2);
echo "Área de la circunferencia = " . $area . "<br>";
?>
</body>
</html>