<html>

<head>
    <title>Database Update</title>
</head>

<body>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    if (!empty($_REQUEST['emailNew']) && !empty($_REQUEST['emailOld'])){
      //Actualizar el email del estudiante
      mysqli_query($connection, "update students set email='$_REQUEST[emailNew]' where email='$_REQUEST[emailOld]'") or die ("Problems in select: " . mysqli_error($connection));

      echo "The email was modified successfully.<br>";
    }

    if (!empty($_REQUEST['nameNew']) && !empty($_REQUEST['nameOld'])) {
      //Actualizar el nombre del curso
      mysqli_query($connection, "update course set courseName='$_REQUEST[nameNew]' where courseName='$_REQUEST[nameOld]'") or die ("Problems in select: " . mysqli_error($connection));

      echo "The course name has been changed.";
    }

  ?>
</body>

</html>