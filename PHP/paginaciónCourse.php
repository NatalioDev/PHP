<?php
// Verificamos si existe la variable 'pos' en la solicitud. Si existe, la asignamos a $start, de lo contrario, inicializamos $start en 0.
    if(isset($_REQUEST['pos'])){
        $start = $_REQUEST['pos'];
    }else{
        $start = 0;
    }
?>
<html>

<head>
    <title>Paginación Course</title>
</head>

<body>
  <?php
    // Creamos la conexión a la base de dotos.
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Realizamos la consulta a la base de datos con una cláusula LIMIT para la paginación.
    $register = mysqli_query($connection, "select code,
    courseName
    from course
    limit $start,3") or die ("Problems in select: " . mysqli_error($connection));

    // Variable para contar el número de registros impresos.
    $printed = 0;

    // Iteramos sobre los resultados de la consulta.
    while ($reg = mysqli_fetch_array($register)) {
        $printed++;
        // Mostramos los datos de cada curso.
        echo "Code:" . $reg['code'] . "<br>";
        echo "Course:" . $reg['courseName'] . "<br>";
        echo "<hr>";
    }
    // Control de navegación de la paginación.
    // Si estamos en la primera página, desactivamos el enlace de "Previous".
    if($start == 0) {
        echo "Previous";
    } else {
        $previous = $start - 3;
        echo " <a href=\"paginaciónCourse.php?pos=$previous\">Previous</a> ";
    }
    // Si se imprimieron 3 registros, mostramos el enlace de "Next", si no, lo desactivamos.
    if ($printed == 3) {
        $next = $start + 3;
        echo " <a href=\"paginaciónCourse.php?pos=$next\">Next</a> ";
    } else {
        echo "Next";
    }
    

    // Cerramos la conexión a la base de datos.
    mysqli_close($connection);

  ?>
</body>

</html>