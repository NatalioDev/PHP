<?php
    // Iniciar la sesión
    session_start();

    // Conectar a la base de datos
    $connection = mysqli_connect("localhost", "root", "", "base1") or die("Problems in connection");

    // Realizar la consulta para obtener el código, nombre y código del curso del estudiante usando el email proporcionado
    $register = mysqli_query($connection, "select code, name, courseCode from students where email='$_REQUEST[email]'") or die("Problems in select:" . mysqli_error($connection));
    
    // Si se encuentra el registro del estudiante, establecer una variable de sesión con el nombre del usuario
    if ($reg = mysqli_fetch_array($register)) {
        $_SESSION['user'] = $reg['name'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Form 2</title>
</head>

<body>
    <!-- Enlace para ir a la página principal donde se recuperará la variable de sesión -->
    <a href="sessionForm3.php">Enter main page</a>
</body>

</html>
