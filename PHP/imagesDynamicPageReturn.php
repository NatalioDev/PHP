<?php
    // Definimos el ancho y la altura de la imagen.
    $width = 100;
    $high = 30;

    // Creamos una nueva imagen con las dimensiones especificadas.
    $image = imagecreate($width, $high);

    // Asignamos el color amarillo a la imagen.
    $yellow = imagecolorallocate($image, 255, 255, 0);
    // Rellenamos la imagen con el color amarillo.
    imagefill($image, 0, 0, $yellow);

    // Asignamos el color rojo a la imagen.
    $red = imagecolorallocate($image, 255, 0, 0);

    // Inicializamos la coordenada x para dibujar las estrella.
    $x = 10;

    // Dibujamos el número de estrellas especificado en $_REQUEST['points'].
    for ($i=0; $i < $_REQUEST['points']; $i++) { 
        // Dibujamos una estrella rellena en las coordenadas (x, 15) con un ancho y alto de 6 píxeles
        imagefilledellipse($image, $x, 15, 6, 6, $red);
        // Incrementamos la coordenada x para la próxima elipse.
        $x = $x + 15;
    }

    // Indicamos que el contenido que se está enviando es una imagen JPEG.
    header("Content-type: image/jpeg");
    // Enviamos la imagen al navegador.
    imagejpeg($image);
    // Liberamos la memoria asociada a la imagen.
    imagedestroy($image);
?>