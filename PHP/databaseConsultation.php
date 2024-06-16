<html>

<head>
    <title>Database Consultation</title>
</head>

<body>
  <!-- title -->
  <h1>Consult</h1>
  <!-- Formulario para consultar si un estudiante existe en la base de datos -->
  <form action="databaseSelect.php" method="post">
    <!-- Consultamos por email -->
    Enter the student's email to consult:
    <input type="text" name="email">
    <br>
    <hr>
    <!-- Consultamos por nombre -->
    Enter name of students:
    <input type="text" name="name">
    <br>
    <hr>
    <!-- Buscar -->
    <input type="submit" value="Search">
  </form>
</body>

</html>