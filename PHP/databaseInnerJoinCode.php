<html>

<head>
    <title>Database Inner Join Code</title>
</head>

<body>
  <h3>Inner Join Students</h3>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    $register = mysqli_query($connection, "
        select 
            name,
            email,
            courseName
        from students as stdt
        inner join course as crs on crs.code=stdt.courseCode
        where stdt.code=$_REQUEST[code]
    ") or die ("
        Problems in select: "   
        . mysqli_error($connection)
);

    if ($reg = mysqli_fetch_array($register)) {
        echo "Name: " . $reg['name'] . "<br>";
        echo "Email: " . $reg['email'] . "<br>";
        echo "Course: " . $reg['courseName'] . "<br>";
        echo "<hr>";
    }else{
        echo "There is no student with that code.";
    }
    mysqli_close($connection);
  ?>
</body>

</html>