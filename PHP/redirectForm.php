<html>
<head>
    <title>Redirect Form</title>
</head>

<body>
    <?php
    // Verificamos si se ha recibido un parámetro 'error' en la solicitud.
        // Si existe, mostramos un mensaje indicando que se ingresó una contraseña incorrecta.
        if (isset($_REQUEST['error'])) {
            echo "You entered the wrong password.<br>";
        }
    ?>
    <!-- Formulario que envía los datos a 'redirectForm2.php' usando el método POST -->
    <form action="redirectForm2.php" method="post">
        <!-- Campo de entrada para la contraseña -->
        <h3>Enter password:</h3>
        <input type="password" name="password"><br><br>
        <!-- Botón de envío del formulario -->
        <input type="submit" value="Confirm">
    </form>
</body>

</html>
