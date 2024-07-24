<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Checkdate - Return</title>
</head>
<body>
    <?php
    // Podemos validar previamente si se han cargado valores numéricos en cada control "text", esto llamando a la función is_numeric(variable). Retorna true si la variable almacena un número, falso en caso contrario.
    if (is_numeric(
        $_REQUEST['month'] &&
        $_REQUEST['day'] &&
        $_REQUEST['year']
        )) {
    // Si los datos son correctos mostramos un mensaje
    if (checkdate($_REQUEST['month'], $_REQUEST['day'], $_REQUEST['year'])) {
        echo "<h3>The date entered is correct.</h3>";
    }else{
        // Si los datos NO son correctos mostramos un mensaje
        echo "<h3>The date is not valid.</h3>";
    }}else
    // Si los datos NO son númericos mostramos un mensaje
    {
        echo "<h3>The date is not valid.</h3>";
    }
    ?>
</body>
</html>