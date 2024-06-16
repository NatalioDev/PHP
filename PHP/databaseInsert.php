<html>

<head>
    <title>Database Insert</title>
</head>

<body>
  <?php
    // Nos conectamos a la DB
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Parametros para agregar un nuevo estudiante a la DB Students con su nombre, email y código del curso
    mysqli_query($connection, "insert into students(name,email,courseCode) values ('$_REQUEST[name]','$_REQUEST[email]',$_REQUEST[codeCourse])") or die ("Problems in select: " . mysqli_error($connection));

    // Cerramos la conexion
    mysqli_close($connection);

    // Mostramos un mensaje de que se cargaro los datos con éxito
    echo "The students was discharged.";

  ?>
</body>

</html>