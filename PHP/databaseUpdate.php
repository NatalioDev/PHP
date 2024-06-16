<html>

<head>
    <title>Database Update</title>
</head>

<body>
  <?php
  // Nos conectamos a la DB
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Condicional que valida si los datos que son ingresado existen en la DB
    if (!empty($_REQUEST['emailNew']) && !empty($_REQUEST['emailOld'])){
      //Actualizar el email del estudiante
      mysqli_query($connection, "update students set email='$_REQUEST[emailNew]' where email='$_REQUEST[emailOld]'") or die ("Problems in select: " . mysqli_error($connection));

      echo "The email was modified successfully.<br>"; // Muestra un mensaje si se modificaron los datos correctamente
    }

    // Condicional que que valida si los datos ingresados existen en la DB
    if (!empty($_REQUEST['nameNew']) && !empty($_REQUEST['nameOld'])) {
      //Actualizar el nombre del curso
      mysqli_query($connection, "update course set courseName='$_REQUEST[nameNew]' where courseName='$_REQUEST[nameOld]'") or die ("Problems in select: " . mysqli_error($connection));

      echo "The course name has been changed."; // Muestra un mensaje si los datos se modificaron con exito
    }

  ?>
</body>

</html>