<!-- Declara un array de strings de nombre $jugador e introduce en él 5 elementos que sean "Crovic", "Antic", "Malic", "Zulic" y "Rostrich". A continuación haz que 
se muestre la frase: <<La alineación del equipo está compuesta por Crovic, Antic, Malic, Zulic y Rostrich.>>  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12_Ejercicio</title>
</head>
<body>
    <?php 
    $jugador = array("Crovic", "Antic", "Malic", "Zulic", "Rostrich");
    echo "La alineación del equipo está compuesta por " . 
     $jugador[0] . ", " . 
     $jugador[1] . ", " . 
     $jugador[2] . ", " . 
     $jugador[3] . " y " . 
     $jugador[4] . ".";
    echo "<hr>";
     // Otra manera
     echo "<h3> Otro método: </h3>";
     $jugador=["Crovic", "Antic", "Malic", "Zulic", "Rostrich"];
        echo "La alineación del equipo está compuesta por ";
        foreach($jugador as $clave=>$valor){
            if($clave==count($jugador)-2){ //Es el penultimo jugador
                echo $valor." y ";
            }
            elseif($clave==count($jugador)-1){ //Es el ultimo jugador
                echo $valor.".";
            }
            else{        
                echo $valor.", ";
            }
        }
     ?>
</body>
</html>