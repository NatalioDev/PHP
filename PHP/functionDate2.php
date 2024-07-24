<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuction - Date - Return</title>
</head>
<body>
    <?php
        //  Si queremos los días y meses sin el cero delante y el año con dos dígitos tenemos entonces:
        $date = date("j/n/y");
        // Los caracteres sque ahora tenemos son:
            // j día del mes "1" al "31"
            // n mes "1" al "12"
            // y año con dos dígitos
        echo "<h3>Today's date is: $date</h3>";

        // Abrimos (o creamos) un archivo llamado "dateForm.txt" en modo "a" (append).
        // Si hay problemas en la creación o apertura, mostramos un mensaje de error y detenemos la ejecución.
        $archive = fopen("dateForm.txt", "a") or die ("Problems in creation");

        // Escribimos el contenido de los campos 'name' y 'complaints' del formulario en el archivo.
        fputs($archive, $_REQUEST['name']);
        fputs($archive, "\n"); // Agregamos una nueva línea después del nombre.
        fputs($archive, $_REQUEST['complaints']);
        fputs($archive, "\n"); // Agregamos una nueva línea después de la queja.

        // Escribimos la cadena "Date and Time:" en el archivo.
        fputs($archive, "Date and Time:");
        
        // Obtenemos la fecha actual en el formato "d/m/Y" (día/mes/año con cuatro dígitos) y la escribimos en el archivo.
        $date2 = date("d/m/Y");
        fputs($archive, $date2);
        fputs($archive, " "); // Agregamos un espacio en blanco.

        // Obtenemos la hora actual en el formato "H:i:s" (hora:minuto:segundo) y la escribimos en el archivo.
        $hour = date("H:i:s");
        fputs($archive, $hour);
        fputs($archive, "\n"); // Agregamos una nueva línea después de la hora.

        // Escribimos una línea de separación en el archivo.
        fputs($archive, "-------------------------------------------------\n");
        // Cerramos el archivo.
        fclose($archive);
        // Informamos al usuario que los datos fueron cargados exitosamente.
        echo("Data was loaded successfully.<br>");
        echo "<br>";

    ?>
    <!-- Enlace a otra página llamada functionDate3.php que muestra las quejas registradas -->
    <a href="functionDate3.php">Registered Complaints</a>
</body>
</html>
