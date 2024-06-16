<html>

<head>
    <title>Functions</title>
</head>

<body>
  <?php
    function showTitle($title){
        echo "<h1 style=\"text-align:center\" >";
        echo $title;
        echo "</h1>";
    }

    showTitle("First title");
    echo "<br>";
    showTitle("Second title");
    echo "<br>";

    // Return Average

    echo "<br>";
    showTitle("Return Average");
    echo "<br>";

    function returnAverage($value1, $value2){
        $average = $value1 / $value2;
        return $average;
    }

    $value1 = 100;
    $value2 = 50;

    $average = returnAverage($value1, $value2);
    echo "The average result is: " .$average;
    echo "<br>";

    // Return square or cube:

    echo "<br>";
    showTitle("Return Square or cube:");
    echo "<br>";

    function squareCube($value, &$square, &$cube){
        $square = $value * $value;
        $cube = $value * $value * $value;
    }

    squareCube(2, $square, $cube);
    echo "The square of 2 is: ". $square;
    echo "<br>";
    echo "The cube of 2 is: ". $cube;


    // Username and password form
    echo "<br>";
    showTitle("Username and password match");
    echo "<br>";
    echo "User and password form results: ";

    $name = $_REQUEST['name'];
    $password1 = $_REQUEST['password1'];
    $password2 = $_REQUEST['password2'];

    function matchPassword($key1, $key2){
        if ($key1 == $key2) {
            echo "Password match.";
        }elseif ($key1 != $key2) {
            echo "Password do not match.";
        }
    }


    matchPassword($password1, $password2);


  ?>


</body>

</html>