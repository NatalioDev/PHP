<html>
<head>
    <title>Image Dynamic</title>
</head>
<body>
    <!-- Formulario para verificar la imagen creada dinamicamente -->
    <form action="imagesDynamicHTMLReturn.php" method="post">
        Verification Digits: <img src="imagesDynamic.php">
        <br>
        Enter value:
        <input type="text" name="number">
        <br>
        <input type="submit" value="Verify">
    </form>
</body>
</html>