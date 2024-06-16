<html>
    <head>
        <title>Conditional</title>
    </head>
    <body>
        <?php
            // Crea un valor random
            $value = rand(1,10);

            // Muestra el valor en html
            echo "The drawn value is $value <br>";

            // Creamos una condiccional para que muestre un mensaje segun el valor random.
            if($value <= 5) {
                echo "Is less than or equal to 5.";
            } else {
                echo "Is greater than 5.";
            }

            echo "<br><br>";

            // Creamos otro valor random
            $value2 = rand(1,100);

            // Mostramos el valor por html
            echo "The drawn value is $value2 <br>";

            // Creamos una condiccional que muestra un mensaje si el número es de un, dos o tres digitos.
            if($value2 <= 9){
                echo "Has one digit.";
            }elseif ($value2 < 100){
                echo "Has two digit.";
            }else{
                echo "Has three digit.";
                }

            echo "<br><br>";

            // Creamos otro valor random.
            $value3 = rand(1,3);
            // Mostramos el valor por html.
            echo "The drawn value is $value3 <br>";

            // Creamos una condicional para que muestre un mensaje si el número es uno, dos o tres.
            if($value3 == 1){
                echo "El número es Uno.";
            }elseif($value3 == 2){
                echo "El número es Dos.";
            }else{
                echo "El número es Tres.";
            }


        ?>
    </body>
</html>