<html>

<head>
    <title>Database Inner Join</title>
</head>

<body>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    $register = mysqli_query($connection, "
        select stdt.code as code,
            name,
            email,
            courseCode,
            courseName
        from students as stdt
        inner join course as crs on crs.code=stdt.courseCode
    ") or die ("
        Problems in select: "   
        . mysqli_error($connection)
);
    while($reg = mysqli_fetch_array($register)){
        echo "Code: " . $reg['code'] . "<br>";
        echo "Name: " . $reg['name'] . "<br>";
        echo "Email: " . $reg['email'] . "<br>";
        echo "Course: " . $reg['courseName'] . "<br>";
        echo "<hr>";
    }

    mysqli_close($connection);

  ?>
</body>

</html>