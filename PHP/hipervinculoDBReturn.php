<html>

<head>
    <title>Database Group By</title>
</head>

<body>
  <?php
    // Creamos la conexión a la base de dotos.
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");
    // Si hay problemas en la conexión, muestra "Connection issues." y detiene la ejecución.

    // Ejecutamos la consulta para obtener los nombres de los estudiantes registrados en el curso especificado.
    $register = mysqli_query($connection, "select name from students where courseCode=$_REQUEST[code]") or die ("Problems in select: " . mysqli_error($connection));
    // Si hay problemas en la consulta, muestra el error y detiene la ejecución.

    // Mostramos el encabezado de la lista de estudiantes registrados.
    echo "<h3>Registered Students:</h3>";
    // Iteramos sobre cada estudiante obtenido.
    while ($reg = mysqli_fetch_array($register)) {
      // Mostramos el nombre del estudiante como un elemento de lista.
      echo "<li>" . $reg['name'] . "</li>";
    }

    // Cerramos la conexión a la base de datos.
    mysqli_close($connection);

  ?>
</body>

</html>