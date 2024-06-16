<html>

<head>
    <title>Database Insert</title>
</head>

<body>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    mysqli_query($connection, "insert into students(name,email,courseCode) values ('$_REQUEST[name]','$_REQUEST[email]',$_REQUEST[codeCourse])") or die ("Problems in select: " . mysqli_error($connection));

    mysqli_close($connection);

    echo "The students was discharged.";

  ?>
</body>

</html>