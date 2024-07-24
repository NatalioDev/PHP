<?php
    // Iniciar la sesión para acceder a las variables de sesión
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Return</title>
</head>

<body>
    <?php
        // Verificar si la variable de sesión 'user' está establecida y mostrar su valor
        if (isset($_SESSION['user'])) {
            echo "Username retrieved from session variable: " . $_SESSION['user'];
        } else {
            echo "No username found in session.";
        }
        echo "<br><br>";

        // Verificar si la variable de sesión 'password' está establecida y mostrar su valor
        if (isset($_SESSION['password'])) {
            echo "The key retrieved from the session variable: " . $_SESSION['password'];
        } else {
            echo "No password found in session.";
        }
    ?>
</body>

</html>
