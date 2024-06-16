<html>
    <head>
        <title>Repetitive Structures</title>
    </head>
    <body>
        <?php

            // For

            for ($f = 1; $f <= 100; $f++){
                echo $f;
                echo ", ";
            }

            echo "<br><br>";

            // While

            $value = rand(1,100);
            $start = 1;

            while ($start <= $value){
                echo $start;
                echo ", ";
                $start++;
            }

            echo "<br><br>";

            // Do While
            $value2 = rand(1,100);
            $start2 = 1;
            do {
                echo $start2++;
                echo ", ";
            } while ($start2 <= $value2);

            echo "<br><br>";

            // Multiplication table of 2 with For, While and Do/While

            // For
            echo "Multiplication table of 2 with For: <br>";
            $f=1; // Initialize the counter.

            for ($i=2; $i <=20 ;$i = $i+2) // Condition to continue the loop. 
            { 
                echo"2x$f=$i <br>";
                $f++; // Increase the counter.
            }

            echo "<br><br>";

            // While:

            echo "Multiplication table of 2 with While: <br>";

            $start3 = 1; // Initialize the counter.
            $value3 = 2; // Initialize the multiple.

            while ($value3 <= 20 ) // Condition to continue the loop.
            {
                echo"2x$start3=$value3 <br>";

                $start3++; // Increase the counter.
                $value3 +=2; // Increase the multiple.
            }

            echo "<br><br>";

            // Do While:

            echo "Multiplication table of 2 with Do/While: <br>";

                $start4 = 1; // Initialize the counter.
                $value4 = 2; // Initialize the multiple.
            do {
                echo"2x$start4=$value4 <br>";
                
                $start4 ++; // Increase the counter.
                $value4 +=2; // Increase the multiple.
            } while ($value4 <= 20); // Condition to continue the loop.
        ?>
    </body>
</html>