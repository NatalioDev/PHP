<?php
    // Iniciar la sesión
    session_start();

    // Asignar valores a las variables de sesión
    $_SESSION['user'] = $_REQUEST['username'];
    $_SESSION['password'] = $_REQUEST['userpassword'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Session 2</title>
</head>

<body>
  <!-- Mensaje que indica que se han establecido dos variables de sesión -->
  <h3>Two session variables were set.</h3>
  <br>
  <!-- Enlace para ir a la página donde se recuperarán las variables de sesión -->
  <a href="sessionReturn.php">Go to the page where the session variables will be retrieved.</a>
</body>

</html>
