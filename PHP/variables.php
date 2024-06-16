<html>
    <head>
        <title>Variables</title>
    </head>
    <body>
        <?php
            $day = 24; // type integer.
            $salary = 758.43; // type double.
            $name = "Nata"; // type string.
            $exists = true; // type boolean.

            $chain1 = "Diego "; 
            $chain2 = "Juan ";
            $chain3 = "Ana ";

            $all = $chain1 . $chain2 . $chain3 . "<br>";

            $age = 24;

            $note1 = 10;
            $note2 = 7;
            $note3 = 8;

            echo "Integer Variable: ";
            echo $day;
            echo "<br>";
            
            echo "Double Variable: ";
            echo $salary;
            echo "<br>";
            
            echo "String Variable: ";
            echo $name;
            echo "<br>";
            
            echo "Boolean Variable: ";
            echo $exists;
            echo "<br>";
            
            echo "Concatenate Strings: ";
            echo $all;
            echo "<br>";

            echo "Concatenate integer variable: ";
            echo $chain1 . " he is $age years old.";
            echo "<br>";

            echo "Concatenate multiple integer variables: ";
            echo "Juan approved the subject with grades $note1, $note2 and $note3."

        ?>
    </body>
</html>