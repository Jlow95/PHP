<!-- Programa que dado un número entero N y muestre la tabla de multiplicar de ese número. Por ejemplo, si tenemos el valor 7 se mostrará por pantalla: -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_15</title>
</head>
<body>
    <?php 
$N = 7;
// Mostrar la tabla del número que elijas, en este caso el 7:
echo "Tabla de multiplicar del $N:<br><br>";
// colocas la incognita por la que vas a multiplicar el $i
for ($i = 1; $i <= 10; $i++) {
    $resultado = $N * $i;
    echo "$N x $i = $resultado<br>";
}
    ?>
</body>
</html>