<html>

<head>
    <title>Database Count</title>
</head>

<body>
  <?php
    // Creamos la conexión a la DB
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Problems in connection");

    // Creamos un registro que hace un conteo de la DB Students
    $register = mysqli_query($connection, "select count(*) as amount from students") or die ("Problems in select: " . mysqli_error($connection));

    // Creamos una variable que recorre todo el registro de la DB
    $reg = mysqli_fetch_array($register);

    // Muestra un mensaje de la cantidad de datos de la DB
    echo "The number of enrolled students is: " . $reg['amount'];
  ?>

</body>

</html>