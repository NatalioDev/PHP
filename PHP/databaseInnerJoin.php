<html>

<head>
    <title>Database Inner Join</title>
</head>

<body>
  <?php
    // Nos conectamos a la DB
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Creamos un registro de la DB Students, pero la conbinamos tambien con la DB Course.
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
    // Condicional que recorre el registro
    while($reg = mysqli_fetch_array($register)){
        echo "Code: " . $reg['code'] . "<br>"; // Mostramos el coódigo del estudiante
        echo "Name: " . $reg['name'] . "<br>"; // Mostramos su nombre 
        echo "Email: " . $reg['email'] . "<br>"; // Mostramos su email
        echo "Course: " . $reg['courseName'] . "<br>"; // Mostramos el nombre del curso del estudiante
        echo "<hr>";
    }

    // Cerramos la conexion.
    mysqli_close($connection);

  ?>
</body>

</html>