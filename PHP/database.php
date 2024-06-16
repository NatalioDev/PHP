<html>

<head>
    <title>Database</title>
</head>

<body>
  <?php
    // Creamos la conexión a la base de dotos.
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Agregamos el nuevo estudiante a la base de datos
    mysqli_query($connection, "insert into students(name,email,courseCode) values ('$_REQUEST[name]','$_REQUEST[email]',$_REQUEST[courseCode])") or die("Problems in Select." . mysqli_error($connection));

    // Agregamos el nuevo curso a la base de datos
    mysqli_query($connection, "insert into course(courseName) values('$_REQUEST[nameCourse]')") or die("Problems in Select." . mysqli_error($connection));

    // Cerramos la conexion con la base de datos
    mysqli_close($connection);

    // Mostramos un mensaje que los datos fueron creados correctamente
    echo "The students was registered.";

  ?>
</body>

</html>