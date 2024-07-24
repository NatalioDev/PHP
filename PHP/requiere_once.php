<html>
<head>
    <title>Requiere_once </title>
</head>

<body>
    <?php
        // Incluimos el archivo 'requiere_once2.php' una sola vez.
        require_once("requiere_once2.php");
        // Llamamos a la función 'pageHeader' definida en 'requiere_once2.php' para mostrar el encabezado de la página.
        pageHeader("Main page Title");
        
        echo "<br><br><center>This is the body of the page.<br><br></center>";

        // Llamamos a la función 'pageFooter' definida en 'requiere_once2.php' para mostrar el pie de página.
        pageFooter("Footer.");

        echo "<hr><br>";

        // Obtenemos la conexión a la base de datos usando la función 'returnConnection' definida en 'requiere_once2.php'.
        $connection = returnConnection();

        // Realizamos una consulta a la base de datos para obtener información de estudiantes y sus cursos.
        $register = mysqli_query($connection, "select std.code as code,
        name,
        email,
        courseCode,
        courseName
        from students as std
        inner join course as crs on crs.code=std.courseCode") or die ("Problems in select:" . mysqli_error($connection));

        // Iteramos sobre los resultados de la consulta y mostramos la información de cada estudiante.
        while($reg = mysqli_fetch_array($register)){
            echo "Code: " . $reg['code'] . "<br>";
            echo "Name: " . $reg['name'] . "<br>";
            echo "Email: " . $reg['email'] . "<br>";
            echo "Course: " . $reg['courseName'] . "<br>";
            echo "<hr>";
        }

        // Cerramos la conexión a la base de datos.
        mysqli_close($connection);
    ?>
</body>

</html>