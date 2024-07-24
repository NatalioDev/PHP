<html>

<head>
    <title>Cookie</title>
</head>

<body <?php
    // Verifica si ya existe una cokkie
    if (isset($_COOKIE['color'])) //El vector asociativo $_COOKIE almacena todas las cookies creadas por el visitante. 
    {
        echo "style=\"background:$_COOKIE[color]\"";
    }?>
>
  <form action="cookieReturn.php" method="post">
    <h3>Select what color you want the page to be from now on:</h3>
    <input type="radio" name="radio" value="red"> Red <br>
    <input type="radio" name="radio" value="green"> Green <br>
    <input type="radio" name="radio" value="blue"> Blue <br>
    <br>
    Enter your name:
    <input type="text" name="name" value="<?php
    // Cada vez que ingrese al formulario mostrar el último nombre de usuario ingresado.
    if (isset($_COOKIE['user'])) 
    {
        echo $_COOKIE['user'];
    }?>">
    <br>
    <br>
    
    <input type="submit" value="Create cookie">
  </form>
</body>

</html>