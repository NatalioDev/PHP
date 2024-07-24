<?php
    // Eliminamos la cookie de las news
    setcookie("news", "", time() - 100, "/");
?>
<html>

<head>
    <title>Cookie - Delete - Return 2</title>
</head>

<body>
    <!-- Mostramos un mensaje de que se borro la cookie correctamente -->
    <h3>Was successfully deleted</h3>
    <br>
    <!-- Enlace para volver a la página principal -->
    <a href="cookieDelete.php">Back to the main page</a>
</body>

</html>