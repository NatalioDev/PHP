<html>

<head>
    <title>Database Inner Join Form</title>
</head>

<body>
  <!-- Title -->
  <h3>Inner Join Form</h3>
  <!-- Formulario para que busque el estudiante por su código -->
  <form action="databaseInnerJoinCode.php" method="post">
    <!-- Input para que ingrese el código del estudiante que quiera buscar -->
    Enter the student code:
    <input type="text" name="code">
    <br>
    <!-- Botón para buscar el estudiante  -->
    <input type="submit" value="Search">
  </form>
</body>

</html>