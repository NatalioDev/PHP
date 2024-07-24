<html>

<head>
  <title>Hipervínculos - DB</title>
</head>

<body>
  <?php
    // Establecemos la conexión a la base de datos.
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");
    // Si hay problemas en la conexión, muestra "Connection issues." y detiene la ejecución.

    // Ejecutamos la consulta para obtener los códigos y nombres de los cursos.
    $register = mysqli_query($connection, "select code, courseName from course") or die ("Problems in select:" . mysqli_error($connection));
    // Si hay problemas en la consulta, muestra el error y detiene la ejecución.

    // Iteramos sobre cada curso obtenido.
    while ($reg = mysqli_fetch_array($register)) {
      // Mostramos el código del curso.
      echo "Code:" . $reg['code'] . "<br>";
      // Mostramos el nombre del curso como un hipervínculo que pasa el código del curso como parámetro en la URL.
      echo "Course Name: <a href=\"hipervinculoDBReturn.php?code=$reg[code]\">" . $reg['courseName'] . "</a><br>";
      // Agregamos una línea de separación entre cada curso.
      echo "<hr>";
    };

    // Cerramos la conexión a la base de datos.
    mysqli_close($connection);
  ?>
</body>

</html>