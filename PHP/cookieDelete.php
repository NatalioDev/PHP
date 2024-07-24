<html>

<head>
    <title>Cookie - Delete</title>
</head>

<body>

    <?php
        // Verificamos si existe una cookie:
        if (isset($_COOKIE['news'])) {
            // Si existe la mostramos por pantalla al usuario
            echo $_COOKIE['news'] . "<br>";
        }else{
            // Sino existe mostramos el formulario:
    ?>
        <form action="cookieDeleteReturn.php" method="post">
            <!-- Título -->
            <h4>Site Title Settings:</h4>
            <!-- Inputs radio para que selecione el usuario -->
            <input type="radio" name="radio1" value="Politic Notices"> Politic Notices. <br>
            <input type="radio" name="radio1" value="Economic Notices"> Economic Notices. <br>
            <input type="radio" name="radio1" value="Sport Notices"> Sport Notices. <br> <hr>
            <!-- Mostramos el email si existe  -->
            <h4>Enter your email: <input type="text" name="emailUser" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>"></h4> 
            <!-- Input para que recuerde el email del usuario -->
            <input type="radio" name="option" value="remember">
            Remember the email entered.
            <br>
            <!-- Input para que NO recuerde el email -->
            <input type="radio" name="option" value="notRemember">
            Not remember the email entered.
            <br>
            <br>
            <!-- Input para ir a la página que se muestra si la cookie se creo correctamente -->
            <input type="submit" value="Confirm">
        </form>
        <hr>
    <?php
    }
    ?>
    <br>
    <!-- Enlace par eliminar la cookie o rediriga al usuario a la siguiente página -->
    <a href="cookieDeleteReturn2.php">Delete Cookie</a>
</body>

</html>