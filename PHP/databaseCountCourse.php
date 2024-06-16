<html>

<head>
    <title>Database Count Course</title>
</head>

<body>
  <?php
    // Creamos la conexión a la DB
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Problems in connection");

    // Creamos un registro de la DB Course y hacemos un conteo de la misma
    $register = mysqli_query($connection, "select count(*) as amount from course") or die ("Problems in select: " . mysqli_error($connection));

    // Creamos una variable donde recorremos todo el registro
    $reg = mysqli_fetch_array($register);

    // Creamos otro registro de la DB Course
    $register2 = mysqli_query($connection, "select courseName from course") or die ("Problems in select: " . mysqli_error($connection));

    echo "Courses:<br>"; // Mostramos los cursos
    // Condicional del segundo registro donde mostramos todos los nombres de las cursos de la DB Course
    while ($reg2 = mysqli_fetch_array($register2)) {
        echo $reg2['courseName'] . "<br>"; // Mostramos los nombres de los cursos.
    }

    echo "<br>";
    echo "Total number of courses: " . $reg['amount']; // Mostramos un mensaje de la cantidad de los cursos totales
  ?>

</body>

</html>