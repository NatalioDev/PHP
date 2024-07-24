<html>

<head>
    <title>Cookie Session</title>
</head>

<body>
  <?php
    // Verificamos si existe la cookie
    if (isset($_COOKIE['user'])) {
      // Mostramos un mensaje con la cookie
        echo "Session cookie created. Its values is $_COOKIE[user]";
    }else{
        // Mostramos un mensaje que no existe la cookie
        echo "No session cookie.";
    }
  ?>
  <br>
  <!-- Enlace para crear la cookie y redirecionar a la siguiente pagina -->
  <a href="cookieSessionReturn.php">Create session cookie</a>
</body>

</html>