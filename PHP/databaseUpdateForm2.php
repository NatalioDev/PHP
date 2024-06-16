<html>

<head>
    <title>Update Form 2</title>
</head>

<body>
    <?php
        // Nos conectamos a la DB
        $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");
        
        // Obtener la info del estudiante
        $register = mysqli_query($connection, "select * from students where email='$_REQUEST[email]'") or die ("Problems in select: " . mysqli_error($connection));
        
        // Variable para iniciar si el estudiante existe
        $studentsExists= false;
        
        // Condicional que recorre el registro
        if ($reg = mysqli_fetch_array($register)) {
            $studentsExists = true; // Si existe el estudiante cambiamos a true nuestra variable
        }

        // Obtener la informacion del curso
        $register2 = mysqli_query($connection, "select * from course where code='$_REQUEST[codeCourse]'") or die ("Problems in select: " . mysqli_error($connection));

        // Variable pára iniciar si el curso existe
        $courseExists = false;

        // Condicional que recorre el registro
        if ($reg2 = mysqli_fetch_array($register2)) {
            $courseExists = true; // Si exite el curso cambiamos a true nuestra variable
        }
    ?>

    <!-- Formulario para actualizar los datos del estudiante -->
  <form action="databaseUpdate.php" method="post">
    <!-- Si el estudiante existe muestra el input para que sea modificado -->
    <?php if ($studentsExists) { ?>
    <!-- Información del estudiante -->
    Enter new email:
    <input type="text" name="emailNew" value="<?php echo $reg['email']?>">
    <br>
    <input type="hidden" name="emailOld" value="<?php echo $reg['email']?>">
    <!-- Si el estudiante no existe mostramos un mensaje -->
    <?php } else {
        echo "<p>No students was found with said email.</p>";
    } 
    // Si el curso existe muestra el input para modificarlo
    if ($courseExists) {
    ?>
    <br>
    <hr>
        <!-- Información del curso -->
        Enter the new course name:
        <input type="text" name="nameNew" value="<?php echo $reg2['courseName']?>">
        <br>
        <input type="hidden" name="nameOld" value="<?php echo $reg2['courseName']?>">
    <?php
    // Si el curso no existe mostramos un mensaje
    } else {
        echo "No course found with this code.";
    }
    // Si existe el estudiante o el curso mostramos un botón para modificarlo
    if ($studentsExists || $courseExists) {
?>
    <br>
    <hr>
    <!-- Botón para actualizar los datos -->
    <input type="submit" value="Modify">
    <?php
    }
    ?>
</form>
</body>
</html>