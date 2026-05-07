<!-- Escribe un programa que declare una variable entera N y asígnale un valor. A continuación escribe las instrucciones que realicen los siguientes: 
 Incrementar N en 77.  
 Decrementarla en 3.  
 Duplicar su valor.-->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01_Ejercicio</title>
</head>

<body>
  <?php
  // Declarar e incializar la variable
  $N = 1;
  // Mostrar el valor inicial
  echo "Valor inicial de N = " . $N . "<br>";
  // Incrementar N en 77
  $N2 = $N + 77;
  echo "N + 77 = " . $N2 . "<br>";
  // Decrementar N en 3
  $N3 = $N2 - 3;
  echo "N + 77 - 3 = " . $N3 . "<br>";
  // Duplicar su valor
  $N4 = $N3 * 2;
  echo "(N + 77 - 3) * 2 = " . $N4 . "<br>";
  ?>
</body>

</html>