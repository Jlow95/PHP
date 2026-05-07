<!-- Crea el código PHP que de respuesta al siguiente planteamiento: 
Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados en función del nivel y del idioma que se estudia. 
Tendremos 3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3 = Ruso). Se pide realizar la declaración de la matriz y asignarle los valores indicados en la siguiente imagen a cada elemento y mostrar 
por pantalla los alumnos que existen en cada nivel e idioma: 
en el nivel básico, idioma inglés, hay 1 alumno. 
en el nivel básico, idioma francés, hay 14 alumnos. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_13</title>
</head>

<body>
    <?php
    // Matriz asociativa
    $idiomas = array(
        "básico" => array("ingles" => 1, "francés" => 14, "alemán" => 8, "ruso" => 3),
        "medio" => array("ingles" => 6, "francés" => 19, "alemán" => 7, "ruso" => 2),
        "perfeccionamiento" => array("ingles" => 3, "francés" => 13, "alemán" => 4, "ruso" => 1)
    );
    foreach ($idiomas as $nivel => $filaIdiomas) {
        foreach ($filaIdiomas as $idioma => $numeroAlumnos) {
            echo "En el nivel $nivel, idioma $idioma, hay $numeroAlumnos alumno/s<br>";
        }
    }
    echo "<hr>";
    echo "<h3> Otro método </h3>";
    $alumnos = array(
        array(1, 14, 8, 3),   // Nivel Básico
        array(6, 19, 7, 2),   // Nivel Medio
        array(3, 13, 4, 1)    // Nivel Perfeccionamiento
    );

    // Arrays auxiliares para mostrar los textos
    $niveles = array("básico", "medio", "perfeccionamiento");
    $idiomas = array("inglés", "francés", "alemán", "ruso");

    // Mostrar los datos por pantalla
    for ($i = 0; $i < count($alumnos); $i++) {
        for ($j = 0; $j < count($alumnos[$i]); $j++) {
            echo "En el nivel {$niveles[$i]}, idioma {$idiomas[$j]}, hay {$alumnos[$i][$j]} alumnos.<br>";
        }
    }

     echo "<hr><hr>";
        //Con matriz indexada
        $numAlumnos=[[1,14,8,3],[6,19,7,2],[3,13,4,1]];
        $niveles=["basico","medio","perfeccionamiento"];
        $idiomas=["inglés","francés","alemán","ruso"];
        foreach($numAlumnos as $n=>$fila){
            foreach($fila as $i=>$num){
                echo "En el nivel ".$niveles[$n].", idioma ".$idiomas[$i].", hay ".$num." alumno/s<br>";
            }
        }

    ?>
</body>

</html>