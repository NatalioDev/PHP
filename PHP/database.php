<html>

<head>
    <title>Database</title>
</head>

<body>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    mysqli_query($connection, "insert into students(name,email,courseCode) values ('$_REQUEST[name]','$_REQUEST[email]',$_REQUEST[courseCode])") or die("Problems in Select." . mysqli_error($connection));

    mysqli_query($connection, "insert into course(courseName) values('$_REQUEST[nameCourse]')") or die("Problems in Select." . mysqli_error($connection));

    mysqli_close($connection);

    echo "The students was registered.";

  ?>
</body>

</html>