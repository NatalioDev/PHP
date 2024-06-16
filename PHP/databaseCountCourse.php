<html>

<head>
    <title>Database Count Course</title>
</head>

<body>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Problems in connection");

    $register = mysqli_query($connection, "select count(*) as amount from course") or die ("Problems in select: " . mysqli_error($connection));

    $reg = mysqli_fetch_array($register);

    $register2 = mysqli_query($connection, "select courseName from course") or die ("Problems in select: " . mysqli_error($connection));

    echo "Courses:<br>";
    while ($reg2 = mysqli_fetch_array($register2)) {
        echo $reg2['courseName'] . "<br>";
    }

    echo "<br>";
    echo "Total number of courses: " . $reg['amount'];
  ?>

</body>

</html>