<?php
    // Definimos el ancho y la altura de la imagen.
    $width = 100;
    $high = 30;


    // $image = imagecreate($width,$high);
    // $yellow = ImageColorAllocate($image, 255, 255, 0);
    // ImageFill($image, 0, 0, $yellow);

    // $red = ImageColorAllocate($image, 255, 0, 0);

    // $valueRandom = rand(100000, 999999);

    // ImageString($image, 5, 25, 5, $valueRandom, $red);

    // for ($c=0; $c <=5; $c++) { 
    //     $x1 = rand(0, $width);
    //     $y1 = rand(0, $high);
    //     $x2 = rand(0, $width);
    //     $y2 = rand(0, $high);

    //     ImageLine($image, $x1, $y1, $x2, $y2, $red);
    // }

    // Second Image:
    // Creamos una nueva imagen con las dimensiones especificadas.
    $image2 = imagecreate($width, $high);

    // Asignamos el color amarillo a la imagen.
    $yellow = ImageColorAllocate($image2, 255, 255, 0);
    // Rellenamos la imagen con el color amarillo.
    ImageFill($image2, 0, 0, $yellow);

    // Asignamos el color rojo a la imagen.
    $red = ImageColorAllocate($image2, 255, 0, 0);

    // Generamos un valor aleatorio de 6 dígitos.
    $valueRandom = rand(100000, 999999);

    // Iniciamos una sesión para almacenar el valor aleatorio.
    session_start();
    // Guardamos el valor aleatorio en una variable de sesión.
    $_SESSION['randomNumber'] = $valueRandom;
    // Dibujamos el valor aleatorio en la imagen en rojo.
    imagestring($image2, 5, 25, 5, $valueRandom, $red);

    // Dibujamos 6 líneas aleatorias en la imagen para mayor seguridad.
    for ($c=0; $c <=5; $c++) { 
        // Generamos las coordenadas aleatorias para las líneas.
        $x1 = rand(0, $width);
        $y1 = rand(0, $high);
        $x2 = rand(0, $width);
        $y2 = rand(0, $high);

        // Dibujamos una línea en la imagen usando las coordenadas generadas.
        ImageLine($image2, $x1, $y1, $x2, $y2, $red);
    }

    // Indicamos que el contenido que se está enviando es una imagen JPEG.
    header("Content-type: image/jpeg");
    // Enviamos la imagen al navegador.
    ImageJPEG($image2);
    // Liberamos la memoria asociada a la imagen.
    ImageDestroy($image2);
?>