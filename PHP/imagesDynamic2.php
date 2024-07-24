<?php
    // Definimos el ancho y la altura de la imagen.
    $width = 100;
    $high = 30;

    // Creamos una nueva imagen con las dimensiones especificadas.
    $image = imagecreate($width,$high);
    // Asignamos el color gris oscuro a la imagen.
    $darkGray = imagecolorallocate($image, 100, 100, 100);
    // Rellenamos la imagen con el color gris oscuro.
    imagefill($image, 0, 0, $darkGray);
    
    // Asignamos el color gris claro a la imagen.
    $lightGray = imagecolorallocate($image, 200, 200, 200);
    // Dibujamos un rectángulo relleno con el color gris claro.
    imagefilledrectangle($image, 5, 5, 95, 25, $lightGray);

    // Asignamos el color rojo a la imagen.
    $red = imagecolorallocate($image, 200, 0, 0);
    // Dibujamos una cadena de texto en la imagen en rojo.
    imagestring($image, 10, 10, 5, "Button 1", $red);

    // Indicamos que el contenido que se está enviando es una imagen JPEG.
    header("Content-type: image/jpeg");
    // Enviamos la imagen al navegador.
    ImageJPEG($image);
    // Liberamos la memoria asociada a la imagen.
    ImageDestroy($image);
?>