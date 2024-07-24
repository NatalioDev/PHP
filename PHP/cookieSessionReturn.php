<?php

    // Creamos la cookie de sesión

    setcookie("user", "Nata", 0);

    // Entonces la sintaxis es:
// setcookie(<nombre de la cookie>,<valor>,0) 
?>
<html>

<head>
    <title>Cookie Session - Return</title>
</head>

<body>
    <!-- Mostramos un mensaje de que se creo correctamente -->
    <h3>Created session cookie.</h3>
    <!-- Enlace para volver a la página principal -->
    <a href="cookieSession.php">Return Page</a>
</body>

</html>