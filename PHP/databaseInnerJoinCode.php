<html>

<head>
    <title>Database Inner Join Code</title>
</head>

<body>
  <h3>Inner Join Students</h3>
  <?php
    // Nos conectamos a la DB
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Creamos un registro de la DB Course, pero la conbinamos con la DB Students.
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

    // Condicional que recorre el registro
    if ($reg = mysqli_fetch_array($register)) {
        echo "Name: " . $reg['name'] . "<br>"; // Mostramos el nombre del estudiante
        echo "Email: " . $reg['email'] . "<br>"; // Mostramos el email del estudiante
        echo "Course: " . $reg['courseName'] . "<br>"; // Mostramos su curso
        echo "<hr>";
    }else{
        echo "There is no student with that code."; // Mostramos si el estudiante no existe con el código ingresao 
    }
    // Cerramos la conexión
    mysqli_close($connection);
  ?>
</body>

</html>