<html>

<head>
    <title>Database Delete</title>
</head>

<body>
  <?php
    // Nos conectamos a la DB
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Creamos un registro de la DB Students y le pasamos como parametro el email
    $register = mysqli_query($connection, "select code from students where email='$_REQUEST[email]'") or die ("Problems in select: " . mysqli_error($connection));

    // Condicional que recorre el registro
    if ($reg = mysqli_fetch_array($register)) {
        mysqli_query($connection, "delete from students where email='$_REQUEST[email]'") // Parametro para eliminar informacion de la DB Students que tenga el email que le pasamos con el REQUEST del Form
        or die ("Problems in select: " . mysqli_error($connection));

        echo "The student was deleted with said email."; // Mostramos un mensaje que se borra la información 
    }else{
        echo "There is no student with that email."; // Mostramos un mensaje si el estudiante no existe con ese email.
    }

    // Creamos otro registro de la DB Course y le pasamos como parametro el CourseName
    $register2 = mysqli_query($connection, "select code from course where courseName='$_REQUEST[nameCourse]'") or die ("Problems in select: " . mysqli_error($connection));

    echo "<br>";

    // Condicional que recorre el registro 
    if ($reg2 = mysqli_fetch_array($register2)) {
        mysqli_query($connection, "delete from course where courseName='$_REQUEST[nameCourse]'") or die ("Problems in select: " . mysqli_error($connection)); // Parametro para eliminar la información de la DB Course que tenga el nombre del curso que le indicamos con la REQUEST del Form

        echo "The course was delete."; // Mostramos un mensaje de que se borro el curso.
    }else {
        echo "The entered course name was not found."; // Mostramos un mensaje si no existe el curso ingresado.
    }


  ?>
</body>

</html>