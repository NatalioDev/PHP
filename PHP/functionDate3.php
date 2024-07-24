<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function - Date - Return 2</title>
</head>
<body>
    <?php

    // Otros caracteres de formato de la función date que nos pueden servir en alguna ocasión, los podemos ver en el siguiente ejemplo:

    // Obtenemos si el año actual es bisiesto usando el formato "L" de la función date.
    $data = date("L");

    // Si el año es bisiesto, $data será 1, de lo contrario será 0
    if ($data == 1) {
        echo "<h3>Leap-year</h3>"; // Año bisiesto
    }else{
        echo "<h3>Non-leap year</h3> "; // Año NO bisiesto
    }

    echo "<h3>Weekday</h3>";

    // Obtenemos el día de la semana en formato numérico usando el formato "w" de la función date.
    $data2 = date("w");

    // Usamos un switch para mostrar el nombre del día de la semana correspondiente al número.
    switch ($data2){
        case 0:
            echo "Sunday";
            break;
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
    }

    echo "<br>";

    // Abrimos el archivo "dateForm.txt" en modo lectura.
    // Si no se puede abrir, mostramos un mensaje de error y detenemos la ejecución.
    $archive = fopen("dateForm.txt", "r") or die ("File could not be opened.");

    // Leemos y mostramos el contenido del archivo línea por línea hasta el final del archivo.
    while(!feof($archive)){
        $line = fgets($archive); // Leemos una línea del archivo.
        $jumpLine = nl2br($line);// Convertimos los saltos de línea en etiquetas <br> para HTML.
        echo $jumpLine; // Mostramos la línea.
    }

    // Cerramos el archivo.
    fclose($archive);

    ?>
</body>
</html>

<!-- Los caracteres son:
L "1" o "0", según si el año es bisiesto o no
w día de la semana, en número, de "0" (Monday) a "6" (Saturday) -->