<html>
    <head>
        <title>Conditional</title>
    </head>
    <body>
        <?php
            $value = rand(1,10);
            echo "The drawn value is $value <br>";

            if($value <= 5) {
                echo "Is less than or equal to 5.";
            } else {
                echo "Is greater than 5.";
            }

            echo "<br><br>";

            $value2 = rand(1,100);
            echo "The drawn value is $value2 <br>";

            if($value2 <= 9){
                echo "Has one digit.";
            }elseif ($value2 < 100){
                echo "Has two digit.";
            }else{
                echo "Has three digit.";
                }

            echo "<br><br>";

            $value3 = rand(1,3);
            echo "The drawn value is $value3 <br>";

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