<html>

<head>
    <title>Server - Upload - Return</title>
</head>

<body>
  <?php
    // Verificamos si se ha subido la primera foto.
    if ($_FILES['photo1']['tmp_name'] != "") {
      // Copiamos la foto subida desde el directorio temporal al directorio actual con el nombre original.
        copy($_FILES['photo1']['tmp_name'], $_FILES['photo1']['name']);
        echo "The photo 1 was registered on the server.<br>";
        // Obtenemos el nombre del archivo.
        $file = $_FILES['photo1']['name'];
        // Mostramos la imagen en el navegador.
        echo "<img src=\"$file\"><br>";
    }
    // Verificamos si se ha subido la segunda foto.
    if ($_FILES['photo2']['tmp_name'] != "") {
      // Copiamos la foto subida desde el directorio temporal al directorio actual con el nombre original.
        copy($_FILES['photo2']['tmp_name'], $_FILES['photo2']['name']);
        echo "The photo 2 was registered on the server.<br>";
        // Obtenemos el nombre del archivo.
        $file = $_FILES['photo2']['name'];
        // Mostramos la imagen en el navegador.
        echo "<img src=\"$file\"><br>";
    }
    // Verificamos si se ha subido la segunda foto.
    if ($_FILES['photo3']['tmp_name'] != "") {
      // Copiamos la foto subida desde el directorio temporal al directorio actual con el nombre original.
        copy($_FILES['photo3']['tmp_name'], $_FILES['photo3']['name']);
        echo "The photo 3 was registered on the server.<br>";
        // Obtenemos el nombre del archivo.
        $file = $_FILES['photo3']['name'];
        // Mostramos la imagen en el navegador.
        echo "<img src=\"$file\">";
    }
    
  ?>
</body>

</html>