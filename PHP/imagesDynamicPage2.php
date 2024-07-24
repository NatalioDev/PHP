<html>
<head>
    <title>Image Dynamic - Page 2</title>
</head>
<body>
    <!-- Mostramos el sitio web ingresado por el uruario y el puntaje generado por una imagen dinamica -->
    <?php
        echo "The address: $_REQUEST[direction] has";
    ?>
    <img src="imagesDynamicPageReturn.php?points=<?php echo $_REQUEST['points']; ?>">
</body>
</html>