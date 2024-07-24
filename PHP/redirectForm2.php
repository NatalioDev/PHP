<?php
    // Verificamos si la contraseña ingresada es incorrecta, y redireccionamos a la página principal.
        if ($_REQUEST['password'] != "z80") {
            header("Location: redirectForm.php?error=1");
        }
    ?>
<html>
<head>
    <title>Redirect Form 2</title>
</head>
<body>
    <!-- Mostramos un mensaje de bienvenida -->
    <h2>Welcome</h2>
</body>

</html>