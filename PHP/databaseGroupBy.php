<html>

<head>
    <title>Database Group By</title>
</head>

<body>
  <?php
    // Creamos la conexión a la base de dotos.
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");
    // Si hay problemas en la conexión, muestra "Connection issues." y detiene la ejecución.

    // Ejecutamos la consulta para obtener la cantidad de estudiantes por curso.
    $register = mysqli_query($connection, "select count(std.code) as quantity,
    courseName,
    courseCode
    from students as std
    inner join course as crs on crs.code = std.courseCode
    group by std.courseCode") or die ("Problems in select: " . mysqli_error($connection));
    // Si hay problemas en la conexión, muestra "Connection issues." y detiene la ejecución.

    // Iteramos sobre cada curso obtenido.
    while ($reg = mysqli_fetch_array($register)){
        // Mostramos el nombre del curso.
        echo "Course name: " . $reg['courseName'] . "<br>";
        // Mostramos la cantidad de estudiantes registrados en ese curso.
        echo "Number of registered: " . $reg['quantity'] . "<br>";

        // Ejecutamos una segunda consulta para obtener los nombres de los estudiantes en el curso actual.
        $register2 = mysqli_query($connection, "select name
        from students
        where courseCode=$reg[courseCode]") or die ("Problems in select: " . mysqli_error($connection));
        // Si hay problemas en la conexión, muestra "Connection issues." y detiene la ejecución.

        // Mostramos los nombres de los estudiantes.
        echo "Student name: ";
        while($reg2 = mysqli_fetch_array($register2)){
            echo $reg2['name'] . ". ";
        }
        // Agregamos una línea de separación entre cada curso.
        echo "<hr>";
    };

    // Cerramos la conexión a la base de datos.
    mysqli_close($connection);

  ?>
</body>

</html>