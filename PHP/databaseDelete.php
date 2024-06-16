<html>

<head>
    <title>Database Delete</title>
</head>

<body>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    $register = mysqli_query($connection, "select code from students where email='$_REQUEST[email]'") or die ("Problems in select: " . mysqli_error($connection));

    if ($reg = mysqli_fetch_array($register)) {
        mysqli_query($connection, "delete from students where email='$_REQUEST[email]'")
        or die ("Problems in select: " . mysqli_error($connection));

        echo "The student was deleted with said email.";
    }else{
        echo "There is no student with that email.";
    }

    $register2 = mysqli_query($connection, "select code from course where courseName='$_REQUEST[nameCourse]'") or die ("Problems in select: " . mysqli_error($connection));

    echo "<br>";

    if ($reg2 = mysqli_fetch_array($register2)) {
        mysqli_query($connection, "delete from course where courseName='$_REQUEST[nameCourse]'") or die ("Problems in select: " . mysqli_error($connection));

        echo "The course was delete.";
    }else {
        echo "The entered course name was not found.";
    }


  ?>
</body>

</html>