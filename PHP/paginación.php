<?php
// Verificamos si existe la variable 'pos' en la solicitud, si no, inicializamos $start en 0.
    if(isset($_REQUEST['pos']))
        $start = $_REQUEST['pos'];
    else
        $start = 0;
?>
<html>

<head>
    <title>Paginación</title>
</head>

<body>
  <?php
    // Creamos la conexión a la base de dotos.
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Realizamos la consulta a la base de datos con una cláusula LIMIT para la paginación.
    $register = mysqli_query($connection, "select std.code as code,
    name,
    email,
    courseCode,
    courseName
    from students as std
    inner join course as crs on crs.code = std.courseCode
    limit $start,2") or die ("Problems in select: " . mysqli_error($connection));

    // Variable para contar el número de registros impresos.
    $printed = 0;

    // Iteramos sobre los resultados de la consulta.
    while ($reg = mysqli_fetch_array($register)) {
        $printed++;

        // Mostramos los datos de cada registro.
        echo "Code:" . $reg['code'] . "<br>";
        echo "Name:" . $reg['name'] . "<br>";
        echo "Email:" . $reg['email'] . "<br>";
        echo "Course:" . $reg['courseName'] . "<br>";
        echo "<hr>";
    }

    // Control de navegación de la paginación.
    // Si estamos en la primera página, desactivamos el enlace de "Previous".
    if($start == 0){
        echo "Previous";
    }else{
        $previous = $start - 2;
        echo " <a href=\"paginación.php?pos=$previous\">Previous</a> ";
    }
    // Si se imprimieron 2 registros, mostramos el enlace de "Next", si no, lo desactivamos.
    if ($printed == 2) {
        $next = $start + 2;
        echo " <a href=\"paginación.php?pos=$next\">Next</a> ";
    } else {
        echo "Next";
    }

    // Cerramos la conexión a la base de datos.
    mysqli_close($connection);

  ?>
</body>

</html>