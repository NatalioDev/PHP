<?php
    // En esta página verificamos cuál control radio está seleccionado, si es el primero, creamos la cookie mail con una vida de 1 año:
    if ($_REQUEST['option'] == "remember") {
        setcookie("email", $_REQUEST['emailUser'], time() + (60 * 60 * 24 * 365), "/");
    }elseif ($_REQUEST['option'] == "notRemember") 
    // En caso que esté seleccionado el segundo radio, creamos la misma cookie pero con una fecha de caducidad inferior a la actual (con esto estamos virtualmente eliminando la cookie):
    {
        setcookie("email", "", time() - 1000, "/");
    }
    // Creamos la cookie de las news seleccionada
    setcookie("news", $_REQUEST['radio1'], time() + (60 * 60 * 24 * 365), "/");
?>
<html>

<head>
    <title>Cookie - Delete - Return</title>
</head>

<body>
  <?php
    // Mostramos un mensaje al usuario según la opción elegida
    if ($_REQUEST['option'] == "remember") {
        echo "<h3>Create cookie</h3>";
    }elseif ($_REQUEST['option'] == "notRemember") {
        echo "<h3>Deleted cookie</h3>";
    }
  ?>
    <br>
    <h3>It was configured correctly.</h3>
    <br>
    <!-- Enlace para volver a la página anterior -->
    <a href="cookieDelete.php">Return Page</a>
</body>

</html>