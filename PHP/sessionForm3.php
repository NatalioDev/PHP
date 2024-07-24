<?php
    // Iniciar la sesión
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Session User</title>
</head>

<body>
    <!-- Título indicando que se ha recuperado la variable de sesión -->
    <h3>Session Variable Retrieved</h3>
    <br>
    <?php
        // Verificar si la variable de sesión 'user' está establecida y mostrar su valor
        if (isset($_SESSION['user'])) {
            echo "User: " . $_SESSION['user'] . "<br>";
        } else {
            echo "No user session variable set.";
        }
    ?>
</body>

</html>
