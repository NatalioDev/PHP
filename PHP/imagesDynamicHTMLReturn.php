<?php
session_start();
?>
<html>
<head>
    <title>Image Dynamic - Return</title>
</head>
<body>
    <!-- Mostramos un mensaje si la verificación es correcta o no -->
    <?php
        if ($_SESSION['randomNumber'] == $_REQUEST['number']) {
            echo "<h3>I enter the correct value.</h3>";
        }else{
            echo "<h3>Incorrect.</h3>";
        }
    ?>
</body>
</html>